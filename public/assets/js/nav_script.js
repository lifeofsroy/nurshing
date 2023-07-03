$(document).ready(function(){	

	$(".sub-menu li").find(".inn-sub").parent().addClass("haveInnsub");
	
	$(".navListing li:has('ul')").append("<span class='drop_down_icon fa fa-angle-down'></span>");	
	if ($(window).width() < 899) {
		$(".navListing li").click(function(){
			$(this).find(".drop_down_icon").toggleClass('rotate_icon');
			$(this).find(".sub-menu").slideToggle(300);
		});
		
		$(".toggle_icon").click(function(){
			$(".navListing").toggleClass("activeMainNav");
			$(this).find('b').toggleClass('creatCross');
			$(".sub-menu").slideUp(400);
			$(".drop_down_icon").removeClass('rotate_icon');
		});	
		
		$(".topInfo li p i").click(function () {
            $(this).parent().parent().toggleClass("ac_phDetails");
            $(this).parent().parent().next().removeClass("ac_phDetails");
            $(this).parent().parent().prev().removeClass("ac_phDetails");
        });	
		
    }
	else{
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 40) {
				$(".topHeader").slideUp(300);
			} else {
				$(".topHeader").slideDown(300);
			}

		});
		$(".navListing li").hover(function(){
			$(this).find(".drop_down_icon").toggleClass('rotate_icon');
			$(this).find(".sub-menu").slideToggle(400);
		});	
	}

});