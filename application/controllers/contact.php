<?php
  class Contact extends CI_Controller
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
	  $data['page_title'] = "Contact";
	 
	  $this->load->view('header',$data);
	  $this->load->view('index_contact');
	  
	  $this->load->view('footer');
	 }
  }