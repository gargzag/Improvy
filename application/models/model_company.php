<?php


class Model_Company extends Model{
    
        public function get_data(){
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            $venue_query = mysql_query(" 
                    SELECT  *
                    FROM  `venues` 
                    JOIN  `companies` ON  `venues`.`id_company` =  `companies`.`id_company` 
                    WHERE  `companies`.`compname_eng` =  '$routes[1]'
                "); // Филиалы

            $about_query = mysql_query("
                                    SELECT about FROM companies
                                    WHERE companies.compname_eng = '$routes[1]' "); //  описание компании

            $courses_query = mysql_query("
                                    SELECT distinct * FROM companies
                                    JOIN venues on companies.id_company = venues.id_company
                                    JOIN courses on venues.id_venue = courses.id_venue
                                    where companies.compname_eng = '$routes[1]' "); // вывод курсов                     
            /*if (!isset($location))
            {
                $data2 = mysql_query(" SELECT distinct compname_eng, coursename_eng, coursename_rus, compname_rus, minprice, description FROM companies
					                   JOIN venues on companies.id_company = venues.id_company
                                       JOIN courses on venues.id_venue = courses.id_venue
                                       where companies.compname_eng = '$routes[1]'
			                         ");
            } else {
            	$data2 = mysql_query("SELECT * FROM companies
                                JOIN venues on companies.id_company = venues.id_company			
                                where companies.name_eng = '$routes[1]' and venues.address = '$location'");
            }*/

            $data['venue_query'] = $venue_query;
            $data['about_query'] = $about_query;
            $data['courses_query'] = $courses_query;         

            return $data;
        }
    
}

?>