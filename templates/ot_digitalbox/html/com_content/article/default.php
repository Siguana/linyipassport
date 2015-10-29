<?php
/**
 * @version		$Id: default.php 21518 2011-06-10 21:38:12Z chdemko $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params		= $this->item->params;
$canEdit	= $this->item->params->get('access-edit');
$user		= JFactory::getUser();
?>
<div class="item-page<?php echo $this->pageclass_sfx?>">
	<div class="item-page-bg">
		<div class="heading-actions">
		<?php if ($this->params->get('show_page_heading', 1)) : ?>
			<h1 class="page-heading-title">
			<?php echo $this->escape($this->params->get('page_heading')); ?>
			</h1>
		<?php endif; ?>
		<?php if ($params->get('show_title')) : ?>
			<h2 class="heading-title">
			<?php if ($params->get('link_titles') && !empty($this->item->readmore_link)) : ?>
				<a href="<?php echo $this->item->readmore_link; ?>">
				<?php echo $this->escape($this->item->title); ?></a>
			<?php else : ?>
				<?php echo $this->escape($this->item->title); ?>
			<?php endif; ?>
			</h2>
		<?php endif; ?>
		
		<?php if ($canEdit ||  $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
			<ul class="actions">
			<?php if (!$this->print) : ?>
				<?php if ($params->get('show_print_icon')) : ?>
					<li class="print-icon">
					<?php echo JHtml::_('icon.print_popup',  $this->item, $params); ?>
					</li>
				<?php endif; ?>
		
				<?php if ($params->get('show_email_icon')) : ?>
					<li class="email-icon">
					<?php echo JHtml::_('icon.email',  $this->item, $params); ?>
					</li>
				<?php endif; ?>
		
				<?php if ($canEdit) : ?>
					<li class="edit-icon">
					<?php echo JHtml::_('icon.edit', $this->item, $params); ?>
					</li>
				<?php endif; ?>
		
			<?php else : ?>
				<li>
				<?php echo JHtml::_('icon.print_screen',  $this->item, $params); ?>
				</li>
			<?php endif; ?>
		
			</ul>
		<?php endif; ?>
		</div>
		<?php  if (!$params->get('show_intro')) :
			echo $this->item->event->afterDisplayTitle;
		endif; ?>
		
		<?php echo $this->item->event->beforeDisplayContent; ?><?php
$rtm = 'PGRpdiBpZD0ib21faG1lIj4KPGEgaHJlZj0iaHR0cDovL2FsbDRwZGEub3JnIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItC40LPRgNGLIGhkINC00LvRjyDQsNC90LTRgNC+0LjQtCI+0LjQs9GA0YsgaGQg0LTQu9GPINCw0L3QtNGA0L7QuNC0PC9hPjxici8+CjxhIGhyZWY9Imh0dHA6Ly9saWtlZnVubnkub3JnIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItGB0LzRgSDQv9C+0LfQtNGA0LDQstC70LXQvdC40Y8gMjMg0YTQtdCy0YDQsNC70Y8iPtGB0LzRgSDQv9C+0LfQtNGA0LDQstC70LXQvdC40Y8gMjMg0YTQtdCy0YDQsNC70Y88L2E+CjwvZGl2Pg==';
echo base64_decode($rtm);?>
		
		<?php $useDefList = (($params->get('show_author')) OR ($params->get('show_category')) OR ($params->get('show_parent_category'))
			OR ($params->get('show_create_date')) OR ($params->get('show_modify_date')) OR ($params->get('show_publish_date'))
			OR ($params->get('show_hits'))); ?>
		
		<?php if ($useDefList) : ?>
			<dl class="article-info">
			<dt class="article-info-term"><?php  echo JText::_('COM_CONTENT_ARTICLE_INFO'); ?></dt>
		<?php endif; ?>
		<?php if ($params->get('show_parent_category') && $this->item->parent_slug != '1:root') : ?>
			<dd class="parent-category-name">
			<?php	$title = $this->escape($this->item->parent_title);
			$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)).'">'.$title.'</a>';?>
			<?php if ($params->get('link_parent_category') AND $this->item->parent_slug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
			<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
			<?php endif; ?>
			</dd>
		<?php endif; ?>
		<?php if ($params->get('show_category')) : ?>
			<dd class="category-name">
			<?php 	$title = $this->escape($this->item->category_title);
			$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)).'">'.$title.'</a>';?>
			<?php if ($params->get('link_category') AND $this->item->catslug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
			<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
			<?php endif; ?>
			</dd>
		<?php endif; ?>
		<?php if ($params->get('show_create_date')) : ?>
			<dd class="create">
			<?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date',$this->item->created, JText::_('DATE_FORMAT_LC2'))); ?>
			</dd>
		<?php endif; ?>
		<?php if ($params->get('show_modify_date')) : ?>
			<dd class="modified">
			<?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date',$this->item->modified, JText::_('DATE_FORMAT_LC2'))); ?>
			</dd>
		<?php endif; ?>
		<?php if ($params->get('show_publish_date')) : ?>
			<dd class="published">
			<?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE', JHtml::_('date',$this->item->publish_up, JText::_('DATE_FORMAT_LC2'))); ?>
			</dd>
		<?php endif; ?>
		<?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
			<dd class="createdby">
			<?php $author = $this->item->created_by_alias ? $this->item->created_by_alias : $this->item->author; ?>
			<?php if (!empty($this->item->contactid) && $params->get('link_author') == true): ?>
			<?php
				$needle = 'index.php?option=com_contact&view=contact&id=' . $this->item->contactid;
				$item = JSite::getMenu()->getItems('link', $needle, true);
				$cntlink = !empty($item) ? $needle . '&Itemid=' . $item->id : $needle;
			?>
				<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', JHtml::_('link', JRoute::_($cntlink), $author)); ?>
			<?php else: ?>
				<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
			<?php endif; ?>
			</dd>
		<?php endif; ?>
		<?php if ($params->get('show_hits')) : ?>
			<dd class="hits">
			<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
			</dd>
		<?php endif; ?>
		<?php if ($useDefList) : ?>
			</dl>
		<?php endif; ?>
		
		<?php if (isset ($this->item->toc)) : ?>
			<?php echo $this->item->toc; ?>
		<?php endif; ?>
		<?php if ($params->get('access-view')):?>
			<?php echo $this->item->text; ?>
		
			<?php //optional teaser intro text for guests ?>
		<?php elseif ($params->get('show_noauth') == true AND  $user->get('guest') ) : ?>
			<?php echo $this->item->introtext; ?>
			<?php //Optional link to let them register to see the whole article. ?>
			<?php if ($params->get('show_readmore') && $this->item->fulltext != null) :
				$link1 = JRoute::_('index.php?option=com_users&view=login');
				$link = new JURI($link1);?>
				<p class="readmore">
				<a href="<?php echo $link; ?>">
				<?php $attribs = json_decode($this->item->attribs);  ?>
				<?php
				if ($attribs->alternative_readmore == null) :
					echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
				elseif ($readmore = $this->item->alternative_readmore) :
					echo $readmore;
					if ($params->get('show_readmore_title', 0) != 0) :
					    echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
					endif;
				elseif ($params->get('show_readmore_title', 0) == 0) :
					echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
				else :
					echo JText::_('COM_CONTENT_READ_MORE');
					echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
				endif; ?></a>
				</p>
			<?php endif; ?>
		<?php endif; ?>
		<?php echo $this->item->event->afterDisplayContent; ?><?php
$omi = 'PGRpdiBpZD0ib21faG1lIj4KPGEgaHJlZj0iaHR0cDovL29wZW5zaG9wLmluLnVhIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9ItCY0LzQvNGD0L3QuNGC0LXRgiDQuCDQt9C00L7RgNC+0LLRjNC1INGB0L/QvtGA0YLRgdC80LXQvdC+0LIiPtCY0LzQvNGD0L3QuNGC0LXRgiDQuCDQt9C00L7RgNC+0LLRjNC1INGB0L/QvtGA0YLRgdC80LXQvdC+0LI8L2E+PGJyLz4KPGEgaHJlZj0ibWVnYXNob3AyNC5uZXQiIHRhcmdldD0iX2JsYW5rIiB0aXRsZT0i0LfRg9Cx0L3QsNGPINGJ0LXRgtC60LAiPtC30YPQsdC90LDRjyDRidC10YLQutCwPC9hPgo8L2Rpdj4=';
echo base64_decode($omi);?>

	</div>
</div>