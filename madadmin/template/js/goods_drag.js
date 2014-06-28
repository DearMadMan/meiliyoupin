(function(){
	var upload=$("#upload");
	upload[0].ondragover=function(e){
		e.preventDefault();
		upload.text("释放鼠标，立即上传");
		upload.css("border-color","rgb(247, 229, 229)");
		upload.css("color","rgb(247, 229, 229)");
		return false;
	}
	upload[0].ondragleave=function(e){
		e.preventDefault();
		upload.text("将图片推拽至此区域，可以上传");
		upload.css("border-color","#e3e3e3");
		upload.css("color","#eee");
		return false;
	}

	upload[0].ondrop=function(e){
		e.preventDefault();
		for(var i=0;i<e.dataTransfer.files.length;i++)
		{
			(
				function(f)
				{
					if(/image/.test(f.type))
					{
						var reader=new FileReader();
						reader.onload=function(e){
							var fd=new FormData();
							fd.append("files",f);
							var li=$("<li>");
							var img=$("<img>");
							var span=$("<span>");
							var close=$("<span>");
							var i=$("<i>");
							i.addClass("icon-remove");
							close.addClass("close");
							close.append(i);
							span.addClass("progress");
							span.css("width","0%");
							img.attr("src",e.target.result);
							li.append(span);
							li.append(close);
							li.append(img);
							$("#gallery").append(li);
							StartUpload(fd,li,span);

							//显示删除按钮
							li.hover(
							  function () {
							    $(this).children(".close").css("display","block");
							  },
							  function () {
							      $(this).children(".close").css("display","none");
							  }
							);
							close.click(function(){
								if(confirm("确定要删除该图片吗？"))
								{
									var li=$(this).parent();
									//ajax请求
									$.ajax({
										type:"post",
										dataType:"json",
										url:"ajax.php",
										data:"act=gallery_delete&path="+li.attr("data"),
										cache:false,
										success:function(msg){
											if(msg.error=="ok")
											{
												li.fadeOut(300,function(){
													li.remove();
												});
											}
											else
											{
												alert(msg.error);
											}
										},
										complete:function(msg){
											console.log(msg);
										}
									});
								}
								else
								{
									return false;
								}
							});
							//绑定删除
						}
						reader.readAsDataURL(f);
					}
					else
					{
						alert(e.dataTransfer.files[i].name+"不是图片，将跳过该文件继续上传");
					}

				}
			)(e.dataTransfer.files[i]);

		}


		return false;
	}

	function StartUpload(f,li,span)
	{
		var http=new XMLHttpRequest();
			http.open("POST","gallery_upload.php",true);
			http.setRequestHeader("X-Requested-With","XMLHttpRequest","content-Type","multipart/form-data");
		http.upload.onprogress=function(e)
		{
			var percent=0;
			if(e.lengthComputable)
			{
			percent=100*e.loaded/e.total;
			upload.text("上传进度"+percent+"%");
			span.css("width",percent+"%");
			}
		}

		http.onreadystatechange=function(){
			if(http.readyState==4 && http.status==200)
			{
				li.attr("data",http.responseText);
			}
		}



		http.send(f);
	}

}());