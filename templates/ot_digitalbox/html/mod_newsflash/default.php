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
defined('_JEXEC') or die('Restricted access'); ?>
<?php
srand((double) microtime() * 1000000);
$flashnum	= rand(0, $items -1);
$item		= $list[$flashnum];
modNewsFlashHelper::renderItem($item, $params, $access);
?>