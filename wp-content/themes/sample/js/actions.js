var init = function(){
	var windowW = $(window).width();

	
	if(windowW > 991){
console.log(1);
		$(window).scroll(function(){  
			if($(window).scrollTop() >= 1){
				$("header").addClass('fixed');
				$(".box-social-medias").show('fade-in');
				$(".box-button").show('fadeIn');
				$(".secondary-content").hide('fade-out');
			}else{
				$("header").removeClass('fixed');
				$(".box-social-medias").hide('fade-out');
				$(".box-button").hide('fade-out');
				$(".secondary-content").show('fade-in');

			}
		});
 
		if($(window).scrollTop() >= 1){
			$("header").addClass('fixed');
			$(".box-social-medias").show('fade-in');
			$(".box-button").show('fadeIn');
			$(".secondary-content").hide('fade-out');
		}else{
			$("header").removeClass('fixed');
			$(".box-social-medias").hide('fade-out');
			$(".box-button").hide('fade-out');
			$(".secondary-content").show('fade-in');

		} 

	}

	
	$('.box-submenu').hide();
	$('.menu-flag').hide();	
};

			 
$("nav li").click(function(){
	var el       = $(this).attr("id"); 
	var isActive =  $("#"+el).attr('class');
 
	
		if(isActive == "active"){
			$("."+el).slideUp("fast", "swing"); 
			$("#"+el).removeClass("active"); 
			$("#"+el+" > .menu-flag").hide();

		}else{

			if(el !== "carros" || el !== "testes" ){ 
				$("nav li").removeClass("active");
				$("nav li > .menu-flag").hide();
				$(".box-submenu").slideUp("fast", "swing"); 
				
			}

			$("#"+el).addClass("active"); 

			$("#"+el+" > .menu-flag").show();
			$("."+el).slideDown("slow", "swing");
		}
});

$(".icon-menu").click(function(){
	$(".navmenu-mobile").slideDown("slow", "swing");
	$(".icon-menu").hide();
	$(".icon-close").show();
});

$(".icon-close").click(function(){
	$(".navmenu-mobile").slideUp("slow", "swing");
	$(".icon-close").hide();
	$(".icon-menu").show();
});