<?php
/**
 # ot_odio  		OT Odio  Template for Joomla 2.5!
 # author 			OmegaTheme.com
 # copyright 		Copyright(C) 2012 - OmegaTheme.com. All Rights Reserved.
 # @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Website: 		http://omegatheme.com
 # Technical 		support: Forum - http://omegatheme.com/forum/
 **/
 /**------------------------------------------------------------------------
 * file: splitmodules.php 2.5.0 00001, May 2012 12:00:00Z OmegaTheme $
 * package:	OT Odio Template
 *------------------------------------------------------------------------*/
 
//No direct access!
defined( '_JEXEC' ) or die;

function applyLayout($name, $boxlayout)
{
	
	switch ($name)
	{
		case 'custom' :
			$layout_boxes = explode(";", $boxlayout);
			$layout = array();
			foreach ($layout_boxes as $idx => $layout_box)
			{
				if (trim($layout_box) !=""){
					$layout[$idx+1] = explode(",", trim(str_replace(array(" ", "(", ")"), array("", "", ""), $layout_box)));
				}
			}
			
		break;
		
		default:
			$layout = array(
					1 => array('100'),
					2 => array('50', '50'),
					3 => array('33', '33', '33'),
					4 => array('25', '25', '25', '25'),
					5 => array('20', '20', '20', '20', '20'));
			break;
	}
	
	return $layout;
}

function splitmodules($template,$array_modules,$default_boxes_width,$boxes_width_model,$totalwidth=100,$firstwidth=0) 
{
	//$boxes_width_model = $template->params->get('width_bottomcontents');
	$layouts = applyLayout($default_boxes_width,$boxes_width_model);
	
	$modules = array();
	$modules_s = array();
	foreach($array_modules as $position){
		if( $template->countModules($position) ){
			$modules_s[] = $position;
		}
	}
	
	if (count($modules_s) == 0) return null;
	
	$boxes_width = $layouts[count($modules_s)];
	
	if ( count($modules_s)> 1 ){
		$modules[$modules_s[0]]['class'] = ' firstbox';
		$modules[$modules_s[0]]['width'] = $boxes_width[0];
		for($i=1; $i<count($modules_s); $i++){				
			if( $i < count($modules_s)-1 ){
				$modules[$modules_s[$i]]['class'] = ' midbox';
			}else {
				$modules[$modules_s[$i]]['class'] = ' lastbox';
			}
			$modules[$modules_s[$i]]['width'] = $boxes_width[$i];
		}
	}elseif( count($modules_s) ==1){
		$modules[$modules_s[0]]['width'] = $boxes_width[0];
		$modules[$modules_s[0]]['class'] = '';
	}
	return $modules;
} ?>

