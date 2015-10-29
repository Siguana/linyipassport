<style type="text/css">

/***************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: Creative Commons
/*
/**************************************************************************************/

/**************************************************************************************/
/**************************************************************************************/
/*   Elements
/**************************************************************************************/
/**************************************************************************************/


body
{
	<?php echo $body_fontfamily; ?>
	<?php echo $body_bgcolor; ?>
	<?php echo $body_fontcolor; ?>
	<?php echo $body_bgpattern; ?>
	background-repeat: <?php echo $body_bgrepeating; ?> !important;
	background-position: <?php echo $body_bgpositioning; ?> !important;
	text-align: <?php echo $layout_type; ?>;	
	font-size: <?php echo $body_fontsize; ?>;
	font-style: <?php echo $body_fontstyle; ?>;
	font-weight: <?php echo $body_fontweight; ?>;
	
}

.wrapper
{
	<?php echo $body_bgoverlay; ?>
}

h1
{
	font-size: <?php echo $body_h1fontsize; ?>;
}

h2
{
	font-size: <?php echo $body_h2fontsize; ?>;
}

h3
{
	font-size: <?php echo $body_h3fontsize; ?>;
}

h4
{
	font-size: <?php echo $body_h4fontsize; ?>;
}

h5
{
	font-size: <?php echo $body_h5fontsize; ?>;
}

h1, 
h2, 
h3,
h4,
h5,
.article-info
{
	<?php echo $body_hfontfamily; ?>	
	<?php echo $body_hfontcolor; ?>
	text-align: <?php echo $layout_type; ?>;
	font-weight: <?php echo $body_hfontweight; ?>;	
}

a
{
	<?php echo $body_linkcolor; ?>
}

a:hover
{
	<?php echo $body_linkcolorhover; ?>
}

img.frame,
.img-intro-left img,
.img-fulltext-left img,
.img-intro-none img,
.img-fulltext-none img,
.img-intro-right img,
.img-fulltext-right img
{
    border: 3px solid #<?php echo $box_bordercolor; ?>;
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>
}


<?php if($leftcolumn || $rightcolumn): ?>
.topten-view .spacer img
{
	width: 87%;	
}

.topten-view .product-price span.PricesalesPrice
{
	margin-right: 5px;	
}
<?php endif; ?>


select,
input,
textarea,
.CodeMirror-wrapping
{
	<?php echo $input_bgcolor; ?>
    <?php echo $input_border; ?>
    <?php echo $box_borderradius; ?>
	<?php echo $body_fontcolor; ?>			
}

blockquote 
{
	text-align: <?php echo $layout_type; ?>;
}

.inputbox,
#jform_name,
#jform_username,
#jform_password1,
#jform_password2,
#jform_email,
#jform_email1,
#jform_email2,
#jform_title,
#jform_url,
#jform_catid,
#jform_state,
#jform_params_editor,
#jform_params_timezone,
#jform_params_language,
#jform_params_admin_style,
#jform_params_admin_language,
#jform_params_helpsite,
#username,
#password
{
	float: <?php echo $layout_type; ?>;
    <?php echo $input_border; ?>
    <?php echo $box_borderradius; ?>	
}


/**************************************************************************************/
/*   Header
/**************************************************************************************/
/**************************************************************************************/


#header
{
	font-size: <?php echo $body_fontsize; ?>;
	font-weight: <?php echo $body_fontweight; ?>;
	font-style: <?php echo $body_fontstyle; ?>;
	<?php echo $body_fontfamily; ?>;
	<?php echo $header_overlayimg; ?> 
}

#header .content
{
	_width: <?php echo $content_width; ?>px;	
    width: 100%;	
}

#header h1,
#header h2, 
#header h3
{
	<?php echo $body_hfontcolor; ?>
}

#header a
{
	<?php echo $body_linkcolor; ?>
}

#header a:hover
{
	<?php echo $body_linkcolorhover; ?>		
}

/**************************************************************************************/
/*   Header Row 0					      											  */

#header .row0 .search input
{
	<?php echo $body_fontcolor; ?>	
}

#header .row0 .content
{
	_width: <?php echo $page_width; ?>px;
    width: 100%;		
}


/**************************************************************************************/
/*   Header Row 1					      											  */


#header .row1
{
	<?php echo $logo_txtcolor; ?>
}

#header .row1 .content
{
	width: <?php echo $page_width; ?>px;		
}

#header .row1 #companyname
{
}

#header .row1 #companyname,
#header .row1 #companyname a
{
    font-size: <?php echo $logo_txtfontsize; ?>;
    font-style: <?php echo $logo_txtfontstyle; ?>;
    font-weight: <?php echo $logo_txtfontweight; ?>;
	<?php echo $logo_txtcolor; ?>
	<?php echo $body_hshadowcolor; ?>		
	<?php echo $body_hfontfamily; ?>			
}

#header .row1 #companyname a:hover
{
	<?php echo $logo_txtcolor; ?>
}

#header .row1 .slogan
{
    font-size: <?php echo $slogan_txtfontsize; ?>;
    font-style: <?php echo $slogan_txtfontstyle; ?>;
    font-weight: <?php echo $slogan_txtfontweight; ?>;
	<?php echo $slogan_txtcolor; ?>
	<?php echo $body_hshadowcolor; ?>		
	<?php echo $body_hfontfamily; ?>			
}

.companycontacts
{
	<?php echo $slogan_txtcolor; ?>
	<?php echo $body_hshadowcolor; ?>		
	<?php echo $body_hfontfamily; ?>				
}

.companycontacts .callnow b
{
	<?php echo $logo_txtcolor; ?>	
}

/**************************************************************************************/
/*   Header Row 2 - Top menu														  */


#header .row2 #topmenu
{
	_width: <?php echo ($content_width - 2); ?>px;
    width: 100%;
	<?php echo $topmenu_bgcolor; ?>
	<?php echo $topmenu_bgimg; ?>
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>			
}

#header .row2 #topmenu ul.menu li a
{
	<?php echo $topmenu_fontcolor; ?>
	<?php echo $topmenu_shadowcolor; ?>		
	font-size: <?php echo $topmenu_fontsize; ?>;
	font-weight: <?php echo $topmenu_fontweight; ?>;
	<?php echo $body_hfontfamily; ?>			
}

#header .row2 #topmenu ul.menu li 
{  
	<?php echo $topmenu_sepcolor; ?>
}

#header .row2 #topmenu ul.menu li.current a,
#header .row2 #topmenu ul.menu li.active a,
#header .row2 #topmenu ul.menu li a:hover
{
	<?php echo $topmenu_hoverfontcolor; ?>
	<?php echo $topmenu_shadowcolor; ?>
}

#header .row2 #topmenu ul.menu li:first-child.current,
#header .row2 #topmenu ul.menu li:first-child.active,
#header .row2 #topmenu ul.menu li:first-child.actives,
#header .row2 #topmenu ul.menu li:first-child:hover
{
	<?php echo $menu_firstchildradius; ?>
}

#header .row2 #topmenu ul.menu li:first-child.current,
#header .row2 #topmenu ul.menu li:first-child.active,
#header .row2 #topmenu ul.menu li:first-child.actives,
#header .row2 #topmenu ul.menu li:first-child:hover
{
	border-radius: 0px 0px 0px 0px;
}

#header .row2 #topmenu ul.menu ul 
{
	width: <?php echo $submenu_width; ?>px !important;	
	<?php echo $submenu_fontcolor; ?>
	<?php echo $submenu_bgcolor; ?>;	
	<?php echo $submenu_border; ?>
}

#header .row2 #topmenu ul.menu ul li
{
	width: <?php echo $submenu_width; ?>px !important;	
}

