<?php
	include 'db.php';
	$name = htmlspecialchars($_POST['name']);
	//echo $name;
	$pass = md5($_POST['pass']);
	$email = $_POST['email'];
	
	$checkName = mysql_fetch_array(mysql_query("SELECT `name` FROM `users` WHERE `name`='$name'"));
	$checkEmail = mysql_fetch_array(mysql_query("SELECT `email` FROM `users` WHERE `email`='$email'"));
	if ($checkEmail['email'] != null || $checkName['name'] != null) {
		echo 1;
	}
	else 
	{
		echo 2;
		if (mysql_query("INSERT INTO users (name,email,pass) VALUES ('" .$name. "','" .$email. "','" .$pass. "')")) //пишем данные в БД и авторизовываем пользователя
		{
				setcookie ("login", $name, time() + 50000, '/');
				//setcookie ("password", md5($login.$password), time() + 50000, '/');
				//$rez = mysql_query("SELECT * FROM users WHERE login=".$login);
				//@$row = mysql_fetch_assoc($rez);
				//$_SESSION['id'] = $row['id'];
				//$regged = true;
				//include ("template/registration.php"); //подключаем шаблон*/
				echo "go";

		} else echo "mimo";
	}

	function generateCode($length = 10)
		{
		   $chars = 'abdefhiknrstyz1234567890';
		   $numChars = strlen($chars);
		   $string = '';
		   for ($i = 0; $i < $length; $i++)
		   {
		      $string .= substr($chars, rand(1, $numChars) - 1, 1);
		   }
		   return $string;
		}
	//echo generateCode();

?>