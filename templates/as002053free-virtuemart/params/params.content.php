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
// Main column parameters
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$main_location 	= 'left';	

if($rightcolumn_location != 'right')
{
	$main_location = 'right';
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main Column - Dimensions


$main_width = $content_width;

if ($rightcolumn && $leftcolumn)
{
	$main_width = $content_width - ($sidebar_width * 2) - ($padding * 2);
}
else if ($rightcolumn || $leftcolumn)
{
	$main_width = $content_width - $sidebar_width - $padding;
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$main_blogcols2width = 0;
$main_blogcols3width = 0;
$main_blogcols4width = 0;

$main_componentwidth = $main_width;

if($leftcolumn && $rightcolumn)
{
	$main_blogcols2width = ($main_componentwidth - $padding) / 2;
	$main_blogcols3width = $main_componentwidth;
	$main_blogcols4width = $main_componentwidth;
}
else
{
	$main_blogcols2width = ($main_componentwidth - $padding) / 2;
	$main_blogcols3width = ($main_componentwidth - $padding * 2) / 3;
	$main_blogcols4width = ($main_componentwidth - $padding * 3) / 4;
}


$main_onefifth_width = ($main_componentwidth - $padding * 4) / 5;
$main_onefourth_width = ($main_componentwidth - $padding * 3) / 4;
$main_threefourth_width = $main_componentwidth - $main_onefourth_width - $padding;
$main_onethird_width = ($main_componentwidth - $padding * 2) / 3;
$main_twothird_width = $main_componentwidth - $main_onethird_width - $padding;
$main_onehalf_width = ($main_componentwidth - $padding) / 2;


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Fonts


$body_h1fontsize 			= $this->params->get('body_h1fontsize'); 
$body_h2fontsize 			= $this->params->get('body_h2fontsize'); 
$body_h3fontsize 			= $this->params->get('body_h3fontsize'); 
$body_h4fontsize 			= $this->params->get('body_h4fontsize'); 
$body_h5fontsize 			= $this->params->get('body_h5fontsize'); 
$body_hfontweight 			= $this->params->get('body_hfontweight');
$body_htransform		 	= $this->params->get('body_htransform');

$body_hbgimg				= '';
$body_hbgcolor 				= '';

if($this->params->get('body_hbgimg') && !$this->params->get('body_hbgcolor'))
{
	$body_hbgimg 			= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('body_hbgimg') . '");';
	$body_hbgcolor		 	= 'background-color: transparent;'; 	
}
else if($this->params->get('body_hbgcolor') && !$this->params->get('body_hbgimg'))
{
	$body_hbgimg 			= 'background-image: none;'; 	
	$body_hbgcolor 			= 'background-color: #' . $this->params->get('body_hbgcolor') . ';';
}
else if($this->params->get('body_hbgcolor') && $this->params->get('body_hbgimg'))
{
	$body_hbgimg 			= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('body_hbgimg') . '");';	
	$body_hbgcolor 			= 'background-color: #' . $this->params->get('body_hbgcolor') . ';';
}

$body_hfontcolor 			= '';
$body_hfontcolor_paramvalue	= '';
if($this->params->get('body_hfontcolor'))
{
	$body_hfontcolor_paramvalue	= 'color: #' . ($this->params->get('body_hfontcolor')) . ';';
	$body_hfontcolor 			= $body_hfontcolor_paramvalue;
}

$body_hshadowcolor 	= '';
if($this->params->get('body_hshadowcolor'))
	$body_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('body_hshadowcolor') . ';';	


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Separator height between featured articles


$main_itemseparator = 25;
if ($this->params->get('main_itemseparator'))
{
	$main_itemseparator = htmlspecialchars($this->params->get('main_itemseparator'));
}


if(JRequest::getVar('tmpl') != 'component')
{
	if($featured_view && $menu_params->get('num_columns'))
	{
		$featured_rows = ceil($menu_params->get('num_intro_articles') / $menu_params->get('num_columns') - 1);
	}
}
	

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main Column - Row 3


$main_row3_bgpattern		= '';
$main_row3_bgcolor 		= '';

if($this->params->get('main_row3_bgpattern') && !$this->params->get('main_row3_bgcolor'))
{
	$main_row3_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('main_row3_bgpattern') . '");';
	$main_row3_bgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('main_row3_bgcolor') && !$this->params->get('main_row3_bgpattern'))
{
	$main_row3_bgpattern	= 'background-image: none;';	
	$main_row3_bgcolor 	= 'background-color: #' . $this->params->get('main_row3_bgcolor') . ';'; 
}
else if($this->params->get('main_row3_bgcolor') && $this->params->get('main_row3_bgpattern'))
{
	$main_row3_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('main_row3_bgpattern') . '");';
	$main_row3_bgcolor 	= 'background-color: #' . $this->params->get('main_row3_bgcolor') . ';'; 
}


$main_row3_hfontcolor 		= '';
if($this->params->get('main_row3_hfontcolor'))
	$main_row3_hfontcolor 	= 'color: #' . $this->params->get('main_row3_hfontcolor') . ';';
 
$main_row3_hshadowcolor 	= '';
if($this->params->get('main_row3_hshadowcolor'))
	$main_row3_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('main_row3_hshadowcolor') . ';';


$main_row3_hspancolor 	= '';
if($this->params->get('main_row3_hspan'))
{
	$main_row3_hspancolor = 'color: #' . $this->params->get('main_row3_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#colmain .row3 h3 a').length > 0)
				{
					asjQuery('#colmain .row3 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#colmain .row3 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}

$main_row3_fontcolor 		= '';
if($this->params->get('main_row3_fontcolor'))
	$main_row3_fontcolor 	= 'color: #' . $this->params->get('main_row3_fontcolor') . ';';
	
$main_row3_linkcolor 		= '';
if($this->params->get('main_row3_linkcolor'))
	$main_row3_linkcolor 		= 'color: #' . $this->params->get('main_row3_linkcolor') . ';';
	
$main_row3_linkcolorhover 	= '';
if($this->params->get('main_row3_linkcolorhover'))
	$main_row3_linkcolorhover 	= 'color: #' . $this->params->get('main_row3_linkcolorhover') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main Column - Row 3 - Dimensions


$main_row3  = 0;
$main_row3  += (bool) $this->countModules('position-28');
$main_row3  += (bool) $this->countModules('position-29'); 
$main_row3  += (bool) $this->countModules('position-30'); 
$main_row3  += (bool) $this->countModules('position-31'); 

$main_row3_colwidth = $main_componentwidth - 2;	

if($main_row3 == 2)
{
	$main_row3_colwidth = ($main_componentwidth - 2) / 2;
}
else if($main_row3 == 3)
{
	$main_row3_colwidth = ($main_componentwidth - 2) / 3;
}
else if($main_row3 == 4)
{
	$main_row3_colwidth = ($main_componentwidth - 2) / 4;
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main Column - Row 4

	
$main_row4_hbgpattern		= '';
$main_row4_hbgcolor 		= '';

if($this->params->get('main_row4_hbgpattern') && !$this->params->get('main_row4_hbgcolor'))
{
	$main_row4_hbgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('main_row4_hbgpattern') . '");';
	$main_row4_hbgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('main_row4_hbgcolor') && !$this->params->get('main_row4_hbgpattern'))
{
	$main_row4_hbgpattern	= 'background-image: none;';	
	$main_row4_hbgcolor 	= 'background-color: #' . $this->params->get('main_row4_hbgcolor') . ';'; 
}
else if($this->params->get('main_row4_hbgcolor') && $this->params->get('main_row4_hbgpattern'))
{
	$main_row4_hbgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('main_row4_hbgpattern') . '");';
	$main_row4_hbgcolor 	= 'background-color: #' . $this->params->get('main_row4_hbgcolor') . ';'; 
}

$main_row4_hfontcolor 		= '';
if($this->params->get('main_row4_hfontcolor'))
	$main_row4_hfontcolor 	= 'color: #' . $this->params->get('main_row4_hfontcolor') . ';';
	
$main_row4_hshadowcolor 	= '';
if($this->params->get('main_row4_hshadowcolor'))
	$main_row4_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('main_row4_hshadowcolor') . ';';

$main_row4_hspancolor 	= '';
if($this->params->get('main_row4_hspan'))
{
	$main_row4_hspancolor = 'color: #' . $this->params->get('main_row4_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#colmain .row4 h3 a').length > 0)
				{
					asjQuery('#colmain .row4 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#colmain .row4 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}
	
$main_row4_fontcolor 		= '';
if($this->params->get('main_row4_fontcolor'))
	$main_row4_fontcolor 	= 'color: #' . $this->params->get('main_row4_fontcolor') . ';';
	
$main_row4_linkcolor 		= '';
if($this->params->get('main_row4_linkcolor'))
	$main_row4_linkcolor 	= 'color: #' . $this->params->get('main_row4_linkcolor') . ';';
	
$main_row4_linkcolorhover 	= '';
if($this->params->get('main_row4_linkcolorhover'))
	$main_row4_linkcolorhover 	= 'color: #' . $this->params->get('main_row4_linkcolorhover') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main Column - Row 4 - Dimensions


$main_row4  = 0;
$main_row4  += (bool) $this->countModules('position-32');
$main_row4  += (bool) $this->countModules('position-33'); 
$main_row4  += (bool) $this->countModules('position-34'); 
$main_row4  += (bool) $this->countModules('position-35'); 


if($main_row4 == 2)
{
	$main_row4_colwidth = ($main_componentwidth - $main_sepwidth) / 2;
}
else if($main_row4 == 3)
{
	$main_row4_colwidth = ($main_componentwidth - $main_sepwidth * 2) / 3;
}
else if($main_row4 == 4)
{
	$main_row4_colwidth = ($main_componentwidth - $main_sepwidth * 3) / 4;
}
else
{
	$main_row4_colwidth = $main_componentwidth;	
}	


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main Column - Row 4 - Separators


$main_row4_separator1 = 0;
$main_row4_separator2 = 0;
$main_row4_separator3 = 0;

$main_row4_separator1 += (bool)($this->countModules('position-32') && ($this->countModules('position-33') ||
                          				                    				   $this->countModules('position-34') ||
                                        				      				   $this->countModules('position-35')));

$main_row4_separator2 += (bool)(($this->countModules('position-32') || $this->countModules('position-33')) && 
					  			      ($this->countModules('position-34') || $this->countModules('position-35')));
					
$main_row4_separator3 += (bool)(($this->countModules('position-32') || 
									   $this->countModules('position-33') ||
									   $this->countModules('position-34')) && ($this->countModules('position-35')));


?>
