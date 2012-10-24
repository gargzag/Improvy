$(function() {
	$('#myModal').hide();
	$("#b").click(function() {
		$('#myModal').modal('show')

	})
})
$(function() {

	$("#sub").click(function() {
		$(".err").remove();
		var email = $("#inputEmail").val();
		var pas1 = $("#inputPassword").val();
		var pas2 = $("#inputPassword2").val();
		var k = 0;
		for(var i = 0; i < email.length; i++) {
			if(email[i] == '@') {
				k++;
			}
		};
		if((k != 1) && (pas1 != pas2)) {
			$("#inputEmail").after("<p class='err'>Email введен не верно</p>");
			$("#inputPassword2").after("<p class='err'>Пароли не совпадают</p>");
			return false;
		} else {
			if((k != 1) && (pas1.length < 6)) {
				$("#inputEmail").after("<p class='err'>Email введен не верно</p>");
				$("#inputPassword").after("<p class='err'>Длина пароля должна быть не меньше 6 символов</p>");
				return false;
			} else {

				if(k != 1) {
					//alert(1);
					$("#inputEmail").after("<p class='err'>Email введен не верно</p>");
					return false;
				} else {
					if(pas1 != pas2) {
						//alert(1);
						$("#inputPassword2").after("<p class='err'>Пароли не совпадают</p>");
						return false;
					} else {
						if(pas1.length < 6) {
							//alert(1);
							$("#inputPassword").after("<p class='err'>Длина пароля должна быть не меньше 6 символов</p>");
							return false;
						}
					}
				}
			}
		}
	})

})