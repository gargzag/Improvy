<?php


class Model_Summerhouse extends Model{
    
    
    function __construct(){

        include "php/db.php";
        }
        
        public function get_data(){
            $location = $_POST['location'];
            echo $location;
            $data1 = mysql_query("SELECT * FROM companies
                                where companies.name_eng = 'summerhouse'"); 
            
            $data2 = mysql_query("SELECT * FROM companies
                                JOIN venues on companies.id_company = venues.id_company
                                where companies.name_eng = 'A2' and venues.address = '$location'");
            $data[1] = $data1;
            $data[2] = $data2;            
            return $data;
        }
    
}

?>