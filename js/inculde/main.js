/*** timer  ***/
 /*function timedMsg()
  {
    var t=setInterval("change_time();",1000);
  }
 function change_time()
 {
   var d = new Date();
   var curr_hour = d.getHours();
   var curr_min = d.getMinutes();
   var curr_sec = d.getSeconds();

   if(curr_min<10){
	   var curr_min = "0"+  curr_min                                                                                                                                                                                                                                                                                                                   
   }
   if(curr_sec<10){
	   var curr_sec = "0"+  curr_sec                                                                                                                                                                                                                                                                                                                   
   }
   if(curr_hour > 12)
     curr_hour = curr_hour - 12;
   document.getElementById('Hour').innerHTML =curr_hour+':';
    document.getElementById('Minut').innerHTML=curr_min+':';
    document.getElementById('Second').innerHTML=curr_sec;
 }
timedMsg();   

/**** teamaker ****/

var tid = setInterval(mycode, 14000);
var x= 0;
function mycode() {
	x++

	$(".right-text").find("li").hide();

	$(".right-text").find("li").eq(x).show();
	$("#section-section4").find(".top-block").removeClass("bg"+(x-1));
	$("#section-section4").find(".top-block").addClass("bg"+x);
	$("#section-section4").find(".bottom-block").removeClass("bg"+(x-1));
	$("#section-section4").find(".bottom-block").addClass("bg"+x);

	if(x > 5 ){
		 x = 0;
		 $("#section-section4").find(".top-block").removeClass("bg6");
		 $("#section-section4").find(".bottom-block").removeClass("bg6");
	}
}
function abortTimer() { // to be called when you want to stop the timer
  clearInterval(tid);
}

/**** ajax ****/

$("#section-section5 .gift-list").find("li").each(function(){
	var childHeight = $(this).height();
	var childWidth = $(this).width();
	var childIndex= $(this).index();


})




/**** about ****/

$("#about").click(function(){
	$(".about-wrapper").fadeIn("slow")
	$(".donate-wrapper").fadeOut("slow")
	$(".join-us-wrapper").fadeOut("slow")
	$(".overlay-slideup").animate({top: "100%"},1000,"easeOutQuart");

})
$("#donate").click(function(){
	$(".donate-wrapper").fadeIn("slow")
	$(".about-wrapper").fadeOut("slow")
	$(".join-us-wrapper").fadeOut("slow")
	$(".overlay-slideup").animate({top: "100%"},1000,"easeOutQuart");

})
$(".join-us").click(function(){
	$(".join-us-wrapper").fadeIn("slow")
	$(".about-wrapper").fadeOut("slow")
	$(".donate-wrapper").fadeOut("slow")
	$(".overlay-slideup").animate({top: "100%"},1000,"easeOutQuart");

})

$("#ss4-btn").click(function(){
	$(".about-wrapper").fadeOut("slow")
	$(".donate-wrapper").fadeOut("slow")
	$(".join-us-wrapper").fadeOut("slow")
	$(".overlay-slideup").animate({top: "100%"},1000,"easeOutQuart");
	$(".ss4-wrapper").fadeIn("slow")

})


$(".close-about-btn").click(function(){
	$(".about-wrapper").fadeOut("slow")
	$(".donate-wrapper").fadeOut("slow")
	$(".join-us-wrapper").fadeOut("slow")
	$(".overlay-slideup").animate({top: "100%"},1000,"easeOutQuart");
	$(".ss4-wrapper").fadeOut("slow")

})

$("#donate-submit").click(function(){
	$(".donate-wrapper").find(".content-wrapper").html()
	$(".donate-wrapper").fadeOut("slow")
	$(".teamaker-wrapper").find("h1").html("95")
})

/**** landing button ****/
setTimeout(function() {
     $("#preloader").fadeOut(3000,"linear")

}, 9000);
$("#preloader").addClass("active");

/**** circle ****/
ball()
$(window).resize(function(){
	ball()
})
function ball() {
	var windowHeight = $(document).height()
$(".max-content").css("marginTop",(windowHeight)/2-80)
}



