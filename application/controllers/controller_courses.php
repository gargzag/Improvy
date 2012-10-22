<?php

class Controller_Courses extends Controller{
    
    function __construct(){
	$this->model = new Model_Courses();
	$this->view = new View();
	}
    
    function action_index() {

        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_sport(){

        $course = "sports";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_martial(){
        $course = "martial";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_computer(){
        $course = "computer";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_languages(){
        $course = "languages";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
     function action_dance(){
        $course = "dances";
        $data = $this->model->get_data($course);
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    
}