#header .row2 #topmenu ul.menu ul li a,
#header .row2 #topmenu ul.menu ul li span.separator
{
	width: <?php echo $submenu_width; ?>px !important;	
	<?php echo $submenu_fontcolor; ?>
	font-size: <?php echo $submenu_fontsize; ?>;
	font-weight: <?php echo $submenu_fontweight; ?>;
	<?php echo $body_hfontfamily; ?>			
}

#header .row2 #topmenu ul.menu ul li.current a:hover,
#header .row2 #topmenu ul.menu ul li.active a:hover,
#header .row2 #topmenu ul.menu ul li.actives a:hover,
#header .row2 #topmenu ul.menu ul li.parent a:hover,
#header .row2 #topmenu ul.menu li.deeper ul li a:hover,
#header .row2 #topmenu ul.menu li.current ul li a:hover,
#header .row2 #topmenu ul.menu li.active ul li a:hover,
#header .row2 #topmenu ul.menu li.actives ul li a:hover,
#header .row2 #topmenu ul.menu li.parent ul li a:hover,
#header .row2 #topmenu ul.menu li ul li a:hover
{
	<?php echo $submenu_hoverfontcolor; ?>
}

#header .row2 #topmenu ul.menu ul li.parent
{
	background-image: url('<?php echo $topmenu_parentmark; ?>');
	background-repeat: no-repeat;
	background-position: right;	
}

#header .row2 #topmenu ul.menu ul ul
{
	width: <?php echo ($submenu_width); ?>px !important;		
	left: <?php echo $submenu_width; ?>px;
	<?php echo $submenu_fontcolor; ?>
	<?php echo $submenu_border; ?>	
}

#header .row2 #topmenu ul.menu ul ul li
{
	width: <?php echo ($submenu_width+5); ?>px !important;		
}


/**************************************************************************************/
/*   Header Row 3																	  */


#header .row3 .content
{
	_width: <?php echo $page_width; ?>px;	
    width: 100%;	
}

#header .row3col1
{
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>
}

#header .row3 h1
{
	font-size: <?php echo $header_customrow_h1fontsize; ?>;
}

#header .row3 h2
{
	font-size: <?php echo $header_customrow_h2fontsize; ?>;
}

#header .row3 h3
{
	font-size: <?php echo $header_customrow_h3fontsize; ?>;
}

#header .row3 h4
{
	font-size: <?php echo $header_customrow_h4fontsize; ?>;
}

#header .row3 h5
{
	font-size: <?php echo $header_customrow_h5fontsize; ?>;
}

#header .row3 h1,
#header .row3 h2, 
#header .row3 h3,
#header .row3 h4,
#header .row3 h5
{
	font-weight: <?php echo $header_customrow_hfontweight; ?>;
	text-transform: <?php echo $header_customrow_htransform; ?>;
}

#header .row3col2
{
	width: <?php echo $row3col2_width; ?>;
	font-size: <?php echo $header_customrow_fontsize; ?>;
}

#header .row3col2 input
{
	width: <?php echo ($row3col2_width - 64) ?>px;	
}

#header .row3col2 input.button
{
	width: <?php echo ($row3col2_width - 52) ?>px;	
}

#header .row3 .toprow
{
	<?php echo $header_topcustomrow_bgimg; ?>
	<?php echo $header_topcustomrow_bgcolor; ?>	
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>
	<?php echo $header_topcustomrow_fontcolor; ?>		
}

#header .row3 .toprow h1,
#header .row3 .toprow h2,
#header .row3 .toprow h3
{
	<?php echo $header_topcustomrow_hfontcolor; ?>
	<?php echo $header_topcustomrow_hshadowcolor; ?>
}

#header .row3 .toprow a
{
	<?php echo $header_topcustomrow_linkcolor; ?>		
}

#header .row3 .toprow a:hover
{
	<?php echo $header_topcustomrow_linkcolorhover; ?>		
}

#header .row3 .bottomrow
{
	<?php echo $header_mdlcustomrow_fontcolor; ?>		
}

#header .row3 .bottomrow a
{
	<?php echo $header_mdlcustomrow_linkcolor; ?>		
}

#header .row3 .bottomrow a:hover
{
	<?php echo $header_mdlcustomrow_linkcolorhover; ?>		
}

#header .row3 .bottomrow h1,
#header .row3 .bottomrow h2,
#header .row3 .bottomrow h3
{
	<?php echo $header_mdlcustomrow_hfontcolor; ?>
	<?php echo $header_mdlcustomrow_hshadowcolor; ?>
}


/**************************************************************************************/
/*  Breadcrums				  														  */


.breadrow .content
{
	font-size: <?php echo $breadrow_fontsize; ?>;
	font-weight: <?php echo $breadrow_fontweight; ?>;
	width: <?php echo $content_width; ?>px;	
	<?php echo $body_fontfamily; ?>		
}

#breadcrumb
{
	<?php echo $breadrow_customrow_bgcolor; ?>
	<?php echo $breadrow_customrow_bgimg; ?>
	text-transform: <?php echo $breadrow_texttransform; ?>;
	text-align: <?php echo $breadrow_textalign; ?>; 
	<?php echo $breadrow_fontcolor; ?>
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>	
}

#breadcrumb a
{
	<?php echo $breadrow_hoverfontcolor; ?>
}

#breadcrumb a:hover
{
	<?php echo $breadrow_fontcolor; ?>
}

.breadrow #search input
{
	<?php echo $body_fontfamily; ?>;
	font-size: <?php echo $body_fontsize; ?>;
	font-style: <?php echo $body_fontstyle; ?>;
	font-weight: <?php echo $body_fontweight; ?>;	
	<?php echo $breadrow_fontcolor; ?>
}


/**************************************************************************************/
/*   Header Row 4																	  */


#header .row4
{
	font-size: <?php echo $header_customrow_fontsize; ?>;
}

#header .row4 .content
{
	width: <?php echo $header_customrow_contwidth; ?>px;	
}

#header .row4 .wrapper
{
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>	
	<?php echo $header_customrow_bgcolor; ?>
}

#header .row4 h1
{
	font-size: <?php echo $header_customrow_h1fontsize; ?>;
}

#header .row4 h2
{
	font-size: <?php echo $header_customrow_h2fontsize; ?>;
}

#header .row4 h3
{
	font-size: <?php echo $header_customrow_h3fontsize; ?>;
}

#header .row4 h4
{
	font-size: <?php echo $header_customrow_h4fontsize; ?>;
}

#header .row4 h5
{
	font-size: <?php echo $header_customrow_h5fontsize; ?>;
}

#header .row4 h1,
#header .row4 h2, 
#header .row4 h3,
#header .row4 h4,
#header .row4 h5
{
	font-weight: <?php echo $header_customrow_hfontweight; ?>;
	text-transform: <?php echo $header_customrow_htransform; ?>;
}

#header .row4 h3 span
{
	<?php echo $header_customrow_hspancolor; ?>
}


/*   Header Row 4 Column 1   */

#header .row4 .row4col1
{
	width: <?php echo $header_customrow_width; ?>px;	
	<?php echo $header_customrow_bgimg; ?>
	<?php echo $header_customrow_bgcolor; ?>
}

#header .row4col1 h1,
#header .row4col1 h2, 
#header .row4col1 h3,
#header .row4col1 h4,
#header .row4col1 h5
{
	<?php echo $header_customrow_hfontcolor; ?>
	<?php echo $header_customrow_hshadowcolor; ?>
}

#header .row4col1
{
	<?php echo $header_customrow_fontcolor; ?>
}

#header .row4col1 a
{
	<?php echo $header_customrow_linkcolor; ?>
}

#header .row4col1 a:hover
{
	<?php echo $header_customrow_linkcolorhover; ?>
}

