<?php include 'header.php';?>


<div class="horizon-prev"><h1><i class="ion-ios-arrow-thin-left"></i></h1></div>
<div class="horizon-next"><h1 class="normal"><i class="ion-ios-arrow-thin-right"></i></h1>
<span class="start">
	<h3 class="">
		<span style="float: left">teamade</span>
		<i class="right-start"></i></h3>
</span>
</div>
<section data-role="section" id="section-section1" class="landing">
<ul class="bxslider-index" id="slider1">
  <li style="background-image: url('img/bg5.jpg');"></li>
  <li style="background-image: url('img/bg.jpg');"></li>
  <li style="background-image: url('img/bg2.jpg');"></li>
  <li style="background-image: url('img/bg3.jpg');"></li>
  <li style="background-image: url('img/bg4.jpg');"></li>

</ul>
</section>
<section data-role="section" id="section-section2" class="drink">

	<div class="center">
		<div class=" v-align">
			<div class="title">
				<div class="animate-icon"></div>
				<h5>喝一杯茶</h5>
				<h4>Drink a cup of tea</h4>
			</div>
		</div>	
	</div>	
	<div class="content-wrapper">
	<?php $json = file_get_contents('result.json');
		  $obj = json_decode($json);
		  $results = $obj->flowers;
	?>	
		
		<ul class="tea-list">
			
			<?php foreach ($results as $result): ?>
				<li>
					<div class="box-wrapper" style="background-image: url(img/ss1/icon<?php echo $result->flowerpPosition ?>.svg)"></div>
					<h5><?php echo $result->flowerChinese; ?></h5>
					<h5><?php echo $result->flowerName; ?></h5>

				</li>
			<?php endforeach; ?>

		</ul>
		
	</div>
	<div class="overlay-slideup" data-src="">
		<div class="background"></div>
		<div class="max-overlay">
			<div class="max-overlay-background"></div>
			<div class="max-content">
				<h3 class="tc">消除疲勞</h3>
				<h4 class="en">Relaxing</h4>
				<h3 class="back-main-btn" style="opacity: .6;margin-top: 10px"> <i class="ion-close-circled"></i></h3>
			</div>
		</div>
		<div class="pattern-top"></div>

		<div class="icon-wrapper">
			<div class="icon"></div>
		</div>
		<div class="pattern-bottom">
			<div class="bottom-background"></div>
			<div class="bottom-conten-wrapper">
			<div class="left-block">
				<h3 class="flower-name"></h3>
				<h4 class="flower-name-en"></h4>
				<div class="chinese-content"><p></p></div>
				<div class="eng-content"><p></p></div>
			</div>
			<div class="right-block">
				<ul class="supporting-tea-list">
					<li>
						<div class="support-wrapper">
							<div class="top-block"></div>
							<div class="bottom-block">
								<h6 class="tc">玫瑰</h6>
								<h6 class="en">ROSE</h6>
							</div>
						</div>
					</li>
					<li>
						<div class="support-wrapper">
							<div class="top-block"></div>
							<div class="bottom-block">
								<h6 class="tc">玫瑰</h6>
								<h6 class="en">ROSE</h6>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<a class="close-about-btn"><i class="ion-ios-close-outline"></i><i class="ion-ios-close"></i></a>
			</div>
			
		</div>
	</div>
</section>
<section data-role="section" id="section-section3" class="dryer">
	<div class="center">
		<div class=" v-align">
			<div class="title">
				<div class="animate-icon"></div>
				<h5>收集茶渣</h5>
				<h4>Collect Leftover<br>Tea-leaves</h4>
			</div>
		</div>
	</div>
	
	<div class="content-wrapper">
		<div class="left-block">
			
			<div class="step-list-wrapper">
			<ul class="step-list">
				<li class="step1"></li>
				<li class="step2"></li>
				<li class="step3"></li>
				<li class="step4"></li>

			</ul>
			</div>
			
		</div>
		<div class="right-block">
		<ul class="bxslider" id="slider2">
			<li>
			<div class="body-text">
				<h3>風乾茶渣</h3>
				<p><span> 在日常生活中，剩茶渣有不同貢獻。 我們將會回收並再重用這些天然材料，打造全面慢生活的方式！首先，喝完一杯茶後，將剩茶渣倒入風乾盒中，大約等一至兩天待乾透。 </span>  Leftover tea-leaves have contribution in our daily life. We recycle and reuse the natural material, let create all-round slow living style !
