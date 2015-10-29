<?php
/**
 * @version		$Id: default_item.php 21092 2011-04-06 17:12:16Z infograf768 $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Create a shortcut for params.
$params = &$this->item->params;
$images = json_decode($this->item->images);
$canEdit	= $this->item->params->get('access-edit');

if($this->templateParams->get('thumbnail_front_page') == 1 && class_exists('YtUtils')) {
	include_once(JPATH_SITE . DS.'templates'.DS . JFactory::getApplication()->getTemplate() . DS . 'includes'. DS .'image.class.php');
	$yti = new YtImageJoomlaContent();
	$yti->thumbnail_mode = $this->templateParams->get('thumbnail_mode', 'stretch');
	$yti->thumbnail_background = $this->templateParams->get('thumbnail_background', '#FFF');
	
	if($this->leading_or_intro =='leading'){
		$yti->width = $this->templateParams->get('leading_width', '200');
		$yti->height = $this->templateParams->get('leading_height', '200');
		if (isset($images->image_intro) and !empty($images->image_intro)){
			$this->item->introtext = trim(preg_replace ( "/\<img[^\>]*>/", '', $this->item->introtext ));
			$this->item->introtext = preg_replace("/<p><\/p>/", '' , $this->item->introtext);
			$imgResizeConfig = array(
				'background' => $yti->thumbnail_background,
				'thumbnail_mode' => $yti->thumbnail_mode
			);	
			YtUtils::getImageResizerHelper($imgResizeConfig);
			$src = YtUtils::resize($images->image_intro, $yti->width, $yti->height, $yti->thumbnail_mode);
			if($this->templateParams->get('includeLazyload', 1)==0){
				$img_resize = '<img src="'.$src.'" alt="'.htmlspecialchars($images->image_intro_alt).'"';
			}else{
				$img_resize = '<img src="'.JURI::base().'templates/'.JFactory::getApplication()->getTemplate().'/images/white.gif" data-original="'.$src.'" alt="'.htmlspecialchars($images->image_intro_alt).'"';
			}
			if ($images->image_intro_caption):
				$img_resize .=' class="caption" title="' .htmlspecialchars($images->image_intro_caption).'"';
			endif;
			$img_resize .='/>';
		}else{
			$img_resize = $yti->processImage($this->item, $this->templateParams->get('includeLazyload',1));
		}
	}else{
		$yti->width = $this->templateParams->get('intro_width', '200');
		$yti->height = $this->templateParams->get('intro_height', '200');
		if (isset($images->image_intro) and !empty($images->image_intro)){
			$this->item->introtext = trim(preg_replace ( "/\<img[^\>]*>/", '', $this->item->introtext ));
			$this->item->introtext = preg_replace("/<p><\/p>/", '' , $this->item->introtext);
			$imgResizeConfig = array(
				'background' => $yti->thumbnail_background,
				'thumbnail_mode' => $yti->thumbnail_mode
			);	
			YtUtils::getImageResizerHelper($imgResizeConfig);
			$src = YtUtils::resize($images->image_intro, $yti->width, $yti->height, $yti->thumbnail_mode); 
			if($this->templateParams->get('includeLazyload', 1)==0){
				$img_resize = '<img src="'.$src.'" alt="'.htmlspecialchars($images->image_intro_alt).'"';
			}else{
				$img_resize = '<img src="'.JURI::base().'templates/'.JFactory::getApplication()->getTemplate().'/images/white.gif" data-original="'.$src.'" alt="'.htmlspecialchars($images->image_intro_alt).'"';
			}
			if ($images->image_intro_caption):
				$img_resize .='class="caption" title="' .htmlspecialchars($images->image_intro_caption).'"';
			endif;
			$img_resize .='/>';
		}else{
			$img_resize = $yti->processImage($this->item, $this->templateParams->get('includeLazyload', 1));
		}
	}
}
?>
<?php

// ------------ BEGIN: yt - customation ----------//
if($this->templateParams->get('thumbnail_front_page') == 1){
	if (isset($images->image_intro) and !empty($images->image_intro)){
		$imgfloat = (empty($images->float_intro)) ? '-'.$params->get('float_intro') : '-'.$images->float_intro;
	}else{
		$imgfloat ='';
	}
	if ($this->leading_or_intro == 'leading' && $img_resize!=''){
	?>
	<div class="image-content leading ifloat<?php echo htmlspecialchars($imgfloat); ?>">
		<?php echo $img_resize; ?>
	</div>
	<?php	
	}else if($this->leading_or_intro == 'intro' && $img_resize!=''){
	?>
	<div class="image-content intro ifloat<?php echo htmlspecialchars($imgfloat); ?>">
		<?php echo $img_resize; ?>
	</div>
	<?php
	}
	// ------------ END: yt - customation ----------//
}

?>
<div class="item_content">
	<?php if ($this->item->state == 0) : ?>
	<div class="system-unpublished">
	<?php endif; ?> 
	<?php if ($params->get('show_title')) : ?>
		<h2 class="contentheading">
			<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
				<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
				<?php echo $this->escape($this->item->title); ?></a>
			<?php else : ?>
				<?php echo $this->escape($this->item->title); ?>
			<?php endif; ?>
		</h2>
	<?php endif; ?>

	<div class="item-content">

	    <div class="text">
	    <?php echo $this->item->introtext; ?>
	    </div>
	<?php if ($params->get('show_readmore') && $this->item->readmore) :
		if ($params->get('access-view')) :
			$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
		else :
			$menu = JFactory::getApplication()->getMenu();
			$active = $menu->getActive();
			$itemId = $active->id;
			$link1 = JRoute::_('index.php?option=com_users&view=login&&Itemid=' . $itemId);
			$returnURL = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
			$link = new JURI($link1);
			$link->setVar('return', base64_encode($returnURL));
		endif;
	?>
				<p class="readmore">
					<a class="readon" href="<?php echo $link; ?>">
						<?php if (!$params->get('access-view')) :
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

	<?php if ($this->item->state == 0) : ?>
	</div>
	<?php endif; ?>
	</div>
	<?php echo $this->item->event->afterDisplayContent; ?>
</div>
