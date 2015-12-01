
<!--piano部分-->
        <script src="/inno/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="/inno/js/swfobject.js"></script>
        <script type="text/javascript" src="/inno/js/recorder.js"></script>
        <script type="text/javascript" src="/inno/js/main.js"></script>
        <script type="text/javascript" src="/inno/js/piano.js"></script>
        <link rel="stylesheet" href="/inno/css/recorder_style.css">
        <style>
            #piano{
                margin-top: 20px;
                float:left;
                width:1000px;
                height:250px;
                text-align: end;
                border:1px solid transparent;
            }
            #pianol{
                float:left;
                width:1000px;
                height:130px;
                margin-top:-233px;
                margin-left:0px;
                border: 1px solid transparent;
            }
            .key {
                width: 34px;
                height: 250px;
                background-image: url('/inno/images/key_back_white.png');
                background-repeat: repeat-y;
                text-align: center;
                margin-top: -250px;
            }

            #key0{
                margin-left: 10px;
                margin-top: 0;
            }
            #key1{
                margin-left:45px;
            }
            #key2{
                margin-left:80px;
            }
            #key3{
                margin-left:115px;
            }
            #key4{
                margin-left:150px;
            }
            #key5{
                margin-left:185px;
            }
            #key6{
                margin-left:220px;
            }
            #key7{
                margin-left:255px;
            }
            #key8{
                margin-left:290px;
            }
            #key9{
                margin-left:325px;
            }
            #key10{
                margin-left:360px;
            }
            #key11{
                margin-left:395px;
            }
            #key12{
                margin-left:430px;
            }
            #key13{
                margin-left:465px;
            }
            #key14{
                margin-left:500px;
            }
            #key15{
                margin-left:535px;
            }
            #key16{
                margin-left:570px;
            }
            #key17{
                margin-left:605px;
            }
            #key18{
                margin-left:640px;
            }
            #key19{
                margin-left:675px;
            }
            #key20{
                margin-left:710px;
            }
            #key21{
                margin-left:745px;
            }
            #key22{
                margin-left:780px;
            }
            #key23{
                margin-left:815px;
            }
            #key24{
                margin-left:850px;
            }
            #key25{
                margin-left:885px;
            }
            #key26{
                margin-left:920px;
            }
            #key27{
                margin-left:955px;
            }
            .keyb{
                width:36px;
                background-image:url('/inno/images/key_back_black.png');
                background-repeat:repeat-y;
                text-align:center;
                height:125px;
                margin-top:-125px;
            }
            #keyb1{
                margin-top:0;
                margin-left:24px;
            }
            #keyb2{
                margin-left:65px;
            }
            #keyb3{
                margin-left:126px;
            }
            #keyb4{
                margin-left:167px;
            }
            #keyb5{
                margin-left:208px;
            }
            #keyb6{
                margin-left:266px;
            }
            #keyb7{
                margin-left:307px;
            }
            #keyb8{
                margin-left:371px;
            }
            #keyb9{
                margin-left:412px;
            }
            #keyb10{
                margin-left:453px;
            }
            #keyb11{
                margin-left:511px;
            }
            #keyb12{
                margin-left:552px;
            }
            #keyb13{
                margin-left:616px;
            }
            #keyb14{
                margin-left:657px;
            }
            #keyb15{
                margin-left:698px;
            }
            #keyb16{
                margin-left:756px;
            }
            #keyb17{
                margin-left:797px;
            }
            #keyb18{
                margin-left:861px;
            }
            #keyb19{
                margin-left:902px;
            }
            #keyb20{
                margin-left:943px;
            }
            .title{
                text-align: center;
            }


        </style>
        </head>
        
   <div>
        <div class="title">
            <hr/>
            <h1>钢琴演奏</h1>
            <hr/>
        </div>
        <div id='piano'>
            <div class="key" id="key0">Q</div>
            <div class="key" id="key1">W</div>
            <div class="key" id="key2">E</div>
            <div class="key" id="key3">R</div>
            <div class="key" id="key4">T</div>
            <div class="key" id="key5">Y</div>
            <div class="key" id="key6">U</div>
            <div class="key" id="key7">Z</div>
            <div class="key" id="key8">X</div>
            <div class="key" id="key9">C</div>
            <div class="key" id="key10">V</div>
            <div class="key" id="key11">B</div>
            <div class="key" id="key12">N</div>
            <div class="key" id="key13">M</div>
            <div class="key" id="key14">,</div>
            <div class="key" id="key15">/</div>
            <div class="key" id="key16">L</div>
            <div class="key" id="key17">;</div>
            <div class="key" id="key18">O</div>
            <div class="key" id="key19">8</div>
            <div class="key" id="key20">0</div>
            <div class="key" id="key21">1</div>
            <div class="key" id="key22">3</div>
            <div class="key" id="key23">5</div>
            <div class="key" id="key24">6</div>
            <div class="key" id="key25">8</div>
            <div class="key" id="key26">/</div>
            <div class="key" id="key27">-</div>
        </div>
        <div id="pianol">
            <div class="keyb" id='keyb1'>2</div>
            <div class="keyb" id='keyb2'>3</div>
            <div class="keyb" id='keyb3'>5</div>
            <div class="keyb" id='keyb4'>6</div>
            <div class="keyb" id='keyb5'>7</div>
            <div class="keyb" id='keyb6'>S</div>
            <div class="keyb" id='keyb7'>D</div>
            <div class="keyb" id='keyb8'>G</div>
            <div class="keyb" id='keyb9'>H</div>
            <div class="keyb" id='keyb10'>J</div>
            <div class="keyb" id='keyb11'>.</div>
            <div class="keyb" id='keyb12'>K</div>
            <div class="keyb" id='keyb13'>I</div>
            <div class="keyb" id='keyb14'>P</div>
            <div class="keyb" id='keyb15'>9</div>
            <div class="keyb" id='keyb16'>2</div>
            <div class="keyb" id='keyb17'>4</div>
            <div class="keyb" id='keyb18'>7</div>
            <div class="keyb" id='keyb19'>9</div>
            <div class="keyb" id='keyb20'>*</div>
        </div>
    </div>
