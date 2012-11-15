<?php

include 'db.php';
$name = $_POST['name'];
$description = $_POST['description'];
$email = $_POST['email'];

mysql_query("   INSERT INTO courses (name,description,pass) 
                VALUES ('" .$name. "','" .$description. "','" .$pass. "')
            ");