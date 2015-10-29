<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: Creative Commons
/*
/*******************************************************************************************/

$sidecolumn123_inputwidth = $sidebar_width - 54;
$sidecolumn45_inputwidth = $sidebar_width - $sidebar_modulepadding * 2 - 10;

$sidecolumn_h1fontsize 		= $this->params->get('sidecolumn_h1fontsize');
$sidecolumn_h2fontsize 		= $this->params->get('sidecolumn_h2fontsize');
$sidecolumn_h3fontsize 		= $this->params->get('sidecolumn_h3fontsize');
$sidecolumn_h4fontsize 		= $this->params->get('sidecolumn_h4fontsize');
$sidecolumn_h5fontsize 		= $this->params->get('sidecolumn_h5fontsize');

$sidecolumn_hfontweight 	= $this->params->get('sidecolumn_hfontweight');
$sidecolumn_htransform	 	= $this->params->get('sidecolumn_htransform');

$sidecolumn_menufontsize	= $this->params->get('sidecolumn_menufontsize');


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Left Column Parameters
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$leftcolumn = 0;
$leftcolumn += (bool) $this->countModules('position-0');
$leftcolumn += (bool) $this->countModules('position-40');
$leftcolumn += (bool) $this->countModules('position-41');
$leftcolumn += (bool) $this->countModules('position-42');
$leftcolumn += (bool) $this->countModules('position-43');
$leftcolumn += (bool) $this->countModules('position-44');


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$leftcolrows_123_hbgpattern 	= '';
$leftcolrows_123_hbgcolor		= '';

if($this->params->get('leftcolrows_123_hbgpattern') && !$this->params->get('leftcolrows_123_hbgcolor'))
{
	$leftcolrows_123_hbgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('leftcolrows_123_hbgpattern') . '");';
	$leftcolrows_123_hbgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('leftcolrows_123_hbgcolor') && !$this->params->get('leftcolrows_123_hbgpattern'))
{
	$leftcolrows_123_hbgpattern	= 'background-image: none;';	
	$leftcolrows_123_hbgcolor 	= 'background-color: #' . $this->params->get('leftcolrows_123_hbgcolor') . ';'; 
}
else if($this->params->get('leftcolrows_123_hbgcolor') && $this->params->get('leftcolrows_123_hbgpattern'))
{
	$leftcolrows_123_hbgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('leftcolrows_123_hbgpattern') . '");';
	$leftcolrows_123_hbgcolor 	= 'background-color: #' . $this->params->get('leftcolrows_123_hbgcolor') . ';'; 
}


