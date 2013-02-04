<?php
					include "application/models/model_company.php";
	            	class Controller_kuts extends Controller{
			            function __construct(){
				            $this->model = new Model_Company();
				            $this->view = new View();
				        }
				        function action_index() {
				            $data = $this->model->get_data();
				            $this->view->generate("company_view.php","template_view.php",$data);
			        	}
		            }