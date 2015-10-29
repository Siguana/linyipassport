<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: Creative Commons
/*
/*******************************************************************************************/

include 'params/fonts.google.php';

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// General Parameters


$page_width 				= 960;
$content_width 				= 960;
$padding 					= 30;
$sidebar_modulepadding		= 25;
$main_sepwidth 				= 25;
$main_modulepadding			= 25;
$footer_sidepadding		 	= 30;
$footer_modulepadding 		= 25;

$content_width = $page_width	= $this->params->get('page_width'); 
$sidebar_width 					= $this->params->get('sidebar_width');
$slider_width 					= 0;
if(is_numeric($this->params->get('slider_width')))
{
	$slider_width 				= $this->params->get('slider_width');
}

$layout_type					= $this->params->get('layout_type');


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Template styles

$tmpl_style = 'style.default.css';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Body patterns and colors


$body_bgpattern			= '';
if($this->params->get('body_bgpattern'))
	$body_bgpattern		= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('body_bgpattern') . '");';
	 

$body_bgcolor			= '';
if($this->params->get('body_bgcolor') && !$this->params->get('body_bgpattern'))
{
	$body_bgcolor 		= 'background-color: #' . $this->params->get('body_bgcolor') . ';';
	$body_bgpattern		= 'background-image: none;';
}
else
{
	$body_bgcolor 		= 'background-color: #' . $this->params->get('body_bgcolor') . ';';	
}

$body_bgrepeating		= $this->params->get('body_bgrepeating'); 
$body_bgpositioning		= $this->params->get('body_bgpositioning'); 

$body_bgoverlay			= '';
if($this->params->get('body_bgoverlay'))
	$body_bgoverlay		= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('body_bgoverlay') . '");';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Body font family


$body_fontfamily 	= $this->params->get('body_fontfamily');

$google_font 	= array('fontlink'=>false, 'fontfamily'=>false);
$google_font 	= googleFontChooser($body_fontfamily);

$body_fontfamily = $google_font['fontfamily'];


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Body heading font family
 
 
$body_hfontfamily 		= $this->params->get('body_hfontfamily');

$google_hfont = array('fontlink'=>false, 'fontfamily'=>false);
$google_hfont = googleFontChooser($body_hfontfamily);

$body_hfontfamily = $google_hfont['fontfamily'];


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Body fonts

$body_fontsize 			= $this->params->get('body_fontsize'); 
$body_fontweight 		= $this->params->get('body_fontweight'); 
$body_fontstyle 		= $this->params->get('body_fontstyle'); 

$body_fontcolor				= '';
$body_fontcolor_paramvalue	= '';
if($this->params->get('body_fontcolor'))
{
	$body_fontcolor_paramvalue	= ($this->params->get('body_fontcolor'));
	$body_fontcolor				= 'color: #' . $body_fontcolor_paramvalue . ';';
}

$body_linkcolor				= '';
if($this->params->get('body_linkcolor'))
	$body_linkcolor 			= 'color: #' . $this->params->get('body_linkcolor') . ';';

$body_linkcolorhover		= '';
if($this->params->get('body_linkcolorhover'))
	$body_linkcolorhover	= 'color: #' . $this->params->get('body_linkcolorhover') . ';';
	

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Error font msgs


