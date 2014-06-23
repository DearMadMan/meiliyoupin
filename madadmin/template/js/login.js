$(document).ready(function(){
	var form=$("#sign"),
		btn=$(".submit"),
		 txt=$("input"),
		 remenber=$(".checkbox").eq(0);
		btn.click(function(){
			if(txt.eq(0).val()==""||txt.eq(1).val()=="")
			{
				alert("不能为空!");
				return false;
			}
			form[0].submit();
		});
		remenber.click(function(){
			if(remenber.is(":checked"))
			{
				txt.filter("[type='hidden']").val("true");
			}
			else
			{
				txt.filter("[type='hidden']").val("false");
			}

			console.log(remenber.attr("checked"));
		});

});