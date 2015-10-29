<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: GNU/GPL
/*
/*******************************************************************************************/

defined( '_JEXEC' ) or die( 'Restricted access' );

/* The following line loads the MooTools JavaScript Library */
JHTML::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();

/* The following lines get active menu */
$menu = $app->getMenu();
$menu_active = $menu->getActive();

$menu_id = $menu_active->id;


/* The following lines get language tags */
$lang = JFactory::getLanguage();

$page_title = $this->getTitle();

$home_page = 0;
$featured_page = 0;
$featured_view = 0;
if (JRequest::getVar('view') == 'featured')
{
	$featured_view = 1;	
}
if (JRequest::getVar('view') != 'reset' &&
    JRequest::getVar('view') != 'registration' &&
	JRequest::getVar('view') != 'remind' &&
	JRequest::getVar('view') != 'login' &&
	JRequest::getVar('view') != 'detail' &&	
	JRequest::getVar('searchword') == '')
{
	$menu_params = $menu->getParams($menu_active->id);
	
	if (($menu_active == $menu->getDefault()) || ($menu_active == $menu->getDefault($lang->getTag()))) 
	{
		$home_page = 1;
	}
	
	$featured_page = 0;
	$featured_page += (bool) $menu_params->get('num_leading_articles');
	$featured_page += (bool) $menu_params->get('num_columns');
	$featured_page += (bool) $menu_params->get('num_intro_articles');
}


