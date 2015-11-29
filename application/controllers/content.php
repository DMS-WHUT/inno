<?php
  class Content extends CI_Controller
  {
    public function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	   $this->load->database();
	 }
	public function index()
	
	 {
	  
	  $data=array();
	  $data['resourse_css'] = $this->config->item('resourse_css');
	  $data['page_title'] = "Home"; 
	  $this->load->view('header',$data);
	  
	  $this->load->model('Mhome');
	  $data['get_artic'] = $this->Mhome->get_article();
	  $this->load->view('content',$data);
	  $this->load->view('footer',$data);
	 
	  
	
	 }
    
  
  
  
  
  
  }
