<?php
session_start();

class Model_Courses extends Model
{
	
	public function get_data()
	{	
		echo "<script type='text/javascript' src='/js/jquery.js'></script>";
		
		// Здесь мы просто сэмулируем реальные данные.

	}
	public function first() {
		echo "<script type='text/javascript' src='/js/code.js'></script>";
		$_SESSION['p']='Алексеевка';
		
	}
	public function Second() {
		echo "<script type='text/javascript' src='/js/code.js'></script>";
		$_SESSION['p']='Валуйки';
	}

}
