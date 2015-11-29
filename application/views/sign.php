  <style type="text/css">
		.contact *:focus{outline :none;}
		.contact{
	font:14px/28px "微软雅黑";
			width: 700px;
			height: auto;
			margin: 40px auto;
			padding: 10px;
		}
		.contact ul {
			width: 650px;
			margin: 0 auto;
		}
		.contact ul li{
			border-bottom: 1px solid #dfdfdf;
			list-style: none;
			padding: 12px;
		}
		.contact ul li label {
			width: 120px;
			display: inline-block;
			float: left;
		}
		.contact ul li input[type=text],.contact ul li input[type=password]{
			width: 220px;
			height: 25px;
			border :1px solid #aaa;
			padding: 3px 8px;
			border-radius: 5px;
		}
		.contact ul li input:focus{
			border-color: #c00;
			
		}
		.contact ul li input[type=text]{
			transition: padding .25s;
			-o-transition: padding  .25s;
			-moz-transition: padding  .25s;
			-webkit-transition: padding  .25s;
		}
		.contact ul li input[type=password]{
			transition: padding  .25s;
			-o-transition: padding  .25s;
			-moz-transition: padding  .25s;
			-webkit-transition: padding  .25s;
		}
		.contact ul li input:focus{
			padding-right: 70px;
		}
		.btn{
			position: relative;
			left: 300px;
		}
		.tips{
			color: rgba(0, 0, 0, 0.5);
			padding-left: 10px;
		}
		.tips_true,.tips_false{
			padding-left: 10px;
		}
		.tips_true{
			color: green;
		}
		.tips_false{
			color: red;
		}
  </style>
  <script type="text/javascript">
	    function checkna(){
			na=form1.yourname.value;
		  	if( na.length <6 || na.length >20)  
	  		{  	
	  			divname.innerHTML='<font class="tips_false">长度是6~20个字符</font>';
	  		     
	  		}else{  
	  		    divname.innerHTML='<font class="tips_true">输入正确</font>';
	  		   
	  		}  
	  	
	  }
	  //验证密码 
		function checkpsd1(){    
			psd1=form1.yourpass.value;  
			var flagZM=false ;
			var flagSZ=false ; 
			var flagQT=false ;
			if(psd1.length<6 || psd1.length>40){   
				divpassword1.innerHTML='<font class="tips_false">长度错误</font>';
			}else
				{   
				  for(i=0;i < psd1.length;i++)   
					{    
						if((psd1.charAt(i) >= 'A' && psd1.charAt(i)<='Z') || (psd1.charAt(i)>='a' && psd1.charAt(i)<='z')) 
						{   
							flagZM=true;
						}
						else if(psd1.charAt(i)>='0' && psd1.charAt(i)<='9')    
						{ 
							flagSZ=true;
						}else    
						{ 
							flagQT=true;
						}   
					}   
					if(!flagZM||!flagSZ||flagQT){
					divpassword1.innerHTML='<font class="tips_false">密码必须是字母数字的组合</font>'; 
					 
					}else{
						
					divpassword1.innerHTML='<font class="tips_true">输入正确</font>';
					 
					}  
				 
				}	
		}
		//验证确认密码 
		function checkpsd2(){ 
				if(form1.yourpass.value!=form1.yourpass2.value) { 
				     divpassword2.innerHTML='<font class="tips_false">您两次输入的密码不一样</font>';
				} else { 
				     divpassword2.innerHTML='<font class="tips_true">输入正确</font>';
				}
		}
		//验证邮箱
		
		function checkmail(){
					apos=form1.youremail.value.indexOf("@");
					dotpos=form1.youremail.value.lastIndexOf(".");
					if (apos<1||dotpos-apos<2) 
					  {
					  	divmail.innerHTML='<font class="tips_false">输入错误</font>' ;
					  }
					else {
						divmail.innerHTML='<font class="tips_true">输入正确</font>' ;
					}
		}
  </script>
</head>
<body>
	<div class="contact" >
<center><h1>注册</h1></center>
		<form name="form1" method="post" action="/inno/index.php/home/sign" enctype="utf-8">
			<ul>
				<li>
					<label>用户名：</label>
					<input type="text" maxlength="20" name="yourname" placeholder="请输入用户名"  onblur="checkna()" required/><span class="tips" id="divname">长度6~20由字母或者数字组成</span>
				</li>
				<li>
					<label>密码：</label>
					<input type="password" maxlength="40" name="yourpass" placeholder="请输入你的密码" onBlur="checkpsd1()" required/><span class="tips" id="divpassword1">密码必须由字母和数字组成</span>
				</li>
				<li>
					<label>确认密码：</label>
					<input type="password" maxlength="40" name="yourpass2" placeholder="请再次输入你的密码" onBlur="checkpsd2()" required/><span class="tips" id="divpassword2">两次密码需要相同</span>
				</li>
				<li>
					<label>电子邮箱：</label>
					<input type="text" maxlength="40" name="youremail" placeholder="请输入你的邮箱" onBlur="checkmail()" required/><span class="tips" id="divmail"></span>
				</li>
			</ul>
			<b class="btn"><input type="submit" value="提交"/>
			<input type="reset" value="重置"/></b>
		</form>
	</div>

