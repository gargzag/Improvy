<?php
session_start();


/*if (isset($_COOKIE['login'])) {
	$ckID = $_COOKIE['login'];
	$result = mysql_query("SELECT `email`,`password`,`compname_rus`, `id_company` FROM `companies` WHERE `id_company`='$ckID'");

	if (isset($_SESSION['id'])) {
	
	}else{
			if(mysql_num_rows($result) > 0) {
       	 		while($row = mysql_fetch_array($result)) {
       	 			$val = md5($row['password'].md5($row['compname_rus']));
       	 			if (isset($_COOKIE['sesid'])) {       	 				
					if ($_COOKIE['sesid']==$val) {				
						$_SESSION['id'] = $row['id_company'];
						} 
       	 			}
			}
		}	
}
}*/
if(!isset($_SESSION['id'])){
	if(isset($_COOKIE['id']) & isset($_COOKIE['hash'])){
		$ckID = $_COOKIE['id'];
		$result = mysql_query("SELECT `id_company`, `password`, `compname_rus` FROM `companies` WHERE `id_company` = '$ckID' ");
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_array($result)){
				$val = md5($row['password'].md5($row['compname_rus']));
				if($_COOKIE['hash'] == $val){
					$_SESSION['id'] = $row['id_company'];
				}
				else{
					setcookie("id", "", time() - 3600*24*30*12, "/");
					setcookie("hash", "", time() - 3600*24*30*12, "/");
				}
			}
		}
	}
}

			