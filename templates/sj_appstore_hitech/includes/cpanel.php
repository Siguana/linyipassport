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
// Add style: cpanel.css
$doc->addStyleSheet($yt->templateurl().'css/cpanel.css','text/css');
$doc->addStyleSheet($yt->templateurl().'css/jquery.miniColors.css','text/css');
// Add javascrip
$doc->addScript($yt->templateurl().'js/ytcpanel.js');
$doc->addScript($yt->templateurl().'js/collapse.js');
$doc->addScript($yt->templateurl().'js/jquery.miniColors.js');

?>
<div id="cpanel_wrapper" style="direction:ltr">
	<div class="cpanel-head">Template Settings</div>
  
    <div class="accordion" id="ytcpanel_accordion">
    	<!--Body-->
        <div class="accordion-group cpnel-body">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#ytcpanel_accordion" href="#ytitem_1">
                Main Content
                </a>
            </div>
            <div id="ytitem_1" class="accordion-body collapse in">
                <div class="accordion-inner clearfix">
                    
                    <!-- Link color-->
                    <div class="cp-item link-color">
                        <span>Link color</span>
                        <div class="inner">
                        	<input type="text" value="<?php echo $yt->getParam('linkcolor');?>" autocomplete="off" size="7" class="color-picker miniColors" name="ytcpanel_linkcolor" maxlength="7">
                        </div>
                    </div>
                    <!-- Text color-->
                    <div class="cp-item text-color">
                        <span>Text color</span>
                        <div class="inner">
                        	<input type="text" value="<?php echo $yt->getParam('textcolor'); ?>" autocomplete="off" size="7" class="color-picker miniColors" name="ytcpanel_textcolor" maxlength="7">
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
	   <!-- yt_spotlight3-->
        <div class="accordion-group cpanel-spotlight3">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#ytcpanel_accordion" href="#ytitem_2">
                Spotlight3
                </a>
            </div>
        	<div id="ytitem_2" class="accordion-body collapse">
                <div class="accordion-inner clearfix">
                	<!-- Backgroud color -->
                    <div class="cp-item spotlight3-backgroud-color">
                        <span>Background Color</span>
                        <div class="inner">
                        	<input type="text" value="<?php echo $yt->getParam('spotlight3-bgcolor');?>" autocomplete="off" size="7" class="color-picker miniColors" name="ytcpanel_spotlight-bgcolor" maxlength="7">
                        </div>
                    </div>
      				<!-- Backgroud image-->
                    <div class="cp-item spotlight3-backgroud-image">
                        <span>Background Image</span>
                        <div class="inner">
                        	<input type="hidden" name="ytcpanel_spotlight3-bgimage" value="<?php echo $yt->getParam('spotlight3-bgimage'); ?>"/>
                            <a href="#yt_spotlight3" title="pattern_s1" class="pattern pattern_s1<?php echo ($yt->getParam('spotlight3-bgimage')=='pattern_s1')?' active':''?>">pattern_s1</a>
                            <a href="#yt_spotlight3" title="pattern_s2" class="pattern pattern_s2<?php echo ($yt->getParam('spotlight3-bgimage')=='pattern_s2')?' active':''?>">pattern_s2</a>
                            <a href="#yt_spotlight3" title="pattern_s3" class="pattern pattern_s3<?php echo ($yt->getParam('spotlight3-bgimage')=='pattern_s3')?' active':''?>">pattern_s3</a>
                            <a href="#yt_spotlight3" title="pattern_s4" class="pattern pattern_s4<?php echo ($yt->getParam('spotlight3-bgimage')=='pattern_s4')?' active':''?>">pattern_s4</a>
                            <a href="#yt_spotlight3" title="pattern_s5" class="pattern pattern_s5<?php echo ($yt->getParam('spotlight3-bgimage')=='pattern_s5')?' active':''?>">pattern_s5</a>
                        </div>
                    </div>
				</div>
			</div>
        </div>
	   
        <!-- Footer-->
        <div class="accordion-group cpanel-footer">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#ytcpanel_accordion" href="#ytitem_3">
                Footer 
                </a>
            </div>
            <div id="ytitem_3" class="accordion-body collapse">
                <div class="accordion-inner clearfix">
                	<!-- Backgroud color -->
                    <div class="cp-item footer-backgroud-color">
                        <span>Backgroud-color</span>
                        <div class="inner">
                        	<input type="text" value="<?php echo $yt->getParam('footer-bgcolor');?>" autocomplete="off" size="7" class="color-picker miniColors" name="ytcpanel_footer-bgcolor" maxlength="7">
                        </div>
                    </div>
                    <!-- Backgroud image-->
                    <div class="cp-item footer-backgroud-image">
                        <span>Backgroud image</span>
                        <div class="inner">
                        	<input type="hidden" value="<?php echo $yt->getParam('footer-bgimage');?>" name="ytcpanel_footer-bgimage" />
                            <a href="#yt_spotlight2" title="pattern_1" class="pattern pattern_1<?php echo ($yt->getParam('footer-bgimage')=='pattern_1')?' active':''?>">pattern_1</a>
                            <a href="#yt_spotlight2" title="pattern_2" class="pattern pattern_2<?php echo ($yt->getParam('footer-bgimage')=='pattern_2')?' active':''?>">pattern_2</a>
                            <a href="#yt_spotlight2" title="pattern_3" class="pattern pattern_3<?php echo ($yt->getParam('footer-bgimage')=='pattern_3')?' active':''?>">pattern_3</a>
                            <a href="#yt_spotlight2" title="pattern_4" class="pattern pattern_4<?php echo ($yt->getParam('footer-bgimage')=='pattern_4')?' active':''?>">pattern_4</a>
                            <a href="#yt_spotlight2" title="pattern_5" class="pattern pattern_5<?php echo ($yt->getParam('footer-bgimage')=='pattern_5')?' active':''?>">pattern_5</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Typography -->
        <div class="accordion-group cpanel-typography">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#ytcpanel_accordion" href="#ytitem_4">
                Typography
                </a>
            </div>
            <div id="ytitem_4" class="accordion-typo collapse">
                <div class="accordion-inner clearfix">
                	<!-- Google font -->
                    <div class="cp-item">
                        <span>Google font</span>
                        <div class="inner">
                        	<?php 
							$googleFont = array(
										'None'=>' ',
										'Open Sans'=>'Open Sans',
										'BenchNine'=>'BenchNine',
										'Droid Sans'=>'Droid Sans',
										'Droid Serif'=>'Droid Serif',
										'PT Sans'=>'PT Sans',
										'Vollkorn'=>'Vollkorn',
										'Ubuntu'=>'Ubuntu',
										'Neucha'=>'Neucha',
										'Cuprum'=>'Cuprum'
							);
							?>
                            <select onchange="javascript: onCPApply();" name="ytcpanel_googleWebFont" class="cp_select">
							<?php foreach($googleFont as $k=>$v):?>
                                <option value="<?php echo $v; ?>"<?php echo ($yt->getParam('googleWebFont')==$v)?' selected="selected"':'';?>><?php echo $k; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Body font-size -->
                    <div class="cp-item">
                        <span>Body font-size</span>
                        <div class="inner">
                            <?php 
							$fontfamily = array(
										 '10px'=>'10px',
										 '11px'=>'11px',
										 '12px'=>'12px',
										 '13px'=>'13px',
										 '14px'=>'14px',
										 '15px'=>'15px',
										 '16px'=>'16px',
										 '17px'=>'17px',
										 '18px'=>'18px'
							);
							?>
                            <select onchange="javascript: onCPApply();" name="ytcpanel_fontsize" class="cp_select">
							<?php foreach($fontfamily as $k=>$v):?>
                                <option value="<?php echo $v; ?>"<?php echo ($yt->getParam('fontsize')==$v)?' selected="selected"':'';?>><?php echo $k; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Body font-family -->
                    <div class="cp-item body-fontfamily">
                        <span>Body font-family</span>
                        <div class="inner">
                        <?php 
						$fontfamily = array(
									 'Arial'=>'arial',
									 'Arial Black'=>'arial-black',
									 'Courier New'=>'courier',
									 'Georgia'=>'georgia',
									 'Impact'=>'impact',
									 'Lucida Console'=>'lucida-console',
									 'Lucida Grande'=>'lucida-grande',
									 'Palatino'=>'palatino',
									 'Tahoma'=>'tahoma',
									 'Times New Roman'=>'times',
									 'Trebuchet'=>'trebuchet',
									 'Verdana'=>'verdana'
						);
						?>
                            <select onchange="javascript: onCPApply();" name="ytcpanel_font_name" class="cp_select">
							<?php foreach($fontfamily as $k=>$v):?>
                                <option value="<?php echo $v; ?>"<?php echo ($yt->getParam('font_name')==$v)?' selected="selected"':'';?>><?php echo $k; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    <!-- Action button -->
    <div class="action">
    	<!--<input id="yt_button_cpanel" class="btn btn-info" type="button" onclick="javascript: onCPApply();" value="Apply" class="button" />-->
    	<a  class="btn btn-info" href="#" onclick="javascript: onCPResetDefault();" class="reset">Reset</a>
    </div>
    <div id="cpanel_btn" class="normal">
        <i class="icon-hand-left"></i>
    </div>
</div>