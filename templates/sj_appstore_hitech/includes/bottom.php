<?php
/*
 * ------------------------------------------------------------------------
 * Yt FrameWork for Joomla 3.0
 * ------------------------------------------------------------------------
 * Copyright (C) 2009 - 2012 The YouTech JSC. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: The YouTech JSC
 * Websites: http://www.smartaddons.com - http://www.cmsportal.net
 * ------------------------------------------------------------------------
*/
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Add css config to <head>...</head>
if ($googleWebFont != "" && $googleWebFont != " ") {
	$googleWebFontFamily 	= str_replace("+"," ",$googleWebFont);
	$doc->addStyleSheet('http://fonts.googleapis.com/css?family='.$googleWebFont.'');
	if(strpos($googleWebFontFamily, ':')){
		$googleWebFontFamily = substr($googleWebFontFamily, 0, strpos($googleWebFontFamily, ':'));
	}
	$doc->addStyleDeclaration('  '.$googleWebFontTargets.'{font-family:'.$googleWebFontFamily.', serif !important}');
}
$doc->addStyleDeclaration('
body.'.$yt->template.'{
	font-family:'.$font_name.';
	font-size:'.$yt->getParam('fontsize').';
}
#content_main{
	color:'.$yt->getParam('textcolor').' ;
}
#content_main a{
	color:'.$yt->getParam('linkcolor').' ;
}
#yt_header{
	background-color:'.$yt->getParam('header-bgcolor').' ;
}
#yt_spotlight3{
	background-color:'.$yt->getParam('spotlight3-bgcolor').' ;
}
#yt_footer{
	background-color:'.$yt->getParam('footer-bgcolor').' ;
}
');
// Add class pattern to element wrap
?>
<script type="text/javascript">
	$jsmart(document).ready(function($){  
		/* Begin: add class pattern for element */
		var spotlight3bgimage = '<?php echo $yt->getParam('spotlight3-bgimage');?>';
		var footerbgimage = '<?php echo $yt->getParam('footer-bgimage');?>';
		if(spotlight3bgimage){
			$('#yt_spotlight3').addClass(spotlight3bgimage);
		}
		if(footerbgimage){
			$('#yt_footer').addClass(footerbgimage);
		}
		/* End: add class pattern for element */
	});
</script>
<?php
// Include cpanel
if( $yt->getParam('showCpanel') ) {
	include_once ($tPath.DS.'includes'.DS.'cpanel.php');
	
	$doc->addStyleSheet($yt->templateurl().'css/cpanel.css','text/css');
	$doc->addStyleSheet($yt->templateurl().'asset/minicolors/jquery.miniColors.css','text/css');
	$doc->addScript($yt->templateurl().'js/ytcpanel.js');
	$doc->addScript($yt->templateurl().'js/collapse.js');
	$doc->addScript($yt->templateurl().'asset/minicolors/jquery.miniColors.min.js');
?>
	<script type="text/javascript">
    $jsmart(document).ready(function($){
        /* Begin: Enabling miniColors */
        //$('.color-picker').miniColors();
		$('.body-backgroud-color .color-picker').miniColors({
			change: function(hex, rgb) {
				$('body').css('background-color', hex); 
				createCookie(TMPL_NAME+'_'+($(this).attr('name').match(/^ytcpanel_(.*)$/))[1], hex, 365);
			}
		});
		$('.link-color .color-picker').miniColors({
			change: function(hex, rgb) {
				$('#content_main a').css('color', hex);
				createCookie(TMPL_NAME+'_'+($(this).attr('name').match(/^ytcpanel_(.*)$/))[1], hex, 365);
			}
		});
		$('.text-color .color-picker').miniColors({
			change: function(hex, rgb) {
				$('#content_main').css('color', hex);
				createCookie(TMPL_NAME+'_'+($(this).attr('name').match(/^ytcpanel_(.*)$/))[1], hex, 365);
			}
		});
		$('.spotlight3-backgroud-color .color-picker').miniColors({
			change: function(hex, rgb) {
				$('#yt_spotlight3').css('background-color', hex);
				createCookie(TMPL_NAME+'_'+($(this).attr('name').match(/^ytcpanel_(.*)$/))[1], hex, 365);
			}
		});
		$('.footer-backgroud-color .color-picker').miniColors({
			change: function(hex, rgb) {
				$('#yt_footer').css('background-color', hex);
				createCookie(TMPL_NAME+'_'+($(this).attr('name').match(/^ytcpanel_(.*)$/))[1], hex, 365);
			}
		});
		/* End: Enabling miniColors */
		/* Begin: Set click pattern */
		function patternClick(el, paramCookie, assign){
			$(el).click(function(){
				oldvalue = $(this).parent().find('.active').html();
				$(el).removeClass('active');
				$(this).addClass('active');
				value = $(this).html();
				if(assign.length > 0){
					for($i=0; $i < assign.length; $i++){
						$(assign[$i]).removeClass(oldvalue);
						$(assign[$i]).addClass(value);
					}
				}
				if(paramCookie){
					$('input[name$="ytcpanel_'+paramCookie+'"]').attr('value', value);
					createCookie(TMPL_NAME+'_'+paramCookie, value, 365);
					
				}
			});
	
		}
        patternClick('.spotlight3-backgroud-image .pattern', 'spotlight3-bgimage', Array('#yt_spotlight3'));
        patternClick('.footer-backgroud-image .pattern', 'footer-bgimage', Array('#yt_footer'));
        /* End: Set click pattern */
		
    });
    </script>
<?php
}
// Show back to top
if( $yt->getParam('showBacktotop') ) {
	include_once ($tPath.DS.'includes'.DS.'backtotop.php');
}
?>