#header .row4col1 .button,
#header .row4col1 .validate,
#header .row4col1 .readmore,
#header .row4col1 .readmore button,
#header .row4col1 .readmore .button,
#header .row4col1 input.button,
#header .row4col1 button.button,
#header .row4col1 button.validate,
#header .row4col1 button
{
	<?php echo $btn_fontcolor; ?>
	<?php echo $btn_bgcolor; ?>	
}

#header .row4col1 .button a,
#header .row4col1 .readmore a,
#header .row4col1 .readmore button a,
#header .row4col1 .readmore .button a,
#header .row4col1 input.button a,
#header .row4col1 button.button a
{
	<?php echo $btn_fontcolor; ?>	
}

#header .row4col1 .button a:hover,
#header .row4col1 .readmore:hover,
#header .row4col1 .readmore:hover a,
#header .row4col1 .readmore a:hover,
#header .row4col1 .readmore button:hover,
#header .row4col1 .readmore .button:hover,
#header .row4col1 .readmore button a:hover,
#header .row4col1 .readmore .button a:hover,
#header .row4col1 input.button:hover,
#header .row4col1 input.button a:hover,
#header .row4col1 button.validate:hover,
#header .row4col1 button:hover,
#header .row4col1 button.button:hover,
#header .row4col1 button.button a:hover
{
	<?php echo $btn_hoverfontcolor; ?>
	<?php echo $btn_hoverbgcolor; ?>		
}


/*   Header Row 4 Column 2   */

#header .row4 .row4col2
{
	width: <?php echo $header_customrow_width; ?>px;	
	<?php echo $header_customrow_bgimg; ?>		
	<?php echo $header_customrow_bgcolor; ?>
}

#header .row4col2 h1,
#header .row4col2 h2, 
#header .row4col2 h3,
#header .row4col2 h4,
#header .row4col2 h5
{
	<?php echo $header_customrow_hfontcolor; ?>
	<?php echo $header_customrow_hshadowcolor; ?>
}

#header .row4col2
{
	<?php echo $header_customrow_fontcolor; ?>
}

#header .row4col2 a
{
	<?php echo $header_customrow_linkcolor; ?>
}

#header .row4col2 a:hover
{
	<?php echo $header_customrow_linkcolorhover; ?>
}

#header .row4col2 .button,
#header .row4col2 .validate,
#header .row4col2 .readmore,
#header .row4col2 .readmore button,
#header .row4col2 .readmore .button,
#header .row4col2 input.button,
#header .row4col2 button.button,
#header .row4col2 button.validate,
#header .row4col2 button
{
	<?php echo $btn_fontcolor; ?>
	<?php echo $btn_bgcolor; ?>	
}

#header .row4col2 .button a,
#header .row4col2 .readmore a,
#header .row4col2 .readmore button a,
#header .row4col2 .readmore .button a,
#header .row4col2 input.button a,
#header .row4col2 button.button a
{
	<?php echo $btn_fontcolor; ?>	
}

#header .row4col2 .button a:hover,
#header .row4col2 .readmore:hover,
#header .row4col2 .readmore:hover a,
#header .row4col2 .readmore a:hover,
#header .row4col2 .readmore button:hover,
#header .row4col2 .readmore .button:hover,
#header .row4col2 .readmore button a:hover,
#header .row4col2 .readmore .button a:hover,
#header .row4col2 input.button:hover,
#header .row4col2 input.button a:hover,
#header .row4col2 button.validate:hover,
#header .row4col2 button:hover,
#header .row4col2 button.button:hover,
#header .row4col2 button.button a:hover
{
	<?php echo $btn_hoverfontcolor; ?>
	<?php echo $btn_hoverbgcolor; ?>	
}


/*   Header Row 4 Column 3   */

#header .row4 .row4col3
{
	width: <?php echo $header_customrow_width; ?>px;	
	<?php echo $header_customrow_bgimg; ?>			
	<?php echo $header_customrow_bgcolor; ?>
}

#header .row4col3 h1,
#header .row4col3 h2, 
#header .row4col3 h3,
#header .row4col3 h4,
#header .row4col3 h5
{
	<?php echo $header_customrow_hfontcolor; ?>
	<?php echo $header_customrow_hshadowcolor; ?>	
}

#header .row4col3
{
	<?php echo $header_customrow_fontcolor; ?>
}

#header .row4col3 a
{
	<?php echo $header_customrow_linkcolor; ?>
}

#header .row4col3 a:hover
{
	<?php echo $header_customrow_linkcolorhover; ?>
}

#header .row4col3 .button,
#header .row4col3 .validate,
#header .row4col3 .readmore,
#header .row4col3 .readmore button,
#header .row4col3 .readmore .button,
#header .row4col3 input.button,
#header .row4col3 button.button,
#header .row4col3 button.validate,
#header .row4col3 button
{
	<?php echo $btn_fontcolor; ?>
	<?php echo $btn_bgcolor; ?>	
}

#header .row4col3 .button a,
#header .row4col3 .readmore a,
#header .row4col3 .readmore button a,
#header .row4col3 .readmore .button a,
#header .row4col3 input.button a,
#header .row4col3 button.button a
{
	<?php echo $btn_fontcolor; ?>	
}

#header .row4col3 .button a:hover,
#header .row4col3 .readmore:hover,
#header .row4col3 .readmore:hover a,
#header .row4col3 .readmore a:hover,
#header .row4col3 .readmore button:hover,
#header .row4col3 .readmore .button:hover,
#header .row4col3 .readmore button a:hover,
#header .row4col3 .readmore .button a:hover,
#header .row4col3 input.button:hover,
#header .row4col3 input.button a:hover,
#header .row4col3 button.validate:hover,
#header .row4col3 button:hover,
#header .row4col3 button.button:hover,
#header .row4col3 button.button a:hover
{
	<?php echo $btn_hoverfontcolor; ?>
	<?php echo $btn_hoverbgcolor; ?>	
}


/*   Header Row 4 Column 4   */

#header .row4 .row4col4
{
	width: <?php echo $header_customrow_width; ?>px;	
	<?php echo $header_customrow_bgimg; ?>			
	<?php echo $header_customrow_bgcolor; ?>
}

#header .row4col4 h1,
#header .row4col4 h2, 
#header .row4col4 h3,
#header .row4col4 h4,
#header .row4col4 h5
{
	<?php echo $header_customrow_hfontcolor; ?>
	<?php echo $header_customrow_hshadowcolor; ?>	
}

#header .row4col4
{
	<?php echo $header_customrow_fontcolor; ?>
}

#header .row4col4 a
{
	<?php echo $header_customrow_linkcolor; ?>
}

#header .row4col4 a:hover
{
	<?php echo $header_customrow_linkcolorhover; ?>
}

#header .row4col4 .button,
#header .row4col4 .validate,
#header .row4col4 .readmore,
#header .row4col4 .readmore button,
#header .row4col4 .readmore .button,
#header .row4col4 input.button,
#header .row4col4 button.button,
#header .row4col4 button.validate,
#header .row4col4 button
{
	<?php echo $btn_fontcolor; ?>
	<?php echo $btn_bgcolor; ?>	
}

#header .row4col4 .button a,
#header .row4col4 .readmore a,
#header .row4col4 .readmore button a,
#header .row4col4 .readmore .button a,
#header .row4col4 input.button a,
#header .row4col4 button.button a
{
	<?php echo $btn_fontcolor; ?>	
}

#header .row4col4 .button a:hover,
#header .row4col4 .readmore:hover,
#header .row4col4 .readmore:hover a,
#header .row4col4 .readmore a:hover,
#header .row4col4 .readmore button:hover,
#header .row4col4 .readmore .button:hover,
#header .row4col4 .readmore button a:hover,
#header .row4col4 .readmore .button a:hover,
#header .row4col4 input.button:hover,
#header .row4col4 input.button a:hover,
#header .row4col4 button.validate:hover,
#header .row4col4 button:hover,
#header .row4col4 button.button:hover,
#header .row4col4 button.button a:hover
{
	<?php echo $btn_hoverfontcolor; ?>
	<?php echo $btn_hoverbgcolor; ?>	
}


