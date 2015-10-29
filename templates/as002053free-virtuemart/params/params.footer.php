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
// Footer
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Footer - Row 1 


$footer_row1_bgpattern 			= '';
$footer_row1_bgcolor			= '';

if($this->params->get('footer_row1_bgpattern') && !$this->params->get('footer_row1_bgcolor'))
{
	$footer_row1_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('footer_row1_bgpattern') . '");';
	$footer_row1_bgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('footer_row1_bgcolor') && !$this->params->get('footer_row1_bgpattern'))
{
	$footer_row1_bgpattern	= 'background-image: none;';	
	$footer_row1_bgcolor 	= 'background-color: #' . $this->params->get('footer_row1_bgcolor') . ';'; 
}
else if($this->params->get('footer_row1_bgcolor') && $this->params->get('footer_row1_bgpattern'))
{
	$footer_row1_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('footer_row1_bgpattern') . '");';
	$footer_row1_bgcolor 	= 'background-color: #' . $this->params->get('footer_row1_bgcolor') . ';'; 
}

	
$footer_row1_fontcolor 			= '';
if($this->params->get('footer_row1_fontcolor'))
	$footer_row1_fontcolor		= 'color: #' . $this->params->get('footer_row1_fontcolor') . ';';

$footer_row1_linkcolor 			= '';
if($this->params->get('footer_row1_linkcolor'))
	$footer_row1_linkcolor 		= 'color: #' . $this->params->get('footer_row1_linkcolor') . ';';
	
$footer_row1_linkcolorhover 	= '';
if($this->params->get('footer_row1_linkcolorhover'))
	$footer_row1_linkcolorhover = 'color: #' . $this->params->get('footer_row1_linkcolorhover') . ';';

$footer_row1_h1fontsize 		= $this->params->get('footer_row1_h1fontsize');
$footer_row1_h2fontsize 		= $this->params->get('footer_row1_h2fontsize');
$footer_row1_h3fontsize 		= $this->params->get('footer_row1_h3fontsize');
$footer_row1_h4fontsize 		= $this->params->get('footer_row1_h4fontsize');
$footer_row1_h5fontsize 		= $this->params->get('footer_row1_h5fontsize');
$footer_row1_hfontweight 		= $this->params->get('footer_row1_hfontweight');

$footer_row1_htransform			= $this->params->get('footer_row1_htransform');

$footer_row1_hfontcolor			= '';
if($this->params->get('footer_row1_hfontcolor'))
	$footer_row1_hfontcolor		= 'color: #' . $this->params->get('footer_row1_hfontcolor') . ';';
	
$footer_row1_hshadowcolor 	= '';
if($this->params->get('footer_row1_hshadowcolor'))
	$footer_row1_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('footer_row1_hshadowcolor') . ';';


