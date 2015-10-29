<?php
/**
*
* Show the products in a category
*
* @package	VirtueMart
* @subpackage
* @author RolandD
* @author Max Milbers
* @todo add pagination
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: default.php 6053 2012-06-05 12:36:21Z Milbo $
*/

//vmdebug('$this->category',$this->category);
vmdebug('$this->category '.$this->category->category_name);
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
JHTML::_( 'behavior.modal' );
/* javascript for list Slide
  Only here for the order list
  can be changed by the template maker
*/
$js = "
jQuery(document).ready(function () {
	jQuery('.orderlistcontainer').hover(
		function() { jQuery(this).find('.orderlist').stop().show()},
		function() { jQuery(this).find('.orderlist').stop().hide()}
	)
});
";

$document = JFactory::getDocument();
$document->addScriptDeclaration($js);
include_once(dirname(__FILE__).DS.'slideshow-cat.php');
?>
<script type="text/javascript">
	function addcart(productid){
		document.forms["product_"+productid].submit();
	}
</script>
<?php
/*$edit_link = '';
if(!class_exists('Permissions')) require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'permissions.php');
if (Permissions::getInstance()->check("admin,storeadmin")) {
	$edit_link = '<a href="'.JURI::root().'index.php?option=com_virtuemart&tmpl=component&view=category&task=edit&virtuemart_category_id='.$this->category->virtuemart_category_id.'">
		'.JHTML::_('image', 'images/M_images/edit.png', JText::_('COM_VIRTUEMART_PRODUCT_FORM_EDIT_PRODUCT'), array('width' => 16, 'height' => 16, 'border' => 0)).'</a>';
}

echo $edit_link; */
?>
<!-- <div class='vmbar-title'>
	<h1>
		<span><?php if($this->category->category_name){ echo $this->category->category_name; } else{ echo JText::_('Feature Products'); } ?></span>
	</h1>
</div> -->
<?php  
if ( empty($this->keyword) ) {
	?>
<!-- 	<div class="category_description">
	<?php //echo $this->category->category_description ; ?>
	</div> -->
	<?php
}

/* Show child categories */

if ( VmConfig::get('showCategory',1) and empty($this->keyword)) {
	if ($this->category->haschildren) {

		// Category and Columns Counter
		$iCol = 1;
		$iCategory = 1;

		// Calculating Categories Per Row
		$categories_per_row = VmConfig::get ( 'categories_per_row', 3 );
		$category_cellwidth = ' width'.floor ( 100 / $categories_per_row );

		// Separator
		$verticalseparator = " vertical-separator";
		?>

		<div class="category-view">

		<?php // Start the Output
		if(!empty($this->category->children)){
		foreach ( $this->category->children as $category ) {

			// Show the horizontal seperator
			if ($iCol == 1 && $iCategory > $categories_per_row) { ?>

			<?php }

			// this is an indicator wether a row needs to be opened or not
			if ($iCol == 1) { ?>
			<div class="row">
			<?php }

			// Show the vertical seperator
			if ($iCategory == $categories_per_row or $iCategory % $categories_per_row == 0) {
				$show_vertical_separator = ' ';
			} else {
				$show_vertical_separator = $verticalseparator;
			}

			// Category Link
			$caturl = JRoute::_ ( 'index.php?option=com_virtuemart&view=category&virtuemart_category_id=' . $category->virtuemart_category_id );

				// Show Category ?>
				<div class="category floatleft<?php echo $category_cellwidth . $show_vertical_separator ?>">
					<div class="spacer">
						<h2>
							<a href="<?php echo $caturl ?>" title="<?php echo $category->category_name ?>">
							<?php echo $category->category_name ?>
							<br />
							<?php // if ($category->ids) {
								echo $category->images[0]->displayMediaThumb("",false);
							//} ?>
							</a>
						</h2>
					</div>
				</div>
			<?php
			$iCategory ++;

		// Do we need to close the current row now?
		if ($iCol == $categories_per_row) { ?>
		<div class="clear"></div>
		</div>
			<?php
			$iCol = 1;
		} else {
			$iCol ++;
		}
	}
	}
	// Do we need a final closing row tag?
	if ($iCol != 1) { ?>
		<div class="clear"></div>
		</div>
	<?php } ?>
</div>

<?php }
}
?>
<div class="browse-view">
    <?php
