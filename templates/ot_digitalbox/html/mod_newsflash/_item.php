<?php
/**
 * @version     $Id: _item.php Oct 03rd, 2011 18:28:38Z OmegaTheme.com $
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

<?php if ($params->get('item_title')) : ?>
<h4>
	<?php if ($params->get('link_titles') && $item->linkOn != '') : ?>
		<a href="<?php echo $item->linkOn;?>">
			<?php echo $item->title;?>
		</a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
</h4>
<?php endif; ?>

<?php if (!$params->get('intro_only')) :
	echo $item->afterDisplayTitle;
endif; ?>

<?php echo $item->beforeDisplayContent; ?>

<?php echo $item->text; ?>

<?php if (isset($item->linkOn) && $item->readmore && $params->get('readmore')) : ?>
  <a class="readmore" href="<?php echo $item->linkOn; ?>"><?php echo $item->linkText ?></a>
<?php endif; ?>
