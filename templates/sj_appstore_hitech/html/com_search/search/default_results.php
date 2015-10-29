<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_search
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>

<div id="content_listing" class="layout-table search-results<?php echo $this->pageclass_sfx; ?>">
<?php foreach($this->results as $result) : //var_dump($result); die; ?>
	<div class="item">
		<div class="border-r"></div>
		<div class="border-l"></div>
		<div class="item-inner">
			<div class="item-in">
				<div class="result-title">
					<?php echo $this->pagination->limitstart + $result->count.'. ';?>
					<?php if ($result->href) :?>
						<a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>>
							<?php echo $this->escape($result->title);?>
						</a>
					<?php else:?>
						<?php echo $this->escape($result->title);?>
					<?php endif; ?>
				</div>
				<?php if ($result->section) : ?>
					<div class="result-category">
						<span class="small<?php echo $this->pageclass_sfx; ?>">
							(<?php echo $this->escape($result->section); ?>)
						</span>
					</div>
				<?php endif; ?>
				<div class="result-text">
					<?php echo $result->text; ?>
				</div>
				<?php if ($this->params->get('show_date')) : ?>
					<div class="result-created<?php echo $this->pageclass_sfx; ?>">
						<?php echo JText::sprintf('JGLOBAL_CREATED_DATE_ON', $result->created); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>
<!-- orderby-displaynumber -->
<div id="option_com">
	<div class="layout-type">
		<a href="javascript: void(0)" class="sort_grid">Table</a>
		<a href="javascript: void(0)" class="sort_listing">Listing</a>
	</div>
</div>
<!-- end of orderby-displaynumber -->
<div class="pagination">
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>