$footer_row1_hspancolor 	= '';
if($this->params->get('footer_row1_hspan'))
{
	$footer_row1_hspancolor = 'color: #' . $this->params->get('footer_row1_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#footer .row1 h3 a').length > 0)
				{
					asjQuery('#footer .row1 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#footer .row1 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}
	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Footer - Row 1 Dimensions


$footer_row1 = 0;
$footer_row1 += (bool) $this->countModules('position-56');
$footer_row1 += (bool) $this->countModules('position-57'); 
$footer_row1 += (bool) $this->countModules('position-58'); 
$footer_row1 += (bool) $this->countModules('position-59'); 

$footer_row1_colwidth = $content_width - 2;

if($footer_row1 == 2)
{
	$footer_row1_colwidth = ($content_width - $main_sepwidth) / 2 - 2;
}
if($footer_row1 == 3)
{
	$footer_row1_colwidth = ($content_width - $main_sepwidth * 2) / 3 - 2;
}
if($footer_row1 == 4)
{
	$footer_row1_colwidth = ($content_width - $main_sepwidth * 3) / 4 - 2;
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Footer - Row 1 Separators


$footer_row1_separator1 = 0;
$footer_row1_separator2 = 0;
$footer_row1_separator3 = 0;

$footer_row1_separator1 += (bool)($this->countModules('position-56') && 
								 ($this->countModules('position-57') || 
								  $this->countModules('position-58') ||
								  $this->countModules('position-59')));

$footer_row1_separator2 += (bool)( $this->countModules('position-57') && 
								  ($this->countModules('position-58') ||
								   $this->countModules('position-59')));

$footer_row1_separator3 += (bool)($this->countModules('position-58') && 
								  $this->countModules('position-59'));


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Footer - Row 2

$footer_row2_bgpattern 			= '';
$footer_row2_bgcolor			= '';

if($this->params->get('footer_row2_bgpattern') && !$this->params->get('footer_row2_bgcolor'))
{
	$footer_row2_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('footer_row2_bgpattern') . '");';
	$footer_row2_bgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('footer_row2_bgcolor') && !$this->params->get('footer_row2_bgpattern'))
{
	$footer_row2_bgpattern	= 'background-image: none;';	
	$footer_row2_bgcolor 	= 'background-color: #' . $this->params->get('footer_row2_bgcolor') . ';'; 
}
else if($this->params->get('footer_row2_bgcolor') && $this->params->get('footer_row2_bgpattern'))
{
	$footer_row2_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('footer_row2_bgpattern') . '");';
	$footer_row2_bgcolor 	= 'background-color: #' . $this->params->get('footer_row2_bgcolor') . ';'; 
}

$footer_row2_hfontcolor 	= '';
if($this->params->get('footer_row2_hfontcolor'))
	$footer_row2_hfontcolor = 'color: #' . $this->params->get('footer_row2_hfontcolor') . ';';

$footer_row2_hshadowcolor 	= '';
if($this->params->get('footer_row2_hshadowcolor'))
{
	$footer_row2_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('footer_row2_hshadowcolor') . ';';
}

$footer_row2_hspancolor 	= '';
if($this->params->get('footer_row2_hspan'))
{
	$footer_row2_hspancolor = 'color: #' . $this->params->get('footer_row2_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#footer .row2 h3 a').length > 0)
				{
					asjQuery('#footer .row2 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#footer .row2 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}

$footer_row2_fontcolor 			= '';
if($this->params->get('footer_row2_fontcolor'))
	$footer_row2_fontcolor 		= 'color: #' . $this->params->get('footer_row2_fontcolor') . ';';

$footer_row2_linkcolor 			= '';
if($this->params->get('footer_row2_linkcolor'))
	$footer_row2_linkcolor 		= 'color: #' . $this->params->get('footer_row2_linkcolor') . ';';

$footer_row2_linkcolorhover 	= '';
if($this->params->get('footer_row2_linkcolorhover'))
	$footer_row2_linkcolorhover	= 'color: #' . $this->params->get('footer_row2_linkcolorhover') . ';';

$footer_row2_h1fontsize			= $this->params->get('footer_row2_h1fontsize');
$footer_row2_h2fontsize			= $this->params->get('footer_row2_h2fontsize');
$footer_row2_h3fontsize			= $this->params->get('footer_row2_h3fontsize');
$footer_row2_h4fontsize			= $this->params->get('footer_row2_h4fontsize');
$footer_row2_h5fontsize			= $this->params->get('footer_row2_h5fontsize');

$footer_row2_fontsize 			= $this->params->get('footer_row2_fontsize');
$footer_row2_htexttransform		= $this->params->get('footer_row2_htexttransform');

$footer_row2col1_extension 		= $this->params->get('footer_row2col1_extension');

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Footer - Row 2 Dimensions


$footer_row2 = 0;
$footer_row2 += (bool) $this->countModules('position-50');
$footer_row2 += (bool) $this->countModules('position-51');
$footer_row2 += (bool) $this->countModules('position-52');
$footer_row2 += (bool) $this->countModules('position-53') || $this->countModules('position-54');


$footer_row2_width = $content_width;
$footer_row2_colwidth = $footer_row2_width;

if($footer_row2 == 2)
{
	$footer_row2_colwidth = ($footer_row2_width - $footer_sidepadding) / 2 - 2;	
}
else if($footer_row2 == 3)
{
	$footer_row2_colwidth = ($footer_row2_width - $footer_sidepadding * 2) / 3 - 2;	
}
else if($footer_row2 == 4)
{
	$footer_row2_colwidth = ($footer_row2_width - $footer_sidepadding * 3) / 4 - 2;	
}

$footer_row2col1_width = $footer_row2_colwidth;

// If extend to column 2
if($footer_row2col1_extension)
{
	if(($footer_row2col1_extension == 1 && $home_page) || ($footer_row2col1_extension == 2))
	{
		$footer_row2 = 0;
		$footer_row2 += (bool) $this->countModules('position-52');
		$footer_row2 += (bool) $this->countModules('position-53') || $this->countModules('position-54');	

		if($this->countModules('position-50') && $footer_row2 == 2)
		{
			$footer_row2_colwidth = ($footer_row2_width - $footer_sidepadding * 3) / 4 - 2;	
			$footer_row2col1_width = $footer_row2_colwidth * 2 + 30;			
		}
		else if($this->countModules('position-50') && $footer_row2 == 1)
		{
			$footer_row2_colwidth = ($footer_row2_width - $footer_sidepadding) / 2 - 2;	
			$footer_row2col1_width = $footer_row2_colwidth;		
		}
		else if(!$this->countModules('position-50'))
		{
			$footer_row2 = 0;
			$footer_row2 += (bool) $this->countModules('position-51');
			$footer_row2 += (bool) $this->countModules('position-52');
			$footer_row2 += (bool) $this->countModules('position-53') || $this->countModules('position-54');
			
			$footer_row2_colwidth = $footer_row2_width;
			
			if($footer_row2 == 2)
			{
				$footer_row2_colwidth = ($footer_row2_width - $footer_sidepadding) / 2 - 2;	
			}
			else if($footer_row2 == 3)
			{
				$footer_row2_colwidth = ($footer_row2_width - $footer_sidepadding * 2) / 3 - 2;	
			}			
		}
	}

}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Footer - Row2 Separators


$footer_row2_separator1 = 0;
$footer_row2_separator2 = 0;
$footer_row2_separator3 = 0;

$footer_row2_separator1 += (bool)($this->countModules('position-50') && 
								 ($this->countModules('position-51') || 
								  $this->countModules('position-52') ||
								  $this->countModules('position-53') || 
								  $this->countModules('position-54')));

$footer_row2_separator2 += (bool)(($this->countModules('position-50') ||
								   $this->countModules('position-51')) && 
								  ($this->countModules('position-52') ||
								   $this->countModules('position-53') || 
								   $this->countModules('position-54')));

$footer_row2_separator3 += (bool)(($this->countModules('position-50') || 
								   $this->countModules('position-51') ||
								   $this->countModules('position-52')) && 
								  ($this->countModules('position-53') || 
								   $this->countModules('position-54')));	

// If extend to column 2
if($footer_row2col1_extension)
{
	$footer_row2_separator2 = 0;
	$footer_row2_separator2 += (bool)($this->countModules('position-50') || 
									  $this->countModules('position-51'));
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Footer - Row 3

$footer_row3_width = $content_width;

$footer_row3_fontsize 			= $this->params->get('footer_row3_fontsize');
$footer_row3_fontweight 		= $this->params->get('footer_row3_fontweight');
$footer_row3_texttransform 		= $this->params->get('footer_row3_texttransform');

$footer_row3_fontcolor 			= '';
if($this->params->get('footer_row3_fontcolor'))
	$footer_row3_fontcolor		= 'color: #' . $this->params->get('footer_row3_fontcolor') . ';';
	
$footer_row3_linkcolor 			= '';
if($this->params->get('footer_row3_linkcolor'))
	$footer_row3_linkcolor 		= 'color: #' . $this->params->get('footer_row3_linkcolor') . ';';
	
$footer_row3_linkcolorhover 	= '';
if($this->params->get('footer_row3_linkcolorhover'))
	$footer_row3_linkcolorhover	= 'color: #' . $this->params->get('footer_row3_linkcolorhover') . ';';


?>