$body_errorfontcolor 			= '';
$body_errorfontcolor_paramvalue = '';
if($this->params->get('body_errorfontcolor'))
{
	$body_errorfontcolor_paramvalue		= '#' . $this->params->get('body_errorfontcolor') . ';';
	$body_errorfontcolor = 'color: ' . $body_errorfontcolor_paramvalue;
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Boxes
	
$box_bordercolor		= '';
if($this->params->get('box_bordercolor'))
{
	$box_bordercolor = $this->params->get('box_bordercolor');
	$box_border		= 'border: 1px solid #' . $box_bordercolor . ';';
}

$box_borderradius		= '';
if($this->params->get('box_borderradius'))
{	
	$box_borderradius		= 'border-radius: ' . $this->params->get('box_borderradius') . ';';
	$menu_firstchildradius	= 'border-radius: ' . $this->params->get('box_borderradius') . ' 0px 0px ' . $this->params->get('box_borderradius') . ';';
}
	
$box_shadowcolor	= '';
if($this->params->get('box_shadowcolor'))
	$box_shadowcolor	= '#' . $this->params->get('box_shadowcolor');

$box_shadow				= '';
if(!$this->params->get('box_shadow'))
{
	$box_shadow			= 'box-shadow: none;';
}
else if($this->params->get('box_shadow') && $box_shadowcolor)
{
	$box_shadow			= 'box-shadow: 1px 1px 1px' . $box_shadowcolor . ';';
}

$input_bgcolor			= '';
if($this->params->get('input_bgcolor'))
	$input_bgcolor			= 'background-color: #' . $this->params->get('input_bgcolor') . ';';

$input_border			= '';	
if($this->params->get('input_bordercolor'))
{
	$input_bordercolor	= '#' . $this->params->get('input_bordercolor');
	$input_border		= 'border: 1px solid' . $input_bordercolor . ';';
}

$btn_txttransform		= $this->params->get('btn_txttransform'); 

$btn_bgpattern			= '';
if($this->params->get('btn_bgpattern'))
	$btn_bgpattern		= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('btn_bgpattern') . '");'; 
	
$btn_bgcolor 			= '';
if($this->params->get('btn_bgcolor'))
	$btn_bgcolor 		= 'background-color: #' . $this->params->get('btn_bgcolor') . ';';
	
$btn_hoverbgcolor 		= '';
if($this->params->get('btn_hoverbgcolor'))
	$btn_hoverbgcolor 		= 'background-color: #' . $this->params->get('btn_hoverbgcolor') . ';';

$btn_fontcolor 			= '';
if($this->params->get('btn_fontcolor'))
	$btn_fontcolor 			= 'color: #' . $this->params->get('btn_fontcolor') . '	!important;';

$btn_hoverfontcolor 	= '';
if($this->params->get('btn_hoverfontcolor'))
	$btn_hoverfontcolor 	= 'color: #' . $this->params->get('btn_hoverfontcolor') . '	!important;';
	
$btn_border				= '';
if($this->params->get('btn_bordercolor'))
	$btn_border			= 'border: 1px solid #' . $this->params->get('btn_bordercolor') . ';';
	
$btn_borderradius		= $this->params->get('btn_borderradius');

$btn_shadow				= '';
if(!$this->params->get('btn_shadow'))
	$btn_shadow			= 'box-shadow: none;';
else if($this->params->get('btn_shadowcolor'))
{
	$btn_shadowcolor	= '#' . $this->params->get('btn_shadowcolor');
	$btn_shadow			= 'box-shadow: 1px 1px 1px ' . $btn_shadowcolor . ';';
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Toggling parameters

$toggle_bgcolor 			= '';
if($this->params->get('toggle_bgcolor'))
	$toggle_bgcolor 		= 'background-color: #' . $this->params->get('toggle_bgcolor') . ';';

$toggle_border				= '';	
if($this->params->get('toggle_bordercolor'))
	$toggle_border 			= '1px solid #' . $this->params->get('toggle_bordercolor') . ';';
	
$toggle_fontcolor	 		= '';
if($this->params->get('toggle_fontcolor'))
	$toggle_fontcolor	 	= 'color: #' . $this->params->get('toggle_fontcolor') . ';';

$toggle_pattern 			= $this->params->get('toggle_pattern');
$toggle_patternrepeating	= $this->params->get('toggle_patternrepeating'); 
$toggle_patternpositioning	= $this->params->get('toggle_patternpositioning'); 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$custom_css 			= htmlspecialchars($this->params->get('custom_css')); 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$hspan = "	var h = asjQuery(this).html();
			var index = h.indexOf(' ');
			if(index == -1) {
				index = h.length;
			}
			asjQuery(this).html('<span>' + h.substring(0, index) + '</span>' + h.substring(index, h.length));";
			
			
include 'params/params.header.php';
include 'params/params.sidebars.php';
include 'params/params.content.php';
include 'params/params.footer.php';

?>

