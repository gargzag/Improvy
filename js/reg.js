$(function() {
	$('#myModal').hide();

	if($.cookie("login")) {
		$("#b").hide();
		$("#b3").hide();
		$("#b1").show();
		$("#b2").show();
	} else {
		$("#b1").hide();
		$("#b2").hide();

	}
	$("#b").click(function() {
		$('#myModal').modal('show')
		$("#entForm").hide();
		$("#regForm").show();

	})
	$("#b2").click(function() {
		$.cookie("login", null);
	})
	$("#b3").click(function() {
		$('#myModal').modal('show');
		$("#regForm").hide();
		$("#entForm").show();
	})
})
$(function() {
	$("#sub").click(function() {
		$(".err").remove();
		var name = $("#Inputname").val()
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
		////////
		$.ajax({
			type: "POST",
			url: '/php/registration.php',
			data: {
				"name": name,
				"pass": pas1,
				"email": email
			},
			success: function(data) {
				if(data == 1) {
					//
					$("#sub").after("<p class='err'>Пользователь с таким именим или Email существует</p>");
					//alert(1);
				} else {
					$("#regForm").hide();
					$("#thx").show();
					//window.location = "http://localhost:8010/main#";
					$('#myModal').modal('show');
					//window.location = "/main";
					//alert(data);
				};
			}
		})

	})
	$("#ent").click(function() {
		$(".er").remove();
		var email = $("#entEmail").val();
		var pas = $("#entPassword").val();
		$.ajax({
			type: "POST",
			url: '/php/enter.php',
			data: {
				"pass": pas,
				"email": email
			},
			success: function(data) {
				if(data == 1) {

					$("#ent").after("<div class='er'>Пользователя с таким Email не существует или вы ввели неверно парольспас</div>");
				} else {
					window.location = "/main";
					//$('#myModal').modal('show');
				};
			}
		})
	})

})