	$(document).ready(function(){
	$("#back-to-top").hide();
	$(function () {
		$(window).scroll(function(){
		if ($(window).scrollTop()>100){
		$("#back-to-top").fadeIn(1500);
		}
		else
		{
		$("#back-to-top").fadeOut(1500);
		}
		});
		//back to top
		$("#back-to-top").click(function(){
		$('body,html').animate({scrollTop:0},1000);
		return false;
		});
		});
		});
