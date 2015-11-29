<?php
  class Home extends CI_Controller
  {
    public function __construct()
	 {
	   parent::__construct();
	   $this->load->helper('url');
	   $this->load->database();
	   $url_cook='localhost';

	 }
	public function index()
	
	 {
	  
	  $data=array();
	  $data['resourse_css'] = $this->config->item('resourse_css');
	  $data['page_title'] = "Home";
	 
	  $this->load->view('header',$data);
	  $this->load->model('mhome');
	  $data['get_artic'] = $this->mhome->get_article();
	  
		function sort_object_back($array)
		{
				if(is_object($array)){
						$num=count($array);
						echo $num;
						$s=($num-1)/2;
						for($i=0;$i<$num;$i++){
								$bak=$array[$i];
								$n=$num-$i-1;
								$array[$i]=$array[$n];
								$array[$n]=$bak;
						}	
								return $array;
				}
		}
	  

			
	  $this->load->view('home',$data);
	  $this->load->view('footer');
	
	 }
	function test(){
			echo base_url();
	}
     public function log_in()
	 {
				$cokurl='localhost';

			 $data=array();
			 if(isset($_POST['yourname'])&&isset($_POST['yourpass']))
			 {
			 $data['username']=$_POST['yourname'];
			 $data['password']=sha1($_POST['yourpass']);
			 $this->load->model('mhome');
			 $data['result']= $this->mhome->login($data['username'],$data['password']);
		     foreach($data['result'] as $row):
					 $user_id=$row->id;
				endforeach;
			 if($data['result'])

			 { setcookie("user",$data['username'],time()+3600,"/inno/");
			 setcookie("user_id",$user_id,time()+3600,"/inno/");

				$url="http:/inno/index.php/home";	
			 	Header("Location:$url");
			 }else{
				echo "<script>alert('密码错误或用户名不存在!')</script>";
				echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=/inno/index.php/home/log_in'>";

			 }
			 }else{

			 $data['page_title']="登录";
			 $this->load->view('header',$data);
			 $this->load->view('login',$data);
			 $this->load->view('footer',$data);
			 }
	 }



	 public function sign(){
			
			
			 $data=array();
			 if(isset($_POST['yourname'])&&isset($_POST['yourpass'])&&isset($_POST['youremail']))
			 		{
						$data['username']=$_POST['yourname'];
						$data['password']=sha1($_POST['yourpass']);
						$data['email']=$_POST['youremail'];
						$data['si_time']=date('Y-m-d H:i:s');
						$this->load->model('mhome');

						if($this->mhome->check($data['username']))
						{

								echo "<script>alert('你已经注册过了')</script>";
								echo "<META HTTP-EQUIV='Refresh' CONTENT='1;URL=/inno/index.php/home/log_in'>";
								exit;
						}

						$data['result']= $this->mhome->sign_up($data['username'],$data['password'],$data['email'],$data['si_time']);

			
						if(!$data['result']){
								echo "<script>alert('抱歉,注册失败,请稍后再试.正在跳转......')</script>";
								echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=/inno/index.php/home'>";
								exit;
						}else{




								
								$data['a']=$this->mhome->profile_new($data['username'],$data['email'],$data['si_time']);

								if($data['a']){
								echo "<script>alert('恭喜你注册成功,马上去登录.')</script>";

								echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=/inno/index.php/home/log_in'>";
							 
								}else{
								
										echo "创建个人信息失败";

								
								}
							 	




							}


					}else{
			 $data['page_title']="注册";
			 $this->load->view('header',$data);
			 $this->load->view('sign',$data);
			 $this->load->view('footer',$data);
					}
	 }
	 

	 public function log_out(){

	$cokurl='localhost';

					$data=array();
			 		if(setcookie('user','',time()-3600,"/inno/")&&setcookie('id','',time()-3600,"/inno/")){
							
					 echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=/inno/index.php/home'>";
						}else{
						echo "<script>alert('退出登录失败!正在返回...')</script>";
						echo "<META HTTP-EQUIV='Refresh' CONTENT='3;URL=/inno/index.php/home'>";
				}

	 }








	 function account(){
			 $data=array();
			 $data['page_title']="个人中心";
			 $this->load->view('header',$data); 
			 $this->load->model('mhome');


			 $data['profile']=$this->mhome->show_profile($_COOKIE['user_id']);



			 $this->load->view('account',$data);
			 $this->load->view('footer',$data);
			 
	 
	 }
   

  
  
  
  }
