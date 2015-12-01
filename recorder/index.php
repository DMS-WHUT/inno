<?php
/*  if(isset($_GET['type'])){
		  //echo "获取到了";
		  $$type=$_GET['type'];
  }
 */
?>


<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>录音器</title>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/swfobject.js"></script>
  <script type="text/javascript" src="js/recorder.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="recorder_part">
    <div class="container">
        <center><h4>录音器</h4><hr/></center>
		<input id="ssyonghuming"  maxlength="20"  placeholder="在这输入上传录音文件名" value=''></input>
		
        <div id="recorder-audio" class="control_panel idle">
        <script>
            $(document).ready(function(){$("#firstRecorder").click(function(){
                        var myFileName=null;
                        var t;
			var m;
			m=document.getElementById('ssyonghuming').value+'';
                        t=show();
                        myFileName=m+t+'.wav';
            FWRecorder.record("audio",myFileName);
			document.getElementById("1130").value=myFileName;}
            )})
            function show(){
                var myDate = new Date();
                var str='';
                var year=''+ myDate.getFullYear();
                var month= (myDate.getMonth()+1);
                var day= myDate.getDate();
                var hour=myDate.getHours();
                var minute=myDate.getMinutes();
                var second=myDate.getSeconds();
                if(month<10){var months='0'+month}else{months=''+month};
                if(day<10){var days='0'+day}else{days=''+day};
                if(hour<10){var hours='0'+hour;}else{hours=''+hour};
                if(minute<10){var minutes='0'+minute}else{minutes=''+minute};
                if(second<10){ var seconds='0'+second;}else{seconds=''+second};
                str=year+months+days+hours+minutes+seconds;
                return str;
            }
        </script>

      <button class="record_button"  id="firstRecorder"  title="Record">
        <img src="images/record.png" alt="Record"/>
      </button>
      <button class="stop_recording_button" onclick="FWRecorder.stopRecording('audio');" title="Stop Recording">
        <img src="images/stop.png" alt="Stop Recording"/>
      </button>
      <button class="play_button" onclick="FWRecorder.playBack('audio');" title="Play">
          <img src="images/play.png" alt="Play"/>
      </button>
      <button class="pause_playing_button" onclick="FWRecorder.pausePlayBack('audio');" title="Pause Playing">
          <img src="images/pause.png" alt="Pause Playing"/>
      </button>
      <button class="stop_playing_button" onclick="FWRecorder.stopPlayBack();" title="Stop Playing">
        <img src="images/stop.png" alt="Stop Playing"/>停止
      </button>
      <div class="level"></div>
    </div>




        <div class="details">
            <button class="show_level" onclick="FWRecorder.observeLevel();">显示声波</button>
            <button class="hide_level" onclick="FWRecorder.stopObservingLevel();" style="display: none;">隐藏声波</button>
                  <span id="save_button">
                    <span id="flashcontent">
                      <p>您的浏览器必须支持Javascript,而且安装了Flash播放器！</p>
                    </span>
                  </span>
            <div><button class="show_settings" onclick="microphonePermission()">麦克风权限</button></div>
            <div id="status">
                录音状态...
            </div>
            <div>录音时长: <span id="duration"></span></div>
            <div>Activity Level: <span id="activity_level"></span></div>
            <div>上传状态: <span id="upload_status"></span></div>
        </div>

    <form id="uploadForm" name="uploadForm" action="upload.php" method="post">
      <input name="authenticity_token" value="xxxxx" type="hidden">
      <input name="upload_file[parent_id]" value="1" type="hidden">
      <input name="format" value="json" type="hidden">
	  <input id="1130" name="voicename" type="hidden" value='' >
    </form>
        <hr/>
        <input type="button" onclick="mpConfig()" value="麦克风高级配置">
    </div>

    <div id="mp_config">
        <center><h4>麦克风配置</h4><hr/></center>
 <form class="mic_config" onsubmit="return false;">
      <ul>
        <li>
          <label for="rate">Rate</label>
          <select id="rate" name="rate">
            <option value="44" selected>44,100 Hz</option>
            <option value="22">22,050 Hz</option>
            <option value="11">11,025 Hz</option>
            <option value="8">8,000 Hz</option>
            <option value="5">5,512 Hz</option>
          </select>
        </li>

        <li>
          <label for="gain">Gain</label>
          <select id="gain" name="gain">
          </select>
        </li>

        <li>
          <label for="silenceLevel">环境安静度</label>
          <select id="silenceLevel" name="silenceLevel">
          </select>
        </li>

        <li>
          <label for="silenceTimeout">Silence Timeout</label>
          <input id="silenceTimeout" name="silenceTimeout" value="2000"/>
        </li>
        <li>
          <input id="loopBack" name="loopBack" type="checkbox"/>
          <label for="loopBack">Loop Back</label>
        </li>

        <li>
          <button onclick="configureMicrophone();">配置麦克风</button>
        </li>
      </ul>
    </form>
  </div>
    <!--使用说明-->
    <div id="prompt_info">
        <center><h4>使用说明</h4><hr/></center>
        <p>1、您可以使用键盘随意弹奏钢琴</p>
        <p>2、如果您想将自己弹奏的乐曲录制保存，请使用左侧录音器</p>
        <p>3、如果您是专业人员，可以通过点击麦克风高级配置进行相关设置，如果您是普通用户，则只需使用显示的按钮即可</p>
        <p>4、演奏完成，您可以试听效果，并可以选择保存到服务器或者删除录音</p>
    </div>

   </div>
</body>
</html>



