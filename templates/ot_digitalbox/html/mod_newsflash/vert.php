<?php
/**
 * @version     $Id: vert.php Oct 03rd, 2011 18:28:38Z OmegaTheme.com $
 * @package     OmegaTheme Joomla 1.5 Template
 * @subpackage  OT Template Code Standard
 * @author      OmegaTheme.com (services@omegatheme.com)
 * @link        http://omegatheme.com
 * @copyright   Copyright (C) 2008 - 2012 OmegaTheme. All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

defined('_JEXEC') or die('Restricted access'); ?>

<?php if (count($list) == 1) : ?>
	<?php $item = $list[0]; ?>
	<div class="module-newsflash">
		<?php modNewsFlashHelper::renderItem($item, $params, $access); ?>
	</div>
<?php elseif (count($list) > 1) : ?>
	<div class="module-newsflash">
		<div class="vertical <?php echo $params->get('moduleclass_sfx'); ?>">
			<?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
			<div class="item <?php if ($i == $n - 1) echo 'last'; ?>">
				<?php modNewsFlashHelper::renderItem($list[$i], $params, $access); ?>
			</div>
			<?php endfor; ?>
		</div>
	</div>
<?php endif; ?>
