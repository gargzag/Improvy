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
            
            $data = mysql_query("SELECT * FROM companies
                                JOIN venues on companies.id_company = venues.id_company
                                where companies.name_eng = 'summerhouse'");   
            return $data;
        }
    
}

?>