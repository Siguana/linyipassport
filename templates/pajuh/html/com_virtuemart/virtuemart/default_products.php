<?php defined('_JEXEC') or die('Restricted access');


// Separator
$verticalseparator = " vertical-separator";

foreach ($this->products as $type => $productList ) {
// Calculating Products Per Row
$products_per_row = VmConfig::get ( $type.'_products_per_row', 3 ) ;
$cellwidth = ' width'.floor ( 100 / $products_per_row );

// Category and Columns Counter
$col = 1;
$nb = 1;

$productTitle = JText::_('COM_VIRTUEMART_'.$type.'_PRODUCT')

?>

<div class="<?php echo $type ?>-view">

	<h3 class="heading"><?php echo $productTitle ?></h3>

<?php // Start the Output
foreach ( $productList as $product ) {

	// Show the horizontal seperator
	if ($col == 1 && $nb > $products_per_row) { ?>
	<div class="horizontal-separator"></div>
	<?php }

	// this is an indicator wether a row needs to be opened or not
	if ($col == 1) { ?>
	<div class="row">
	<?php }

	// Show the vertical seperator
	if ($nb == $products_per_row or $nb % $products_per_row == 0) {
		$show_vertical_separator = ' ';
	} else {
		$show_vertical_separator = $verticalseparator;
	}

		// Show Products ?>
		<div class="product floatleft<?php echo $cellwidth . $show_vertical_separator ?>">
			<div class="spacer">
				<div class="product-top">
						<div class="product-images">
							<?php // Product Image
								if ($product->images) {
									echo JHTML::_ ( 'link', JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id ), $product->images[0]->displayMediaThumb( 'class="featuredProductImage" border="0"',true,'class="modal"' ) );
								}
							?>
						</div>
						
						<div class="product-name">
							<h2><?php echo JHTML::link ( JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id ),shopFunctionsF::limitStringByWord($product->product_name, 25, '...'), array ('title' => $product->product_name ) ); ?></h2>
						</div>

						<!-- The "Average Customer Rating" Part -->
						<?php /* if ($this->showRating) { ?>
						<span class="contentpagetitle"><?php echo JText::_('COM_VIRTUEMART_CUSTOMER_RATING') ?>:</span>
						<?php
						// $img_url = JURI::root().VmConfig::get('assets_general_path').'/reviews/'.$product->votes->rating.'.gif';
						// echo JHTML::image($img_url, $product->votes->rating.' '.JText::_('COM_VIRTUEMART_REVIEW_STARS'));
						// echo JText::_('COM_VIRTUEMART_TOTAL_VOTES').": ". $product->votes->allvotes; ?>
						<?php } */ ?>

						<?php
						if (!VmConfig::get('use_as_catalog') and !(VmConfig::get('stockhandle','none')=='none') && (VmConfig::get ( 'display_stock', 1 )) ){?>
						<!-- if (!VmConfig::get('use_as_catalog') and !(VmConfig::get('stockhandle','none')=='none')){?> -->
						<div class="paddingtop8">
							<span class="vmicon vm2-<?php echo $product->stock->stock_level ?>" title="<?php echo $product->stock->stock_tip ?>"></span>
							<span class="stock-level"><?php echo JText::_('COM_VIRTUEMART_STOCK_LEVEL_DISPLAY_TITLE_TIP') ?></span>
						</div>
						<?php }?>
				</div>

				<div class="product-info">

					<!--<?php // Product Short Description
					if(!empty($product->product_s_desc)) { ?>
					<p class="product_s_desc">
						<?php echo shopFunctionsF::limitStringByWord($product->product_s_desc, 40, '...') ?>
					</p>
					<?php } ?>-->
						
					<div class="product-price marginbottom12">
						<?php
						if (VmConfig::get ( 'show_prices' ) == '1') {
						//				if( $featProduct->product_unit && VmConfig::get('vm_price_show_packaging_pricelabel')) {
						//						echo "<strong>". JText::_('COM_VIRTUEMART_CART_PRICE_PER_UNIT').' ('.$featProduct->product_unit."):</strong>";
						//					} else echo "<strong>". JText::_('COM_VIRTUEMART_CART_PRICE'). ": </strong>";

						if ($this->showBasePrice) {
							echo $this->currency->createPriceDiv( 'basePrice', 'COM_VIRTUEMART_PRODUCT_BASEPRICE', $product->prices );
							echo $this->currency->createPriceDiv( 'basePriceVariant', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_VARIANT', $product->prices );
						}
						echo $this->currency->createPriceDiv( 'variantModification', 'COM_VIRTUEMART_PRODUCT_VARIANT_MOD', $product->prices );
						echo $this->currency->createPriceDiv( 'basePriceWithTax', 'COM_VIRTUEMART_PRODUCT_BASEPRICE_WITHTAX', $product->prices );
						echo $this->currency->createPriceDiv( 'discountedPriceWithoutTax', 'COM_VIRTUEMART_PRODUCT_DISCOUNTED_PRICE', $product->prices );
						//echo $this->currency->createPriceDiv( 'priceWithoutTax', 'COM_VIRTUEMART_PRODUCT_SALESPRICE_WITHOUT_TAX', $product->prices );
						echo $this->currency->createPriceDiv( 'discountAmount', 'COM_VIRTUEMART_PRODUCT_DISCOUNT_AMOUNT', $product->prices );
						//echo $this->currency->createPriceDiv( 'taxAmount', 'COM_VIRTUEMART_PRODUCT_TAX_AMOUNT', $product->prices );
						echo $this->currency->createPriceDiv( 'salesPrice', 'COM_VIRTUEMART_PRODUCT_SALESPRICE', $product->prices );
						} ?>
					</div>
					
					<p class="link-view-items">
						<?php // Product Details Button
							echo JHTML::link ( JRoute::_ ( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id=' . $product->virtuemart_product_id . '&virtuemart_category_id=' . $product->virtuemart_category_id ), JText::_ ( 'COM_VIRTUEMART_PRODUCT_DETAILS' ), array ('title' => $product->product_name, 'class' => 'product-details' ) );
						?>
					</p>

				</div>
				<div class="clear"></div>
			</div>
		</div>
	<?php
	$nb ++;

	// Do we need to close the current row now?
	if ($col == $products_per_row) { ?>
	<div class="clear"></div>
	</div>
		<?php
		$col = 1;
	} else {
		$col ++;
	}
}
// Do we need a final closing row tag?
if ($col != 1) { ?>
	<div class="clear"></div>
	</div>
<?php
}
?>
</div>
<?php }
