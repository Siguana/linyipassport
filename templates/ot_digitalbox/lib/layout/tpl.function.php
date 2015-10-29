<?php
/**
 # ot_digitalbox - 	OT DigitalBox  Template for Joomla 2.5!
 # author 			OmegaTheme.com
 # copyright 		Copyright(C) 2012 - OmegaTheme.com. All Rights Reserved.
 # @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Website: 		http://omegatheme.com
 # Technical 		support: Forum - http://omegatheme.com/forum/
 **/
 /**------------------------------------------------------------------------
 * file: tpl.function.php 2.5.0 00001, May 2012 12:00:00Z OmegaTheme $
 * package:	OT DigitalBox Template
 *------------------------------------------------------------------------*/
 
//No direct access!
defined( '_JEXEC' ) or die( 'Restricted access' );

//include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/OtModulesRenderer.php');	

	//Check IE Version for Fix Layout
	function browser()
	{
		$browser = array();
		// what ie browser version?
		if (array_key_exists('HTTP_USER_AGENT', $_SERVER) && preg_match('/(MSIE\\s?([\\d\\.]+))/', $_SERVER['HTTP_USER_AGENT'], $matches))
		{
			$browser['ie9'] = intval($matches[2]) == 9;
			$browser['ie8'] = intval($matches[2]) == 8;
			$browser['ie7'] = intval($matches[2]) == 7;
		}
		return $browser;
	}
	
	function isIe($version)
	{
		$browser = browser();
		if (array_key_exists('ie'.$version, $browser)) {
			return $browser['ie'.$version];
		}
		return false;
	}
	
	//Check Menu default is Home
	function isHome()
	{
		$mnu =& JSite::getMenu();
		return ($mnu->getActive() == $mnu->getDefault());
	}
	
	//Check Frontpage view
	function isFrontpage(){
		return (JRequest::getCmd( 'view' ) == 'frontpage') ;
	}
	
	//Check Home Page
	$menu =& JSite::getMenu();
	$menuActive = $menu->getActive();
	if($menuActive == $menu->getDefault()){
		$home = 'isHomePage';
	}else{
		$home = 'isInnerPages';
	}
	
	//$layoutView = &JRequest::getVar( 'layoutview' ) == $this->params->get('layoutType');
	
	/*+++++++++++++++++++Layout++++++++++++++++++++*/
	
	$template_url = $this->baseurl.'/templates/'.$this->template;
	
	//Include Main CSS
	$this->addStyleSheet($this->baseurl.'/templates/system/css/system.css');
	$this->addStyleSheet($this->baseurl.'/templates/system/css/general.css');
	$this->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/template.css');
	
	//+++++++++++++++++++ Width Template +++++++++++++++++++++++
	$presetCss = '';
	
	if($this->params->get('CustomWidthTemplate') == 1){
		if(trim($this->params->get('width_template')) != ''){
			$presetCss .= 'div.ot-widthTemp {width: '.trim($this->params->get('width_template')).';}';
		}
		if($this->countModules('left')){
			$presetCss .= 'div.ot-leftcolumn {width: '.trim($this->params->get('width_left')).';}';
		}
		if($this->countModules('right')){
			$presetCss .= 'div.ot-rightcolumn {width: '.trim($this->params->get('width_right')).';}';
		}
	}
	
	//+++++++++++++++++++Extend Modules +++++++++++++++++++++++
	if($this->countModules('bottom-2') == 0){
		$presetCss .= 'div.ot-footer div.ot-bottom-1 {width: 100%}';
	}
	if($this->countModules('bottom-1') == 0){
		$presetCss .= 'div.ot-footer div.ot-bottom-2 {width: 100%}';
	}
	
	//+++++++++++++++++++ Width of Boxes +++++++++++++++++++++++
	
	//+++++++++++++++++++ Top Boxes ++++++++++++++++++++++++++
	$topBoxes_unitWidth = trim($this->params->get('unitWidthtopBoxes'));
	
	$width_topboxes = explode(",", str_replace(array(" ",";", "(", ")"), array("", ",", "", ""), $this->params->get('width_topboxes')));
		
	$topboxes_additional_class = '';
	foreach (@$width_topboxes as $index => $width_topbox) 
	{
		$width_topboxes[$index] = trim($width_topbox);
	}
	$width_topboxes = array_unique($width_topboxes);
	foreach ($width_topboxes as $width_topbox) 
	{
		if (trim($width_topbox ) != "" )
		{
			$topboxes_additional_class .= '
			.'.'width'.$width_topbox. '{ width: '.$width_topbox.$topBoxes_unitWidth.'; } 
			 ';
		}
	}
	
	//+++++++++++++++++++ Extend Boxes ++++++++++++++++++++++++++
	$extendBoxes_unitWidth = trim($this->params->get('unitWidthbottomExtends'));
	
	$width_extendboxes = explode(",", str_replace(array(" ",";", "(", ")"), array("", ",", "", ""), $this->params->get('width_bottomextends')));
		
	$extendboxes_additional_class = '';
	foreach (@$width_extendboxes as $index => $width_extendbox) 
	{
		$width_extendboxes[$index] = trim($width_extendbox);
	}
	$width_extendboxes = array_unique($width_extendboxes);
	foreach ($width_extendboxes as $width_extendbox) 
	{
		if (trim($width_extendbox ) != "" )
		{
			$extendboxes_additional_class .= '
			.'.'width'.$width_extendbox. '{ width: '.$width_extendbox.$extendBoxes_unitWidth.'; } 
			 ';
		}
	}
	
	//+++++++++++++++++++ Botom Boxes +++++++++++++++++++++++
	$bottomBoxes_unitWidth = trim($this->params->get('unitWidthbottomBoxes'));
	
	$width_bottomboxes = explode(",", str_replace(array(" ",";", "(", ")"), array("", ",", "", ""), $this->params->get('width_bottomboxes')));
		
	$bottomboxes_additional_class = '';
	foreach (@$width_bottomboxes as $index => $width_bottombox) 
	{
		$width_bottomboxes[$index] = trim($width_bottombox);
	}
	$width_bottomboxes = array_unique($width_bottomboxes);
	foreach ($width_bottomboxes as $width_bottombox) 
	{
		if (trim($width_bottombox ) != "" )
		{
			$bottomboxes_additional_class .= '
			.'.'width'.$width_bottombox. '{ width: '.$width_bottombox.$bottomBoxes_unitWidth.'; } 
			 ';
		}
	}
	
	//+++++++++++++++++++ Layout +++++++++++++++++++++++
	$layoutStyle = $this->params->get('layoutStyle');
	
	/*
	$session =& JFactory::getSession();
	$session->set('style', $layoutStyle);

	$style_select = JRequest::getVar('style');
	
	if($style_select != null){
		$session->set('style', $style_select);
		$layoutStyle = $style_select;
	}else{
		$style_session = $session->get('style');
			if($style_session != null){
				$layoutStyle = $style_session;
			}
	}
	*/
	
	$this->addStyleSheet($template_url.'/css/layout/'.$layoutStyle.'.css');
	

	if($this->params->get('customBackground') == 1){
		if(trim($this->params->get('body_bgcolor')) != ''){
			$presetCss .= 'body#ot-body {background: '.$this->params->get('body_bgcolor').';}';
		}
		if(trim($this->params->get('header_bgcolor')) != ''){
			$presetCss .= 'div.ot-logo-headertop-i {background: '.$this->params->get('header_bgcolor').';}';
		}
		if(trim($this->params->get('topboxes_bgcolor')) != ''){
			$presetCss .= 'div.ot-topboxes {background: '.$this->params->get('topboxes_bgcolor').';}';
		}
		if(trim($this->params->get('bottomextends_bgcolor')) != ''){
			$presetCss .= 'div.ot-bottom-extends-i {background: '.$this->params->get('bottomextends_bgcolor').';}';
		}
		if(trim($this->params->get('bottomboxes_bgcolor')) != ''){
			$presetCss .= 'div.ot-bottomboxes-i {background: '.$this->params->get('bottomboxes_bgcolor').';}';
		}
		if(trim($this->params->get('footer_bgcolor')) != ''){
			$presetCss .= 'div.ot-footer-i {background: '.$this->params->get('footer_bgcolor').';}';
		}
	}
	
	//+++++++++++++++++++ Body +++++++++++++++++++++++
	if($this->params->get('CustomBodyFont') == 1){
		if(trim($this->params->get('font_family')) != 'none'){
			$font_family = explode(':', trim($this->params->get('font_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $font_family[0]));
			$presetCss .= 'body#ot-page {font-family: "'.$font_family[0].'";}';
		}
		if(trim($this->params->get('color_text')) != ''){
			$presetCss .= 'body#ot-page {color: '.$this->params->get('color_text').';}';
		}
		if(trim($this->params->get('color_links')) != ''){
			$presetCss .= 'a {color: '.$this->params->get('color_links').';}';
		}
		if(trim($this->params->get('fontSize')) != ''){
			$presetCss .= 'body#ot-page {font-size: '.$this->params->get('fontSize').';}';
		}
	}
	
	//+++++++++++++++++++ Heading Tags++++++++++++++++++++
	if($this->params->get('CustomHeadingFont') == 1){
		// Custom style h1
		if(trim($this->params->get('h1font_family')) != 'none'){
			$h1font_family = explode(':', trim($this->params->get('h1font_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $h1font_family[0]));
			$presetCss .= 'h1 {font-family: "'.$h1font_family[0].'";}';
		}
		if(trim($this->params->get('h1_color')) != ''){
			$presetCss .= 'h1 {color: '.$this->params->get('h1_color').';}';
		}
		if(trim($this->params->get('h1font_size')) != ''){
			$presetCss .= 'h1 {font-size: '.$this->params->get('h1font_size').';}';
		}

		// Custom style h2
		if(trim($this->params->get('h2font_family')) != 'none'){
			$h2font_family = explode(':', trim($this->params->get('h2font_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $h2font_family[0]));
			$presetCss .= 'h2 {font-family: "'.$h2font_family[0].'";}';
		}
		if(trim($this->params->get('h2_color')) != ''){
			$presetCss .= 'h2 {color: '.$this->params->get('h2_color').';}';
		}
		if(trim($this->params->get('h2font_size')) != ''){
			$presetCss .= 'h2 {font-size: '.$this->params->get('h2font_size').';}';
		}	
		
		// Custom style h3
		if(trim($this->params->get('h3font_family')) != 'none'){
			$h3font_family = explode(':', trim($this->params->get('h3font_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $h3font_family[0]));
			$presetCss .= 'h3 {font-family: "'.$h3font_family[0].'";}';
		}
		if(trim($this->params->get('h3_color')) != ''){
			$presetCss .= 'h3 {color: '.$this->params->get('h3_color').';}';
		}
		if(trim($this->params->get('h3font_size')) != ''){
			$presetCss .= 'h3 {font-size: '.$this->params->get('h3font_size').';}';
		}
		
		// Custom style h4
		if(trim($this->params->get('h4font_family')) != 'none'){
			$h4font_family = explode(':', trim($this->params->get('h4font_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $h4font_family[0]));
			$presetCss .= 'h4 {font-family: "'.$h4font_family[0].'";}';
		}
		if(trim($this->params->get('h4_color')) != ''){
			$presetCss .= 'h4 {color: '.$this->params->get('h4_color').';}';
		}
		if(trim($this->params->get('h4font_size')) != ''){
			$presetCss .= 'h4 {font-size: '.$this->params->get('h4font_size').';}';
		}
		
		// Custom style h5
		if(trim($this->params->get('h5font_family')) != 'none'){
			$h5font_family = explode(':', trim($this->params->get('h5font_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $h5font_family[0]));
			$presetCss .= 'h5 {font-family: "'.$h5font_family[0].'";}';
		}
		if(trim($this->params->get('h5_color')) != ''){
			$presetCss .= 'h5 {color: '.$this->params->get('h5_color').';}';
		}
		if(trim($this->params->get('h5font_size')) != ''){
			$presetCss .= 'h5 {font-size: '.$this->params->get('h5font_size').';}';
		}
		
		// Custom style h6
		if(trim($this->params->get('h6font_family')) != 'none'){
			$h6font_family = explode(':', trim($this->params->get('h6font_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $h6font_family[0]));
			$presetCss .= 'h6 {font-family: "'.$h6font_family[0].'";}';
		}
		if(trim($this->params->get('h6_color')) != ''){
			$presetCss .= 'h6 {color: '.$this->params->get('h6_color').';}';
		}
		if(trim($this->params->get('h6font_size')) != ''){
			$presetCss .= 'h6 {font-size: '.$this->params->get('h6font_size').';}';
		}
	}
	
	//+++++++++++++++++++ MainMenu++++++++++++++++++++
	if($this->params->get('CustomMainMenu') == 1){
		if(trim($this->params->get('mainnavfont_family')) != 'none'){
			$mainnavfont_family = explode(':', trim($this->params->get('mainnavfont_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $mainnavfont_family[0]));
			$presetCss .= '#ot-mainmenu, #ot-mainmenu ul {font-family: "'.$mainnavfont_family[0].'";}';
		}
		if(trim($this->params->get('mainnav_color')) != ''){
			$presetCss .= '#ot-mainmenu ul.menu li a {color: '.$this->params->get('mainnav_color').';}';
		}
		if(trim($this->params->get('mainnavfont_size')) != ''){
			$presetCss .= '#ot-mainmenu ul.menu li a {font-size: '.$this->params->get('mainnavfont_size').';}';
		}
	}
	
	//+++++++++++++++++++ BlockQuote++++++++++++++++++++
	if($this->params->get('CustomBlockquote') == 1){
		if(trim($this->params->get('blockquotefont_family')) != 'none'){
			$blockquotefont_family = explode(':', trim($this->params->get('blockquotefont_family')));
			$this->addStyleSheet('http://fonts.googleapis.com/css?family=' . str_replace( ' ', '+', $blockquotefont_family[0]));
			$presetCss .= 'blockquote {font-family: "'.$blockquotefont_family[0].'";}';
		}
		if(trim($this->params->get('blockquote_color')) != ''){
			$presetCss .= 'blockquote {color: '.$this->params->get('blockquote_color').';}';
		}
		if(trim($this->params->get('blockquotefont_size')) != ''){
			$presetCss .= 'blockquote {font-size: '.$this->params->get('blockquotefont_size').';}';
		}
	}
	
	//Include CSS of Configuration Params
	$this->addStyleDeclaration($presetCss);
	$this->addStyleDeclaration($topboxes_additional_class);
	$this->addStyleDeclaration($extendboxes_additional_class);
	$this->addStyleDeclaration($bottomboxes_additional_class);
	
	// Load mootools
	JHTML::_('behavior.mootools');
	
	// load dropdown menu js
	$this->addScript($template_url.'/scripts/dropdownMenu.js');
	
	// load others js
	$this->addScript($template_url.'/scripts/otscript.js');
	
	// ie9 fix
	if (isIe(9))
	{
		$css = '<link rel="stylesheet" href="%s" type="text/css" />';
		$ie9[] = sprintf($css, $template_url.'/css/ie9.css');
		$this->addCustomTag('<!--[if IE 9]>'.implode("\n", $ie9).'<![endif]-->');
	}
	
	// ie8 fix
	if (isIe(8))
	{
		$css = '<link rel="stylesheet" href="%s" type="text/css" />';
		$ie8[] = sprintf($css, $template_url.'/css/ie8.css');
		$this->addCustomTag('<!--[if IE 8]>'.implode("\n", $ie8).'<![endif]-->');
	}
	
	// ie7 fix
	if (isIe(7))
	{
		$css = '<link rel="stylesheet" href="%s" type="text/css" />';
		$ie7[] = sprintf($css, $template_url.'/css/ie7.css');
		$this->addCustomTag('<!--[if IE 7]>'.implode("\n", $ie7).'<![endif]-->');
	}
	
?>
