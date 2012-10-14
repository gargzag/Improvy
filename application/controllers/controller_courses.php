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
    function action_fitnes(){

        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_yoga(){
        $data = $this->model->get_data();
        $data = $this->model->first();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_dance(){
        $data = $this->model->get_data();
        $data = $this->model->second();
        $this->view->generate('courses_view.php','template_view.php',$data);
    }
    function action_photo(){
        $data = $this->model->get_data();
        $this->view->generate('courses_view.php','template_view.php');
    }
    
}