/**************************************************************************************/
/**************************************************************************************/
/*   Content
/**************************************************************************************/
/**************************************************************************************/

#content,
.body-content
{
    width: <?php echo $content_width; ?>px;
}


/**************************************************************************************/
/*   Column Left
/**************************************************************************************/
/**************************************************************************************/

#colleft
{
	width: <?php echo $sidebar_width; ?>px;
	margin: 0px <?php echo $padding; ?>px 0px 0px;		
}

#colleft h1
{
	font-size: <?php echo $sidecolumn_h1fontsize; ?>;
}

#colleft h2
{
	font-size: <?php echo $sidecolumn_h2fontsize; ?>;
}

#colleft h3
{
	font-size: <?php echo $sidecolumn_h3fontsize; ?>;
}

#colleft h4
{
	font-size: <?php echo $sidecolumn_h4fontsize; ?>;
}

#colleft h5
{
	font-size: <?php echo $sidecolumn_h5fontsize; ?>;
}

#colleft h1, 
#colleft h2, 
#colleft h3,
#colleft h4,
#colleft h5
{
	font-weight: <?php echo $sidecolumn_hfontweight; ?>;
	text-transform: <?php echo $sidecolumn_htransform; ?>;
}

#colleft a
{
	<?php echo $leftcolrows_123_linkcolor; ?>
}

#colleft a:hover
{
	<?php echo $leftcolrows_123_linkhovercolor; ?>
}
	
#colleft ul li a,
#colleft ul li.active ul li a,
#colright ul li a,
#colright ul li.active ul li a
{
	<?php echo $leftcolrows_123_linkcolor; ?>
	font-size:  <?php echo $sidecolumn_menufontsize; ?>;	
}

#colleft ul li a:hover,
#colleft ul ul li a:hover  
{
    <?php echo $leftcolrows_123_linkhovercolor; ?>
}

#colleft .moduletable ul.menu li a,
#colleft .moduletable_menu ul.menu li a,
#colleft .moduletable #login-form ul li a
{
	<?php echo $leftcolrows_123_linkcolor; ?>
}

#colleft .moduletable ul.menu li a:hover,
#colleft .moduletable_menu ul.menu li a:hover,
#colleft .moduletable #login-form ul li a:hover
{
	<?php echo $leftcolrows_123_linkhovercolor; ?>
}

#colleft img
{
}

#colleft input
{
	width: <?php echo $sidecolumn123_inputwidth; ?>px;
	<?php echo $leftcolrows_123_fontcolor; ?>
}

#colleft .more a
{
	<?php echo $leftcolrows_123_linkcolor; ?>
}

#colleft .more a:hover
{
	<?php echo $leftcolrows_123_linkhovercolor; ?>
}


/**************************************************************************************/
/*   Rows 			   																  */

#colleft .row0,
#colleft .row1,
#colleft .row2,
#colleft .row3
{
	<?php echo $leftcolrows_123_fontcolor; ?>
}

#colleft .row4,
#colleft .row5
{
	<?php echo $leftcolrows_45_bgpattern; ?>
	<?php echo $leftcolrows_45_fontcolor; ?>
	<?php echo $leftcolrows_45_bgcolor; ?>
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>	
}

#colleft .row0 h1, 
#colleft .row0 h2, 
#colleft .row0 h3,
#colleft .row1 h1, 
#colleft .row1 h2, 
#colleft .row1 h3,
#colleft .row2 h1, 
#colleft .row2 h2, 
#colleft .row2 h3,
#colleft .row3 h1, 
#colleft .row3 h2, 
#colleft .row3 h3
{
	<?php echo $leftcolrows_123_hfontcolor; ?>
	<?php echo $leftcolrows_123_hshadowcolor; ?>
	<?php echo $leftcolrows_123_hbgpattern; ?>
	<?php echo $leftcolrows_123_hbgcolor; ?>	
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>		
}


#colleft .row0 h3 span,
#colleft .row1 h3 span,
#colleft .row2 h3 span,
#colleft .row3 h3 span
{
	<?php echo $leftcolrows_123_hspancolor; ?>
}

#colleft .row4 h1,
#colleft .row4 h2,
#colleft .row4 h3,
#colleft .row5 h1,
#colleft .row5 h2,
#colleft .row5 h3
{
	<?php echo $leftcolrows_45_hfontcolor; ?>
	padding: 20px <?php echo $main_modulepadding; ?>px 0px <?php echo $main_modulepadding; ?>px;	
	<?php echo $leftcolrows_45_hshadowcolor; ?>
}

#colleft .row4 h3 span,
#colleft .row5 h3 span
{
	color: <?php echo $leftcolrows_45_hspancolor; ?>;	
}

#colleft .row4 a,
#colleft .row4 ul li a,
#colleft .row4 ul li.active ul li a,
#colleft .row4 .moduletable ul.menu li a,
#colleft .row4 .moduletable_menu ul.menu li a,
#colleft .row4 .moduletable #login-form ul li a,
#colleft .row4 .more a,
#colleft .row5 a,
#colleft .row5 ul li a,
#colleft .row5 ul li.active ul li a,
#colleft .row5 .moduletable ul.menu li a,
#colleft .row5 .moduletable_menu ul.menu li a,
#colleft .row5 .moduletable #login-form ul li a,
#colleft .row5 .more a
{
	<?php echo $leftcolrows_45_linkcolor; ?>
}

#colleft .row4 a:hover,
#colleft .row4 ul li a:hover,
#colleft .row4 ul ul li a:hover,
#colleft .row4 .moduletable ul.menu li a:hover,
#colleft .row4 .moduletable_menu ul.menu li a:hover,
#colleft .row4 .moduletable #login-form ul li a:hover,
#colleft .row4 .more a:hover,
#colleft .row5 a:hover,
#colleft .row5 ul li a:hover,
#colleft .row5 ul ul li a:hover,
#colleft .row5 .moduletable ul.menu li a:hover,
#colleft .row5 .moduletable_menu ul.menu li a:hover,
#colleft .row5 .moduletable #login-form ul li a:hover,
#colleft .row5 .more a:hover
{
	<?php echo $leftcolrows_45_linkhovercolor; ?>
}

#colleft .row4 .moduletable,
#colleft .row5 .moduletable
{
}

#colleft .row4 .moduletable form,
#colleft .row4 .moduletable .menu,
#colleft .row4 .moduletable .custom,
#colleft .row5 .moduletable form,
#colleft .row5 .moduletable .menu,
#colleft .row5 .moduletable .custom
{
}

#colleft .row4 input,
#colleft .row5 input
{
	width: <?php echo $sidecolumn45_inputwidth; ?>px;
}

#colleft .row4 .button,
#colleft .row4 .validate,
#colleft .row4 .readmore,
#colleft .row4 .readmore button,
#colleft .row4 .readmore .button,
#colleft .row4 input.button,
#colleft .row4 button.button,
#colleft .row4 button.validate,
#colleft .row4 button,
#colleft .row5 .button,
#colleft .row5 .validate,
#colleft .row5 .readmore,
#colleft .row5 .readmore button,
#colleft .row5 .readmore .button,
#colleft .row5 input.button,
#colleft .row5 button.button,
#colleft .row5 button.validate,
#colleft .row5 button

{
	<?php echo $btn_fontcolor; ?>
	<?php echo $btn_bgcolor; ?>	
}

