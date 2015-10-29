<?php
/**
 * @version     $Id: default.php Oct 03rd, 2011 18:28:38Z OmegaTheme.com $
 * @package     OmegaTheme Joomla 1.5 Template
 * @subpackage  OT Template Code Standard
 * @author      OmegaTheme.com (services@omegatheme.com)
 * @link        http://omegatheme.com
 * @copyright   Copyright (C) 2008 - 2012 OmegaTheme. All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<span class="breadcrumbs">
<?php for ($i = 0; $i < $count; $i ++) :

	// clean subtitle from breadcrumb
	if ($pos = strpos($list[$i]->name, '||')) {
		$name = trim(substr($list[$i]->name, 0, $pos));
	} else {
		$name = $list[$i]->name;
	}
	
	// if not the last item in the breadcrumbs add the separator
	if ($i < $count -1) {
		if(!empty($list[$i]->link)) {
			echo '<a class="breadcrumb-arrow" href="'.$list[$i]->link.'">'.$name.'</a>';
		} else {
			echo '<span class="breadcrumb-arrow">'.$name.'</span>';
		}
		//echo ' '.$separator.' ';
	} else { // when $i == $count -1
	    echo '<span>'.$name.'</span>';
	}
endfor; ?>
</span>