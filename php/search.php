<?php 
    header( 'Content-Type: text/html; charset=utf-8' );
    //$search = $_POST['search'];
    //$search = htmlspecialchars($search);
    //mysql_query("UTF8");
   $search = $_POST['search'];
   /* if($search == '')
        exit("Начните вводить запрос");
    elseif(!preg_match("/^[а-я0-9]+$/ui", $search))  
        exit("Недопустимые символы в запросе");*/
    
    include 'db.php';
    
    $result = mysql_query("SELECT `name` FROM `subtype` WHERE `name` LIKE('$search%') ");
    
    $output = '['; 
    if(mysql_num_rows($result) > 0) {
      $i = 0;
        while($row = mysql_fetch_array($result)) {
           $i++;
           if($i == 1) {
              $output .= '{"value": "'.$row['name'].'"}';
            } else {
              $output .= ',{"value": "'.$row['name'].'"}';
            }
            }
            $output .= ']'; 
            //echo $output;
            echo json_encode($row);
          
       // }
      }
    else
	echo "Ничего не найдено";
    
    function json_fix_cyr($var)
{
    if (is_array($var)) {
       $new = array();
       foreach ($var as $k => $v) {
          $new[json_fix_cyr($k)] = json_fix_cyr($v);
       }
       $var = $new;
    } elseif (is_object($var)) {
       $vars = get_object_vars($var);
       foreach ($vars as $m => $v) {
          $var->$m = json_fix_cyr($v);
       }
    } elseif (is_string($var)) {
       $var = iconv('cp1251', 'utf-8', $var);
    }
    return $var;
}

function json_safe_encode($var)
{
   return json_encode(json_fix_cyr($var));
} 
?> 