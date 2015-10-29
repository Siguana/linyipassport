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
// Add javascrip
$doc->addScript($yt->templateurl().'js/ytcpanel_.js');
?>
<div id="cpanel_wrapper" style="direction:ltr"><div class="inner">
	<!-- Help link -->
    <div class="helplink">
        <div>
        <a target="_blank" href="http://www.smartaddons.com/">Download</a>
        <a target="_blank" href="http://www.smartaddons.com/joomla/templates/template-user-guides">Document</a>
        </div>
    </div>
    <div class="cpanel-items">
      
        
        <!-- Item: Font size -->
        <div class="item bg font">
            <h3>Fonts</h3>
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
            <div class="font-family">
                <select name="ytcpanel_font_name" class="cp_select">
                <?php foreach($fontfamily as $k=>$v):?>
                    <option value="<?php echo $v; ?>" <?php echo ($yt->getParam('font_name')==$v)?'selected="selected"':'';?>><?php echo $k; ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="font-size">
                <ul class="yt-fontsize clearfix">
                    <li class="dec" style="cursor: pointer;" title="Decrease Text Size" onclick="switchFontSize('<?php echo $yt->template."_fontsize";?>','dec'); return false;"></li>
                    <li class="reset" title="Reset Text Size" style="cursor: pointer;" onclick="switchFontSize('<?php echo $yt->template."_fontsize";?>',<?php echo $yt->_tpl->params->get('fontsize');?>); return false;"></li>
                    <li class="inc" title="Increase Text Size" style="cursor: pointer;" onclick="switchFontSize('<?php echo $yt->template."_fontsize";?>','inc'); return false;"></li>
                </ul>
                <script type="text/javascript">
                    var CurrentFontSize=parseInt('<?php echo $yt->getParam('fontsize');?>');
                    var DefaultFontSize=parseInt('<?php echo $yt->_tpl->params->get('fontsize');?>')
                </script>
			</div>
        </div>
        
        <!-- Item: Layouts -->
        <!--
        <?php 
		$layouts = array(
				 'sj_appstore'
		);
		// Begin: Custom for current template
		 /* Array layout suffix */
		$arr_suffix = array(
		);
		// End: Custom for current template
		?>
        <div class="item layouts">
        	<h3>Layouts</h3>
            <ul>
            <?php for($i=0; $i<count($layouts); $i++){ ?>
			<?php
				//Check layout has suffix
				$suffixlayout = '';
				if (isset($arr_suffix[$layouts[$i]])) {
					$suffixlayout = $arr_suffix[$layouts[$i]];
				}
			?>
            	<li>
                	<input type="radio" 
                        name="ytcpanel_<?php echo $yt->type.'_main_layout'; ?>" 
                        id="ytcpanel_layouts_<?php echo $layouts[$i] ?>" 
                        class="cp_radio" 
                        value="<?php echo $layouts[$i] ?>.xml" 
                        <?php echo ($yt->getParam($yt->type.'_main_layout')==$layouts[$i].'.xml')?'checked="checked"':''; ?>/>
                        <label for="ytcpanel_layouts_<?php echo $layouts[$i] ?>"><?php echo $layouts[$i] ?></label>				
                </li>
            <?php } ?>
            </ul>
        </div>
        -->
        <!-- Item: Direction -->
        <div class="item direction">
            <h3>Direction</h3>
            <ul>
            	<li>
                	<input type="radio" name="ytcpanel_direction" id="ytcpanel_ltr_direction" class="cp_radio" value="ltr" <?php echo ($yt->getParam('direction')=='ltr')?'checked="checked"':''; ?>/>
            		<label for="ytcpanel_ltr_direction">LTR</label>
                </li>
                <li>
                	<input type="radio" name="ytcpanel_direction" id="ytcpanel_rtl_direction" class="cp_radio" value="rtl" <?php echo ($yt->getParam('direction')=='rtl')?'checked="checked"':''; ?>/>
            		<label for="ytcpanel_rtl_direction">RTL</label>
                </li>
            </ul>
        </div>
    </div>
    <!-- Action button -->
    <div class="action">
    	<input id="yt_button_cpanel" type="button" onclick="javascript: onApply('<?php echo $yt->template; ?>');" value="Apply" class="button" />
    	<a href="#" onclick="javascript: onResetDefault('<?php echo $yt->template; ?>');" class="reset">Reset</a>
    	<input type="hidden" value="" id="idSuffix" name="ytcpanel_layoutsuffix"/>
    </div>
    
</div></div>

<div id="cpanel_btn">
	<span>&nbsp;</span>
</div>