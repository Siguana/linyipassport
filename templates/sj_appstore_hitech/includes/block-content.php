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
if ($position['group'] == '') { // Position none group
	echo $yt->renPositionsContentNoGroup($position);	
} elseif ( ($position['group'] != 'sidebar') && ($position['group'] != 'main') ) { 	// Position has group's user created	
	if (!isset($countGSpe)) {
		$countGSpe = 0;
	}
	$countGSpe ++;
	$width = ($yt_render->arr_GI[$position['group']]['width'] != "") ? $yt_render->arr_GI[$position['group']]['width'] : "";
	$height = ($yt_render->arr_GI[$position['group']]['height'] != "") ? $yt_render->arr_GI[$position['group']]['height'] : "";
	$style = 'float:left;';
	if ($width != "" ) {
		if($style != "") {
			$style .= " width:".$width.";";
		} else {
			$style .= "width:".$width.";";
		}
	}
	if ($height != ""){
		if ($style != "") {
			$style .= " height:".$height.";";
		} else {
			$style .= "height:".$height.";";
		}
	}
	if($countGSpe == 1) {
		echo '<div class="group-' . $position['group'] . '" ' . ($style != '' ? 'style="'.$style.'"' : '') .'>';
		echo $yt->renPositionsGroup($position);	  
		$width = $height = $style = "";
		if($tagBD['count-'.$position['group']] == 1) {
			$countGSpe = null;
			echo '</div>';
		}
	} elseif ( $countGSpe == $tagBD['count-'.$position['group']] && $tagBD['count-'.$position['group']] > 1 ) {
		echo $yt->renPositionsGroup($position);	  
		$width = $height = $style = "";
		$countGSpe = null;
		echo '</div>';	
	} else {
		echo $yt->renPositionsGroup($position);	  
		$width=$height=$style="";
	}		
} elseif ( ($position['group'] == 'sidebar')
	   ||($position['group'] == 'main') ) { // Position has group's framework fixed	- left, main, right
	if($position['group'] == 'sidebar') {
		$countL ++;
		if($countL == 1) {	                	
			echo '<div id="content_sidebar" style="float:left">';
			echo '<div class="content_sidebar_inner">';
			echo '<div class="btn-sidebar"></div>';
			echo '<div class="sidebar-inner">';		
			echo $yt->renPositionsGroup($position, 'block-content');
			if($tagBD['count-group-sb'] == 1) {
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
		} elseif ($tagBD['count-group-sb'] == $countL && $tagBD['count-group-sb'] > 1) {
			echo $yt->renPositionsGroup($position, 'block-content');
			echo '</div>';	
			echo '</div>';
			echo '</div>';

			include_once (dirname(__FILE__).DS.'scroll-sidebar.php');
			
		} else {
			echo $yt->renPositionsGroup($position, 'block-content');
		}
		
	} elseif ($position['group'] == 'main') {
		$countM++;
		if ($countM == 1) {		       	
			echo '<div id="content_main">' ;
			echo $yt->renPositionsGroup($position, 'main');
			if($tagBD['count-group-main'] == 1 ) {
				echo '	</div>';
			}
		} elseif ( ($tagBD['count-group-main'] == $countM) && ($tagBD['count-group-main'] > 1) ){ 
			echo $yt->renPositionsGroup($position, 'main');		
			echo ' </div>';
		} else {
			echo $yt->renPositionsGroup($position, 'main');
		}
	}
}		
?> 
