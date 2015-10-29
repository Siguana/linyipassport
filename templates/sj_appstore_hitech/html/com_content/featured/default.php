<?php
/**
 * @version		$Id: default.php 20985 2011-03-17 18:34:35Z infograf768 $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT.DS.'helpers');
$leading_or_intro = '';

// If the page class is defined, add to class as suffix.
// It will be a separate class if the user starts it with a space
?>
<?php 
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
				/*container: "#yt_component",*/
				load: function(){
					$(this).css("visibility", "visible"); 
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

<div class="blog blog-featured<?php echo $this->pageclass_sfx;?>">
<!-- orderby-displaynumber -->
<div id="option_com">
	<div class="sort_item">
		<div class="sort_by">
			<div class="active-order"><span><?php echo JTEXT::_('SORT_BY'); ?></span><span class="sort-style"><?php echo JTEXT::_('CHOOSE_AN_OPTION'); ?></span><span class="sort-ad" style=""></span></div>
			<div style="display:none; z-index: 1;" id="sort-by" class="option-set clearfix" data-option-key="sortBy">
				<a href="#sortBy=original-order" data-option-value="original-order" class="selected" data>Original order</a>
				<a href="#sortBy=random" data-option-value="random">Random Order</a>
				<a href="#sortBy=ct_title" data-option-value="ct_title">Title Alphabetical</a>
				<a href="#sortBy=ct_featured" data-option-value="ct_featured">Featured Articles</a>
				<a href="#sortBy=ct_author" data-option-value="ct_author">Author Order</a>
				<a href="#sortBy=ct_hits" data-option-value="ct_hits">Hits Order</a>
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

	<div id="content_listing">
		<?php if ( $this->params->get('show_page_heading')!=0) : ?>
			<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
			</h1>
		<?php endif; ?>

		<?php $leadingcount=0 ; ?>
		<?php if (!empty($this->lead_items)) : ?>
		<!-- <div class="leading"> -->
			<?php foreach ($this->lead_items as &$item) : 
			$this->leading_or_intro = 'leading';
			?>
					
				<div class="item cols-<?php echo $this->columns; ?> leading-<?php echo $leadingcount; ?><?php echo $item->state == 0 ? ' system-unpublished' : null; ?>">
					<div class="item-inner">
						<div class="item-inner1">
							<div class="item-inner2">
								<?php
									$this->item = &$item;
									//var_dump($this->item); die;
								?>
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
		<!-- </div> -->
		<?php endif; ?>

		<?php
			$introcount=(count($this->intro_items));
			$counter=0;
		?>
		<?php if (!empty($this->intro_items)) : ?>
			<?php foreach ($this->intro_items as $key => &$item) : 
			$this->leading_or_intro = 'intro';
			?>

			<?php
				$key= ($key-$leadingcount)+1;
				$rowcount=( ((int)$key-1) %	(int) $this->columns) +1;
				$row = $counter / $this->columns ; ?>

				<div class="item cols-<?php echo $this->columns; ?> intro-<?php echo $counter; ?><?php echo $item->state == 0 ? ' system-unpublished"' : null; ?>">
					<div class="item-inner">
						<div class="item-inner1">
							<div class="item-inner2">
								<?php
									$this->item = &$item;
									//var_dump($this->item); die;
								?>
								<div style="display:none">
									<div class="ct_title"><?php echo $this->item->title; ?></div>
									<div class="ct_featured"><?php echo $this->item->featured; ?></div>
									<div class="ct_author">author : <?php echo $this->item->author; ?></div>
									<div class="ct_hits"><?php echo $this->item->hits; ?></div>
								</div>
								<?php
									echo $this->loadTemplate('item');
								?>
							</div>
						</div>
					</div>
				</div>
				<?php $counter++; ?>
			<?php 
			$this->leading_or_intro = '';
			endforeach; 
			?>
		<?php endif; ?>
	</div>
<?php if (!empty($this->link_items)) : ?>
	<div class="items-more">
	<?php echo $this->loadTemplate('links'); ?>
	</div>
<?php endif; ?>

<?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->get('pages.total') > 1)) : ?>
	<div class="pagination">

		<?php if ($this->params->def('show_pagination_results', 1)) : ?>
<!-- 			<p class="counter">
				<?php echo $this->pagination->getPagesCounter(); ?>
			</p> -->
		<?php  endif; ?>
		<?php echo $this->pagination->getPagesLinks(); ?>
        <div class="clear"></div>
	</div>
<?php endif; ?>

</div>