#colleft .row4 .button a,
#colleft .row4 .readmore a,
#colleft .row4 .readmore button a,
#colleft .row4 .readmore .button a,
#colleft .row4 input.button a,
#colleft .row4 button.button a,
#colleft .row5 .button a,
#colleft .row5 .readmore a,
#colleft .row5 .readmore button a,
#colleft .row5 .readmore .button a,
#colleft .row5 input.button a,
#colleft .row5 button.button a
{
	<?php echo $btn_fontcolor; ?>	
}

#colleft .row4 .button a:hover,
#colleft .row4 .readmore:hover,
#colleft .row4 .readmore:hover a,
#colleft .row4 .readmore a:hover,
#colleft .row4 .readmore button:hover,
#colleft .row4 .readmore .button:hover,
#colleft .row4 .readmore button a:hover,
#colleft .row4 .readmore .button a:hover,
#colleft .row4 input.button:hover,
#colleft .row4 input.button a:hover,
#colleft .row4 button.validate:hover,
#colleft .row4 button:hover,
#colleft .row4 button.button:hover,
#colleft .row4 button.button a:hover,
#colleft .row5 .button a:hover,
#colleft .row5 .readmore:hover,
#colleft .row5 .readmore:hover a,
#colleft .row5 .readmore a:hover,
#colleft .row5 .readmore button:hover,
#colleft .row5 .readmore .button:hover,
#colleft .row5 .readmore button a:hover,
#colleft .row5 .readmore .button a:hover,
#colleft .row5 input.button:hover,
#colleft .row5 input.button a:hover,
#colleft .row5 button.validate:hover,
#colleft .row5 button:hover,
#colleft .row5 button.button:hover,
#colleft .row5 button.button a:hover
{
	<?php echo $btn_hoverfontcolor; ?>
}

#colleft .row4 .readmore:hover,
#colleft .row4 .readmore button:hover,
#colleft .row4 .readmore .button:hover,
#colleft .row4 input.button:hover,
#colleft .row4 button.validate:hover,
#colleft .row4 button:hover,
#colleft .row4 button.button:hover,
#colleft .row5 .readmore:hover,
#colleft .row5 .readmore button:hover,
#colleft .row5 .readmore .button:hover,
#colleft .row5 input.button:hover,
#colleft .row5 button.validate:hover,
#colleft .row5 button:hover,
#colleft .row5 button.button:hover
{
	<?php echo $btn_hoverfontcolor; ?>
	<?php echo $btn_hoverbgcolor; ?>		
}

/**************************************************************************************/
/*   Column Right
/**************************************************************************************/
/**************************************************************************************/

#colright
{
	width: <?php echo $sidebar_width; ?>px;
	padding: <?php echo $rightcolumn_padding; ?>;
}

#colright h1
{
	font-size: <?php echo $sidecolumn_h1fontsize; ?>;
}

#colright h2
{
	font-size: <?php echo $sidecolumn_h2fontsize; ?>;
}

#colright h3
{
	font-size: <?php echo $sidecolumn_h3fontsize; ?>;
}

#colright h4
{
	font-size: <?php echo $sidecolumn_h4fontsize; ?>;
}

#colright h5
{
	font-size: <?php echo $sidecolumn_h5fontsize; ?>;
}

#colright h1, 
#colright h2, 
#colright h3,
#colright h4,
#colright h5
{
	font-weight: <?php echo $sidecolumn_hfontweight; ?>;
	text-transform: <?php echo $sidecolumn_htransform; ?>;	
}

#colright a
{
	<?php echo $rightcolrows_123_linkcolor; ?>
}

#colright a:hover
{
	<?php echo $rightcolrows_123_linkhovercolor; ?>
}
	
#colright ul.menu li a,
#colright ul li.active ul li a
{
	<?php echo $rightcolrows_123_linkcolor; ?>
	font-size: <?php echo $sidecolumn_menufontsize; ?>;
}

#colright ul li a:hover,
#colright ul ul li a:hover  
{
    <?php echo $rightcolrows_123_linkhovercolor; ?>
}

#colright .moduletable ul.menu li a,
#colright .moduletable_menu ul.menu li a,
#colright .moduletable #login-form ul li a
{
	<?php echo $rightcolrows_123_linkcolor; ?>
}

#colright .moduletable ul.menu li a:hover,
#colright .moduletable_menu ul.menu li a:hover,
#colright .moduletable #login-form ul li a:hover
{
	<?php echo $rightcolrows_123_linkhovercolor; ?>
}

#colright input
{
	width: <?php echo $sidecolumn123_inputwidth; ?>px;
	<?php echo $rightcolrows_123_fontcolor; ?>
}

#colright .more a
{
	<?php echo $rightcolrows_123_linkcolor; ?>
}

#colright .more a:hover
{
	<?php echo $rightcolrows_123_linkhovercolor; ?>
}


/**************************************************************************************/
/*   Rows 			   																  */

#colright .row1,
#colright .row2,
#colright .row3
{
	<?php echo $rightcolrows_123_fontcolor; ?>
}

#colright .row4,
#colright .row5
{
	<?php echo $rightcolrows_45_fontcolor; ?>
	<?php echo $rightcolrows_45_bgcolor; ?>
	<?php echo $rightcolrows_45_bgpattern; ?>
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>		
}

#colright .row1 h1, 
#colright .row1 h2, 
#colright .row1 h3,
#colright .row2 h1, 
#colright .row2 h2, 
#colright .row2 h3,
#colright .row3 h1, 
#colright .row3 h2, 
#colright .row3 h3
{
	<?php echo $rightcolrows_123_hbgpattern; ?>
	<?php echo $rightcolrows_123_hbgcolor; ?>
	<?php echo $rightcolrows_123_hfontcolor; ?>
	<?php echo $rightcolrows_123_hshadowcolor; ?>	
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>	
}

#colright .row1 h3 span,
#colright .row2 h3 span,
#colright .row3 h3 span
{
	<?php echo $rightcolrows_123_hspancolor; ?>
}

#colright .row4 h1,
#colright .row4 h2,
#colright .row4 h3,
#colright .row5 h1,
#colright .row5 h2,
#colright .row5 h3
{
	<?php echo $rightcolrows_45_hfontcolor; ?>
	<?php echo $rightcolrows_45_hshadowcolor; ?>
}

#colright .row4 h3 span,
#colright .row5 h3 span
{
	<?php echo $rightcolrows_45_hspancolor; ?>
}
#colright .row4 a,
#colright .row4 ul li a,
#colright .row4 ul li.active ul li a,
#colright .row4 .moduletable ul.menu li a,
#colright .row4 .moduletable_menu ul.menu li a,
#colright .row4 .moduletable #login-form ul li a,
#colright .row4 .more a,
#colright .row5 a,
#colright .row5 ul li a,
#colright .row5 ul li.active ul li a,
#colright .row5 .moduletable ul.menu li a,
#colright .row5 .moduletable_menu ul.menu li a,
#colright .row5 .moduletable #login-form ul li a,
#colright .row5 .more a
{
	<?php echo $rightcolrows_45_linkcolor; ?>
}

#colright .row4 a:hover,
#colright .row4 ul li a:hover,
#colright .row4 ul ul li a:hover,
#colright .row4 .moduletable ul.menu li a:hover,
#colright .row4 .moduletable_menu ul.menu li a:hover,
#colright .row4 .moduletable #login-form ul li a:hover,
#colright .row4 .more a:hover,
#colright .row5 a:hover,
#colright .row5 ul li a:hover,
#colright .row5 ul ul li a:hover,
#colright .row5 .moduletable ul.menu li a:hover,
#colright .row5 .moduletable_menu ul.menu li a:hover,
#colright .row5 .moduletable #login-form ul li a:hover,
#colright .row5 .more a:hover
{
	<?php echo $rightcolrows_45_linkhovercolor; ?>
}

