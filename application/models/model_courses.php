<?php

class Model_Courses extends Model
{
	
	public function get_data()
	{	
		//echo "<script type='text/javascript' src='/js/jquery.js'></script>";
        include '/php/db.php';
		// Здесь мы просто сэмулируем реальные данные.
		
	}
    public function languages() {
    $data = mysql_query("SELECT `languages`.`name`,`price`,`languages`.`description` FROM languages, company, venues WHERE company.id_compnay=1 AND languages.id_venue=venues.id_venue");              
    return $data;
    }		
	}


