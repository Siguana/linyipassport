<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: Creative Commons
/*
/*******************************************************************************************/


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header parameters
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$header_overlayimg	= '';
if($this->params->get('header_showoverlayimg') && $this->params->get('header_overlayimg'))
	$header_overlayimg		= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('header_overlayimg') . '");'; 
else if(!$this->params->get('header_showoverlayimg'))
	$header_overlayimg		= 'background-image: none;';
	
	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 1 
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 1 (Logo)


$logo_type 			= $this->params->get('logo_type',0); 
$logo_img 			= $this->baseurl . '/templates/' . $this->template . '/images/companylogo.png';

if ($this->params->get('logo_img')) 
{ 
	$logo_img = $this->params->get('logo_img');

	if($logo_img == 'companylogo.png') 
	{
		$logo_img = $this->baseurl . '/templates/' . $this->template . '/images/companylogo.png';
	}
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$logo_txt 					= htmlspecialchars($this->params->get('logo_txt')); 
$logo_txtfontsize 			= $this->params->get('logo_txtfontsize'); 
$logo_txtfontstyle 			= $this->params->get('logo_txtfontstyle'); 
$logo_txtfontweight 		= $this->params->get('logo_txtfontweight'); 
$logo_txtcolor 				= '';
if($this->params->get('logo_txtcolor'))
	$logo_txtcolor 				= 'color: #' . $this->params->get('logo_txtcolor') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 1 (Slogan)


$slogan_txt 				= htmlspecialchars($this->params->get('slogan_txt')); 
$slogan_txtfontsize 		= $this->params->get('slogan_txtfontsize'); 
$slogan_txtfontstyle 		= $this->params->get('slogan_txtfontstyle'); 
$slogan_txtfontweight 		= $this->params->get('slogan_txtfontweight'); 
$slogan_txtcolor 			= '';
if($this->params->get('slogan_txtcolor'))
	$slogan_txtcolor 			= 'color: #' . $this->params->get('slogan_txtcolor') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 2
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Top Menu

$topmenu_bgimg			= '';
if($this->params->get('topmenu_bgimg'))
	$topmenu_bgimg 	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('topmenu_bgimg') . '");';

$topmenu_bgcolor		= '';
if($this->params->get('topmenu_bgcolor'))
	$topmenu_bgcolor 	= 'background-color: #' . $this->params->get('topmenu_bgcolor') . ';'; 
	
$topmenu_sepcolor		= '';
if($this->params->get('topmenu_sepcolor'))
	$topmenu_sepcolor 	= 'border-right: 1px solid #' . $this->params->get('topmenu_sepcolor') . ';'; 	
	
$topmenu_fontcolor 			= '';
if($this->params->get('topmenu_fontcolor'))
	$topmenu_fontcolor 			= 'color: #' . $this->params->get('topmenu_fontcolor') . ';'; 

$topmenu_hoverfontcolor 	= '';
if($this->params->get('topmenu_hoverfontcolor'))
	$topmenu_hoverfontcolor 	= 'color: #' . $this->params->get('topmenu_hoverfontcolor') . ';'; 

$topmenu_shadowcolor = '';
if($this->params->get('topmenu_shadowcolor'))
{
	$topmenu_shadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('topmenu_shadowcolor') . ';';	
}

$topmenu_fontweight 		= $this->params->get('topmenu_fontweight'); 
$topmenu_fontsize 			= $this->params->get('topmenu_fontsize'); 

$submenu_bgcolor 			= '';
if($this->params->get('submenu_bgcolor'))
	$submenu_bgcolor 		= 'background-color: #' . $this->params->get('submenu_bgcolor') . ';'; 
	
$submenu_bordercolor 		= '';
if($this->params->get('submenu_bordercolor'))
	$submenu_border 		= 'border: 1px solid #' . $this->params->get('submenu_bordercolor') . ';'; 

$submenu_fontcolor 			= '';
if($this->params->get('submenu_fontcolor'))
	$submenu_fontcolor 			= 'color: #' . $this->params->get('submenu_fontcolor') . ';'; 
	
$submenu_hoverfontcolor 	= '';
if($this->params->get('submenu_hoverfontcolor'))
	$submenu_hoverfontcolor 	= 'color: #' . $this->params->get('submenu_hoverfontcolor') . ';'; 

$submenu_fontweight 		= $this->params->get('submenu_fontweight'); 
$submenu_fontsize 			= $this->params->get('submenu_fontsize'); 
$submenu_width	 			= $this->params->get('submenu_width'); 

$topmenu_parentmark 		= $this->baseurl . '/templates/' . $this->template . '/images/mark.parent.png';

	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 3
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$header_row3 = 0;
$header_row3 += (bool) $this->countModules('slider');
$header_row3 += (bool) $this->countModules('position-7'); 
$header_row3 += (bool) $this->countModules('position-8'); 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$row3col2_width = 'auto';
if($slider_width && $this->countModules('slider') && ($this->countModules('position-7') || $this->countModules('position-8')))
{
	$row3col2_width = ($page_width - $slider_width - 30) . 'px';
}

$row3col2_inputwidth = $row3col2_width - 64;

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Custom modules
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$header_customrow_h1fontsize 	= $this->params->get('header_customrow_h1fontsize'); 
$header_customrow_h2fontsize 	= $this->params->get('header_customrow_h2fontsize'); 
$header_customrow_h3fontsize 	= $this->params->get('header_customrow_h3fontsize'); 
$header_customrow_h4fontsize 	= $this->params->get('header_customrow_h4fontsize'); 
$header_customrow_h5fontsize 	= $this->params->get('header_customrow_h5fontsize'); 
$header_customrow_hfontweight 	= $this->params->get('header_customrow_hfontweight'); 
$header_customrow_htransform 	= $this->params->get('header_customrow_htransform'); 
$header_customrow_fontsize 		= $this->params->get('header_customrow_fontsize'); 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Positions 7


$header_topcustomrow_bgimg			= '';
$header_topcustomrow_bgcolor		= '';

if($this->params->get('topheader_customrow_bgimg') && !$this->params->get('header_topcustomrow_bgcolor'))
{
	$header_topcustomrow_bgimg 		= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('header_topcustomrow_bgimg') . '");';
	$header_topcustomrow_bgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('header_topcustomrow_bgcolor') && !$this->params->get('topheader_customrow_bgimg'))
{
	$header_topcustomrow_bgimg 		= 'background-image: none;';	
	$header_topcustomrow_bgcolor 	= 'background-color: #' . $this->params->get('header_topcustomrow_bgcolor') . ';'; 
}
else if($this->params->get('header_topcustomrow_bgcolor') && $this->params->get('topheader_customrow_bgimg'))
{
	$header_topcustomrow_bgimg 		= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('header_topcustomrow_bgimg') . '");';
	$header_topcustomrow_bgcolor 	= 'background-color: #' . $this->params->get('header_topcustomrow_bgcolor') . ';'; 
}

$header_topcustomrow_hfontcolor 	= '';
if($this->params->get('header_topcustomrow_hfontcolor'))
	$header_topcustomrow_hfontcolor 	= 'color: #' . $this->params->get('header_topcustomrow_hfontcolor') . ';'; 
	
$header_topcustomrow_hshadowcolor 	= '';
if($this->params->get('header_topcustomrow_hshadowcolor'))
	$header_topcustomrow_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('header_topcustomrow_hshadowcolor') . ';';	

$header_topcustomrow_fontcolor			= '';
if($this->params->get('header_topcustomrow_fontcolor'))
	$header_topcustomrow_fontcolor 		= 'color: #' . $this->params->get('header_topcustomrow_fontcolor') . ';'; 
	
$header_topcustomrow_linkcolor 		= '';
if($this->params->get('header_topcustomrow_linkcolor'))
	$header_topcustomrow_linkcolor 		= 'color: #' . $this->params->get('header_topcustomrow_linkcolor') . ';'; 
	
$header_topcustomrow_linkcolorhover 	= '';
if($this->params->get('header_topcustomrow_linkcolorhover'))
	$header_topcustomrow_linkcolorhover 	= 'color: #' . $this->params->get('header_topcustomrow_linkcolorhover') . ';'; 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Position 8


$header_mdlcustomrow_hfontcolor 	= '';
if($this->params->get('header_mdlcustomrow_hfontcolor'))
	$header_mdlcustomrow_hfontcolor 	= 'color: #' . $this->params->get('header_mdlcustomrow_hfontcolor') . ';'; 
	
$header_mdlcustomrow_hshadowcolor 	= '';
if($this->params->get('header_mdlcustomrow_hshadowcolor'))
	$header_mdlcustomrow_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('header_mdlcustomrow_hshadowcolor') . ';';	

$header_mdlcustomrow_fontcolor			= '';
if($this->params->get('header_mdlcustomrow_fontcolor'))
	$header_mdlcustomrow_fontcolor 		= 'color: #' . $this->params->get('header_mdlcustomrow_fontcolor') . ';'; 
	
$header_mdlcustomrow_linkcolor 		= '';
if($this->params->get('header_mdlcustomrow_linkcolor'))
	$header_mdlcustomrow_linkcolor 		= 'color: #' . $this->params->get('header_mdlcustomrow_linkcolor') . ';'; 
	
$header_mdlcustomrow_linkcolorhover 	= '';
if($this->params->get('header_mdlcustomrow_linkcolorhover'))
	$header_mdlcustomrow_linkcolorhover 	= 'color: #' . $this->params->get('header_mdlcustomrow_linkcolorhover') . ';'; 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Positions 12, 13, 14 & 15


$header_customrow_bgimg			= '';
$header_customrow_bgcolor		= '';

if($this->params->get('header_customrow_bgimg'))
{
	$header_customrow_bgimg 	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('header_customrow_bgimg') . '");';
	$header_customrow_bgcolor 	= 'background-color: transparent;'; 	
}
if($this->params->get('header_customrow_bgcolor'))
{
	$header_customrow_bgimg 	= 'background-image: none;';	
	$header_customrow_bgcolor 	= 'background-color: #' . $this->params->get('header_customrow_bgcolor') . ';'; 
}

$header_customrow_hfontcolor 	= '';
if($this->params->get('header_customrow_hfontcolor'))
	$header_customrow_hfontcolor 	= 'color: #' . $this->params->get('header_customrow_hfontcolor') . ';'; 
	
$header_customrow_hshadowcolor 	= '';
if($this->params->get('header_customrow_hshadowcolor'))
	$header_customrow_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('header_customrow_hshadowcolor') . ';';	

$header_customrow_hspancolor 	= '';
if($this->params->get('header_customrow_hspan'))
{
	$header_customrow_hspancolor = 'color: #' . $this->params->get('header_customrow_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#header .row4 h3 a').length > 0)
				{
					asjQuery('#header .row4 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#header .row4 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}

$header_customrow_fontcolor			= '';
if($this->params->get('header_customrow_fontcolor'))
	$header_customrow_fontcolor 		= 'color: #' . $this->params->get('header_customrow_fontcolor') . ';'; 
	
$header_customrow_linkcolor 		= '';
if($this->params->get('header_customrow_linkcolor'))
	$header_customrow_linkcolor 		= 'color: #' . $this->params->get('header_customrow_linkcolor') . ';'; 
	
$header_customrow_linkcolorhover 	= '';
if($this->params->get('header_customrow_linkcolorhover'))
	$header_customrow_linkcolorhover 	= 'color: #' . $this->params->get('header_customrow_linkcolorhover') . ';'; 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$header_customrow = 0;
$header_customrow += (bool) $this->countModules('position-12');
$header_customrow += (bool) $this->countModules('position-13'); 
$header_customrow += (bool) $this->countModules('position-14'); 
$header_customrow += (bool) $this->countModules('position-15'); 

$header_customrow_contwidth = $content_width;
$header_customrow_sepwidth = 30;

$header_customrow_width = $header_customrow_contwidth - 2;

if($header_customrow == 2)
{
	$header_customrow_width = ($header_customrow_contwidth - 2) / 2;
}
else if($header_customrow == 3)
{
	$header_customrow_width = ($header_customrow_contwidth - 2) / 3;
}
else if($header_customrow == 4)
{
	$header_customrow_width = ($header_customrow_contwidth - 2) / 4;
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 4 Separators


$header_customrow_separator1 = 0;
$header_customrow_separator2 = 0;
$header_customrow_separator3 = 0;

$header_customrow_separator1 += (bool)($this->countModules('position-12') && ($this->countModules('position-13') ||
                                           				    			 $this->countModules('position-14') ||
                                              				    		 $this->countModules('position-15')));

$header_customrow_separator2 += (bool)($this->countModules('position-13') && ($this->countModules('position-14') || 
                                                                		 $this->countModules('position-15')));
					
$header_customrow_separator3 += (bool)($this->countModules('position-14') && ($this->countModules('position-15')));



// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Breadcrumbs



$breadrow_customrow_bgimg		= '';
if($this->params->get('breadrow_customrow_bgimg'))
	$breadrow_customrow_bgimg 	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('breadrow_customrow_bgimg') . '");';

$breadrow_customrow_bgcolor		= '';
if($this->params->get('breadrow_customrow_bgcolor'))
	$breadrow_customrow_bgcolor = 'background-color: #' . $this->params->get('breadrow_customrow_bgcolor') . ';'; 
	
$breadrow_texttransform 	= $this->params->get('breadrow_texttransform');
$breadrow_textalign		 	= $this->params->get('breadrow_textalign');
$breadrow_fontsize 			= $this->params->get('breadrow_fontsize');
$breadrow_fontweight		= $this->params->get('breadrow_fontweight');

$breadrow_fontcolor 		= '';
if($this->params->get('breadrow_fontcolor'))
	$breadrow_fontcolor 		= 'color: #' . $this->params->get('breadrow_fontcolor') . ';';

$breadrow_hoverfontcolor 	= '';
if($this->params->get('breadrow_hoverfontcolor'))
	$breadrow_hoverfontcolor 	= 'color: #' . $this->params->get('breadrow_hoverfontcolor') . ';';

?>
