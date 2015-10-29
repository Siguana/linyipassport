//Document JQUERY JAVASCRIPT
var j = jQuery.noConflict();
j(document).ready (function(){
	//View more desc
	j("#more-desc").click(function (event) {
		event.stopPropagation();
		j('#product-details-page-desc').addClass('full-desc');
		j('#more-desc').css('display', 'none');
		j('#hide-more-desc').css('display', 'block');
	});
	//Hide more desc
	j("#hide-more-desc").css('display', 'none');
	j("#hide-more-desc").click(function (event) {
		event.stopPropagation();
		j('#product-details-page-desc').removeClass('full-desc');
		j('#hide-more-desc').css('display', 'none');
		j('#more-desc').css('display', 'block');
	});
	
	//Custom style product images
	j("#large_images li").each(function(index, element){j(element).attr("class", 'hide');});
	j("#large_images li").each(function(index, element){j(element).attr("id", 'img'+index);});
	j("#thumb_holder li a").each(function(index, element){j(element).attr("rel", 'img'+index);});
	
	var mainImg ='img0';
	var currentImg = 'img0';
	
	j('#img0').css('display', 'inline');
	j('#img0').addClass('current-img');
	
	j('#thumb_holder li a').click (function(){								   
		mainImg = j(this).attr('rel');
		if(mainImg != currentImg){
			j('.current-img').fadeOut('slow');
			j('#'+mainImg).fadeIn('slow', function(){
				j(this).addClass('current-img');
				currentImg = mainImg;
			});
		}
	});
});