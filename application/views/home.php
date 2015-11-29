
<div id="templatemo_content">

    	<div id="templatemo_main_leftcol">
        	<div class="templatemo_leftcol_subcol">
            
            	<div id="templatemo_topnews">
					<video src="/inno/flash/dsns.mp4" controls="controls" preload="preload" height="220" width="285">
                    您的浏览器不支持 video 标签。
                     </video>
                    <h1>Free CSS Template from cssMoban.com</h1>
                    <p align="justify">
                    This website template is provided by <a href="http://www.cssmoban.com/" target="_parent">科学世界</a> for FREE of charge. Feel free to use this web layout for your websites. Photos are from <a href="http://www.publicdomainpictures.net/" target="_blank">PublicDomainPictures</a>.</p>
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.  Duis pulvinar scelerisque ante.  <a href="#">full story</a></p>
                  <span class="updatedtime">updated 12 minutes ago</span>
			  </div> 
                
                <div id="templatemo_gallery_section">
                	<h2>最新图片</h2>
              <div id="image_section">
                        <a href="#"><img src="/inno/resource/templatemo_image_02.jpg" alt="image" /></a>
                        <a href="#"><img src="/inno/resource/templatemo_image_03.jpg" alt="image" /></a>
                        <a href="#"><img src="/inno/resource/templatemo_image_04.jpg" alt="image" /></a>
                        <a href="#"><img src="/inno/resource/templatemo_image_05.jpg" alt="image" /></a>
                        <a href="#"><img src="/inno/resource/templatemo_image_06.jpg" alt="image" /></a>
                        <a href="#"><img src="/inno/resource/templatemo_image_07.jpg" alt="image" /></a>
				  </div>
                    <div class="view_all"><a href="#">查看更多图片</a></div>
                </div>
            </div> <!-- end of left column -->
        	
            <div class="templatemo_leftcol_subcol">
				<div class="regular_section">
                    <h2>最新论文</h2>
					<div class="newsbox"><img src="/inno/resource/templatemo_image_08.jpg" alt="image" /><span class="newstitle">News Title 01</span><br />
                        <p>
                        Lorem ipsum dolor sit amet,  adipiscing elit. Nunc quis sem nec tincidunt. Duis vitae velit sed dui malesuada. <a href="#">阅读全文</a>                        </p>
				  </div>
                        
                    <ul>
                    	<? foreach ($get_artic as $row):?>
						<li><?=anchor("show/article/".$row->id,$row->title)?></a></li>
                      <? endforeach ;?>
                        <li><a href="#">Maecenas adipiscing elementum ipsum.</a></li>
						<li><a href="#">Nunc blandit orci sit amet risus.</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                        <li><a href="#">Quisque in diam a justo condimentum</a></li>
                    </ul>
                    <a href="#">更多相关资讯</a>
                </div>
                
                <div class="regular_section">
                    <h2>创意竞赛</h2>
					<div class="newsbox"><img src="/inno/resource/templatemo_image_12.jpg" alt="image" /><span class="newstitle">News Title 02</span><br />
                        <p>
                        Morbi tristique, risus quis congue pulvinar, nisl nisi commodo diam, a porta nisi ligula ac massa. Vestibulum blandit <a href="#">阅读全文</a>                        </p>
					</div>
                        
                    <ul>
						<? foreach ($get_artic as $row):?>
						<li><?=anchor("show/contest/".$row->id,$row->title)?></a></li>
						<? endforeach;?>
                        <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                        <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                        <li><a href="#">Cum sociis natoque penatibus et magnis dis</a></li>
                    </ul>
                    <a href="#">更多相关资讯</a>
                </div>
                
              <!--  <div class="regular_section">
                        <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
				</div>