$leftcolrows_123_hspancolor 	= '';
if($this->params->get('leftcolrows_123_hspan'))
{
	$leftcolrows_123_hspancolor = 'color: #' . $this->params->get('leftcolrows_123_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#colleft_rows_123 h3 a').length > 0)
				{
					asjQuery('#colleft_rows_123 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#colleft_rows_123 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}

$leftcolrows_123_hfontcolor 		= '';
if($this->params->get('leftcolrows_123_hfontcolor'))
	$leftcolrows_123_hfontcolor 	= 'color: #' . $this->params->get('leftcolrows_123_hfontcolor') . ';';
	
$leftcolrows_123_hshadowcolor = '';
if($this->params->get('leftcolrows_123_hshadowcolor'))
	$leftcolrows_123_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('leftcolrows_123_hshadowcolor') . ';';

$leftcolrows_123_fontcolor 			= '';
if($this->params->get('leftcolrows_123_fontcolor'))
	$leftcolrows_123_fontcolor 		= 'color: #' . $this->params->get('leftcolrows_123_fontcolor') . ';';

$leftcolrows_123_linkcolor 			= '';
if($this->params->get('leftcolrows_123_linkcolor'))
	$leftcolrows_123_linkcolor 		= 'color: #' . $this->params->get('leftcolrows_123_linkcolor') . ';';
	
$leftcolrows_123_linkhovercolor 	= '';
if($this->params->get('leftcolrows_123_linkhovercolor'))
	$leftcolrows_123_linkhovercolor = 'color: #' . $this->params->get('leftcolrows_123_linkhovercolor') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$leftcolrows_45_bgpattern 	= '';
$leftcolrows_45_bgcolor		= '';

if($this->params->get('leftcolrows_45_bgpattern'))
	$leftcolrows_45_hbgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('leftcolrows_45_bgpattern') . '");'; 
if($this->params->get('leftcolrows_45_bgcolor'))
	$leftcolrows_45_bgcolor		= 'background-color: #' . $this->params->get('leftcolrows_45_bgcolor') . ';';

if($this->params->get('leftcolrows_45_bgpattern') && !$this->params->get('leftcolrows_45_bgcolor'))
{
	$leftcolrows_45_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('leftcolrows_45_bgpattern') . '");';
	$leftcolrows_45_bgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('leftcolrows_45_bgcolor') && !$this->params->get('leftcolrows_45_bgpattern'))
{
	$leftcolrows_45_bgpattern	= 'background-image: none;';	
	$leftcolrows_45_bgcolor 	= 'background-color: #' . $this->params->get('leftcolrows_45_bgcolor') . ';'; 
}
else if($this->params->get('leftcolrows_45_bgcolor') && $this->params->get('leftcolrows_45_bgpattern'))
{
	$leftcolrows_45_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('leftcolrows_45_bgpattern') . '");';
	$leftcolrows_45_bgcolor 	= 'background-color: #' . $this->params->get('leftcolrows_45_bgcolor') . ';'; 
}

$leftcolrows_45_hfontcolor 		= '';
if($this->params->get('leftcolrows_45_hfontcolor'))
	$leftcolrows_45_hfontcolor 	= 'color: #' . $this->params->get('leftcolrows_45_hfontcolor') . ';';

$leftcolrows_45_hshadowcolor 	= '';
if($this->params->get('leftcolrows_45_hshadowcolor'))
	$leftcolrows_45_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('leftcolrows_45_hshadowcolor') . ';';

$leftcolrows_45_hspancolor 	= '';
if($this->params->get('leftcolrows_45_hspan'))
{
	$leftcolrows_45_hspancolor = 'color: #' . $this->params->get('leftcolrows_45_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#colleft_rows_45 h3 a').length > 0)
				{
					asjQuery('#colleft_rows_45 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#colleft_rows_45 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}

$leftcolrows_45_fontcolor 		= '';
if($this->params->get('leftcolrows_45_fontcolor'))
	$leftcolrows_45_fontcolor 	= 'color: #' . $this->params->get('leftcolrows_45_fontcolor') . ';';
	
$leftcolrows_45_linkcolor 		= '';
if($this->params->get('leftcolrows_45_linkcolor'))
	$leftcolrows_45_linkcolor 		= 'color: #' . $this->params->get('leftcolrows_45_linkcolor') . ';';
	
$leftcolrows_45_linkhovercolor 	= '';
if($this->params->get('leftcolrows_45_linkhovercolor'))
	$leftcolrows_45_linkhovercolor 	= 'color: #' . $this->params->get('leftcolrows_45_linkhovercolor') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Right Column Parameters
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$rightcolumn = 0;
$rightcolumn += (bool) $this->countModules('position-45');
$rightcolumn += (bool) $this->countModules('position-46');
$rightcolumn += (bool) $this->countModules('position-47');
$rightcolumn += (bool) $this->countModules('position-48');
$rightcolumn += (bool) $this->countModules('position-49');


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$rightcolumn_location 	= 'right';
$rightcolumn_padding	= '0px 0px 0px ' . $padding . 'px'; 

if ((($this->params->get('rightcolumn_location') == 'left_all')) ||
	(($this->params->get('rightcolumn_location') == 'left_home') && $home_page) ||
	(($this->params->get('rightcolumn_location') == 'left_featured') && (JRequest::getVar('view') == 'featured')) ||
	(($this->params->get('rightcolumn_location') == 'left_home_featured') && ((JRequest::getVar('view') == 'featured') || $home_page)))
{
	$rightcolumn_location = 'left';
	$rightcolumn_padding = '0px ' . $padding . 'px 0px 0px'; 
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$rightcolrows_123_hbgpattern 	= '';
$rightcolrows_123_hbgcolor		= '';

if($this->params->get('rightcolrows_123_hbgpattern') && !$this->params->get('rightcolrows_123_hbgcolor'))
{
	$rightcolrows_123_hbgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('rightcolrows_123_hbgpattern') . '");';
	$rightcolrows_123_hbgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('rightcolrows_123_hbgcolor') && !$this->params->get('rightcolrows_123_hbgpattern'))
{
	$rightcolrows_123_hbgpattern	= 'background-image: none;';	
	$rightcolrows_123_hbgcolor 	= 'background-color: #' . $this->params->get('rightcolrows_123_hbgcolor') . ';'; 
}
else if($this->params->get('rightcolrows_123_hbgcolor') && $this->params->get('rightcolrows_123_hbgpattern'))
{
	$rightcolrows_123_hbgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('rightcolrows_123_hbgpattern') . '");';
	$rightcolrows_123_hbgcolor 	= 'background-color: #' . $this->params->get('rightcolrows_123_hbgcolor') . ';'; 
}


$rightcolrows_123_hspancolor 	= '';
if($this->params->get('rightcolrows_123_hspan'))
{
	$rightcolrows_123_hspancolor = 'color: #' . $this->params->get('rightcolrows_123_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#colright_rows_123 h3 a').length > 0)
				{
					asjQuery('#colright_rows_123 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#colright_rows_123 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}

$rightcolrows_123_hfontcolor 		= '';
if($this->params->get('rightcolrows_123_hfontcolor'))
	$rightcolrows_123_hfontcolor 	= 'color: #' . $this->params->get('rightcolrows_123_hfontcolor') . ';';

$rightcolrows_123_hshadowcolor = '';
if($this->params->get('rightcolrows_123_hshadowcolor'))
	$rightcolrows_123_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('rightcolrows_123_hshadowcolor') . ';';

$rightcolrows_123_fontcolor 		= '';
if($this->params->get('rightcolrows_123_fontcolor'))
	$rightcolrows_123_fontcolor 	= 'color: #' . $this->params->get('rightcolrows_123_fontcolor') . ';';

$rightcolrows_123_linkcolor 		= '';	
if($this->params->get('rightcolrows_123_linkcolor'))
	$rightcolrows_123_linkcolor 		= 'color: #' . $this->params->get('rightcolrows_123_linkcolor') . ';';
	
$rightcolrows_123_linkhovercolor 	= '';
if($this->params->get('rightcolrows_123_linkhovercolor'))
	$rightcolrows_123_linkhovercolor 	= 'color: #' . $this->params->get('rightcolrows_123_linkhovercolor') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$rightcolrows_45_bgpattern 	= '';
$rightcolrows_45_bgcolor		= '';

if($this->params->get('rightcolrows_45_bgpattern'))
	$rightcolrows_45_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('rightcolrows_45_bgpattern') . '");'; 
if($this->params->get('rightcolrows_45_bgcolor'))
	$rightcolrows_45_bgcolor		= 'background-color: #' . $this->params->get('rightcolrows_45_bgcolor') . ';';

if($this->params->get('rightcolrows_45_bgpattern') && !$this->params->get('rightcolrows_45_bgcolor'))
{
	$rightcolrows_45_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('rightcolrows_45_bgpattern') . '");';
	$rightcolrows_45_bgcolor 	= 'background-color: transparent;'; 	
}
else if($this->params->get('rightcolrows_45_bgcolor') && !$this->params->get('rightcolrows_45_bgpattern'))
{
	$rightcolrows_45_bgpattern	= 'background-image: none;';	
	$rightcolrows_45_bgcolor 	= 'background-color: #' . $this->params->get('rightcolrows_45_bgcolor') . ';'; 
}
else if($this->params->get('rightcolrows_45_bgcolor') && $this->params->get('rightcolrows_45_bgpattern'))
{
	$rightcolrows_45_bgpattern	= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('rightcolrows_45_bgpattern') . '");';
	$rightcolrows_45_bgcolor 	= 'background-color: #' . $this->params->get('rightcolrows_45_bgcolor') . ';'; 
}

$rightcolrows_45_hfontcolor 		= '';
if($this->params->get('rightcolrows_45_hfontcolor'))
	$rightcolrows_45_hfontcolor 		= 'color: #' . $this->params->get('rightcolrows_45_hfontcolor') . ';';
	
$rightcolrows_45_hshadowcolor 		= '';
if($this->params->get('rightcolrows_45_hshadowcolor'))
	$rightcolrows_45_hshadowcolor = 'text-shadow: 1px 1px #' . $this->params->get('rightcolrows_45_hshadowcolor') . ';';

$rightcolrows_45_hspancolor 	= '';
if($this->params->get('rightcolrows_45_hspan'))
{
	$rightcolrows_45_hspancolor = 'color: #' . $this->params->get('rightcolrows_45_hspancolor') . ';';
	echo "
        <script type='text/javascript'>
            var asjQuery = jQuery.noConflict();
            asjQuery(window).load(function() 
			{
				if(asjQuery('#colright_rows_45 h3 a').length > 0)
				{
					asjQuery('#colright_rows_45 h3 a').each(function() 
					{" . $hspan . "});
				}
				else
				{
					asjQuery('#colright_rows_45 h3').each(function() 
					{" . $hspan . "});
				}	
            });
        </script>";
}

$rightcolrows_45_fontcolor 			= '';
if($this->params->get('rightcolrows_45_fontcolor'))
	$rightcolrows_45_fontcolor 		= 'color: #' . $this->params->get('rightcolrows_45_fontcolor') . ';';
	
$rightcolrows_45_linkcolor 			= '';
if($this->params->get('rightcolrows_45_linkcolor'))
	$rightcolrows_45_linkcolor 		= 'color: #' . $this->params->get('rightcolrows_45_linkcolor') . ';';
	
$rightcolrows_45_linkhovercolor 	= '';
if($this->params->get('rightcolrows_45_linkhovercolor'))
	$rightcolrows_45_linkhovercolor = 'color: #' . $this->params->get('rightcolrows_45_linkhovercolor') . ';';

?>
