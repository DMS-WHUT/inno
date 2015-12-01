<?php

class Upload extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
  $this->load->database();
 
 function index()
 { 
  $this->load->view('upload_form', array('error' => ' ' ));
 }

 function do_upload()
 {
	$config['filename']=$_COOKIE['user'];
  $config['upload_path'] = '/inno/voice/';
  $config['allowed_types'] = 'audio/wav';
  $config['max_size'] = '100';
  
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  
 
  if ( ! $this->upload->do_upload())
  {
   $error = array('error' => $this->upload->display_errors());
   
   $this->load->view('upload_form', $error);
  } 
  else
  {
   $data = array('upload_data' => $this->upload->data());
   
   $this->load->view('upload_success', $data);
  }
 } 
}
?>
