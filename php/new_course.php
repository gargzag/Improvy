<?php

include 'db.php';
$name = $_POST['name_newcourse'];
$description = $_POST['description_new_course'];
$type = $_POST['type_new_course'];
$image_link = $_POST['image_new_course_link'];
$image_local = $_POST['image_new_course_local'];
//start
//Проверка изображения на наличие скриптов и всякой другой хуйни  
if($_FILES["filename"]["size"] > 1024*3*1024)
{
    echo ("Размер файла превышает три мегабайта");
    exit;
}
// Проверяем загружен ли файл
if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/path/to/file/".$_FILES["filename"]["name"]);
} 
else {
     echo("Ошибка загрузки файла");
}
$imageinfo = getimagesize($_FILES['userfile']['tmp_name']);
if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') 
{
    echo "Sorry, we only accept GIF and JPEG images\n";
    exit;
}

$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
echo "File is valid, and was successfully uploaded.\n";
} else {
echo "File uploading failed.\n";
}
//Проверка изображения на наличие скриптов и всякой другой хуйни
//end

mysql_query("   INSERT INTO courses (name,description,pass) 
                VALUES ('" .$name. "','" .$description. "','" .$pass. "')
            ");