<!--录音器部分-->
        <div class="recorder_part">
            <div class="container">
                <center><h4>录音器</h4><hr/></center>
                <div id="recorder-audio" class="control_panel idle">
                    <script>
                        $(document).ready(function(){$("#firstRecorder").click(function(){
                                    var myFileName=null;
                                    var t;
                                    t=show();
                                    myFileName=t+'.wav';
                                    FWRecorder.record("audio",myFileName)}
                        )});
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
                    <button class="record_button" id="firstRecorder" title="Record">
                        <img src="/inno/images/record.png" alt="Record"/>
                    </button>
                    <button class="stop_recording_button" onclick="FWRecorder.stopRecording('audio');" title="Stop Recording">
                        <img src="/inno/images/stop.png" alt="Stop Recording"/>
                    </button>
                    <button class="play_button" onclick="FWRecorder.playBack('audio');" title="Play">
                        <img src="/inno/images/play.png" alt="Play"/>
                    </button>
                    <button class="pause_playing_button" onclick="FWRecorder.pausePlayBack('audio');" title="Pause Playing">
                        <img src="/inno/images/pause.png" alt="Pause Playing"/>
                    </button>
                    <button class="stop_playing_button" onclick="FWRecorder.stopPlayBack();" title="Stop Playing">
                        <img src="/inno/images/stop.png" alt="Stop Playing"/>
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

                <form id="uploadForm" name="uploadForm" action="/inno/upload/do_upload" enctype="multipart/form-data">
                    <input name="authenticity_token" value="xxxxx" type="hidden">
                    <input name="upload_file[parent_id]" value="1" type="hidden">
                    <input name="format" value="json" type="hidden">
                </form>
                <hr/>
                <input type="button" onclick="mpConfig()" value="麦克风高级配置"></input>
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
                            <input id="useEchoSuppression" name="useEchoSuppression" type="checkbox"/>
                            <label for="useEchoSuppression">Use Echo Suppression</label>
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
            <div class="prompt_info">
                <center><h4>使用说明</h4><hr/></center>
                <p>1、您可以使用键盘随意弹奏钢琴</p>
                <p>2、如果您想将自己弹奏的乐曲录制保存，请使用左侧录音器</p>
                <p>3、如果您是专业人员，可以通过点击麦克风高级配置进行相关设置，如果您是普通用户，则只需使用显示的按钮即可</p>
                <p>4、演奏完成，您可以试听效果，并可以选择保存到服务器或者删除录音</p>
            </div>

        </div>
<!--底部-->
   
