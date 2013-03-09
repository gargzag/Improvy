<?php

include "application/models/model_courses.php";
class Controller_Courses extends Controller{
    
    function __construct(){
	$this->model = new Model_Courses();
	$this->view = new View();
	}
    
    function action_index(){

        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //Обрабатывают главные категории

    function action_computer(){
        $course = "computer";
        $data = $this->model->get_computer();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }

    function action_business(){
     
        $data = $this->model->get_dances();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }

    function action_languages(){
        $course = "languages";
        $data = $this->model->get_languages();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
    function action_sport(){
        
        $data = $this->model->get_sport();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }

    function action_martial(){
        $course = "martial";
        $data = $this->model->get_martial();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
    
    function action_dances(){
	 
        $data = $this->model->get_dances();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
    
    //Обрабатывают подкатегории
    
    //СПОРТ-ФИТНЕС
    function action_yoga(){
        $subtype = "7";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }

    function action_pilates(){
        $course = "8";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_stripdance(){
        $course = "10";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_tennis(){
        $course = "9";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_run(){
        $course = "11";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_stretching(){
        $course = "12";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //БОЕВЫЕ ЕДИНОБОРСТВА
    function action_boxing(){
        $course = "1";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_karate(){
        $course = "2";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_sambo(){
        $course = "3";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_dzudo(){
        $course = "4";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_taibox(){
        $course = "6";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //КОМПЬЮТЕРНЫЕ КУРСЫ
    function action_programming(){
        $course = "13";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_seo(){
        $course = "14";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_smm(){
        $course = "smm";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_design(){
        $course = "15";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_editing(){
        $course = "16";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //ИНОСТРАННЫЕ ЯЗЫКИ
    function action_english(){
        $course = "17";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_french(){
        $course = "18";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_spanish(){
        $course = "19";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_italian(){
        $course = "20";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_german(){
        $course = "21";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_chinese(){
        $course = "22";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    //ТАНЦЫ
    function action_clubdance(){
        $course = "23";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_hiphop(){
        $course = "27";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_balroom(){
        $course = "24";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_childdance(){
        $course = "28";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_bellydance(){
        $course = "25";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_tango(){
        $course = "tango";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
    
    
}

