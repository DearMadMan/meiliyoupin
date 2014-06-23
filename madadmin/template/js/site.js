$(document).ready(function(){
	$("#alogo").eq(0).hover(function(){
		$(".logo-pic").slideDown(300);

	},function(){
			$(".logo-pic").slideUp(300);

	});
});