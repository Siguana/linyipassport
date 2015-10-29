<?php
/*
 * ------------------------------------------------------------------------
 * Yt FrameWork for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2009 - 2012 The YouTech JSC. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: The YouTech JSC
 * Websites: http://www.smartaddons.com - http://www.cmsportal.net
 * ------------------------------------------------------------------------
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$doc = JFactory::getDocument();
$browser = new Browser();
?>
<?php if($browser->getBrowser() == Browser::BROWSER_IPHONE ) : ?>
	<script type="text/javascript">
	$jsmart(function($){
		$(window).load(function (){
			if($("#content_sidebar")){
				function addStyleAttribute($element, styleAttribute) {
				    $element.attr('style', $element.attr('style') + '; ' + styleAttribute);
				}
				addStyleAttribute($('#content_sidebar'), 'position: absolute !important');
				$(window).scroll(function () {
					var topl = $(this).scrollTop();
					addStyleAttribute($('#content_sidebar'), 'top:'+topl+'px !important');
				});
				$('.btn-sidebar').toggle(function(){
					$("#content_sidebar").animate({left:"0px"});
				},function(){
					$("#content_sidebar").animate({left:"-240px"});
				});
				
				var scrollTop = $(window).scrollTop();
				var h_srcoll = $('.yt-logo').outerHeight() + $jsmart('#nav2').outerHeight();
				h_srcoll = $(window).height() - h_srcoll;

				$("#position-5").css('height',h_srcoll + 60);
				$("#position-5").css('overflow','auto');
			}
		});
		
	</script>
<?php else : ?>
	<script type="text/javascript">
	//	<![CDATA[
	$jsmart(function($){
		$(window).load(function (){
			if($("#content_sidebar")){
				sb_offsettop = $("#content_sidebar").offset().top; 
				sb_offsetlimit = $("#content").offset().top + $("#content").height(); 
				top_sidebar = sb_offsetlimit - $('#content_sidebar').height() - $("#content").offset().top;
				processSidebarScroll("#content_sidebar", "sidebar-fixed", sb_offsettop, sb_offsetlimit, top_sidebar);
				var reloadsidebar = function reloadsidebar(){
										sb_offsetlimit = $("#content").offset().top + $("#content").height();
										top_sidebar = sb_offsetlimit - $('#content_sidebar').height()- $("#content").offset().top;
										processSidebarScroll("#content_sidebar", "sidebar-fixed", sb_offsettop, sb_offsetlimit, top_sidebar);
									}
				$(window).scroll(reloadsidebar);
				$(window).resize(reloadsidebar);
				
				divH = divW = 0;
				var content_main = $("#content_main");
				divW = content_main.width();
				divH = content_main.height();
				function checkResize(){
					var w = content_main.width();
					var h = content_main.height();
					if (w != divW || h != divH) {
						reloadsidebar();
						divH = h;
						divW = w;
					}
				}
				var timer = setInterval(checkResize, 0);
			}
			
			$('.btn-sidebar').toggle(function(){
				$("#content_sidebar").animate({left:"0px"});
			},function(){
				$("#content_sidebar").animate({left:"-260px"});
			});
			
		});
		function processSidebarScroll(element, eclass, offset_top, offset_limit, topsidebar) {
			var scrollTop = $(window).scrollTop();
			var h_srcoll = $('.yt-logo').outerHeight() + $('#nav2').outerHeight();
			h_srcoll = $(window).height() - h_srcoll;

			$("#position-5").css('height',h_srcoll);
			$("#position-5").css('overflow','auto');
			
			var ct_offsettop = $("#content").offset().top;
			var limit_scroll = $("#content").height();
			var ctsb_height = $(window).height();
			$("#content_sidebar").css('height',ctsb_height);
			$("#content_sidebar").css('overflow','auto');
			if(scrollTop >= ct_offsettop){
				$("#content_sidebar").addClass(eclass);
			} else if (scrollTop <= ct_offsettop){
				$("#content_sidebar").removeClass(eclass);
			}
			var scrollmax = ct_offsettop + limit_scroll - ctsb_height;
			if(scrollTop >= scrollmax){
				$("#content_sidebar").removeClass(eclass);
				$("#content_sidebar").css('position','relative');
				$("#content_sidebar").css('top',limit_scroll - ctsb_height - 1);
			} else {
				$("#content_sidebar").css('position','');
				$("#content_sidebar").css('top', '');
			}
			var hcontent_sidebarh = $("#content_sidebar").height();
			var hcontent_mainh = $("#content_main").height();
			if(hcontent_sidebarh > hcontent_mainh){
				$("#content_sidebar").removeClass(eclass);
			} else {$("#content_sidebar").addClass(eclass);};
		}
	});
		
	// ]]>
	</script>
<?php endif; ?>
<?php if(!$browser->isMobile()) :
	$doc->addScript($yt->templateurl().'js/jquery-ui-1.8.22.custom.min.js');
	$doc->addScript($yt->templateurl().'js/jquery.mousewheel.min.js');
	$doc->addScript($yt->templateurl().'js/jquery.mCustomScrollbar.js');
	$doc->addStyleSheet($yt->templateurl().'css/jquery.mCustomScrollbar.css');
	?>
	<script type="text/javascript">
		$jsmart(function($){
			$(window).load(function (){
				$("#position-5").mCustomScrollbar(); //scrollbar inner
			});
		});
	</script>
<?php endif; ?>