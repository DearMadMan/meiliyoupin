$(document).ready(function(){
	$("#alogo").eq(0).hover(function(){
    $(".logo-pic").slideDown(300);

  },function(){
      $(".logo-pic").slideUp(300);

  });
	ReAddAclick();
});

//upload

function ImageUpLoad()
{

    ClearAclick();

    var form=$("#img_form"),
        file=$("#img_file");
    if(file[0].files.length==0)
    {
        ReAddAclick();
      alert("请选择需要上传的图片！");
      return false;
    }

    //进行文件判断
    file=file[0].files[0];
    var rFilter = /^(image\/bmp|image\/gif|image\/jpeg|image\/png)$/i;
    if(rFilter.test(file.type)&&file.size<(4096*1024))
    {

        //进行上传操作

        var http=new XMLHttpRequest();

        http.upload.addEventListener("progress",UploadProgress,false);

        http.addEventListener("abort",UploadAbort,false);


        http.addEventListener("load",UploadFinish,false);

        http.addEventListener("error",UploadError,false);



        var fd=new FormData();
        fd.append("fileToUpload", document.getElementById('img_file').files[0]);
        console.log(fd);
        http.open("post","post.php?act=upload_image&need_compress=1");
        http.send(fd);

    }
    else
    {
      alert("请确保您上传的图片格式为 bmp|gif|jpg|jpeg|png,并且大小小于4M");
    }

    return false;
}

function UploadProgress(e)
{
   if (e.lengthComputable) {
        iBytesUploaded = e.loaded;
        iBytesTotal = e.total;
        var iPercentComplete = Math.round(e.loaded * 100 / e.total);

        $(".bar").css("width",iPercentComplete.toString()+"%");
        if (iPercentComplete == 100) {

        }
    } else {

    }
}
function UploadAbort(e)
{
     console.log(e);
    ReAddAclick();
}
function UploadFinish(e)
{
     ReAddAclick();
     $("#product_imgurl").val(e.target.responseText);
     $("#show_img").attr("src",e.target.responseText);
}
function UploadError(e)
{
     console.log(e);
    ReAddAclick();
}

function ClearAclick()
{
    $("#up_img").unbind('click');
}
function ReAddAclick()
{
     $("#up_img").unbind('click');
      $("#up_img").click(function(){
        ImageUpLoad();
      });
}







/*商品相册*/
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
});


/*商品属性*/
var add_btn=$("#addattr");
add_btn.click(function(){
	$(".hidiv").fadeIn(300);
	SetHidiv(0,"","");   //id为0 表示新增
	$("#save").click(function(){
		AddAttr();
	});
});

function NavCanel(){
	$(".hidiv").fadeOut(300);
}

function SetHidiv(id,name,price)
{
	$("#attr_id").val(id);
	$("#attr_name").val(name);
	$("#attr_price").val(price);
}
/*正在获取待修正属性*/
function Wait()
{
    SetHidiv("","正在获取数据...","正在获取数据...");
    //清空保存事件
    $("#save").unbind("click");
}

/*Ajax 添加商品新属性*/
function AddAttr()
{

	 $("#attr_id").val("0");
	 var attr_name=$("#attr_name");
	 var attr_price=$("#attr_price");
	 if($.trim(attr_name.val())=="")
	 {
	 	alert("请输入属性名称！");
	 	return false;
	 }
	 if($.trim(attr_price.val())=="")
	 {
	 	attr_price.val("0");
	 }
	 SaveUnBind();
	 NavCanel();
	 $.ajax({
	 	type:"POST",
	 	dataType:"json",
	 	url:"ajax.php",
	 	cache:false,
	 	data:"act=goods_add_addattr&attr_name="+attr_name.val()+"&attr_price="+attr_price.val(),
	 	success:function(msg){
	 		if(msg.error=="ok")
	 		{
	 			var attr_tbody=$("#attr_tbody");
	 			var tr=$("<tr>");
	 			var td_name=$("<td>");
	 			var td_price=$("<td>");
	 			var td_edit=$("<td>");
	 			var a_edit=$("<a>");
	 			a_edit.attr("href","javascript:;");
	 			a_edit.attr("onclick","EditAttr(this);");

	 			var i_edit=$("<i>");
	 			i_edit.addClass("icon-edit");
	 			a_edit.append(i_edit);
	 			a_edit.append(" 编辑");

	 			var a_delete=$("<a>");
	 			a_delete.attr("href","javascript:;");
	 			a_delete.attr("onclick","DeleteAttr(this);");
	 			var i_delete=$("<i>");
	 			i_delete.addClass("icon-trash");
	 			a_delete.append(i_delete);
	 			a_delete.append(" 删除");

	 			td_edit.append(a_edit);
	 			td_edit.append("&nbsp;");
	 			td_edit.append(a_delete);
	 			td_name.text(msg.str[0]);
	 			td_price.text(msg.str[1]);
	 			tr.attr("data",msg.str[2]);
	 			tr.css("background","#D8FDD8");
	 			tr.append(td_name);
	 			tr.append(td_price);
	 			tr.append(td_edit);
	 			tr.css("display","none");
	 			attr_tbody.append(tr);
	 			tr.fadeIn(500,function(){
	 				tr.css("background","");
	 			});

	 		}
	 		else
	 		{
	 			SaveBindClick("add");
	 			alert(msg.error);
	 		}
	 	},
	 	complete:function(msg){
	 		console.log(msg);
	 	}
	 });

}

function SaveBindClick(type)
{
	if(type=="add")
	{
			$("#save").click(function(){
			AddAttr();
		});
	}
	else
	{
	  $("#save").click(function(){
			EditToSave(type);
		});

	}

}
function SaveUnBind()
{
		 $("#save").unbind("click");
}

/*修改属性*/

function EditAttr(obj)
{
	var obj=$(obj);
	var tr=obj.parents("tr").eq(0);
	$("#attr_name").val(tr.children("td").eq(0).text());
	$("#attr_price").val(tr.children("td").eq(1).text());
	$(".hidiv").fadeIn(300);

	SaveUnBind();
	SaveBindClick(obj);
}


function EditToSave(obj)
{

	 NavCanel();
	 var attr_name=$("#attr_name");
	 var attr_price=$("#attr_price");
	  if($.trim(attr_name.val())=="")
	 {
	 	alert("请输入属性名称！");
	 	return false;
	 }
	 if($.trim(attr_price.val())=="")
	 {
	 	attr_price.val("0");
	 }

	//Ajax获取属性
	var tr=obj.parents("tr").eq(0);
	$.ajax({
		type:"POST",
		dataType:"json",
		cache:false,
		url:"ajax.php",
		data:"act=goods_add_edit_attr&attr_key="+tr.attr("data")+"&attr_name="+attr_name.val()+"&attr_price="+attr_price.val(),
		success:function(msg){
			if(msg.error=="ok")
			{
				tr.children("td").eq(0).text(msg.str[0]);
				tr.children("td").eq(1).text(msg.str[1]);
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

/*删除属性*/
function DeleteAttr(obj)
{
	obj=$(obj);
	var tr=obj.parents("tr").eq(0);
	if(!confirm("确定要删除该属性吗？"))
	{
		return false;
	}

	$.ajax({
		type:"POST",
		dataType:"json",
		url:"ajax.php",
		cache:false,
		data:"act=goods_add_delete_attr&attr_key="+tr.attr("data"),
		success:function(msg){
			if(msg.error=="ok")
			{
				tr.css("background","#D8FDD8");
				tr.fadeOut(300,function(){
					tr.remove();
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