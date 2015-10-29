<?php
/**
 * @version		$Id: default_separator.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	mod_menu modify by Omegatheme - http://omegatheme.com
 * @copyright		Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license			GNU General Public License version 2 or later; see LICENSE.txt
 * @author 			Modify by Omegatheme - http://omegatheme.com
 */
//No direct access!
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$title = $item->anchor_title ? 'title="'.$item->anchor_title.'" ' : '';
if ($item->menu_image) {
		$item->params->get('menu_text', 1 ) ? 
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" /><span class="image-title">'.$item->title.'</span> ' :
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />';
} 
else { $linktype = $item->title;
}

?><span class="separator"><?php echo $title; ?><?php echo $linktype; ?></span>