#colright .row4 .moduletable form,
#colright .row4 .moduletable .menu,
#colright .row4 .moduletable .custom,
#colright .row5 .moduletable form,
#colright .row5 .moduletable .menu,
#colright .row5 .moduletable .custom
{
}

#colright .row4 input,
#colright .row5 input
{
	width: <?php echo $sidecolumn45_inputwidth; ?>px;
}

#colright .row4 .button,
#colright .row4 .validate,
#colright .row4 .readmore,
#colright .row4 .readmore button,
#colright .row4 .readmore .button,
#colright .row4 input.button,
#colright .row4 button.button,
#colright .row4 button.validate,
#colright .row4 button,
#colright .row5 .button,
#colright .row5 .validate,
#colright .row5 .readmore,
#colright .row5 .readmore button,
#colright .row5 .readmore .button,
#colright .row5 input.button,
#colright .row5 button.button,
#colright .row5 button.validate,
#colright .row5 button

{
	<?php echo $btn_fontcolor; ?>
	<?php echo $btn_bgcolor; ?>	
}

#colright .row4 .button a,
#colright .row4 .readmore a,
#colright .row4 .readmore button a,
#colright .row4 .readmore .button a,
#colright .row4 input.button a,
#colright .row4 button.button a,
#colright .row5 .button a,
#colright .row5 .readmore a,
#colright .row5 .readmore button a,
#colright .row5 .readmore .button a,
#colright .row5 input.button a,
#colright .row5 button.button a
{
	<?php echo $btn_fontcolor; ?>	
}

#colright .row4 .button a:hover,
#colright .row4 .readmore:hover,
#colright .row4 .readmore:hover a,
#colright .row4 .readmore a:hover,
#colright .row4 .readmore button:hover,
#colright .row4 .readmore .button:hover,
#colright .row4 .readmore button a:hover,
#colright .row4 .readmore .button a:hover,
#colright .row4 input.button:hover,
#colright .row4 input.button a:hover,
#colright .row4 button.validate:hover,
#colright .row4 button:hover,
#colright .row4 button.button:hover,
#colright .row4 button.button a:hover,
#colright .row5 .button a:hover,
#colright .row5 .readmore:hover,
#colright .row5 .readmore:hover a,
#colright .row5 .readmore a:hover,
#colright .row5 .readmore button:hover,
#colright .row5 .readmore .button:hover,
#colright .row5 .readmore button a:hover,
#colright .row5 .readmore .button a:hover,
#colright .row5 input.button:hover,
#colright .row5 input.button a:hover,
#colright .row5 button.validate:hover,
#colright .row5 button:hover,
#colright .row5 button.button:hover,
#colright .row5 button.button a:hover
{
	<?php echo $btn_hoverfontcolor; ?>
}

#colright .row4 .readmore:hover,
#colright .row4 .readmore button:hover,
#colright .row4 .readmore .button:hover,
#colright .row4 input.button:hover,
#colright .row4 button.validate:hover,
#colright .row4 button:hover,
#colright .row4 button.button:hover,
#colright .row5 .readmore:hover,
#colright .row5 .readmore button:hover,
#colright .row5 .readmore .button:hover,
#colright .row5 input.button:hover,
#colright .row5 button.validate:hover,
#colright .row5 button:hover,
#colright .row5 button.button:hover
{
	<?php echo $btn_hoverbgcolor; ?>		
}

/**************************************************************************************/
/*   Column Main 
/**************************************************************************************/
/**************************************************************************************/

#colmain
{
	width: <?php echo $main_width; ?>px;
	float: <?php echo $main_location; ?>;
	text-align: <?php echo $layout_type; ?>;	
}

#colmain #component,
#cmp_content
{
	width: <?php echo $main_componentwidth; ?>px;
	<?php echo $body_fontfamily; ?>;
	font-size: <?php echo $body_fontsize; ?>;
	font-style: <?php echo $body_fontstyle; ?>;
	font-weight: <?php echo $body_fontweight; ?>;
	<?php echo $body_fontcolor; ?>	
}

#colmain #component .one_fifth_first,
#colmain #component .one_fifth,
#colmain #component .one_fourth_first,
#colmain #component .one_fourth,
#colmain #component .three_fourth_first,
#colmain #component .one_third_first,
#colmain #component .two_third_first,
#colmain #component .one_third,
#colmain #component .one_half_first
{
	padding-right: <?php echo $padding; ?>px;
}

#colmain #component .one_fifth_first,
#colmain #component .one_fifth
{
	width: <?php echo $main_onefifth_width; ?>px;
}

#colmain #component .one_fifth_last
{
	width: <?php echo $main_onefifth_width; ?>px;
}

#colmain #component .one_fourth_first,
#colmain #component .one_fourth
{
	width: <?php echo $main_onefourth_width; ?>px;
}

#colmain #component .one_fourth_last
{
	width: <?php echo $main_onefourth_width; ?>px;
}

#colmain #component .three_fourth_first,
#colmain #component .three_fourth_last
{
	width: <?php echo $main_threefourth_width; ?>px;	
}

#colmain #component .one_third_first,
#colmain #component .one_third,
#colmain #component .one_third_last
{
	width: <?php echo $main_onethird_width; ?>px;	
}

#colmain #component .two_third_first,
#colmain #component .two_third_last
{
	width: <?php echo $main_twothird_width; ?>px;	
}

#colmain #component .one_half_first,
#colmain #component .one_half_last
{
	width: <?php echo $main_onehalf_width; ?>px;
}

#colmain h1,
#cmp_colmain h1
{
	font-size: <?php echo $body_h1fontsize; ?>;
}

#colmain h2,
#cmp_colmain h2
{
	font-size: <?php echo $body_h2fontsize; ?>;
}

#colmain h3,
#cmp_colmain h1
{
	font-size: <?php echo $body_h3fontsize; ?>;
}

#colmain h4
{
	font-size: <?php echo $body_h4fontsize; ?>;
}

#colmain h5
{
	font-size: <?php echo $body_h5fontsize; ?>;
}

#colmain h1, 
#colmain h2, 
#colmain h3,
#cmp_colmain h1,
#cmp_colmain h2,
#cmp_colmain h3
{
	<?php echo $body_hfontcolor; ?>
	<?php echo $body_hshadowcolor; ?>	
	font-weight: <?php echo $body_hfontweight; ?>;
	text-transform: <?php echo $body_htransform; ?>;
}

#colmain h4,
#colmain h5
{
	<?php echo $body_fontcolor; ?>
	font-weight: <?php echo $body_hfontweight; ?>;
	text-transform: <?php echo $body_htransform; ?>;
}

#colmain h1 a, 
#colmain h2 a, 
#colmain h3 a
{
	<?php echo $body_hfontcolor; ?>
}

#colmain h1 a:hover, 
#colmain h2 a:hover, 
#colmain h3 a:hover
{
	<?php echo $body_linkcolorhover; ?>
}

#colmain h4
#colmain h5
{
	<?php echo $body_hfontcolor; ?>
}

#colmain #component h1,
#colmain #component h2,
#colmain #component h3,
#colmain #adsense h1,
#colmain #adsense h2,
#colmain #adsense h3,
#cmp_colmain h1,
#cmp_colmain h2,
#cmp_colmain h3,
.vmgroup .vmheader
{
	padding: 8px <?php echo $main_modulepadding; ?>px 8px <?php echo $main_modulepadding; ?>px;		
	<?php echo $body_hbgimg; ?>
	<?php echo $body_hbgcolor; ?>
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>			
}

#colmain a
{
	<?php echo $body_linkcolor; ?>
}

#colmain a:hover
{
	<?php echo $body_linkcolorhover; ?>
}

#colmain input,
#colmain textarea
{
	<?php echo $body_fontfamily; ?>;
}

#colmain input[type="checkbox"],
#colmain input[type="radio"]
{
}

