<?php 
   $search = $_POST['search'];
   /* if($search == '')
        exit("Начните вводить запрос");
    elseif(!preg_match("/^[а-я0-9]+$/ui", $search))  
        exit("Недопустимые символы в запросе");*/
    
    include 'db.php';
    
    $result = mysql_query("SELECT `id_subtype` FROM `subtype` WHERE `name` LIKE('$search') ");
    if(mysql_num_rows($result) > 0) {
        while($row = mysql_fetch_array($result)) {
            $id = $row['id_subtype'];
        }
    }

    $result_over = mysql_query("SELECT distinct `coursename_rus`
                           FROM `courses` 
                            where subtype = $id ");  
    $data='[';
    if(mysql_num_rows($result_over) > 0) {
        $i=0;
        while($output = mysql_fetch_array($result_over)) {
            $i++;
            if($i == 1) {
                $data .= '{"value": "'.$output['coursename_rus'].'"}';
            }else {
                $data .= ',{"value": "'.$output['coursename_rus'].'"}';
            }
        }
    }
    $data .=']';
    echo $data;