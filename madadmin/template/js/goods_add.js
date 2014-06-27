var gallery=$("#gallery");
var lis=gallery.children("li");
lis.each(function(){
	$(this).hover(function(){
		$(this).children(".close").css("display","block");
	},function(){
		$(this).children(".close").css("display","none");
	});
});
var spans=gallery.find("li>span.close");
spans.each(function(){
	$(this).click(function(){
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
						li.fadeIn(300,function(){
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
});