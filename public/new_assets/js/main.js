	
	// img lazyload
	// $("img.lazy").lazyload({
 //        effect : "fadeIn"
 //    });

	//ad fixed
	// $(document).ready(function() {
	// 	oInfo = $(".adv-right")
	// 	oTop = oInfo.offset().top;
	// 	sTop = 0 ;
	// 	$(window).scroll(function(){
	// 		sTop = $(this).scrollTop();
	// 		if(sTop>=oTop && sTop<=500){
	// 			oInfo.stop().css({"position":"fixed","top":"0","z-index":"2999"})
	// 		}else{
	// 			oInfo.stop().css({"position":"static"})
	// 		}
	// 	})
	// })
	
	
	// vedio
	// tip
	$(".vd-tip").click(function() {
		$(this).fadeOut()
		$(".vd-reload").fadeIn()
		tmRun()
	})
	$(".warn-btn").click(function(){
		$(this).parents(".vd-warn").hide();
		$(".vd-reload").fadeIn();
		tmRun()
	})
	// 倒计时
	function tmRun() {
		var second = 10;
		var time = setInterval(function() {
			second--;
			if (second <= 1) {
				clearInterval(time);
				$(".vd-reload").hide()
				$(".vd-warn").show()
				second = 10
			}
			$(".vd-time").html(second)
		}, 800);
	}
	
	// return top
	$(window).scroll(function(){
		if($(this).scrollTop() > 300){
			$('#goToTop').addClass("show");
		}else{
			$('#goToTop').removeClass("show");
		}
	});
	$('#goToTop a').click(function(){
		$('html ,body').animate({scrollTop: 0}, 300);
		return false;
	});