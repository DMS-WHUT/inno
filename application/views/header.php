
<?php
		if(isset($_COOKIE['user']))
		{	$user=$_COOKIE['user'];
			$check=1;
		}else{$check=0;
		}
?>




<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<title><?php echo $page_title ?> -依诺维特</title>

<link href="/inno/css/tabcontent.css" rel="stylesheet" type="text/css" />
<link href="/inno/css/templatemo_style.css"  rel="stylesheet" type="text/css" />
  <link href="/inno/css/account.css" rel="stylesheet" type="text/css">

<link href="/inno/css/orimscfile.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/inno/js/tabcontent.js"></script>

</head>
<body>
<span></span>
<div id="templatemo_container">
 <div id="templatemo_top_panel">
<a href='/inno/index.php/home'>
        <div id="templatemo_sitetitle">
				依诺维特|Innovate
        </div>
</a>

        <div id="templatemo_searchbox">
            <form action="#" method="get">
                <input name="search" type="radio" value="thissite" checked="checked" />
              this site <input type="radio" name="search" value="theweb" />
            the web <br />
                <input type="text" name="q" size="10" id="searchfield" title="searchfield" />
                <input type="submit" name="Search" value="搜索" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div>
		<div id="templatemo_account">
		<p>欢迎你!
<?php
		if($check){
				?>	<a id="bnfa" href="/inno/index.php/home/account"><? echo $user;  echo "</a>";?><a id="abc" href="/inno/index.php/home/log_out">退出</a
><? } else { ?>
						<a id="bnfa" href="/inno/index.php/home/log_in">请登录</a>  <?php }?>
</p>
		</div>
        <div id="templatemo_currentdate">
			<script type="text/javascript">
				<!--
				var m_names = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
				var d_names = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
				
				var currentTime = new Date()
				var day = currentTime.getDay()
				var month = currentTime.getMonth() + 1
				var date = currentTime.getDate()
				var year = currentTime.getFullYear()
				document.write( d_names[day] + ", " + date + " " + m_names[month] + " " + year + ", ")
				var currentTime = new Date()
				var hours = currentTime.getHours()
				var minutes = currentTime.getMinutes()
				if (minutes < 10){
				minutes = "0" + minutes
				}
				document.write(hours + ":" + minutes + " ")
				if(hours > 11){
				document.write("PM")
				} else {
				document.write("AM")
				}
				//-->
			</script>
        </div>
    </div> <!-- end of top panel -->
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="/inno/index.php/home"  class="current">首页</a></li>
		
            <li><a href="/inno/index.php/orimsc">原创音乐</a></li>
            <li><a href="/inno/index.php/digspace">数字空间</a></li>
            <li><a href="/inno/index.php/contest">创意竞赛</a></li>  
            <li><a href="/inno/index.php/digdoctor">数字中医</a></li> 
            <li><a href="http://www.ourinnovate.com">学术交流</a></li>                     
         <!--   <li><a href="/inno/index.php/science">Tech &amp; Science</a></li>
			-->
             <li><a href="/Discuz_3.0">论坛</a></li>            
        </ul> 
	</div>
