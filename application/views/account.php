
<!--个人中心-->
<center>
    <script>
        function show_edit(){
            var edit_pic=document.getElementById("edit_pic");
            edit_pic.style.visibility="visible";
        }
        function hide_edit(){
            var edit_pic=document.getElementById("edit_pic");
            edit_pic.style.visibility="hidden";
        }
        function edit_info(){

        }

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
    <div class="account">
        <h1>个人中心</h1>
		<? foreach ($profile as $row ):?>
<?php if($row->sex=="1")
			{
					$gender="男";
			}else{
					$gender="女";
			}
?>
        <div class="account_info">
            <img src="/inno/images/touxiang.jpg">
            <div class="account_basic_info" onmouseover="show_edit()" onmouseout="hide_edit()">
			<span id="user_name"><? echo $realname; ?></span>
                <img src="/inno/images/edit.png" id="edit_pic" onclick="edit_info()">
                <p>
				<span><? $row->city?></span>
                    <span>&nbsp;|&nbsp;</span>
					<span><? $row->age ?></span>
                    <span>&nbsp;|&nbsp;</span>
					<span><? echo $gender;?></span>
                    <span>&nbsp;|&nbsp;</span>
					<span><? $row->birthday ?></span>
                    <span>&nbsp;|&nbsp;</span>
					<span><? $row->phone ?></span>
                    <span>&nbsp;|&nbsp;</span>
					<span><? $row->email ?> </span>
                </p>
                <hr/>
                <div class="account_label">
                    <span>个性签名：</span>
					<span  id="personal_label"><? $row->signature ?></span>

                </div>


            </div>

        </div>
<? endforeach;?>
        <div class="account_attr">
            <ul id="section_title">
                <li class="user_section" onclick="change_section('dongtai',this)" style="background-color: white">我的动态</li>
                <li class="user_section" onclick="change_section('yinyue',this)">我的音乐</li>
                <li class="user_section" onclick="change_section('guanxi',this)">我的关系</li>
                <li class="user_section" onclick="change_section('shoucang',this)">我的收藏</s></li>
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
      
</div>
</center>
