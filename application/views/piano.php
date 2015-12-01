<!--piano部分-->
    <div>

        <script type="text/javascript" src="/inno/js/piano.js"></script>
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
        <iframe src="/inno/recorder/index.php?type=1" style="width: 1100px;border: none;height: 320px;margin-left: -10px">
        </iframe>