</p>
			</div>
			</li>
			<li>
			<div class="body-text">
				<h3>回收並再重用</h3>
				<p><span> 我們會回收你一杯剩茶渣製成生活小幫手，並將這些小禮物送你好朋友，從此增加喝茶與人，環境之間關系，同時傳播“一杯好生活”的理念!</span>    These gifts which made by your leftover tea-leaves. We will forward  for friends and spread out the concept of “a cup of good life”!</p>
			</div>
			</li>
			<li>
			<div class="body-text">
				<h3>待茶渣乾透後，倒入小袋中</h3>
				<p><span> 請把你茶渣倒入右邊的袋中。</span> Please put your tea leaves into the right side bag. </p>
			</div>
			</li>
			<li>
			<div class="body-text">
				<h3>選擇茶渣再造禮物</h3>
				<p><span>填上有關資料後，貼上郵票和寄去我們工作室。 約一個月後，我們會轉寄一份用茶渣做的小禮物給你朋友。</span>Fill in some information, stick a stamp and send to our studio. We will forward a small gift which made by the tea leaves to your friend.</p>
			</div>
			</li>
		</ul>			
			
		</div>

	</div>


</section>
<section data-role="section" id="section-section4" class="mader">
	<div class="ss4-wrapper">
		<div class="ss4-content">
			<ul>
				
				<li>
					<div style="text-align: center"><img src="img/ss3/gift1.svg" style="margin: 0 auto"></div>
					<h4>施肥香草</h4>
					<h5>Herbs planting</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift2.svg" style="margin: 0 auto"></div>
					<h4>茶肥皂</h4>
					<h5>Tea soap</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift3.svg" style="margin: 0 auto"></div>
					<h4>再造紙</h4>
					<h5>Tea recycling paper</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift4.svg" style="margin: 0 auto"></div>
					<h4>護髪水</h4>
					<h5>Hair conditioner</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift5.svg" style="margin: 0 auto"></div>
					<h4>驅蚊蠟燭</h4>
					<h5>Anti mosquito candle</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift6.svg" style="margin: 0 auto"></div>
					<h4>茶枕頭</h4>
					<h5>Tea pillow</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift7.svg" style="margin: 0 auto"></div>
					<h4>茶香包</h4>
					<h5>Tea sachet</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift8.svg" style="margin: 0 auto"></div>
					<h4>茶眼膜</h4>
					<h5>Tea mask</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift9.svg" style="margin: 0 auto"></div>
					<h4>除塵茶布</h4>
					<h5>Dust cloths</h5>
				</li>
				<li>
					<div style="text-align: center"><img src="img/ss3/gift10.svg" style="margin: 0 auto"></div>
					<h4>消炎傷口水</h4>
					<h5>Antiphlogistic</h5>
				</li>

			</ul>
			<a class="close-about-btn"><i class="ion-ios-close-outline"></i><i class="ion-ios-close"></i></a>
		</div>
	</div>
	<div class="center">
		<div class=" v-align">
			<div class="title">
				<div class="animate-icon"></div>
				<h5>循環再做</h5>
				<h4>Reuse leftover<br>Tea-Leaves</h4>
			</div>
		</div>	
	</div>
	<div class="content-wrapper">
		<div class="top-block"></div>
		<div class="bottom-block"></div>
		<div class="type-button"><input type="submit" id="ss4-btn" class="btn btn-info" value="茶渣再造"></div>
		<div class="reclye-wrapper">
			<div class="reclye-icon"></div>
			<ul class="left-text">
				<h4>茶渣</h4>
			</ul>
			<ul class="right-text">
				<li><h4>茶肥皂</h4></li>
				<li><h4>施肥香草</h4></li>
				<li><h4>驅蚊蠟燭</h4></li>
				<li><h4>護髪水</h4></li>
				<li><h4>再造紙</h4></li>
				<li><h4>茶香包</h4></li>

			</ul>
		</div>
		<div class="product-listing">
			<ul class="left">
				<li class="">
					<div class="top-icon"></div>
					
				</li>
			
			</ul>
		</div>
	</div>	
</section>
<section data-role="section" id="section-section5" class="sharing">
	<div class="center">
		<div class=" v-align">
			<div class="title">
				<div class="animate-icon"></div>
				<h5>分享理念</h5>
				<h4>Forward to<br>Friends</h4>
			</div>
		</div>	
	</div>
	<div class="content-wrapper">
		<ul class="gift-list " id="container">
			<?php for ($x = 1; $x <= 6; $x++) { ?>
			<?php
			$a=array("1","2","3","4","5","6");
			
			?>
				<li class="item">
					<div class="top-block"><img src="img/ss4/s4/ss<?php echo $x ;?>.jpg"></div>
					<div class="bottom-block"><img src="img/ss4/bottom-product.png"></div>

				</li>
			<? } ?>
		</ul>
	
	</div>
	
</section>



<?php include 'footer.php';?>
