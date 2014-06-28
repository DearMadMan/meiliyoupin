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