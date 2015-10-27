<?php
  class Mhome extends CI_model{
    public function __construct()
	   {
	    parent::__construct();
		}
	 public function  get_article()
	    {
		  $query = $this->db->query('SELECT * FROM article ORDER BY id DESC');
		  return $query->result();
		 }
	public function   login($username,$password)
	{
		$query = 	$this->db->query("select * from user where username='$username' and password='$password'");
        return $query->result();
  }

	public function sign_up($username,$password,$email,$si_time){
		/*	$query = $this->db->query("select * from user where username='$username'");
			
			if(!empty($query)){
 						echo "该用户已经注册!";
						exit;


			}else{
		 */
			$query1 = $this->db->query("insert into user value('NULL','$username','$password','$email','$si_time')");
			return $query1;
		
	}
				
			function show_voice($id_){
					$query= 	$this->db>query("select * from voice where id_user='.$id_user.'");
					return $query;

			
			
			
			
			
			}





























  }
