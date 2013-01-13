<?php
// adding controller Site
class Site extends CI_Controller{



/* 
//1.adding  method index
	 public function index(){
		echo "hello developer";
	}
/* */


/*  
//2.adding doSomething method
	public function doSomething(){
		echo "Do some thing";
	}

/* */

/* 
//3.adding _doSomething private method
       private function doSomething(){
		   echo "Do some thing";
	}
/* */

/* 
//4.adding _doSomething private method
        function doSomething(){
		    echo "Do some thing";
	}
/* */


/* 
//5.adding  method index loading view home from it
	 public function index(){
		$this->load->view('home');
	}
/* */

/* 
//6.dynamically adding data
      public function index(){
      	$data['myValue'] = "some string";
      	$data['anotherValue'] = "another string";
		$this->load->view('home', $data);
	}
/* */


/* */
//7. adding model
      public function index(){
      	$this->load->model('site_model');
      	$data['records'] = $this->site_model->getAll();
		$this->load->view('home', $data);
	}
/* */

//7.adding  method about loading view about from it
	 public function about(){
		$this->load->view('about');
	}
/* */


}