-->
            </div>
            
            <div class="tab_section">
                <!-- start -->
                <ul id="countrytabs" class="shadetabs">
                    <li><a href="#" rel="health" class="selected">运动健康</a></li>
                    <li><a href="#" rel="entertainment">科技一览</a></li>
                    <li><a href="#" rel="politics">时事政治</a></li>
                    <li><a href="#" rel="business">学术前沿</a></li>
                    <li><a href="#" rel="tech_science">原创音乐</a></li>
				</ul>
				
                <div class="tabcontent_section">
                    <div id="health" class="tabcontent">
                        <div class="topnews">
                            <img src="/inno/resource/templatemo_image_08.jpg" alt="image" />
                            <h4>中医推拿</h4>
                            <p>
                            Nunc quis sem nec tincidunt. Lorem ipsum dolor sit amet, adipiscing elit. Duis vitae velit sed dui malesuada dignissim. <a href="#">阅读全文</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <ul>
								<? foreach($get_artic as $row):?>
								<li><?=anchor("show/contest/".$row->id,$row->title)?></a></li>
								<? endforeach;?>
                            	<li><a href="#">Nunc blandit orci sit amet risus</a></li>
                                <li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Maecenas adipiscing elementum ipsum.</a></li>
                                <li><a href="#">Quisque in diam a justo condimentum.</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                            </ul>
                            <a href="#">更多相关资讯</a>
                        </div>
			    	</div>
    
                    <div id="entertainment" class="tabcontent">
	                    <div class="topnews">
                            <img src="/inno/resource/templatemo_image_12.jpg" alt="image" />
                            <h4>360全景</h4>
                            <p>
                            Duis vitae velit sed dui malesuada dignissim. Lorem ipsum dolor sit amet, adipiscing elit. Nunc quis sem nec tincidunt. <a href="#">阅读全文</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <ul>
								<? foreach($get_artic as $row):?>
								<li><?=anchor("show/content/".$row->id,$row->title)?></a></li>
								<? endforeach;?>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                                <li><a href="#">Quisque in diam a justo condimentum</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                
                            </ul>
                            <a href="#">更多相关资讯</a>
                        </div>
                    </div>
                    
                    <div id="politics" class="tabcontent">
	                    <div class="topnews">
                            <img src="/inno/resource/templatemo_image_08.jpg" alt="image" />
                            <h4>Politics News</h4>
                            <p>
                            Fusce sollicitudin nisl a lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <a href="#">阅读全文</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <ul>
								<? foreach($get_artic as $row):?>
								<li><?=anchor("show/content/".$row->id,$row->title)?></a></li>
								<? endforeach;?>
                           		<li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                           
                                <li><a href="#">Quisque in diam a justo condimentum</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                            </ul>
                            <a href="#">更多相关资讯</a>
                        </div>
                    </div>
                    
                    <div id="business" class="tabcontent">
    	                <div class="topnews">
                            <img src="/inno/resource/templatemo_image_12.jpg" alt="image" />
                            <h4>Business News</h4>
                            <p>
                           Pellentesque odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed leo. <a href="#">阅读全文</a>
                            </p>
                        </div>
                        <div class="newslist">
							<ul>
								<? foreach($get_artic as $row):?>
								<li><?=anchor("show/content/".$row->id,$row->title)?></a></li>
								<? endforeach;?>
								<li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                                <li><a href="#">Nunc blandit orci sit amet risus</a></li>
                            </ul>
                            <a href="#">更多相关资讯</a>
                        </div>
                    </div>
                    <div id="tech_science" class="tabcontent">
    	                <div class="topnews">
                            <img src="/inno/resource/templatemo_image_08.jpg" alt="image" />
                            <h4>Tech &amp; Science News</h4>
                            <p>
                            Fusce sollicitudin nisl a lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <a href="#">阅读全文</a>
                            </p>
                        </div>
                        <div class="newslist">
                            <ul>
								<? foreach($get_artic as $row):?>
								<li><?=anchor("show/content".$row->id,$row->title)?></a></li>
								<? endforeach;?>

                               <li><a href="#">Lorem ipsum dolor sit amet</a></li>

                                <li><a href="#">Duis mollis aliquet ligula</a></li>
                                <li><a href="#">Quisque in diam a justo condimentum</a></li>
                                <li><a href="#">Proin vel libero id erat venenatis accumsan</a></li>
                            </ul>
                            <a href="#">更多相关资讯</a>
                        </div>
                    </div>
				</div>

			<script type="text/javascript">
            
            var countries=new ddtabcontent("countrytabs")
            countries.setpersist(true)
            countries.setselectedClassTarget("link") //"link" or "linkparent"
            countries.init()
            
            </script>
            <!-- end -->

            </div>
    	</div> <!-- end of left column -->
        
        <div id="templatemo_main_rightcol">
        	<div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_video_section">
                    <h2>最新视频</h2>
					<? foreach($get_artic as $row):?>
	
                    <div class="video_box">
                        <img src="/inno/resource/templatemo_image_09.jpg" alt="image" />