if (!empty($this->keyword)) {
	?>
	<h3><?php echo $this->keyword; ?></h3>
	<?php
} ?>
 		<?php if ($this->search !==null ) { ?>
		    <form action="<?php echo JRoute::_('index.php?option=com_virtuemart&view=category&limitstart=0&virtuemart_category_id='.$this->category->virtuemart_category_id ); ?>" method="get">

		    <!--BEGIN Search Box --><div class="virtuemart_search">
		    <?php echo $this->searchcustom ?>
		    <br />
		    <?php echo $this->searchcustomvalues ?>
		    <input name="keyword" class="inputbox" type="text" size="20" value="<?php echo $this->keyword ?>" />
		    <input type="submit" value="<?php echo JText::_('COM_VIRTUEMART_SEARCH') ?>" class="button" onclick="this.form.keyword.focus();"/>
		    </div>
				    <input type="hidden" name="search" value="true" />
				    <input type="hidden" name="view" value="category" />

		    </form>
		<!-- End Search Box -->
		<?php } ?>

<?php // Show child categories
if (!empty($this->products)) {
?>

<?php /* hide 
<h1><?php echo $this->category->category_name; ?></h1>
*/ ?>
<?php
// Category and Columns Counter
$iBrowseCol = 1;
$iBrowseProduct = 1;

// Calculating Products Per Row
$BrowseProducts_per_row = $this->perRow;
//print_r($this->perRow);

$Browsecellwidth = ' width'.floor ( 100 / $BrowseProducts_per_row );
//print_r($Browsecellwidth);
// Separator
$verticalseparator = " vertical-separator";

// Count products
$BrowseTotalProducts = 0;
foreach ( $this->products as $product ) {
   $BrowseTotalProducts ++;
}
// Start the Output
?>
<div id="content_listing">

<?php
	//print_r($this->products); die;
	//add class for col of product = $BrowseProducts_per_row
	$number_col = $BrowseProducts_per_row;
	$count_pro  = 1;
	$end_row    = "cols";
foreach ( $this->products as $product ) {
	
	if($count_pro == $number_col){
		$number_col = $number_col +  $BrowseProducts_per_row;
		//print_r($number_col);
		$end_row = "end_r";
	}else{
		$end_row = "cols";
	}
	
	//print_r($count_pro);
	
	// Show the horizontal seperator
	if ($iBrowseCol == 1 && $iBrowseProduct > $BrowseProducts_per_row) { ?>

	<?php }

	// this is an indicator wether a row needs to be opened or not
	if ($iBrowseCol == 1) { ?>

	<?php }

	// Show the vertical seperator
	if ($iBrowseProduct == $BrowseProducts_per_row or $iBrowseProduct % $BrowseProducts_per_row == 0) {
		$show_vertical_separator = ' ';
	} else {
		$show_vertical_separator = $verticalseparator;
	}
//	var_dump($product); die;
		// Show Products ?>
		
		<div class="product item floatleft cols-<?php echo $BrowseProducts_per_row; ?>" id="<?php echo ($end_row); ?>">
		<div class="border-r"></div>
		<div class="border-l"></div>
			<div class="item-inner">
				<div class="item-inner1">
					<!--Dat div item-hover o day de dung opacity-->
					<div class="item-hover">
						<!--<a>add cart</a>
						<a>more info</a>-->
						<span class="sj-bt submitbtn animated">
<!-- 											<span class="addtocart-button">
													<input type="submit" name="addtocart" class="addtocart-button" value="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>" title="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>" />
												</span> -->
												<span class="cart_btn">
												<a href="javascript: addcart(<?php echo $product->virtuemart_product_id; ?>)" class="addtocart-button button1" title="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>"><?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?></a>
												</span>
												
												<span class="more_btn">
												<?php // Product Details Button
												 //echo JHTML::link($product->link, JText::_('COM_VIRTUEMART_PRODUCT_DETAILS'), array('title' => $product->product_name,'class' => 'button1'));
												 echo JHTML::link($product->link, JText::_('More Info'), array('title' => $product->product_name,'class' => 'more_button1'));
												?>
												</span>		
						</span>				
					</div>
					<div class="item-inner2">
						
						<div class="none" style="display: none;">
							<span class="vm_title"><?php echo $product->product_name; ?></span>
							<span class="vm_category_name"><?php echo $product->category_name; ?></span>
							<span class="vm_mf_name"><?php echo $product->mf_name; ?></span>
							<span class="vm_product_s_desc"><?php echo $product->product_s_desc; ?></span>
							<span class="vm_product_in_stock"><?php echo $product->product_in_stock; ?></span>
							<span class="vm_product_sku"><?php echo $product->product_sku; ?></span>
						</div>
						<?php
						//	var_dump($product); die;
						?>
						<?php /* replate <div class="width30 floatleft center"> */ ?>
						<?php /* by*/ ?>
							<div class=" floatleft center col-left">
								
								<?php /** @todo make image popup */
									// echo"<pre>";var_dump($product->images[0]);die;
									// echo $product->images[0]->displayMediaThumb('class="browseProductImage" border="0" title="'.$product->product_name.'" ',true,'class="modal"');
								?>
								<a href="<?php echo  $product->images[0]->file_url ?>" class="modal" title="<?php echo $product->images[0]->file_name ?>">	
									<img border="0" title="<?php echo $product->product_name ?>" class="browseProductImage" alt="<?php echo $product->images[0]->file_name ?>" src="<?php echo  $product->images[0]->file_url_thumb ?>" />
									<span class="action-css3"></span>							
								</a>
									<!-- The "Average Customer Rating" Part -->
								<?php /* hide 
								<?php if ($this->showRating) { ?>
								<span class="contentpagetitle"><?php echo JText::_('COM_VIRTUEMART_CUSTOMER_RATING') ?>:</span>
								<br />
								<?php
								// $img_url = JURI::root().VmConfig::get('assets_general_path').'/reviews/'.$product->votes->rating.'.gif';
								// echo JHTML::image($img_url, $product->votes->rating.' '.JText::_('COM_VIRTUEMART_REVIEW_STARS'));
								// echo JText::_('COM_VIRTUEMART_TOTAL_VOTES').": ". $product->votes->allvotes; ?>
								<?php } ?>

								<?php
								if (!VmConfig::get('use_as_catalog') and !(VmConfig::get('stockhandle','none')=='none') && (VmConfig::get ( 'display_stock', 1 )) ){?>
		<!-- 						if (!VmConfig::get('use_as_catalog') and !(VmConfig::get('stockhandle','none')=='none')){?> -->
								<div class="paddingtop8">
									<span class="vmicon vm2-<?php echo $product->stock->stock_level ?>" title="<?php echo $product->stock->stock_tip ?>"></span>
									<span class="stock-level"><?php echo JText::_('COM_VIRTUEMART_STOCK_LEVEL_DISPLAY_TITLE_TIP') ?></span>
								</div>
								<?php }?>
								*/ ?>
						</div>
						
						<?php /* replace <div class="width70 floatright"> */ ?>
						<?php /* by */ ?>
						<div class="col-right">
						
							<h2 class="contentheading"><?php echo JHTML::link($product->link,shopFunctionsF::limitStringByWord($product->product_name, 20, '...')); ?></h2>
							
							<?php 
								if($this->showRating){
									$ratingModel = new VirtueMartModelRatings();
									$rating_value = $ratingModel->getRatingByProduct($product->virtuemart_product_id);





									// echo"<pre>";var_dump($rating_value->ratingcount);
									// $maxrating = VmConfig::get('vm_maximum_rating_scale',5);
									// $rating = empty($rating_value)? JText::_('COM_VIRTUEMART_RATING').' '.JText::_('COM_VIRTUEMART_UNRATED'):JText::_('COM_VIRTUEMART_RATING') . round($rating_value->rating, 2) . '/'. $maxrating;
									$rating = empty($rating_value)?'0':round($rating_value->rating, 2);
									//$text_rating = empty($rating_value)?JText::_('COM_VIRTUEMART_RATING').' '.JText::_('COM_VIRTUEMART_UNRATED'):'';
									$votes = empty($rating_value->ratingcount)?'0':$rating_value->ratingcount;
									//echo   '<div class="rates"><span class="sjrating r'.$rating.' vote">('.$votes.' '.JText::_('Votes').')</span></div>';
								}
							?>
							
								<?php // Product Short Description ?>
								<?php /*hide
								if(!empty($product->product_s_desc)) { ?>
								<p class="product_s_desc">
								<?php echo shopFunctionsF::limitStringByWord($product->product_s_desc, 40, '...') ?>
								</p>
								<?php } ?>
								*/ ?>

							<div class="product-price marginbottom12" id="productPrice<?php echo $product->virtuemart_product_id ?>">
							<?php //echo $product->virtuemart_product_id; ?>
							<?php
							if ($this->show_prices == '1') {
								if( $product->product_unit && VmConfig::get('vm_price_show_packaging_pricelabel')) {
									echo "<strong>". JText::_('COM_VIRTUEMART_CART_PRICE_PER_UNIT').' ('.$product->product_unit."):</strong>";
								}
								if(empty($product->prices) and VmConfig::get('askprice',1) and empty($product->images[0]->file_is_downloadable) ){
									echo JText::_('COM_VIRTUEMART_PRODUCT_ASKPRICE');
								}
								//todo add config settings
//								if( $this->showBasePrice){
//									echo $this->currency->createPriceDiv('basePrice','COM_VIRTUEMART_PRODUCT_BASEPRICE',$product->prices);
//									echo $this->currency->createPriceDiv('basePriceVariant','COM_VIRTUEMART_PRODUCT_BASEPRICE_VARIANT',$product->prices);
//								}
		//						echo $this->currency->createPriceDiv('variantModification','COM_VIRTUEMART_PRODUCT_VARIANT_MOD',$product->prices);
		//						echo $this->currency->createPriceDiv('basePriceWithTax','COM_VIRTUEMART_PRODUCT_BASEPRICE_WITHTAX',$product->prices);
		//						echo $this->currency->createPriceDiv('discountedPriceWithoutTax','COM_VIRTUEMART_PRODUCT_DISCOUNTED_PRICE',$product->prices);
		//						echo $this->currency->createPriceDiv('salesPriceWithDiscount','COM_VIRTUEMART_PRODUCT_SALESPRICE_WITH_DISCOUNT',$product->prices);
								//echo $this->currency->createPriceDiv('salesPrice','COM_VIRTUEMART_PRODUCT_SALESPRICE',$product->prices);
								echo $this->currency->createPriceDiv('salesPrice','',$product->prices);
		//						echo $this->currency->createPriceDiv('priceWithoutTax','COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX',$product->prices);
		//						echo $this->currency->createPriceDiv('discountAmount','COM_VIRTUEMART_PRODUCT_DISCOUNT_AMOUNT',$product->prices);
		//						echo $this->currency->createPriceDiv('taxAmount','COM_VIRTUEMART_PRODUCT_TAX_AMOUNT',$product->prices);
							} ?>
							</div>
							<span class="more_btn">
							<?php // Product Details Button
												 //echo JHTML::link($product->link, JText::_('COM_VIRTUEMART_PRODUCT_DETAILS'), array('title' => $product->product_name,'class' => 'button1'));
												 echo JHTML::link($product->link, JText::_('More Info'), array('title' => $product->product_name,'class' => 'more_button1'));
												?>
							</span>
							<?php // Product Short Description
							if(!empty($product->product_s_desc)) { ?>
							<p class="product_s_desc">
							<?php echo shopFunctionsF::limitStringByWord($product->product_s_desc, 250, '...') ?>
							</p>
							<?php } ?>
			

						</div>
							<div class="clear-in-listing"></div>
							<?php /* add button addtocart */ ?>
							<?php //use this code to call "VirtueMartViewProductdetails" class create button addtocart : echo $this->loadTemplate('addtocart_btn') ?>
							<form id="product_<?php echo $product->virtuemart_product_id; ?>"method="post" class="js-recalculate" action="index.php" >

								<?php // Display the quantity box

									$stockhandle = VmConfig::get('stockhandle', 'none');
									if (($stockhandle == 'disableit' or $stockhandle == 'disableadd') and ($product->product_in_stock - $product->product_ordered) < 1) {
								 ?>

								<?php } else { ?>
											
											<?php
											// Display the add to cart button
											?>
											<span class="sj-bt submitbtn animated">
<!-- 											<span class="addtocart-button">
													<input type="submit" name="addtocart" class="addtocart-button" value="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>" title="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>" />
												</span> -->
												<span class="cart_btn">
												<a href="javascript: addcart(<?php echo $product->virtuemart_product_id; ?>)" class="addtocart-button button1" title="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>"><?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?></a>
												</span>
												
												<span class="more_btn">
												<?php // Product Details Button
												 //echo JHTML::link($product->link, JText::_('COM_VIRTUEMART_PRODUCT_DETAILS'), array('title' => $product->product_name,'class' => 'button1'));
												 echo JHTML::link($product->link, JText::_('More Info'), array('title' => $product->product_name,'class' => 'more_button1'));
												?>
												</span>
												<?php // Product Details Button
												 //echo JHTML::link($product->link, JText::_('COM_VIRTUEMART_PRODUCT_DETAILS'), array('title' => $product->product_name,'class' => 'button1'));
												 //echo JHTML::link($product->link, JText::_('More Info'), array('title' => $product->product_name,'class' => 'button1'));
												?>
											</span>
											<?php // Display the add to cart button END  ?>
		                                    <input type="hidden" value="1" name="quantity[]" class="quantity-input js-recalculate"/>
											<input type="hidden" class="pname" value="<?php echo $product->product_name ?>" />
											<input type="hidden" name="option" value="com_virtuemart" />
											<input type="hidden" name="view" value="cart" />
											<input type="hidden" name="task" value="add" />
											<input type="hidden" name="virtuemart_product_id[]" value="<?php echo $product->virtuemart_product_id ?>" />
											<?php // todo Handle the manufacturer view  ?>
											<input type="hidden" name="virtuemart_manufacturer_id" value="<?php echo $product->virtuemart_manufacturer_id ?>" />
											<input type="hidden" name="virtuemart_category_id[]" value="<?php echo $product->virtuemart_category_id ?>" />
											
								<?php 	} ?>

							</form>
					</div><!-- end of spacer -->
				</div>
			</div>
		</div> <!-- end of product -->
	<?php

   // Do we need to close the current row now?
   if ($iBrowseCol == $BrowseProducts_per_row || $iBrowseProduct == $BrowseTotalProducts) {?>

      <?php
      $iBrowseCol = 1;
   } else {
      $iBrowseCol ++;
   }

   $iBrowseProduct ++;
   $count_pro ++;
} // end of foreach ( $this->products as $product )
?>
</div>

<?php
// Do we need a final closing row tag?
if ($iBrowseCol != 1) { ?>
	<div class="clear"></div>

<?php
}
?>
			<div class="orderby-displaynumber">
				<div class="width70 floatleft">
					<?php //echo $this->orderByList['orderby']; ?>
					<?php //echo $this->orderByList['manufacturer']; ?>
				</div>
				<div class="width30 floatright display-number"><?php //echo $this->vmPagination->getResultsCounter();?><?php //echo $this->vmPagination->getLimitBox(); ?></div>
				<?php /* replate <div class="vm-pagination">*/ ?>
				<?php /* by */ ?>
<!-- 				<div id="top-pagination">
					<?php //echo $this->vmPagination->getPagesLinks(); ?>
					<span style="float:right"><?php //echo $this->vmPagination->getPagesCounter(); ?></span>
				</div> -->

				<div class="clear"></div>
				<div id="option_com">
					<?php //echo $this->orderByList['orderby']; ?>
					<div class="sort_item">
						<div class="sort_by">
							<div class="active-order"><!--<span><?php //echo JTEXT::_('SORT_BY'); ?></span>--><span class="sort-style"><?php echo JTEXT::_('CHOOSE_AN_OPTION'); ?></span><span class="sort-ad" style=""></span></div>
							<div style="display:none;" id="sort-by" class="option-set clearfix" data-option-key="sortBy">
								<a href="#sortBy=original-order" data-option-value="original-order" class="selected"><?php echo JTEXT::_('ORIGINAL_ORDER'); ?></a>
								<a href="#sortBy=random" data-option-value="random"><?php echo JTEXT::_('RANDOM_ORDER'); ?></a>
								<a href="#sortBy=vm_price" data-option-value="vm_price"><?php echo JTEXT::_('PRICE_ORDER'); ?></a>	
								<a href="#sortBy=vm_title" data-option-value="vm_title"><?php echo JTEXT::_('TITLE_ALPHABETICAL'); ?></a>
								<a href="#sortBy=vm_category_name" data-option-value="vm_category_name"><?php echo JTEXT::_('CATEGORY_NAME_ORDER'); ?></a>
								<a href="#sortBy=vm_mf_name" data-option-value="vm_mf_name"><?php echo JTEXT::_('MF_NAME_ORDER'); ?></a>
								<a href="#sortBy=vm_product_s_desc" data-option-value="vm_product_s_desc"><?php echo JTEXT::_('PRODUCT_S_DESC_ORDER'); ?></a>
								<a href="#sortBy=vm_product_in_stock" data-option-value="vm_product_in_stock"><?php echo JTEXT::_('PRODUCT_IN_STOCK_ORDER'); ?></a>
								<a href="#sortBy=vm_product_sku" data-option-value="vm_product_sku"><?php echo JTEXT::_('PRODUCT_SKU_ORDER'); ?></a>						
	      					</div>
	      				</div>
						<div class="sort_direction" style="display:none;">
							<h1>Sort direction</h1>
							<div id="sort-direction" class="option-set clearfix" data-option-key="sortAscending">
								<a href="#sortAscending=true" data-option-value="true" class="sort_ascending selected">sort ascending</a>
								<a href="#sortAscending=false" data-option-value="false" class="sort_descending">sort descending</a>
							</div>
						</div>
					</div>
					<div class="layout-type">
						<a href="javascript: void(0)" class="sort_grid">Table</a>
						<a href="javascript: void(0)" class="sort_listing">Listing</a>
					</div>
				</div>
				<div id="bottom-pagination"><?php echo $this->vmPagination->getPagesLinks(); ?>
			</div> <!-- end of orderby-displaynumber -->
<!-- /div removed valerie -->
	
		<?php /*<span style="float:right"><?php echo $this->vmPagination->getPagesCounter(); ?></span> */ ?>
	</div>
<?php /*
	<div class="vm-pagination"><?php echo $this->vmPagination->getPagesLinks(); ?><span style="float:right"><?php echo $this->vmPagination->getPagesCounter(); ?></span></div>
*/ ?>
<!-- /div removed valerie -->
<?php } elseif ($this->search !==null ) echo JText::_('COM_VIRTUEMART_NO_RESULT').($this->keyword? ' : ('. $this->keyword. ')' : '')
?>
</div><!-- end browse-view -->