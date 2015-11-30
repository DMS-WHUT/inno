
<!--个人中心-->
<center>
    <script>
        /*隐藏显示编辑按钮*/
        function show_edit_info(){
            var edit_info=document.getElementById("edit_info");
            edit_info.style.visibility="visible";
        }
        function show_edit_img(){
            var edit_pic=document.getElementById("edit_pic");
            edit_pic.style.visibility="visible";
        }
        function hide_edit_info(){
            var edit_info=document.getElementById("edit_info");
            edit_info.style.visibility="hidden";
        }
        function hide_edit_img(){
            var edit_pic=document.getElementById("edit_pic");
            edit_pic.style.visibility="hidden";
        }


        /*通过用户点击鼠标改变显示的div*/
        function change_section(val,obj){

            document.getElementsByClassName("user_section")[0].style.backgroundColor="#EEEEEE";
            document.getElementsByClassName("user_section")[1].style.backgroundColor="#EEEEEE";
            document.getElementsByClassName("user_section")[2].style.backgroundColor="#EEEEEE";
            document.getElementsByClassName("user_section")[3].style.backgroundColor="#EEEEEE";
            document.getElementsByClassName("user_section")[4].style.backgroundColor="#EEEEEE";
            obj.style.backgroundColor="white";
            if(val=="dongtai"){
                document.getElementById("dongtai").style.display="block";
                document.getElementById("yinyue").style.display="none";
                document.getElementById("guanxi").style.display="none";
                document.getElementById("shoucang").style.display="none";
                document.getElementById("gengduo").style.display="none";
            }
            else if(val=="yinyue"){
                document.getElementById("dongtai").style.display="none";
                document.getElementById("yinyue").style.display="block";
                document.getElementById("guanxi").style.display="none";
                document.getElementById("shoucang").style.display="none";
                document.getElementById("gengduo").style.display="none";
            }
            else if(val=="guanxi"){
                document.getElementById("dongtai").style.display="none";
                document.getElementById("yinyue").style.display="none";
                document.getElementById("guanxi").style.display="block";
                document.getElementById("shoucang").style.display="none";
                document.getElementById("gengduo").style.display="none";
            }
            else if(val=="shoucang"){
                document.getElementById("dongtai").style.display="none";
                document.getElementById("yinyue").style.display="none";
                document.getElementById("guanxi").style.display="none";
                document.getElementById("shoucang").style.display="block";
                document.getElementById("gengduo").style.display="none";
            }
            else if(val=="gengduo"){
                document.getElementById("dongtai").style.display="none";
                document.getElementById("yinyue").style.display="none";
                document.getElementById("guanxi").style.display="none";
                document.getElementById("shoucang").style.display="none";
                document.getElementById("gengduo").style.display="block";
            }
        }
    </script>

    <!--弹出编辑窗口-->
    <script>
        function open_edit_info(){
            var div1Height=document.body.scrollHeight;
            document.getElementById('div1').style.height=div1Height+"px";
            document.getElementById('div1').style.display='block';
            document.getElementById('div3').style.display='block';
            editBirth();
        }
        function close_edit_info(){
            document.getElementById('div1').style.display='none';
            document.getElementById('div3').style.display='none';
        }
        function open_edit_pic(){
            var div1Height=document.body.scrollHeight;
            document.getElementById('div1').style.height=div1Height+"px";
            document.getElementById('div1').style.display='block';
            document.getElementById('div2').style.display='block';
        }
        function close_edit_pic(){
            document.getElementById('div1').style.display='none';
            document.getElementById('div2').style.display='none';
        }

    </script>


    <!--修改生日-->
    <script language="JavaScript"><!--
        var YYYYvalue;
        function editBirth(){
            var YYYY=document.getElementById("YYYY");
            var MM=document.getElementById("MM");
            var MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            //先给年下拉框赋内容
            var y  = new Date().getFullYear();
            for (var i = (y-120); i < y+1; i++){
                YYYY.options.add(new Option(" "+ i +" 年", i));
            }

    //赋月份的下拉框
            for ( i = 1; i < 13; i++){
                MM.options.add(new Option(" " + i + " 月", i));
            }

            /*document.reg_testdate.YYYY.value = y;   */
            /*document.reg_testdate.MM.value = new Date().getMonth() + 1;   */
            var n = MonHead[new Date().getMonth()];
            if (new Date().getMonth() ==1 && IsPinYear(YYYYvalue)) n++;
            writeDay(n); //赋日期下拉框Author:meizz
            /*document.reg_testdate.DD.value = new Date().getDate();   */

        }
        function YYYYDD(str) //年发生变化时日期发生变化(主要是判断闰平年)
        {
            var YYYY=document.getElementById("YYYY");
            var MM=document.getElementById("MM");
            var DD=document.getElementById("DD");
            var MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            var MMvalue =MM.options[MM.selectedIndex].value;
            if (MMvalue == ""){ var e = DD; optionsClear(e); return;}
            var n = MonHead[MMvalue - 1];
            if (MMvalue ==2 && IsPinYear(str)) n++;
            writeDay(n)
        }
        function MMDD(str)   //月发生变化时日期联动
        {
            var YYYY=document.getElementById("YYYY");
            var DD=document.getElementById("DD");
            var MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            YYYYvalue =YYYY.options[YYYY.selectedIndex].value;
            if (YYYYvalue == ""){ var e = DD; optionsClear(e); return;}
            var n = MonHead[str - 1];
            if (str ==2 && IsPinYear(YYYYvalue)) n++;
            writeDay(n)
        }
        function writeDay(n)   //据条件写日期的下拉框
        {
            var DD=document.getElementById("DD");
            var e = DD; optionsClear(e);
            for (var i=1; i<(n+1); i++)
                e.options.add(new Option(" "+ i + " 日", i));
        }
        function IsPinYear(year)//判断是否闰平年
        {
            return(0 == year%4 && (year%100 !=0 || year%400 == 0));
        }
        function optionsClear(e)
        {
            e.options.length = 1;
        }
    //--></script>

    <!--修改地区-->
    <script src="/inno/js/changeArea.js"></script>
    <!--检查邮箱格式-->
    <script type="text/javascript">
        function ischeckemail(){
            var email = document.getElementById("emailname").value;
            if (email != "") {
                var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
                var isok= reg.test(email );
                if (!isok) {
                    alert("邮箱格式不正确，请重新输入！");
                    document.getElementById("emailname").focus();
                    return false;
                }
            }
        }
    </script>
    <!--上传图片-->
    <link rel="stylesheet" href="/inno/css/imgcut.css" type="text/css" />
    <script type="text/javascript" src="http://www.lanrenzhijia.com/ajaxjs/1.7.1/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/inno/js/jquery.Jcrop.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

            function isImageFile(file) {
                if (file.type) {
                    return /^image\/\w+$/.test(file.type);
                } else {
                    return /\.(jpg|jpeg|png|gif)$/.test(file);
                }
            }

            $("#selectImg").click(function() {
                return $("#imgOne").click();
            });
            $("#imgOne").change(function() {
                var files, file;
                files = $(this).prop('files');

                if (files.length > 0) {
                    file = files[0];
                    if (isImageFile(file)) {
                        var imgsrc = getFileUrl("imgOne");
                        $(".jcrop-holder img, #crop_preview,#bPic").attr("src", imgsrc);
                        $(".jcrop-holder img").css("height","auto");
                        $(".jcrop-holder img").css("width","500px");
                        var img=document.createElement("img");
                        img.src=imgsrc;

                        window.setTimeout(function() {
                            if (img.width < 500) {
                                $(".jcrop-holder img").css("height", "auto");
                                $(".jcrop-holder img").css("width", img.width);
                                $(".jcrop-holder").css("width", img.width);
                                $(".jcrop-holder").css("height", img.height);
                                $(".jcrop-tracker").css("width", img.width);
                                $(".jcrop-tracker").css("height", img.height);
                                $("#bPic").css("width", img.width);
//                                jcropApi.setWidgetSize(img.width,img.height);
                                $("#bPic").Jcrop({
                                    onChange: showPreview,
                                    onSelect: showPreview,
                                    aspectRatio: 1
                                });
                            }
                            else if (img.width >= 500) {
                                $(".jcrop-holder img").css("width", "500px");
                                $(".jcrop-holder img").css("height", "auto");
                                $(".jcrop-holder").css("width", "500px");
                                $(".jcrop-holder").css("height", 500*img.height/img.width);
                                $(".jcrop-tracker").css("width", "500px");
                                $(".jcrop-tracker").css("height", 500*img.height/img.width);
                                $("#bPic").css("width", "500px");
                                $("#bPic").Jcrop({
                                    onChange: showPreview,
                                    onSelect: showPreview,
                                    aspectRatio: 1
                                });
                            }
                        },100);
                    } else {
                        alert("请选择有效的图片文件！");
                        return false;
                    }
                }
                $("#upfile").val($(this).val());
            });

            //记得放在jQuery(window).load(...)内调用，否则Jcrop无法正确初始化
            $("#bPic").Jcrop({
                onChange: showPreview,
                onSelect: showPreview,
                aspectRatio: 1
            });

            //简单的事件处理程序，响应自onChange,onSelect事件，按照上面的Jcrop调用
            function showPreview(coords){
                if(parseInt(coords.w) > 0){
                    //计算预览区域图片缩放的比例，通过计算显示区域的宽度(与高度)与剪裁的宽度(与高度)之比得到
                    var rx = $("#preview_box").width() / coords.w;
                    var ry = $("#preview_box").height() / coords.h;
                    //通过比例值控制图片的样式与显示
                    $("#crop_preview").css({
                        width:Math.round(rx * $("#bPic").width()) + "px",	//预览图片宽度为计算比例值与原图片宽度的乘积
                        height:Math.round(rx * $("#bPic").height()) + "px",	//预览图片高度为计算比例值与原图片高度的乘积
                        marginLeft:"-" + Math.round(rx * coords.x) + "px",
                        marginTop:"-" + Math.round(ry * coords.y) + "px"
                    });
                }
            }
        });
    </script>

    <script type="text/javascript">
        /**
         * 从 file 域获取 本地图片 url
         */
        function getFileUrl(sourceId) {
            var url;
            if (navigator.userAgent.indexOf("MSIE")>=1) { // IE
                url = document.getElementById(sourceId).value;
            } else if(navigator.userAgent.indexOf("Firefox")>0) { // Firefox
                url = window.URL.createObjectURL(document.getElementById(sourceId).files.item(0));
            } else if(navigator.userAgent.indexOf("Chrome")>0) { // Chrome
                url = window.URL.createObjectURL(document.getElementById(sourceId).files.item(0));
            }
            return url;
        }

        /**
         * 将本地图片 显示到浏览器上
         */
        function preImg(sourceId, targetId) {
            var url = getFileUrl(sourceId);
            var imgPre = document.getElementById(targetId);
            imgPre.src = url;

            document.getElementById("crop_preview").src=url;
        }
    </script>

    <div class="account">
        <hr/>
        <h1>个人中心</h1>
		<?foreach($profile as $row):?>


