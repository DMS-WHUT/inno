<?php
  class Mhome extends CI_model{
    public function __construct()
	   {
	    parent::__construct();
		$this->load->database();
		}




	//获取文章
	 public function  get_article()
	    {
		  $query = $this->db->query('SELECT * FROM article ORDER BY id DESC');
		  return $query->result();
		 }
	





	//登录
	public function login($username,$password)
	{
		$query = 	$this->db->query("select * from user where username='$username' and password='$password'");
        return $query->result();
  }






	//注册
	public function sign_up($username,$password,$email,$time){
			

			$query1 = $this->db->query("insert into user values(NULL,'$username','$password','$email','$time')");
			return $query1;
		
	}
				


		//验证是否注册
			function check($username)
			{
					$query=$this->db->query("select * from user where username='$username'");
					return $query->result();

			}


		//获取id
	function id_get($username,$pass)
	{
			$query= $this->db->query("select * from user where username='.$username.' and password='.$pass.'");
			
			return $query->result();

	}





			

		//创建个人信息
			function profile_new($name,$email,$time)
			{
					$query = $this->db->query("insert into profile(username,email,edittime) values('$name','$email','$time')");
					return $query;
	
			}



	
			//修改个人信息
			function profile_edit($arr)
			{
				}





			//取出个人信息

			function get_profile($id){
					$query = $this->db->query("select * from profile where id='.$id.'");
					return $query->result();
		   	} 



			function get_voice($id=FALSE){
					if($id===FALSE){
					$query=$this->db->query("select * from voice order by id desc"); 
					return $query->result();
					}else{
					$query=$this->db->query("select * from voice where user_id='.$id.'");		
					return $query->result();
 
					}
			}


			function up_voice($id,$name){
					$time = date('Y-m-d H:i:s');
					if(isset($id)&&isset($name)){
							$query = $this->db->query("insert into voice values(NULL,'.$id.','.$name.','.$time.')");
							return $query;

					}


			}















  }
