<?php
  class Digdoctor extends CI_Controller
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
	  $data['page_title'] = "数字中医";
	 
	  $this->load->view('header',$data);
	 	$this->load->view('digdoctor',$data); 
	  $this->load->view('footer',$data);
	 
	  
	
	 }
    
  
  
  
  
  
  }
