<?php

/**
 * @author hizek
 * @copyright 2012
 */

$s = $_POST['f'];
//echo $s;

function viz ($s) {
    $j=0;
    $k=0;
    $l = strlen($s);
    $q=0;
    $z=0;    
   
    while ($q==0) {        
        if($s[$z]=='('||$s[$z]==')')
        {
            $q++;
            if($s[$z]==')') {echo "false"; return 0;};
        } else if ($z<$l-1) $z++; else break; 
    }
      
    for ($i = $z; $i<$l-$z;$i++) {
        if($s[$i]=='(') $j++;
        if($s[$i]==')') $k++;
        }
    
    if($j==$k) echo "true"; else echo "false";
    }
    
viz($s);
?>