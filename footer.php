

		
		
		<footer>
			<div class="teamaker-wrapper">
				<h1 class="color-white">94 </h1>
				<div class="joinus-wrapper">
					<h5>teamakers</h5>
					<h4 class="join-us">
						<div class="top-bar"></div>
						<div class="bottom-bar"></div>
						<div class="left-bar"></div>
						<div class="right-bar"></div>

						JOIN US
					</h4>
				</div>
			</div>

			<div class="ss-menu-wrapper">
			<?php /*<div class="ss-des-wrapper">
				<h3>Drink Tea</h3>
				<p>What do our skin and our planet have in common? Fragility. The two both need delicate care before it is too</p>	
			</div>*/?>
				<ul class="menu-list">
					<li><h4>01</h4></li>
					<li><h4>02</h4></li>
					<li><h4>03</h4></li>
					<li><h4>04</h4></li>
				</ul>
			</div>
			<?php /* <h7 class="credit">site by swap  |  Design by chill Wong</h7> */?>
		</footer>
		</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

		<script type="text/javascript" src="js/vendor/jquery.easing.1.3.js"></script>   


		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script type="text/javascript" src="js/inculde/main.js"></script>
		<script type="text/javascript" src="js/inculde/ajax.js"></script>
		
		<script type="text/javascript" src="js/vendor/jquery.touchSwipe.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.horizonScroll.js"></script>   
		<script type="text/javascript" src="js/inculde/slide.js"></script>
		<script src="js/vendor/jquery.bxslider.js"></script>
		<script src="js/vendor/imagesloaded.js"></script>        

		<script src="js/vendor/masonry.pkgd.js"></script>        
		<script>

		$(document).ready(function(){
			
			$(".logo-inside").click(function(){
				$(document).horizon('scrollTo', 0);
			})
			$('#slider1').bxSlider({
				auto:true,
				pause : 7000,
				speed:5000,
				pager:true
		    });


			$('#slider2').bxSlider({
				auto:false,
				controls: false,
				onSliderLoad: function(){
				  // do mind-blowing JS stuff here

				  	$(".step-list").find("li:nth-child(1)").addClass("active")
				  	
				},
				onSlideAfter: function(currentIndex){
				  // do mind-blowing JS stuff here
				  	var currentEm =  currentIndex.index();
				  	$(".step-list").find("li").removeClass("active")
				  	$(".step-list").find("li:nth-child("+(currentEm)+")").addClass("active")
				  	
				}
			});
			var container = document.querySelector('#container');
			var msnry = new Masonry( container, {
				// options
				itemSelector: '.item'
			});
		});
		</script>
  </body>
</html>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51158207-4', 'auto');
  ga('send', 'pageview');

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=210363009031133";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>