<?php if($row->sex=="1")
			{
					$gender="男";
			}else{
					$gender="女";
			}
?>
        <div class="account_info">
            <div class="account_img" onmouseover="show_edit_img()" onmouseout="hide_edit_img()">
			<img src="/inno/photos/<?=$row->photo?>" id="user_img">
                <img src="/inno/images/edit.png" id="edit_pic" onclick="open_edit_pic()">
            </div>

            <div class="account_basic_info" onmouseover="show_edit_info()" onmouseout="hide_edit_info()">
			<span id="user_name"><?=$row->realname?></span>
                <img src="/inno/images/edit.png" id="edit_info" onclick="open_edit_info()">
                <p>
				<span id="account_area"><?=$row->city?></span>
                    <span>&nbsp;|&nbsp;</span>
					<span id="account_sex"><? echo $gender;?></span>
                    <span>&nbsp;|&nbsp;</span>
					<span id="account_birth"><?=$row->birthday?></span>
                    <span>&nbsp;|&nbsp;</span>
					<span id="account_email"><?=$row->email?></span>
                </p>
                <hr/>
                <div class="account_label">
                    <span>个性签名：</span>
					<span  id="personal_label"><?=$row->signature?></span>

                </div>


            </div>

		</div>
		<?endforeach;?>
        <div class="account_attr">
            <ul id="section_title">
                <li class="user_section" onclick="change_section('dongtai',this)" style="background-color: white">我的动态</li>
                <li class="user_section" onclick="change_section('yinyue',this)">我的音乐</li>
                <li class="user_section" onclick="change_section('guanxi',this)">我的关系</li>
                <li class="user_section" onclick="change_section('shoucang',this)">我的收藏</li>
                <li class="user_section" onclick="change_section('gengduo',this)">更多</li>
            </ul>

            <div class="detail_attr" id="dongtai" >
                <div>暂无动态</div>
            </div>

            <div class="detail_attr" id="yinyue">
                <div>暂无音乐</div>
            </div>

            <div class="detail_attr" id="guanxi">
                <div>暂无关系</div>
            </div>

            <div class="detail_attr" id="shoucang">
                <div>暂无收藏</div>
            </div>

            <div class="detail_attr" id="gengduo">
                <div>暂无更多</div>
            </div>
        </div>
        <div id="div1"></div>
        <div id="div2">
            <div style="position: absolute;left: 830px;top: 135px">
                <input type="button" id="btnCancel" value="取消" onClick="close_edit_pic()">
            </div>
            <div style="position: absolute;left: 1040px;top: 120px ">
                <input type="button" value="X" onClick="close_edit_pic()" style="cursor: hand; background-color: transparent;border: none;">
            </div>
            <iframe src="/inno/imgcut/index.html" style="width: 100%;height: 100%;border: none">
                </iframe>
        </div>

        <div id="div3">

            <table  cellpadding="10px" border="0" style=" background-color: white;width: 600px;font-weight: bold ;font-size: 16px;color: grey" align="center">
                <tr id="edit_title">
                    <td style="font-size:20px; font-weight:bold;text-indent:15px; line-height:40px; border-bottom:1px solid grey;">编辑信息</td>
                    <td style="padding-right:10px; border-bottom:1px solid grey;" align="right">
                        <input type="button" value="X" onClick="close_edit_info()" style="cursor: hand; background-color: transparent;border: none;">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="100%" style="background-color: lightgrey"><span id="account_name" style="font-size: 18px;font-weight: bold;font-family: Arial, sans-serif;color: black;">用户名：张XX</span></td>
                </tr>
                <form action="#" method="post">
                    <tr>
                        <td colspan="2" width="100%"><span>地区：</span>
                            <select id="s_province" name="s_province"></select>  
                            <select id="s_city" name="s_city" ></select>  
                            <select id="s_county" name="s_county"></select>

                            <script type="text/javascript">_init_area();</script><!--初始化地区-->
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width="100%"><span>生日：</span>
                            <select id="YYYY" onchange="YYYYDD(this.value)">
                                <option value="">请选择 年</option>
                            </select>
                            <select id="MM" onchange="MMDD(this.value)">
                                <option value="">请选择 月</option>
                            </select>
                            <select id="DD">
                                <option value="">请选择 日</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="200px">
                            <span>性别：</span><input type="radio" name="sex" value="male" checked>男
                            <input type="radio" name="sex" value="female">女
                        </td>
                        <td width="500px">
                            <span>邮箱：</span><input type="text" name="email" id="emailname">
                        </td>
                    </tr>
                    <tr>
                        <td width="100%" height="200px" colspan="2">
                            <span>个性签名：</span>
                            <textarea style="width: 100%;height: 80%;text-align: left ;margin-top: 10px" placeholder="写点什么……"></textarea><!--开始标签和结束标签中间不要加空格-->
                        </td>
                    </tr>
                    <tr align="center">
                        <td width="50%"><input type="button" onclick="close_edit_info()" value="取消" style="border: none;width: 80px;height: 30px;color: white;background-color: grey"></td>
                        <td width="50%"><input type="submit" value="保存" style="border: none;width: 80px;height: 30px;color: white ;background-color: #750a20" onclick="return ischeckemail()"></td>
                    </tr>
                </form>

            </table>
        </div>
</div>
</center>


