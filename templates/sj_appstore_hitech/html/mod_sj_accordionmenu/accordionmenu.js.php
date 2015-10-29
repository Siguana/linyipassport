<?php
/**
 * @package SJ Accordion Menu
 * @version 2.5
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2012 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 * 
 */
defined('_JEXEC') or die;?>

<script type="text/javascript">
var sjProcess = false;
$jsmart(document).ready(function($){ 
	var SjAccordionMenu = $("#sj_accordion_menu_<?php echo $module->id;?>");
	SjAccordionMenu.children("li").eq(0).addClass("first");
	SjAccordionMenu.children("li").eq(SjAccordionMenu.children("li").length - 1 ).addClass("last");

	
	SjAccordionMenu.find("a").click(function(){
		if ($(this).attr("target") == '_blank') {
			window.open($(this).attr("href"));
		} else {
			location = $(this).attr("href");
		}		
		return false;

	});	
	try{
		var current = $("#sj_accordion_menu_<?php echo $module->id;?> li.opened");
		var root = current.parents('.sj-accordion-menu'), lis = current.parents('li');
		$('li', root).filter(lis).addClass('opened');
	} catch(e){
		console.log(e.message);
	}
	
	$("#sj_accordion_menu_<?php echo $module->id;?> li.opened > .sj-ul-wrapper").css("display","block");
	$("#sj_accordion_menu_<?php echo $module->id;?> li.opened > .sj-item-wrapper  .sj-menu-button img").attr("src", "<?php echo $bulletActive;?>");
 
<?php if($event == "click"){?>

SjAccordionMenu.find(".sj-item-wrapper").click(function(){
	var li = $(this).parent();
	if(!li.hasClass("opened")){
		var openedLi = li.parent().children(".opened");
		var ul = li.children(".sj-ul-wrapper");
		openedLi.children(".sj-ul-wrapper").slideUp(<?php echo $duration;?>);
		openedLi.children(".sj-item-wrapper").children(".sj-menu-button").children("img").attr("src", "<?php echo $bulletImage;?>");
		openedLi.removeClass("opened");
		if(li.children(".sj-ul-wrapper").length !=0){
			li.addClass("opened");
			li.children(".sj-item-wrapper").children(".sj-menu-button").children("img").attr("src", "<?php echo $bulletActive;?>");
			ul.slideDown(<?php echo $duration;?>); //alert('1111');
		}
}	else{
		li.children(".sj-item-wrapper").children(".sj-menu-button").children("img").attr("src", "<?php echo $bulletImage;?>");
		li.children(".sj-ul-wrapper").slideUp(<?php echo $duration;?>);
		li.removeClass("opened");
	}
	return false;
});
});
 
<?php echo "</script>";}else{?>

	SjAccordionMenu.find("li").mouseenter(function(){
		if(sjProcess) return true;
		var ul = $(this).children(".sj-ul-wrapper");
		if(ul.length){ 
			sjProcess = true;
			$(this).addClass("opened");
			$(this).children(".sj-item-wrapper").children(".sj-menu-button").children("img").attr("src", "<?php echo $bulletActive;?>");
			ul.slideDown(<?php echo $duration;?>,function(){
				sjProcess = false;
			});
		}
	}).mouseleave(function(){
		if(sjProcess) return true;
		if($(this).children(".sj-ul-wrapper").length){ 
			sjProcess = true;
			$(this).children(".sj-item-wrapper").children(".sj-menu-button").children("img").attr("src", "<?php echo $bulletImage;?>");
			$(this).children(".sj-ul-wrapper").slideUp(<?php echo $duration;?>,function(){
				sjProcess = false;
			});
			
		}
        sjProcess = false;
		$(this).removeClass("opened");
		
	});
});
<?php echo "</script>";} ?>



