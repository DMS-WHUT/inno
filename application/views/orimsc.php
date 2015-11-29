<style rel="stylesheet"  src="/inno/css/orimscfile.css" ></style>
<style type="text/css">
.account_mymsc {
	display:block;
	float:right;
	border:1px solid #ccc; 
	margin-top:10px; 
	margin-bottom:10px;
	width:300px;
	height:500px;
}
.account_mymsc ul li {
	margin:0px;


}
.account_mymsc h2{
	float:center;
	padding: 5px 0;
	font-size: 16px;
	font-weight: bold;
	font-color: blue;

}
.button_msc {
	float:left;
	width:600px;
	height:500px;
	border:1px solid #ccc;
	margin-top:10px;	
	margin-bottom:10px;
	padding:0px;
}	
.button_msc h1{
	padding:10px;
}
</style>

	<div class="button_msc">

		<br>

	<br>
	<br>
	<br>

		 <h1>原创音乐中心</h1>                        
		<br>

		 <a href="/inno/index.php/orimsc/piano" class="button button-khaki"><span>钢琴演奏</span></a>            
		 <a href="/inno/guitar/guitar.php" class="button button-blue"><span>吉他演奏</span></a>            
		 <a href="/inno/index.php/orimsc/drum" class="button button-brown"><span>架子鼓</span></a>
		 <br>            
		<br>
		 <a href="#" class="button button-red"><span>Button</span></a>            
		 <a href="#" class="button button-purple"><span>Button</span></a>
		 <a href="#" class="button button-green"><span>Button</span></a>
		 <br>
		<br>
		 <a href="#" class="button button-black"><span>Button</span></a>
		 <a href="#" class="button button-orange"><span>无人机驾驶</span></a>
		 <a href="/inno/index.php/digspace" class="button button-silver"><span>航拍全景</span></a>
		 <br><br>
	</div>
<div class="account_mymsc">
 <h2>原创音乐广场</h2>
				<!--	<div class="newsbox"><img src="/inno/voice/templatemo_image_12.jpg" alt="image" /><span class="newstitle">News Title 02</span><br />
                        <p>
                        Morbi tristique, risus quis congue pulvinar, nisl nisi commodo diam, a porta nisi ligula ac massa. Vestibulum blandit <a href="#">阅读全文</a>                        </p>
					</div>-->
                        
                    <ul>
						<? foreach ($voice as $row):?>
						<li><a href="/inno/voice/<?=$row->name?>"><?=$row->name?></a>-<?=$row->time?></li>
						<? endforeach;?>
                        <li><a href="/inno/voice/whistle.mp3">whistle</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                        <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
				
            </div>


	