if (!$featured_view)
{
	$featured_page = 1;	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>

    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=1100" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <?php if($this->params->get('jQuery_load')): ?>

        <script type="text/javascript" src="templates/<?php echo $this->template ?>/scripts/jquery-1.8.0.min.js"></script>

    <?php endif; ?>


	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.content.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.header.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.sidebars.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.footer.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/googlemap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/phocagallery.css" type="text/css" />  
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/virtuemart2.css" type="text/css" />  



	<script type="text/javascript" src="templates/<?php echo $this->template ?>/scripts/general.js"></script>

<?php 

include 'ie6warning.php';
include 'params.php';

echo $google_hfont['fontlink'];
echo $google_font['fontlink'];

?>

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $tmpl_style; ?>" type="text/css" />

<?php

include 'styles.php';

?>
  
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.custom.css" type="text/css" />
        
</head>

<body>

	<div class="body-wrapper">	
        	
    
        <!-- HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
        <div id="header">
            
            <div class="body-content">
            
            <div class="row0">
                <div class="content">
                    <div class="width floatleft">
                        <jdoc:include type="modules" name="position-4" />   
                    </div>   
                    <div class="width floatright">
                        <jdoc:include type="modules" name="position-60" />
                    </div>                              
                </div>
                <?php 
                if($this->countModules('position-6')): 
                ?>                    
                <div class="content row0col2">
                    <div class="companycontacts">
                        <jdoc:include type="modules" name="position-6" />
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="row1">
                <div class="content">
                    <div class="row1col1">
                        <div id="companyname">
                            <?php if(!$logo_type): ?>
                            <a href="<?php echo $this->baseurl; ?>" > 
                                <img src="<?php echo $logo_img; ?>" alt="AS Templates"/>            
                            </a>
                            <?php else: ?> 
                            <div class="companyname">
                                <a href="<?php echo $this->baseurl ?>"><?php echo $logo_txt; ?></a>
                                <div class="slogan">
                                    <?php echo $slogan_txt; ?>
                                </div>								
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                      
                </div>
                <div class="clear"></div>        
            </div>
            
            </div>
            
            <div class="row2">
                <div class="content">
                    <div id="topmenu">
                    <div class="body-content">
                        <jdoc:include type="modules" name="position-1"/>
                    </div>
                    </div>
                </div>
                 <div class="clear"></div>
            </div>
    
            <?php 
            if($header_row3): 
            ?>
            <div class="row3">
                <div class="content">
                <div class="body-content">
                    <?php 
                    if($this->countModules('slider')): 
                    ?>             
                    <div class="row3col1">                
                        <div class="slider">
                            <jdoc:include type="modules" name="slider" />
                        </div>
                    </div>
                    <?php endif; ?>
    
                    <?php 
                    if($this->countModules('position-7') || $this->countModules('position-8')): 
                    ?>                 
                    <div class="row3col2">
                        <?php 
                        if($this->countModules('position-7')): 
                        ?>  
                        <div class="toprow">
                            <jdoc:include type="modules" name="position-7" style="xhtml"/> 
                        </div>
                        <?php endif; ?>                    
                        
                        <?php 
                        if($this->countModules('position-8')): 
                        ?>                    
                        <div class="bottomrow">
                            <jdoc:include type="modules" name="position-8" style="xhtml"/> 
                        </div>
                        <?php endif; ?>                    
                    </div>
                    <?php endif; ?>     
                </div>           
                </div>
            </div>
            <?php endif; ?>                
            
            <?php 
            if($this->countModules('position-2')): 
            ?>
            <div class="breadrow">
                <div class="content">
                    <div id="breadcrumb">
                        <jdoc:include type="modules" name="position-2" />	
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <?php endif; ?>
            
            <?php if($header_customrow): ?>
            <div class="row4">
                <div class="content">
                    <div class="wrapper">
                        <?php if($this->countModules('position-12')): ?>
                        <div class="row4col1">
                            <jdoc:include type="modules" name="position-12" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                        <?php if($this->countModules('position-13')): ?>
                        <div class="row4col2">
                            <jdoc:include type="modules" name="position-13" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                        <?php if($this->countModules('position-14')): ?>
                        <div class="row4col3">
                            <jdoc:include type="modules" name="position-14" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                        <?php if($this->countModules('position-15')): ?>
                        <div class="row4col4">
                            <jdoc:include type="modules" name="position-15" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <?php endif; ?>
            
        </div>
        <!-- END OF HEADER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        
        
        
        <!-- CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        
        <div class="body-content">
        <div class="clear"></div>
        <div id="content">  
          
            <!-- COLUMN LEFT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <?php if($leftcolumn) : ?> 
            <div id="colleft">
                <div id="colleft_rows_123">
                    <?php if($this->countModules('position-0')): ?>
                    <div class="row0">
                        <jdoc:include type="modules" name="position-0" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-40')): ?>
                    <div class="row1">
                        <jdoc:include type="modules" name="position-40" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-41')): ?>
                    <div class="row2">
                        <jdoc:include type="modules" name="position-41" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-42')): ?>
                    <div class="row3">
                        <jdoc:include type="modules" name="position-42" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                </div>
                <div id="colleft_rows_45">            
                    <?php if($this->countModules('position-43')): ?>
                    <div class="row4">
                        <jdoc:include type="modules" name="position-43" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-44')): ?>
                    <div class="row5">
                        <jdoc:include type="modules" name="position-44" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <!-- END OF COlUMN LEFT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                    
            <!-- COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div id="colmain" >
            
                <jdoc:include type="message" />
        
                <?php if($main_row3): ?>
                <div class="row3">
                    <?php if($this->countModules('position-28')): ?>
                    <div class="row3col1">
                        <jdoc:include type="modules" name="position-28" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-29')): ?>
                    <div class="row3col2">
                        <jdoc:include type="modules" name="position-29" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-30')): ?>
                    <div class="row3col3">
                        <jdoc:include type="modules" name="position-30" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-31')): ?>
                    <div class="row3col4">
                        <jdoc:include type="modules" name="position-31" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="clear"></div>
                <?php endif; ?>
                
                <?php if($main_row2 || $main_row3): ?>
                <div class="item-separator"></div>            
                <?php endif; ?>
    
                <?php if($featured_page): ?>
                <div id="component">
                    <jdoc:include type="component"  />
                </div>
                <div class="clear"></div>
                <?php endif; ?>
        
                <?php if($this->countModules('position-5')): ?>
                <div id="adsense">
                    <div class="innerborder">
                        <jdoc:include type="modules" name="position-5" style="xhtml"/>
                    </div>
                </div>
                <div class="clear"></div>
                <?php endif; ?>
    
                <?php if($main_row4): ?>
                <div class="row4">
                    <?php if($this->countModules('position-32')): ?>
                    <div class="row4col1">
                        <jdoc:include type="modules" name="position-32" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-33')): ?>
                        <?php if($main_row4_separator1): ?>
                        <div class="sepleft_25"></div>
                        <?php endif; ?>
                    <div class="row4col2">
                        <jdoc:include type="modules" name="position-33" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-34')): ?>
                        <?php if($main_row4_separator2): ?>
                        <div class="sepleft_25"></div>
                        <?php endif; ?>
                    <div class="row4col3">
                        <jdoc:include type="modules" name="position-34" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-35')): ?>
                        <?php if($main_row4_separator3): ?>
                        <div class="sepleft_25"></div>
                        <?php endif; ?>
                    <div class="row4col4">
                        <jdoc:include type="modules" name="position-35" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="clear"></div>
                <?php endif; ?>
            </div>
            <!-- END OF COLUMN MAIN ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    
        
            <!-- COLUMN RIGHT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <?php if($rightcolumn) : ?> 
            <div id="colright">
                <div id="colright_rows_123">
                    <?php if($this->countModules('position-45')): ?>
                    <div class="row1">
                        <jdoc:include type="modules" name="position-45" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-46')): ?>
                    <div class="row2">
                        <jdoc:include type="modules" name="position-46" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-47')): ?>
                    <div class="row3">
                        <jdoc:include type="modules" name="position-47" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                </div>
                <div id="colright_rows_45">            
                    <?php if($this->countModules('position-48')): ?>
                    <div class="row4">
                        <jdoc:include type="modules" name="position-48" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('position-49')): ?>
                    <div class="row5">
                        <jdoc:include type="modules" name="position-49" style="xhtml"/>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <!-- END OF COLUMN RIGHT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        </div>
        <div class="clear"></div>
        </div>
        
        <!-- FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div id="footer">
        
            <?php if($footer_row1): ?>
            <div class="row1">
                <div class="body-content">
                    <div class="inner-border">
                        <?php if($this->countModules('position-56')): ?>
                        <div class="row1col1">
                            <jdoc:include type="modules" name="position-56" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                            <?php if($footer_row1_separator1): ?>
                            <div class="sepleft_25"></div>
                            <?php endif; ?>
                        <?php if($this->countModules('position-57')): ?>
                        <div class="row1col2">
                            <jdoc:include type="modules" name="position-57" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                            <?php if($footer_row1_separator2): ?>
                            <div class="sepleft_25"></div>
                            <?php endif; ?>
                        <?php if($this->countModules('position-58')): ?>
                        <div class="row1col3">
                            <jdoc:include type="modules" name="position-58" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                            <?php if($footer_row1_separator3): ?>
                            <div class="sepleft_25"></div>
                            <?php endif; ?>
                        <?php if($this->countModules('position-59')): ?>
                        <div class="row1col4">
                            <jdoc:include type="modules" name="position-59" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <?php endif; ?> 

            <?php if($this->countModules('position-61')): ?>
            <div class="row1">  
                <div class="body-content" >
                	<div class="inner-border">
                        <jdoc:include type="modules" name="position-61" style="xhtml"/>
                    </div>
                </div> 
            </div>    
            <?php endif; ?>
            
            <?php if($footer_row2) : ?>
            <div class="row2"> 
                <div class="content">
                <div class="body-content">
                    <?php if($this->countModules('position-50')): ?>
                    <div class="row2col1" >
                        <jdoc:include type="modules" name="position-50" style="xhtml"/>
                    </div>
                    <?php endif; ?>
    
                    <?php
                    if($this->countModules('position-51') && 
                            ((!$footer_row2col1_extension || ($footer_row2col1_extension == 1 && !$home_page)) ||
                             ($footer_row2col1_extension && !$this->countModules('position-50')))): ?>								
                        <?php if($footer_row2_separator1): ?>
                        <div class="sepleft_30"></div>
                        <?php endif; ?>                
                    <div class="row2col2" >
                        <jdoc:include type="modules" name="position-51" style="xhtml"/>
                    </div>
                    <?php endif; ?>
    
                    <?php
                    if($this->countModules('position-52')): ?>								
                        <?php if($footer_row2_separator2): ?>
                        <div class="sepleft_30"></div>
                        <?php endif; ?>                
                    <div class="row2col3" >
                        <jdoc:include type="modules" name="position-52" style="xhtml"/>
                    </div>
                    <?php endif; ?>
    
                    <?php if($this->countModules('position-53') || $this->countModules('position-54')): ?>
                        <?php if($footer_row2_separator3): ?>
                        <div class="sepleft_30"></div>
                        <?php endif; ?>                
                    <div class="row2col4" >
                        <?php if($this->countModules('position-53')): ?>
                        <div id="contactus">
                            <jdoc:include type="modules" name="position-53" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                        <?php if($this->countModules('position-54')): ?>                    
                        <div id="social">
                            <jdoc:include type="modules" name="position-54" style="xhtml"/>
                        </div>
                        <?php endif; ?>
                        <div class="clear"></div>
                    </div>
                    <?php endif; ?>
                    
                </div>
                </div>
            </div>
            <div class="clear"></div>
            <?php endif; ?>
    
    
            <div class="row3"> 
                <div class="wrapper">	        
                    <div class="content">
                        <div class="row3col1">
                        <!-- DO NOT REMOVE OR CHANGE THE CONTENT BELOW, THIS THEME MAY NOT WORK PROPERLY -->
                        
                          <div id="copyright-row">
                              <div class="container">
                                <div id="copyright-menu" class="row">
                                    <!-- DO NOT REMOVE OR CHANGE THE CONTENT BELOW, THIS THEME MAY NOT WORK PROPERLY -->
                                    
                                        <div id="ascopy">
                                        <a href="http://www.astemplates.com/" target="_blank">
                                            DESIGNED BY:&nbsp;&nbsp;AS DESIGNING
                                        </a>
                                        </div>
                                    
                                    <!-- DO NOT REMOVE OR CHANGE THE CONTENT ABOVE, THIS THEME MAY NOT WORK PROPERLY -->
                                </div>  
                              </div>
                          </div>
                        
                        <!-- DO NOT REMOVE OR CHANGE THE CONTENT ABOVE, THIS THEME MAY NOT WORK PROPERLY -->
                        </div>
        
                        <div class="row3col2">            
                            <div id="trademark">
                                Copyright &copy; <?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF FOOTER ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        
        
        
        <!-- Back Top -------------------------------------------------------------------------------------------------- -->
        <div id="back-top">
            <a href="#">
                <span></span>
            </a>
        </div>
	</div>    
</body>
</html>

