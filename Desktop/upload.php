<?php
/*
if(!isset($_POST['voicename'])||!isset($_COOKIE['user_id'])||!isset($_COOKIE['user'])){

		echo "请登录或者填写正确的录音文件名!";
		exit;
}


		$connectdb = new mysqli('202.103.30.107','inno','n7i5p2s6z3','inno');	//链接数据库
		if (mysqli_connect_errno()){
						echo "Error:不能连接数据库.";
						exit;}
		


		$voicename=$_POST['voicename'];   //检测相关变量是否正确赋值
		$user=$_COOKIE['user'];
		$id=$_COOKIE['user_id'];
		$up_time = date('Y-m-d H:i:s');
	//	$type = $_GET['type'];
			
		$query = "insert into voice values(NULL,'.$id.','.$user.','.$voicename.','.$up_time.')";
		$result = $connectdb->query($query);

		$connectdb->close();
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