#colmain p
{
	<?php echo $body_fontcolor; ?>
	text-align: <?php echo $layout_type; ?>;
}

#colmain .item-separator
{
	height: <?php echo $main_itemseparator; ?>px;
}

#colmain #component .article-info,
#cmp_colmain .article-info
{
	padding: 8px <?php echo $main_modulepadding; ?>px 8px 2px;		
}

#colmain #component .blog p.readmore a span
{
	<?php echo $body_linkcolorhover; ?>			
}

#colmain .blog-featured .items-row.row-<?php echo $featured_rows; ?> .item-separator
{
	height: 0px !important;
}

#colmain span.spacer > span.text label 
{
	<?php echo $body_fontcolor; ?>
}

#colmain #jform_spacer-lbl,
#colmain label.invalid,
#colmain .red,
#colmain .star,
#colmain .asterisk
{
	<?php echo $body_errorfontcolor; ?>
}

#colmain .cols-2 .column-1,
#colmain .cols-2 .column-2
{
    width: <?php echo $main_blogcols2width;  ?>px;
}

#colmain .cols-3 .column-1,
#colmain .cols-3 .column-2,
#colmain .cols-3 .column-3
{
    width: <?php echo $main_blogcols3width;  ?>px;
}

#colmain .cols-4 .column-1,
#colmain .cols-4 .column-2,
#colmain .cols-4 .column-3,
#colmain .cols-4 .column-4
{
    width: <?php echo $main_blogcols4width;  ?>px;
}

#colmain .cols-2 .column-1,
#colmain .cols-3 .column-1,
#colmain .cols-3 .column-2,
#colmain .cols-4 .column-1,
#colmain .cols-4 .column-2,
#colmain .cols-4 .column-3
{
    margin: 0px <?php echo $padding;  ?>px 0px 0px;
}

#colmain .cols-2 .column-2,
#colmain .cols-3 .column-3,
#colmain .cols-4 .column-4
{
    margin: 0px 0px 0px 0px;
}

.border_bottom
{
	<?php if($body_hfontcolor_paramvalue): ?>
	border-bottom: 1px 	<?php echo $body_hfontcolor_paramvalue; ?> dotted;
	<?php endif; ?>
}

.address
{
	text-align: <?php echo $layout_type; ?>;	
}

.article-info
{
	<?php echo $body_hfontcolor; ?>
	<?php echo $body_hshadowcolor; ?>	
	text-transform: <?php echo $body_htransform; ?>;
}

.toggle_content
{
	<?php echo $toggle_border; ?>
	<?php echo $toggle_fontcolor; ?>
	<?php echo $toggle_bgcolor; ?>
	background-image: url('<?php echo $toggle_pattern; ?>') !important;
	background-repeat: <?php echo $toggle_patternrepeating; ?> !important;
	background-position: <?php echo $toggle_patternpositioning; ?> !important;
}

#colmain .toggle_content h1,
#colmain .toggle_content h2,
#colmain .toggle_content h3,
#colmain .toggle_content h4,
#colmain .toggle_content h5
{
	<?php echo $toggle_fontcolor; ?>
}

/**************************************************************************************/

#system-message dd.error ul, 
#system-message dd.warning ul, 
#system-message dd.notice ul
{
    <?php echo $box_borderradius; ?>
	<?php if($body_errorfontcolor_paramvalue): ?>
	border: 3px solid <?php echo $body_errorfontcolor_paramvalue; ?>;
	<?php endif; ?>
}

#system-message ul li
{
	<?php echo $body_errorfontcolor; ?>
}

.invalid
{
	border-color: <?php echo $body_errorfontcolor_paramvalue; ?>;	
}


/**************************************************************************************/
/*  Colmain Row 3 			  														  */

#colmain .row3
{
	<?php echo $main_row3_fontcolor; ?>
	<?php echo $main_row3_bgcolor; ?>
	<?php echo $main_row3_bgpattern; ?>
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>		
}

#colmain .row3 .row3col1,
#colmain .row3 .row3col2,
#colmain .row3 .row3col3,
#colmain .row3 .row3col4
{
	width: <?php echo $main_row3_colwidth; ?>px;	
}

#colmain .row3 h1,
#colmain .row3 h2,
#colmain .row3 h3
{
	<?php echo $main_row3_hfontcolor; ?>
	font-weight: <?php echo $body_hfontweight; ?>;
	padding: 20px <?php echo $main_modulepadding; ?>px 0px;	
	<?php echo $main_row3_hshadowcolor; ?>	
}

#colmain .row3 h3 span
{
	<?php echo $main_row3_hspancolor; ?>
}

#colmain .row3 p
{
	<?php echo $main_row3_fontcolor; ?>
}

#colmain .row3 a
{
	<?php echo $main_row3_linkcolor; ?>
}

#colmain .row3 a:hover
{
	<?php echo $main_row3_linkcolorhover; ?>
}

#colmain .row3 .moduletable form,
#colmain .row3 .moduletable .custom
{
	padding: 15px <?php echo $main_modulepadding . 'px'; ?> 20px;
}


/**************************************************************************************/
/*  Colmain Row 4 			  														  */

#colmain .row4
{
	<?php echo $main_row4_fontcolor; ?>
	width: <?php echo $main_componentwidth; ?>px;
}

#colmain .row4 .row4col1,
#colmain .row4 .row4col2,
#colmain .row4 .row4col3,
#colmain .row4 .row4col4
{
	width: <?php echo $main_row4_colwidth; ?>px;	
}

#colmain .row4 h1,
#colmain .row4 h2,
#colmain .row4 h3,
#colmain .row4 h4,
#colmain .row4 h5
{
	<?php echo $main_row4_hfontcolor; ?>
	<?php echo $main_row4_hshadowcolor; ?>
	font-weight: <?php echo $body_hfontweight; ?>;
}

#colmain .row4 h1,
#colmain .row4 h2,
#colmain .row4 h3
{
	<?php echo $main_row4_hbgcolor; ?>
	<?php echo $main_row4_hbgpattern; ?>
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>			
}

#colmain .row4 h3 span
{
	color: <?php echo $main_row4_hspancolor; ?>	
}

#colmain .row4 p
{
	<?php echo $main_row4_fontcolor; ?>
}

#colmain .row4 a
{
	<?php echo $main_row4_linkcolor; ?>
}

#colmain .row4 a:hover
{
	<?php echo $main_row4_linkcolorhover; ?>
}


/**************************************************************************************/
/*   Footer
/**************************************************************************************/
/**************************************************************************************/

#footer .content
{
	width: <?php echo $footer_row2_width; ?>px;			
}

/**************************************************************************************/
/*  Footer Row 1	                                                                  */


#footer .row1 .content
{
	width: <?php echo $content_width; ?>px;		
}

#footer .row1 .row1col1,
#footer .row1 .row1col2,
#footer .row1 .row1col3,
#footer .row1 .row1col4
{
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>
}

#footer .row1 h1
{
	font-size: <?php echo $footer_row1_h1fontsize; ?>;
}

#footer .row1 h2
{
	font-size: <?php echo $footer_row1_h2fontsize; ?>;
}

#footer .row1 h3
{
	font-size: <?php echo $footer_row1_h3fontsize; ?>;
}

#footer .row1 h4
{
	font-size: <?php echo $footer_row1_h4fontsize; ?>;
}

#footer .row1 h5
{
	font-size: <?php echo $footer_row1_h5fontsize; ?>;
}

#footer .row1 h3 span
{
	<?php echo $footer_row1_hspancolor; ?>
}

#footer .row1 h1,
#footer .row1 h2, 
#footer .row1 h3,
#footer .row1 h4,
#footer .row1 h5
{
	<?php echo $footer_row1_hfontcolor; ?>
	<?php echo $footer_row1_hshadowcolor; ?>
	text-transform: <?php echo $footer_row1_htransform; ?>;
	font-weight: <?php echo $footer_row1_hfontweight; ?>;
}

