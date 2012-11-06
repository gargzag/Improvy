<?php
	include 'db.php';
	//echo $name;
	$pass = md5($_POST['pass']);
	$email = $_POST['email'];

	$result = mysql_query("SELECT `email`,`pass`,`name` FROM `users` WHERE `email`='$email'");
	if ($result!=0) {
		
	
	if(mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_array($result)) {
        	setcookie ("login", $row['name'], time() + 50000, '/');
        }
    }
    }else echo 1;
?>