<?=anchor("show/video/".$row->id,"<span>Play:</span>".$row->title)?></a>
                    </div>
<? endforeach;?>
           <!--         <div class="video_box">
                        <img src="/inno/resource/templatemo_image_10.jpg" alt="image" />
                        <a href="#"><span>Play:</span> Nunc quis sem nec tincidunt</a>                    
                    </div> 
                    <div class="video_box">
                        <img src="/inno/resource/templatemo_image_11.jpg" alt="image" />
                        <a href="#"><span>Play:</span> Duis vitae velit sed dui</a>                    
                    </div>
-->
                    <div class="view_all"><a href="#">更多相关资讯</a>
                    </div>
		      </div>
          </div>
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_newsletter_section">
                    <h2>期刊订阅</h2>
                    <form method="get" action="#">
                        <div class="form_row">	
                          <label>选择期刊</label>
                             <select>
                            <option>数字制造科学</option>
                            <option>武汉理工大学学报</option>
                            <option>长江日报</option>                        
                             </select>
                        </div>
                        <div class="form_row"><label>邮箱:</label><input class="inputfield" name="email_address" type="text" id="email_addremss"/></div>
                       <input class="button" type="submit" name="Submit" value="订阅" />
                    </form>
		      </div>
            </div> 
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_blog_section">
                    <h2>官方博客</h2>
                    
                    <div class="blog_box">
                        <h3><a href="content">Quisque rhoncus nulla quis sem</a></h3>
                        Posted by <a href="#"><span>Dolor Sit Amet</span></a> in <a href="#"><span>Duis vitae</span></a><br />
                        Aliquam tristique lacus in sapien. Suspendisse potenti. Ut sed pede.<br />
                        <div class="datetime">15:00 January 25th, 2020</div>
                    </div>
                    
                    <div class="blog_box">
                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                        Posted by <a href="#"><span>Dolor Sit Amet</span></a> in <a href="#"><span>Duis vitae</span></a><br />
                        Integer imperdiet odio ac eros. Ut id massa. Nullam nunc. Vivamus sagittis varius lorem.<br />
                        <div class="datetime">13:00 January 21st, 2020</div>
                    </div>   
                                       
                    <div class="more_button"><a href="#">更多相关资讯</a></div>
                    
				</div>                                                              
            </div> 
            
            <div class="templatemo_rcol_sectionwithborder">
            	<div id="templatemo_poll_section">
                    <h2>我要投票</h2>
                    <img src="/inno/resource/templatemo_image_08.jpg" alt="image" />
                    <p>
                    Lorem ipsum nunc quis sem dolor sit amet, consectetuer adipiscing elit. Nunc quis sem nec tellus blandit tincidunt.</p>
                <input type="radio" name="poll" value="yes" checked="checked" />Yes <br />
                    <input type="radio" name="poll" value="no" />No <br /><br />
                    <input class="button" type="submit" name="Submit" value="提交" /> <a href="#">查看投票结果</a>
				</div>
            </div>
        </div>
</div>