#footer .row1 a,
#footer .row1 h1 a, 
#footer .row1 h2 a, 
#footer .row1 h3 a,
#footer .row1 h4 a,
#footer .row1 h5 a
{
	<?php echo $footer_row1_linkcolor; ?>
}

#footer .row1 a:hover,
#footer .row1 h1 a:hover, 
#footer .row1 h2 a:hover, 
#footer .row1 h3 a:hover,
#footer .row1 h4 a:hover,
#footer .row1 h5 a:hover
{
	<?php echo $footer_row1_linkcolorhover; ?>
}

#footer .row1 .button,
#footer .row1 .validate,
#footer .row1 .readmore,
#footer .row1 .readmore button,
#footer .row1 .readmore .button,
#footer .row1 input.button,
#footer .row1 button.button,
#footer .row1 button.validate,
#footer .row1 button
{
	<?php echo $btn_fontcolor; ?>
	<?php echo $btn_bgcolor; ?>	
}

#footer .row1 .button a,
#footer .row1 .readmore a,
#footer .row1 .readmore button a,
#footer .row1 .readmore .button a,
#footer .row1 input.button a,
#footer .row1 button.button a
{
	<?php echo $btn_fontcolor; ?>	
}

#footer .row1 .button a:hover,
#footer .row1 .readmore:hover,
#footer .row1 .readmore:hover a,
#footer .row1 .readmore a:hover,
#footer .row1 .readmore button:hover,
#footer .row1 .readmore .button:hover,
#footer .row1 .readmore button a:hover,
#footer .row1 .readmore .button a:hover,
#footer .row1 input.button:hover,
#footer .row1 input.button a:hover,
#footer .row1 button.validate:hover,
#footer .row1 button:hover,
#footer .row1 button.button:hover,
#footer .row1 button.button a:hover
{
	<?php echo $btn_hoverfontcolor; ?>
}

#footer .row1 .readmore:hover,
#footer .row1 .readmore button:hover,
#footer .row1 .readmore .button:hover,
#footer .row1 input.button:hover,
#footer .row1 button.validate:hover,
#footer .row1 button:hover,
#footer .row1 button.button:hover
{
	<?php echo $btn_hoverbgcolor; ?>
}

/**************************************************************************************/


#footer .row1col1,
#footer .row1col2,
#footer .row1col3,
#footer .row1col4
{
	width: <?php echo $footer_row1_colwidth; ?>px;	
	<?php echo $footer_row1_fontcolor; ?>
	<?php echo $footer_row1_bgcolor; ?>
	<?php echo $footer_row1_bgpattern; ?>
}

#footer .row1col1 .moduletable,
#footer .row1col2 .moduletable,
#footer .row1col3 .moduletable,
#footer .row1col4 .moduletable
{
	padding: 20px <?php echo $footer_modulepadding; ?>px <?php echo $footer_modulepadding; ?>px;		
}

/**************************************************************************************/
/*   Footer Row 2	   																  */


#footer .row2
{
	<?php echo $footer_row2_fontcolor; ?>
	<?php echo $footer_row2_bgcolor; ?>
	<?php echo $footer_row2_bgpattern; ?>
    <?php echo $box_border; ?>
    <?php echo $box_shadow; ?>	
}

#footer .row2 .content
{
	_width: <?php echo $footer_row2_width; ?>px;	
    width: 100%;		
}

#footer .row2 h1
{
	font-size: <?php echo $footer_row2_h1fontsize; ?>;
}

#footer .row2 h2
{
	font-size: <?php echo $footer_row2_h2fontsize; ?>;
}

#footer .row2 h3
{
	font-size: <?php echo $footer_row2_h3fontsize; ?>;
}

#footer .row2 h3 span
{
	<?php echo $footer_row2_hspancolor; ?>
}

#footer .row2 h4
{
	font-size: <?php echo $footer_row2_h4fontsize; ?>;
}

#footer .row2 h5
{
	font-size: <?php echo $footer_row2_h5fontsize; ?>;
}

#footer .row2 h1, 
#footer .row2 h2, 
#footer .row2 h3,
#footer .row2 h4,
#footer .row2 h5
{
	<?php echo $footer_row2_hfontcolor; ?>
	<?php echo $footer_row2_hshadowcolor; ?>	
	text-transform: <?php echo $footer_row2_htexttransform; ?>;	
}

#footer .row2 input
{
	<?php echo $footer_row2_fontcolor; ?>
}

#footer .row2 p,
#footer .row2 #trademark
{
	<?php echo $footer_row2_fontcolor; ?>
}

#footer .row2 a,
#footer .row2 #footermenu li a
{
	<?php echo $footer_row2_linkcolor; ?>
}

#footer .row2 a:hover
{
	<?php echo $footer_row2_linkcolorhover; ?>
}

#footer .row2 ul li:hover
{
}

#footer .row2 .row2col1
{
	width: <?php echo $footer_row2col1_width; ?>px;	
}

#footer .row2 .row2col2,
#footer .row2 .row2col3,
#footer .row2 .row2col4
{
	width: <?php echo $footer_row2_colwidth; ?>px;
}


/**************************************************************************************/
/*   Footer Row 3	   																  */


#footer .row3
{
	<?php echo $footer_row3_fontcolor; ?>
	font-size: <?php echo $footer_row3_fontsize; ?>;
	font-weight: <?php echo $footer_row3_fontweight; ?>;
	text-transform: <?php echo $footer_row3_texttransform; ?>;	
}

#footer .row3 .content
{
	width: <?php echo $footer_row3_width; ?>px;		
}

#footer .row3 a
{
	<?php echo $footer_row3_linkcolor; ?>
}

#footer .row3 a:hover
{
	<?php echo $footer_row3_linkcolorhover; ?>
}


/**************************************************************************************/
/**************************************************************************************/
/*   General Element IDs and classes
/**************************************************************************************/
/**************************************************************************************/

button, 
.button, 
.validate, 
.readmore, 
#component p.readmore
{
	text-transform: <?php echo $btn_txttransform; ?>;
	<?php echo $btn_bgcolor; ?>
	<?php echo $btn_fontcolor; ?>
	<?php echo $body_hfontfamily; ?>
    <?php echo $btn_border; ?>;
    border-radius: <?php echo $btn_borderradius; ?>;
    <?php echo $btn_shadow; ?>;
	<?php echo $btn_bgpattern; ?>	
}

.readmore a, 
#component p.readmore a
{
	<?php echo $btn_fontcolor; ?>
}

button:hover, 
.button:hover, 
.validate:hover, 
.readmore:hover, 
#component p.readmore:hover
{
	<?php echo $btn_hoverbgcolor; ?>
	<?php echo $btn_hoverfontcolor; ?>
}

#component p.readmore a:hover
{
	<?php echo $btn_hoverfontcolor; ?>	
}

.moduletable_menu li a:hover
{
	<?php echo $body_linkcolorhover; ?>
}

.separatordotted_hor
{
	margin: 0px 0px 25px 0px;
	border-bottom: 1px dotted <?php echo $body_fontcolor_paramvalue; ?>;
}

.separatordotted_ver
{
}

.googlemap
{
	<?php echo $rightcolrows_123_hbgpattern; ?>
	<?php echo $rightcolrows_123_hbgcolor; ?>
	<?php echo $rightcolrows_123_hfontcolor; ?>
    <?php echo $box_border; ?>
    <?php echo $box_borderradius; ?>
    <?php echo $box_shadow; ?>	
}

/**************************************************************************************/
/**************************************************************************************/
/*   Custom CSS
/**************************************************************************************/
/**************************************************************************************/


<?php echo $custom_css; ?>

</style>