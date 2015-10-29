<?php
/**
 * @version		$Id: blog.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');
$leading_or_intro = '';
$doc = JFactory::getDocument();
$app =& JFactory::getApplication();
JLoader::register( 'TemplateParams', JPATH_THEMES . DS . $app->getTemplate() . DS . 'includes'. DS . 'params.class.php');
$templateParams = new TemplateParams($this);

if($this->templateParams->get('includeLazyload')==1){
?>
	<script src="<?php echo JURI::base().'templates/'.$app->getTemplate().'/js/jquery.lazyload.js'; ?>" type="text/javascript"></script>
    <script type="text/javascript">
         $jsmart(document).ready(function($){  
			 $("#yt_component img").lazyload({ 
				effect : "fadeIn",
				effect_speed: 1500,
				load: function(){
					//$(this).css("visibility", "visible"); 
					$(this).removeAttr("data-original");
				}
			});
        });  
    </script>
<?php } 

$doc->addStyleDeclaration('
.image-content.leading img{
	width:'.$this->templateParams->get('leading_width', '200').'px; 
	height:'.$this->templateParams->get('leading_height', '200').'px;
}
.image-content.intro img{
	width:'.$this->templateParams->get('intro_width', '200').'px; 
	height:'.$this->templateParams->get('intro_height', '200').'px;
}
');

?>

<div class="blog<?php echo $this->pageclass_sfx;?>">
<!-- orderby-displaynumber -->
<div id="option_com">
	<div class="sort_item">
		<div class="sort_by">
			<div class="active-order"><span><?php echo JTEXT::_('SORT_BY'); ?></span><span class="sort-style"><?php echo JTEXT::_('CHOOSE_AN_OPTION'); ?></span><span class="sort-ad" style=""></span></div>
			<div style="display:none; z-index: 1;" id="sort-by" class="option-set clearfix" data-option-key="sortBy">
				<a href="#sortBy=original-order" data-option-value="original-order" class="selected" data><?php echo JTEXT::_('ORIGINAL_ORDER'); ?></a>
				<a href="#sortBy=random" data-option-value="random"><?php echo JTEXT::_('RANDOM_ORDER'); ?></a>
				<a href="#sortBy=ct_title" data-option-value="ct_title"><?php echo JTEXT::_('TITLE_ALPHABETICAL'); ?></a>
				<a href="#sortBy=ct_featured" data-option-value="ct_featured"><?php echo JTEXT::_('FEATURED_ARTICLES'); ?></a>
				<a href="#sortBy=ct_author" data-option-value="ct_author"><?php echo JTEXT::_('AUTHOR_ORDER'); ?></a>
				<a href="#sortBy=ct_hits" data-option-value="ct_hits"><?php echo JTEXT::_('HITS_ORDER'); ?></a>
			</div>
		</div>
<!-- 		<div class="sort_direction">
			<h1>Sort direction</h1>
			<div id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
				<a href="#sortAscending=true" data-option-value="true" class="sort_ascending selected">sort ascending</a>
				<a href="#sortAscending=false" data-option-value="false" class="sort_descending">sort descending</a>
			</div>
		</div> -->
	</div>
	<div class="layout-type">
		<a href="javascript: void(0)" class="sort_grid">Table</a>
		<a href="javascript: void(0)" class="sort_listing">Listing</a>
	</div>
</div>
<!-- end of orderby-displaynumber -->
<?php if ($this->params->get('show_page_heading', 1)) : ?>
	<h1 class="componentheading">
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>

	<?php if ($this->params->get('show_category_title', 1) OR $this->params->get('page_subheading')) : ?>
	<h2>
		<?php echo $this->escape($this->params->get('page_subheading')); ?>
		<?php if ($this->params->get('show_category_title')) : ?>
			<span class="subheading-category"><?php echo $this->category->title;?></span>
		<?php endif; ?>
	</h2>
	<?php endif; ?>

<?php if ($this->params->get('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
	<div class="category-desc">
	<?php if ($this->params->get('show_description_image') && $this->category->getParams()->get('image')) : ?>
		<img src="<?php echo $this->category->getParams()->get('image'); ?>"/>
	<?php endif; ?>
	<?php if ($this->params->get('show_description') && $this->category->description) : ?>
		<?php echo JHtml::_('content.prepare', $this->category->description); ?>
	<?php endif; ?>
	<div class="clr"></div>
	</div>
<?php endif; ?>

<div id="content_listing" class="layout-table">
	<?php $leadingcount=0 ; ?>
	<?php if (!empty($this->lead_items)) : ?>
		<?php foreach ($this->lead_items as &$item) : 
			$this->leading_or_intro = 'leading';
		?>
			<div class="item cols-<?php echo $this->columns; ?> leading-<?php echo $leadingcount; ?><?php echo $item->state == 0 ? 'class="system-unpublished"' : null; ?>">
				<div class="border-r"></div>
				<div class="border-l"></div>
				<div class="item-inner">
				<?php
					$this->item = &$item;
					//var_dump($this->item); die;
					//print_r($this->item);
				?>
					<div class="item-inner1">
					
						<div class="item-hover">
															
							<?php //echo $this->item->introtext; ?>
							
							<span class="sj-bt submitbtn animated">
								<span class="more_btn">
									<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>" class="more_button1" title="<?php echo JText::_('COM_CONTENT_READ_MORE_TITLE') ?>"><?php echo JText::_('COM_CONTENT_READ_MORE_TITLE') ?></a>						
								
								</span>
							</span>		
							
						</div>
						
						<div class="item-inner2">
								
								<div style="display:none">
									<div class="ct_title"><?php echo $this->item->title; ?></div>
									<div class="ct_featured"><?php echo $this->item->featured; ?></div>
									<div class="ct_author"><?php echo $this->item->author; ?></div>
									<div class="ct_hits"><?php echo $this->item->hits; ?></div>
								</div>
								<?php
									echo $this->loadTemplate('item');
								?>								
						</div>
					</div>
				</div>
			</div>
			<?php
				$leadingcount++;
			?>
		<?php 
			$this->leading_or_intro = '';
		endforeach; ?>
	<?php endif; ?>
	<?php // end leading ?>

	<?php
		$introcount=(count($this->intro_items));
		$counter=0;
	?>
	<?php if (!empty($this->intro_items)) : ?>
		<?php foreach ($this->intro_items as $key => &$item) :
			$this->leading_or_intro = 'intro';
	    ?>
			<div class="item cols-<?php echo $this->columns; ?> intro-<?php echo $counter; ?>">
				<div class="border-r"></div>
				<div class="border-l"></div>
				<div class="item-inner">
				<?php
					$this->item = &$item;
					//var_dump($this->item); die;
				?>
					<div class="item-inner1">
						
						<div class="item-hover">	
							<span class="sj-bt submitbtn animated">
								<span class="more_btn">
									<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>" class="more_button1" title="<?php echo JText::_('COM_CONTENT_READ_MORE_TITLE') ?>"><?php echo JText::_('COM_CONTENT_READ_MORE_TITLE') ?></a>						
								
								</span>
							</span>	
							
						</div>
					
						<div class="item-inner2">								
								<div style="display:none">
									<div class="ct_title"><?php echo $this->item->title; ?></div>
									<div class="ct_featured"><?php echo $this->item->featured; ?></div>
									<div class="ct_author"><?php echo $this->item->author; ?></div>
									<div class="ct_hits"><?php echo $this->item->hits; ?></div>
								</div>
								<?php
									echo $this->loadTemplate('item');
								?>
						</div>
					</div>
				</div>
			</div>
		<?php $counter++;
		$this->leading_or_intro = '';
		endforeach; ?>
	<?php endif; ?>
</div>
<div classs="clearfix"></div>
<!-- ------------------------------
Script sort item
-------------------------------- -->

<?php if (!empty($this->link_items)) : ?>

	<?php echo $this->loadTemplate('links'); ?>

<?php endif; ?>

	<?php if (!empty($this->children[$this->category->id])&& $this->maxLevel != 0) : ?>
		<div class="cat-children">
		<h3>
<?php echo JTEXT::_('JGLOBAL_SUBCATEGORIES'); ?>
</h3>
			<?php echo $this->loadTemplate('children'); ?>
		</div>
	<?php endif; ?>

<?php if (($this->params->def('show_pagination', 1) == 1  || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
		<div class="pagination">
        		<?php echo $this->pagination->getPagesLinks(); ?>
				<?php  if ($this->params->def('show_pagination_results', 1)) : ?>
						<p class="counter">
								<?php echo $this->pagination->getPagesCounter(); ?>
						</p>

				<?php endif; ?>			
		</div>
<?php  endif; ?>

</div>
