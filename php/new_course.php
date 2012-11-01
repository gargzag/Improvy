<?php

include 'db.php';
$name = $_POST['name'];
$description = md5($_POST['description']);
$email = $_POST['email'];

mysql_query("   INSERT INTO courses (name,email,pass) 
                VALUES ('" .$name. "','" .$email. "','" .$pass. "')
            ");