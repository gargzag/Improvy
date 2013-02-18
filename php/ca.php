<?php

$filename = '../application/controllers/controller_summerhouse.php';
$k=0;
$file = file_get_contents($filename);
/*$file1 = implode("", $file);*/
for($i=0; $i < strlen($file); $i++){
	if($file[$i] == "}"){
		$k = $i;
	}
}
$mytext = 'function action_hiphop2(){
        		$data = $this->model->get_data();
        		$this->view->generate("course_view.php","template_view.php",$data);
    		}
    	}';
/*$file[$k] = $mytext;*/

echo $k;
$fileq = substr_replace($file,$mytext , $k);
$filenameq = '../application/controllers/controller_test.php';
$fo = fopen($filenameq, 'w+');
$test = fwrite($fo, $fileq);

/*echo $file[10];*/
echo var_dump($fileq);
