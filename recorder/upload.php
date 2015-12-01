<?php
		/* 
$vname = 'dms';
		if(isset($_POST['voicename'])){

		$vname=$_POST['voicename'];   //检测相关变量是否正确赋值
		}

		$conn = mysqli_connect('202.103.30.107','inno','n7i5p2s6z3','inno');	//链接数据库
		if(mysqli_connect_errno(){
				die('could not connect');
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
				die('could not insert');
					}
	
		mysqli_close($conn);
				
		 */	



	 
$save_folder = dirname(__FILE__) . "/audio";
if(! file_exists($save_folder)) {
  if(! mkdir($save_folder)) {
    die("failed to create save folder $save_folder");
  }
 }

function valid_wav_file($file) {
  $handle = fopen($file, 'r');
  $header = fread($handle, 4);
  list($chunk_size) = array_values(unpack('V', fread($handle, 4)));
  $format = fread($handle, 4);
  fclose($handle);
  return $header == 'RIFF' && $format == 'WAVE' && $chunk_size == (filesize($file) - 8);
}

$key = 'filename';
$tmp_name = $_FILES["upload_file"]["tmp_name"][$key];
$upload_name = $_FILES["upload_file"]["name"][$key];
$type = $_FILES["upload_file"]["type"][$key];
$filename = "$save_folder/$upload_name";
$saved = 0;
if($type == 'audio/wav' && preg_match('/^[a-zA-Z0-9_\-]+\.wav$/', $upload_name) && valid_wav_file($tmp_name)) {
  $saved = move_uploaded_file($tmp_name, $filename) ? 1 : 0;
}

if($_POST['format'] == 'json') {
  header('Content-type: application/json');
  print "{\"saved\": $saved}";
} else {
  print $saved ? "Saved" : 'Not saved';
}
exit;
?>
