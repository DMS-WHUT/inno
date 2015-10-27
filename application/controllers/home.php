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
	  function object_array($array)
			{
  					 if(is_object($array))
				   {
   					 $array = (array)$array;
   					}
  					 if(is_array($array))
 				  {
   						 foreach($array as $key=>$value)
  						  {
    							 $array[$key] = object_array($value);
 				 		  }
 				  }
					 
 		  return $array;
			}


	  function show_object($array){
			  if(is_array($array))
			  {
				$num = count($array);
				$s=0;
				for($i=$num;$i>=1;$i--) {
					$s=$i-1;
					echo "<pre>";

					print_r($array[$s]);
					echo "</pre>";
					
				}
					  
					
				}		

	  }
	//		$data['get_artic']= object_array($data['get_artic']);

	  			
	  
	 // 		show_object($data['get_artic']);

			
	  $this->load->view('home',$data);
	 /* echo "<pre>";
	  print_r($data['get_artic'][0]);
	  
	  echo "</pre>";
	  */
	  $this->load->view('footer');
	
	 }
	function test(){
			echo base_url();
	}
     public function log_in()
	 {

			 $data=array();
			 if(isset($_POST['yourname'])&&isset($_POST['yourpass']))
			 {
			 $data['username']=$_POST['yourname'];
			 $data['password']=sha1($_POST['yourpass']);
			 $this->load->model('mhome');
			 $data['result']= $this->mhome->login($data['username'],$data['password']);
			 if($data['result'])

			 { setcookie("user",$data['username'],time()+3600,"/inno/",'localhost');
				$url="http:/inno/index.php/home";	
			 	Header("Location:$url");
			 }else{
				echo "密码错误或用户名不存在!";
				?>	<a href="/inno/index.php/home/log_in"><input type="button" name="test" value="返回"/></a><?php
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
						$data['result']= $this->mhome->sign_up($data['username'],$data['password'],$data['email'],$data['si_time']);
			
						switch($data['result']){
						case 0:
								echo "<script>alert('抱歉,注册失败,请稍后再试.正在跳转......')</script>";
								echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=/inno/index.php/home'>";
								break;
						case 1:
								echo "<script>alert('恭喜你注册成功,马上去登录.')</script>";

							echo "<META HTTP-EQUIV='Refresh' CONTENT='1;URL=/inno/index.php/home/log_in'>";
								break;
					/*	case 2:

								echo "用户名已经注册了,请长重新注册,正在跳转...";
								echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=/inno/index.php/home/sign'>";
								break;*/
							}


					}else{
			 $data['page_title']="注册";
			 $this->load->view('header',$data);
			 $this->load->view('sign',$data);
			 $this->load->view('footer',$data);
					}
	 }
	 

	 public function log_out(){

					$data=array();
			 		if(setcookie('user','',time()-3600,'/inno/',"localhost")){
					 echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=/inno/index.php/home'>";
						}else{
						echo "<script>alert('退出登录失败!正在返回...')</script>";
						echo "<META HTTP-EQUIV='Refresh' CONTENT='3;URL=/inno/index.php/home'>";
				}

	 }








	 function account(){
			 $data=array();
			 $data['page_title']="账户";
			 $this->load->view('header',$data);

			 $this->load->view('account',$data);
			 $this->load->view('footer',$data);
			 
	 
	 }
   

  
  
  
  }
