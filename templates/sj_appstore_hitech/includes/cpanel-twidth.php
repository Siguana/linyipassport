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

$clayout = str_replace('.xml', '', $_GET['clayout']); 
$wtype = $_GET['wtype'];
//echo $clayout.' vs'.$wtype; die();
if($clayout=='left-main'){
	if($wtype=='px'){
		$mainBodyWidthType='px';
		$templateWidth = '980';
		$mainWidth='680';
		$leftWidth='300';
		$rightWidth='0';
	}else{
		$mainBodyWidthType='%';
		$templateWidth = '80';
		$mainWidth='60';
		$leftWidth='40';
		$rightWidth='0';
	}
}elseif($clayout=='main-right'){
	if($wtype=='px'){
		$mainBodyWidthType='px';
		$templateWidth = '980';
		$mainWidth='680';
		$leftWidth='0';
		$rightWidth='300';
	}else{
		$mainBodyWidthType='%';
		$templateWidth = '80';
		$mainWidth='60';
		$leftWidth='0';
		$rightWidth='40';
	}
	
}elseif($clayout=='full'){
	if($wtype=='px'){
		$mainBodyWidthType='px';
		$templateWidth = '980';
		$mainWidth='980';
		$leftWidth='0';
		$rightWidth='0';
	}else{
		$mainBodyWidthType='%';
		$templateWidth = '80';
		$mainWidth='100';
		$leftWidth='0';
		$rightWidth='0';
	}
	
}elseif($clayout=='left-main-right' || $clayout=='left-right-main' || $clayout=='main-left-right'){
	if($wtype=='px'){
		$mainBodyWidthType='px';
		$templateWidth = '980';
		$mainWidth='380';
		$leftWidth='300';
		$rightWidth='300';
	}else{
		$mainBodyWidthType='%';
		$templateWidth = '80';
		$mainWidth='40';
		$leftWidth='30';
		$rightWidth='30';
	}
	
}else{
	$mainBodyWidthType='px';
	$templateWidth = '0';
	$mainWidth='0';
	$leftWidth='0';
	$rightWidth='0';
}
?>
<div class="field">
    <label for="ytcpanel_templateWidth">Template width</label>
    <input type="text" name="ytcpanel_templateWidth" id="ytcpanel_templateWidth" class="cp_text" value="<?php echo $templateWidth; ?>"  size="5" /> <br/>
</div>
<div class="field">
    <label >MainBody Width Type</label>
    <input type="radio" name="ytcpanel_mainBodyWidthType" id="ytcpanel_px_mainwidthtype" class="cp_radio" value="px" <?php echo ($mainBodyWidthType=='px')?'checked="checked"':''; ?>/>px&nbsp;
    <input type="radio" name="ytcpanel_mainBodyWidthType" id="ytcpanel_percent_mainwidthtype" class="cp_radio" value="%" <?php echo ($mainBodyWidthType=='%')?'checked="checked"':''; ?>/>% <br/>
</div>
<div class="field">
    <label for="ytcpanel_mainWidth">Main Column Width</label>
    <input type="text" name="ytcpanel_mainWidth" id="ytcpanel_mainWidth" class="cp_text" value="<?php echo $mainWidth ?>" size="5" /> <br/>
</div>
<div class="field">
    <label for="ytcpanel_leftWidth">Left Column Width</label>
    <input type="text" name="ytcpanel_leftWidth" id="ytcpanel_leftWidth" class="cp_text" value="<?php echo $leftWidth ?>" size="5" /> <br/>
</div>
<div class="field">
    <label for="ytcpanel_rightWidth">Right Column Width</label>
    <input type="text" name="ytcpanel_rightWidth" id="ytcpanel_rightWidth" class="cp_text" value="<?php echo $rightWidth ?>" size="5" /> <br/>
</div>