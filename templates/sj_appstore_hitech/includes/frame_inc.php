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
defined( 'YT_FRAMEWORK' ) or die(JTEXT::_("INSTALL_YT_PLUGIN"));
defined( '_YTOOLS' ) or die(JTEXT::_("INSTALL_SJ_CORE"));
global $yt;
// Object of class YtTemplate(incluedes/yt_template.class.php)
$yt = new YtTemplate($this);
// Get Itemid
$Itemid = JRequest::getInt('Itemid');
// Returns a reference to the global document object
$doc = JFactory::getDocument();
//
$ytrtl = $yt->getParam('direction');
$float1 = ($ytrtl == 'rtl')?' float:right; ':' float:left; ';
$float2 = ($ytrtl == 'rtl')?' float:left; ':' float:right; ';
// BEGIN get param template
$font_name                  = $yt->getParam('font_name');
$windows_main_layout		= $yt->getParam('default_main_layout'); 
$iphone_main_layout		    = $yt->getParam('iphone_main_layout'); 
$android_main_layout		= $yt->getParam('android_main_layout');
$handheld_main_layout		= $yt->getParam('handheld_main_layout');
$override_layouts			= $yt->getParam('override_layouts');
$setGeneratorTag			= $yt->getParam('setGeneratorTag');
$googleWebFont 				= $yt->getParam('googleWebFont');
$googleWebFontTargets		= $yt->getParam('googleWebFontTargets');
$widthType					= $yt->getParam('widthType', 'px');
$templateWidth				= $yt->getParam('templateWidth', '960');
$mainBodyWidthType			= $yt->getParam('mainBodyWidthType', 'px');
$mainWidth					= $yt->getParam('mainWidth', '480');
$leftWidth   				= $yt->getParam('leftWidth', '200');
$rightWidth				    = $yt->getParam('rightWidth', '200');	
$arrGContent =  Array(
				'main' => Array(
						'name' => 'main',
						'height' => '',
						'width' => $mainWidth.$mainBodyWidthType
				),
				'left' => Array(
						'name' => 'left',
						'height' => '',
						'width' => $leftWidth.$mainBodyWidthType
				),
			
				'right' => Array(
						'name' => 'right',
						'height' => '', 
						'width' => $rightWidth.$mainBodyWidthType
				)
);

// case: no select
$windows_main_layout 		= ($windows_main_layout=='-1')?'left-main-right.xml':$windows_main_layout;
$iphone_main_layout 		= ($iphone_main_layout=='-1')?'mobile.xml':$iphone_main_layout;
$android_main_layout 		= ($android_main_layout=='-1')?'mobile.xml':$android_main_layout;
$handheld_main_layout 		= ($handheld_main_layout=='-1')?'mobile.xml':$handheld_main_layout;
	//
if(strpos($windows_main_layout, '.xml') == false) $windows_main_layout = $windows_main_layout.'.xml';
if(strpos($iphone_main_layout, '.xml') == false) $iphone_main_layout = $iphone_main_layout.'.xml';
if(strpos($android_main_layout, '.xml') == false) $android_main_layout = $android_main_layout.'.xml';
if(strpos($handheld_main_layout, '.xml') == false) $handheld_main_layout = $handheld_main_layout.'.xml';
// END get param template

// Include Class YtRenderXML
include_once (dirname(__FILE__).DS.'yt_renderxml.php');

$boolOverride = false;
$override_b1 = array(); $override_b1 = explode(' | ', $override_layouts); 
if( count($override_b1)>1 || ($override_b1['0']!='' && count($override_b1)==1) ) { 
	$override_b2 = array();
	for($i=0; $i<count($override_b1); $i++){
		$override_b2[] = explode(':', $override_b1[$i]);
	}
	if( !empty($override_b2) ){
		foreach($override_b2 as $o){
			if($Itemid == $o[0]){$boolOverride = true; $layoutItem = trim($o[1]);}
		}
	}
}
if($boolOverride == true){ // Window Overwrite Layouts
	$yt_render = new YtRenderXML($layoutItem.'.xml', '100', $arrGContent, '%', '%'/*$mainBodyWidthType*/);
}else{ // Window Layout default
	$yt_render = new YtRenderXML($windows_main_layout, '100', $arrGContent, '%', '%' /*$mainBodyWidthType*/);  
}

