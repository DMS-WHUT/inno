<?php
  class Orimsc extends CI_Controller
  {
    public function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	   $this->load->database();
	 }
	public function index()
	
	 {
			 $this->load->model('mhome');
			

	  $data=array();
	  $data['resourse_css'] = $this->config->item('resourse_css');
	  $data['page_title'] = "原创音乐";
	  $data['voice']= $this->mhome->get_voice();

	  $this->load->view('header',$data);
	  
	  $this->load->view('orimsc',$data);

	  
	  $this->load->view('footer',$data);
	 
	  
	
	 }
		function piano()
		{
				$data=array();
				$data['page_title'] = "钢琴";
				
				//验证登录
				if(!isset($_COOKIE['user_id'])||!isset($_COOKIE['user'])){
						echo "<script>alert('您需要登录!')</script>";
						echo "<META HTTP-EQUIV='Refresh' CONTENT='0,URL=/inno/index.php/home/log_in'>";
				}else{



				$this->load->view('header',$data);
				$this->load->view('piano',$data);
				$this->load->view('footer',$data);
				}
		}
  
		function guitar()
		{
				$data=array();
				$data['page_title']="吉他";
		//验证登录
				if(!isset($_COOKIE['user_id'])||!isset($_COOKIE['user'])){
						echo "<script>alert('您需要登录!')</script>";
						echo "<META HTTP-EQUIV='Refresh' CONTENT='0,URL=/inno/index.php/home/log_in'>";
				}else{



				$this->load->view('header',$data);
				$this->load->view('guitar',$data);
				$this->load->view('footer',$data);
				}
		}
  
		function drum()
		{
					$data=array();
				$data['page_title']="架子鼓";
				$this->load->view('header',$data);
				$this->load->view('drum',$data);
				$this->load->view('footer',$data);
		
		
		
		
		
		
		
		}
		function act_voice()
		{ 
				if(isset($_GET['action_voice']) && isset($_GET['id_voice'])){
						if($_GET['action_voice']=='1'){
								//执行播放操作
				
				
						}else if($_GET['action_voice']=='0'){
								//执行删除操作
						}
				}
				$data=array();
				$data['pag_title']="音乐播放器";
				$this->load->view('header',$data);
				$this->load->view('play',$data);
				$this->load->view('footer',$data);
				
		}
  
  
  }
