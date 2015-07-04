	$(document).ready(function (){
		/*** main tea list ***/
		$(".tea-list").find("li").each(function(){
			
			var teaIndex= $(this).index();
			$(this).click(function(){
				$(".overlay-slideup").stop().animate({top: 0},1800,"easeOutQuart");
				$(".ss-des-wrapper").fadeOut()
				$.getJSON( "result.json", function( data ) {

					$(".overlay-slideup").attr("id",(data.flowers[teaIndex].flowerpPosition)) 
					$(".overlay-slideup").find(".background").css("background-color",(data.flowers[teaIndex].mainColor))
					$(".flower-name").html((data.flowers[teaIndex].flowerChinese))
					$(".flower-name-en").html((data.flowers[teaIndex].flowerName))
					$(".chinese-content").find("p").html((data.flowers[teaIndex].contentChinese))
					$(".eng-content").find("p").html((data.flowers[teaIndex].contentEnglish))
					$(".pattern-top").css("background-image", "url(../img/ss1/pat"+(teaIndex+1)+".svg)");  
					$(".supporting-tea-list").find("li").each(function(){
						var thisIndexli = $(this).index();
						var thisIndexlip = data.flowers[teaIndex].maxID[thisIndexli];
						$(this).find(".top-block").css("background-image", "url(../img/ss1/icon"+(data.flowers[teaIndex].maxID[thisIndexli])+".svg)");
						$(this).find(".bottom-block").find("h6.tc").html((data.flowers[thisIndexlip-1].flowerChinese))
						$(this).find(".bottom-block").find("h6.en").html((data.flowers[thisIndexlip-1].flowerName))
						$(this).click(function(){
							$(".bottom-background").css("background-image", "url(../img/ss1/pat"+(data.flowers[teaIndex].maxID[thisIndexli])+".svg)");
							$(".max-content").find("h3.tc").html(data.flowers[teaIndex].maxtitle[thisIndexli])
							$(".max-content").find("h4.en").html(data.flowers[teaIndex].maxtitleen[thisIndexli])
						});
						
						
					})
				});   
			})
		})
		/*** support tea list ***/
		$(".supporting-tea-list").find("li").each(function(){
			$(this).click(  function() {
				var thisID = $(this).parent().parent().parent().parent().parent().attr("id");
				$(".max-overlay").attr("data-src",thisID);
				$(".icon-wrapper").fadeOut()
				$(".overlay-slideup").find(".pattern-top").stop().animate({height:"50%"},1600,"easeOutQuart");
				$(".overlay-slideup").find(".pattern-bottom").stop().animate({height:"50%",top:"50%"},1000,"easeOutQuart");
				
				$(".pattern-bottom").find(".bottom-conten-wrapper").fadeOut("slow", function() {
					$(".overlay-slideup").find(".pattern-top").addClass("leftright");
					$(".pattern-bottom").find(".bottom-background").delay(400).fadeIn("slow")
					$(".max-overlay").delay(1600).fadeIn("slow");
					$.getJSON( "result.json", function( data ) {
						$(".max-overlay-background").css("background","#FFF")
					});   
				});
			
			})
		})
		/*** support tea list ***/
		
		$(".close-about-btn").click(function(){
				$(".overlay-slideup").stop().animate({top: "100%"},1800,"easeOutQuart");
		})
		

		/*** support tea list back ***/
		$(".back-main-btn").click(function(){
			var parentId = ($(this).parent().parent().attr("data-src"))-1;
					$(".max-overlay").fadeOut("slow");

					$(".pattern-bottom").find(".bottom-background").delay(800).fadeOut("slow",function(){
					$(".overlay-slideup").find(".pattern-top").delay(400).stop().animate({height:"45%"},1000,"easeInQuart");
					$(".overlay-slideup").find(".pattern-bottom").delay(400).stop().animate({height:"40%",top:"48%"},1000,"easeInQuart");		
					$(".pattern-bottom").find(".bottom-conten-wrapper").delay(1200).fadeIn("slow", function() {
						$(".icon-wrapper").delay(400).fadeIn("slow")
						$(".overlay-slideup").find(".pattern-top").removeClass("leftright");

					})
									
				
					})


				$.getJSON( "result.json", function( data ) {

				
				});   
		})


		

	})