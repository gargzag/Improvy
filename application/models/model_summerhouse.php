<?php


class Model_Summerhouse extends Model{
    
    
    function __construct(){

        //echo "<script type='text/javascript' src='/js/jquery.js'></script>";
        //include '/php/db.php';
        $localhost  = 'localhost'; // хост
        $dbuser     = 'root';      // имя пользователя
        $dbpassword = '1q2w3e';    // пароль
        $database   = 'improvy';   // база данных
    
         /*
            * Подключение к БД
        */
        $db = mysql_pconnect($localhost, $dbuser) or die('В настоящий момент сервер базы данных не доступен.');  
        mysql_query("SET NAMES 'UTF8'");
        mysql_select_db($database, $db) or die ('В настоящий момент база данных не доступна.');
        }
        
        public function get_data(){
            
            $data = mysql_query("SELECT `$course`.`name_rus` as rus,`$course`.`name_eng` as eng, `$course`.`price`, `companies`.`name_rus`,`companies`.`name_eng`
                            FROM $course JOIN venues on $course.id_venue = venues.id_venue 
                                         JOIN companies on venues.id_company = companies.id_company");              
            return $data;
        }
    
}

?>