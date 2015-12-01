<?php



$vname = 'dms';
		if(isset($_POST['voicename'])){

		$vname=$_POST['voicename'];   //检测相关变量是否正确赋值
		}

		$conn = mysqli_connect('202.103.30.107','inno','n7i5p2s6z3','inno');	//链接数据库
		if(mysqli_connect_errno()){
				die('Error:connect');
		}
		
		mysqli_select_db($conn,'inno');
		
		if((!isset($_COOKIE['user']))||(!isset($_COOKIE['user_id']))){
				die('not set cookie');
		}

		$user_name= 'a';
		$user_id=1;
		$fa_time = date('Y-m-d H:i:s');
						//	$type = $_GET['type'];
			
		$query = "INSERT INTO voice VALUES(NULL,'$user_id','$user_name','$vname','$fa_time')";
		$result = mysqli_query($conn,$query);
		
		if(!$result){
				die('could not insert:'.mysql_error());
					}else{
							echo "yes";
					}
	
				
		  mysqli_close($conn);




?>

