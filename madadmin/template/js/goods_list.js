
/*改变销售状态*/
function ChangeStatus(obj)
{
	obj=$(obj);
	obj.removeAttr("onclick");
	var td=obj.parent();
	var id=td.attr("data");
	$.ajax({
		type:"POST",
		dataType:"json",
		url:"ajax.php",
		cache:false,
		data:"act=change_sale_status&id="+id,
		success:function(msg){
			if(msg.error=="ok")
			{
				if(msg.str==1)
				{
					obj.find("i").attr("class","icon-ok");
				}
				else
				{
					obj.find("i").attr("class","icon-remove");
				}
			}
			else
			{
				alert(msg.error);
			}
		},
		complete:function(msg){
			obj.attr("onclick","ChangeStatus(this);");
		}
	});
}

/*商品回收站*/

function recycle(obj){
	if(!confirm("确认要删除该商品吗？"))
	{
		return false;
	}
	obj=$(obj);
	var td=obj.parent();
	var id=td.attr("data");
	$.ajax({
		type:"post",
		dataType:"json",
		url:"ajax.php",
		cache:false,
		data:"act=recycle&id="+id,
		success:function(msg){
			if(msg.error=="ok")
			{
				td.fadeOut(300,function(){
					td.parent().remove();
				});
			}
			else
			{
				alert(msg.error);
			}
		},
		complete:function(msg){
			//console.log(msg);
		}
	});

}
/*商品还原*/
function wrench(obj){
	if(!confirm("确认要还原该商品吗？"))
	{
		return false;
	}
	obj=$(obj);
	var td=obj.parent();
	var id=td.attr("data");
	$.ajax({
		type:"post",
		dataType:"json",
		url:"ajax.php",
		cache:false,
		data:"act=wrench&id="+id,
		success:function(msg){
			if(msg.error=="ok")
			{
				td.fadeOut(300,function(){
					td.parent().remove();
				});
			}
			else
			{
				alert(msg.error);
			}
		},
		complete:function(msg){

		}
	});

}