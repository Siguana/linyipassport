<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	mod_menu modify by Omegatheme - http://omegatheme.com
 * @copyright		Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license			GNU General Public License version 2 or later; see LICENSE.txt
 * @author 			Modify by Omegatheme - http://omegatheme.com
 */
//No direct access!
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>
<ul class="menu<?php echo $class_sfx;?> level0"<?php
	$tag = '';
	if ($params->get('tag_id')!=NULL) {
		$tag = $params->get('tag_id').'';
		echo ' id="'.$tag.'"';
	}
?>>
<?php
$past_level_diff = 0;
foreach ($list as $i => &$item) :
	$class = '';
	
	if ($item->id == $active_id) {
		$class .= 'current ';
	}
	
	if (in_array($item->id, $path)) {
		$class .= 'active ';
	}

	if ($item->deeper) {
		$class .= 'parent ';
	}
	
	$class .= 'level'.intval($item->level-1).' ';
	
	if ($i == 0 || $past_level_diff == -1) {
		$class .= 'first ';
	}	
	$past_level_diff = $item->level_diff;
	
	if (!empty($class)) {
		$class = ' class="'.trim($class) .'"';
	}
	echo '<li id="item-'.$item->id.'"'.$class.'>';

	// Render the menu item.
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
			require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
			break;
			
		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
			break;
	endswitch;

	// The next item is deeper.
	if ($item->deeper) {
		echo '<div class="menu_round"><div class="menu_top"></div><div class="menu_mid"><ul class="level'.$item->level.'">';
	}
	// The next item is shallower.
	else if ($item->shallower) {
		echo '</li>';
		echo str_repeat('</ul></div><div class="menu_bot"></div></div></li>', $item->level_diff);
	}
	// The next item is on the same level.
	else {
		echo '</li>';
	}
endforeach;
?></ul>