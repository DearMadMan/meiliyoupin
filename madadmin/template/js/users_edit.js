var btn=$("button[type=submit]"),
	user_word_confirm=$("input[name=user_word_confirm]"),
	user_word=$("input[name=user_word]");

;
btn.click(function(){
	

	if(user_word_confirm.val()!=user_word.val())
	{
		alert("两次输入的密码不一致！");
		return false;
	}

	
});