// Set GeneratorTag
$this->setGenerator($setGeneratorTag);
// Style sheets

$doc->addStyleSheet($yt->baseurl().'templates/system/css/system.css','text/css');
$doc->addStyleSheet($yt->baseurl().'templates/system/css/general.css','text/css');
$doc->addStyleSheet($yt->templateurl().'css/base.css','text/css');
$doc->addStyleSheet($yt->templateurl().'css/fonts.css','text/css');
$doc->addStyleSheet($yt->templateurl().'css/template.css','text/css');
$doc->addStyleSheet($yt->templateurl().'css/device-mobile.css','text/css', 'only screen and (max-width:719px)');
$doc->addStyleSheet($yt->templateurl().'css/device-mobile-port.css','text/css', 'only screen and (max-width:479px)');
$doc->addStyleSheet($yt->templateurl().'css/device-tablet.css','text/css', 'only screen and (min-width:720px) and (max-width: 985px)');
$doc->addStyleSheet($yt->templateurl().'css/device-normal.css','text/css', 'only screen and (min-width:986px) and (max-width: 1235px)');
$doc->addStyleSheet($yt->templateurl().'css/device-wide.css','text/css', 'only screen and (min-width:1236px) and (max-width: 1585px)');
$doc->addStyleSheet($yt->templateurl().'css/device-wide-extra.css','text/css', 'only screen and (min-width:1586px)');


if(isset($yt_render->arr_TH['stylesheet'])){
	foreach($yt_render->arr_TH['stylesheet'] as $tagStyle){
		$doc->addStyleSheet($yt->templateurl().'css/'.$tagStyle,'text/css');
	}
}
$doc->addStyleSheet($yt->templateurl().'css/typography.css','text/css');
// Add css include from layout file
$arr_style = $yt->getStyleSite();
if(!empty($arr_style)){ 
	$doc->addStyleSheet($yt->templateurl().'css/color/'.$arr_style['filestyle'].'.css','text/css');
}
if($ytrtl == 'rtl'){
	$doc->addStyleSheet($yt->templateurl().'css/template_rtl.css','text/css');
	$doc->addStyleSheet($yt->templateurl().'css/typography_rtl.css','text/css');
}

if ($yt->isIE()){ 
	if($yt->ieversion()==8){
		$doc->addStyleSheet($yt->templateurl().'css/template-ie8.css','text/css');
	}
	if($yt->ieversion()==9){
		$doc->addStyleSheet($yt->templateurl().'css/template-ie9.css','text/css');
	}
}
// FIX CSS
include_once (dirname(__FILE__).DS.'../css/fixcss-browsers.php');

// Javascript
JHTML::_('behavior.mootools');  

$doc->addScript($yt->templateurl().'js/yt-script.js');
$doc->addScript($yt->templateurl().'js/showbox.js');
if(isset($yt_render->arr_TH['script'])){
	foreach($yt_render->arr_TH['script'] as $tagScript){
		$doc->addScript($yt->templateurl().'js/'.$tagScript);;	
	}
}
$doc->addCustomTag('
<script type="text/javascript">
	function MobileRedirectUrl(){
	  window.location.href = document.getElementById("yt-mobilemenu").value;
	}
</script>

');
// For param enableJquery
if($yt->getParam('enableJquery')=='1'){
	if (!defined('SMART_JQUERY')){
		define('SMART_JQUERY', 1);
		$doc->addScript($yt->templateurl().'js/jquery-1.7.2.min.js');
	}
	if (!defined('SMART_NOCONFLICT')){
		define('SMART_NOCONFLICT', 1);
		$doc->addScript($yt->templateurl().'js/jsmart.noconflict.js');
	}
}
if ($yt->isIE()){ 
	if($yt->ieversion()<=8){
		$doc->addScript($yt->templateurl().'js/respond.min.js');
	}
}



// For param enableGoogleAnalytics
if($yt->getParam('enableGoogleAnalytics')=='1' && $yt->getParam('googleAnalyticsTrackingID')!='' ){
	$doc->addCustomTag('  
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(["_setAccount", "'.$yt->getParam('googleAnalyticsTrackingID').'"]);
			_gaq.push(["_trackPageview"]);
			
			(function() {
			var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
			ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
			var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	');
}
?>
