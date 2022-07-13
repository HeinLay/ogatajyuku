function InvalidMsg(textbox) {
	if (textbox.value === '') {
		$('.term-password-field').addClass('required-input');
		$('.term-password-field').attr("placeholder", "パスワードを入力して下さい");
	}
 else {
		$('.term-password-field').removeClass('required-input');
	}
	return ;
}

document.addEventListener('invalid', (function () {
  return function (e) {
    e.preventDefault();
    document.getElementById("term_password_field").focus();
  };
})(), true);


function createDiv()
{
	$('.term-password-field').addClass('required-input');
}