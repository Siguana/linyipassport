<?php // no direct access
defined('_JEXEC') or die('Restricted access');

// addon for joomla modal Box
JHTML::_('behavior.modal');

$col= 1 ;
$pwidth= ' width'.floor ( 100 / $products_per_row );
if ($products_per_row > 1) { $float= "floatleft";}
else {$float="center";}
?>
<div class="vmgroup<?php echo $params->get( 'moduleclass_sfx' ) ?>">

<?php if ($headerText) { ?>
	<div class="vmheader"><?php echo $headerText ?></div>
<?php }
if ($display_style =="div") { ?>
	
<div class="custom-vmproduct vmproduct<?php echo $params->get('moduleclass_sfx'); ?> <?php if($products[0]) echo 'first'; ?>">
	<div class="custom-vmproduct-i">
		<?php foreach ($products as $product) { ?>
		<div style="float: left;" class="<?php echo $float ?> <?php echo $pwidth ?>">
			<div class="spacer">
				<div class="ot-custom-products-page">
					
					<?php
					//Product name
					$url = JRoute::_('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id='.$product->virtuemart_product_id.'&virtuemart_category_id='.
					$product->virtuemart_category_id); ?>	<div class="product-name"><h5><a href="<?php echo $url ?>"><?php echo $product->product_name ?></a></h5></div>		<?php	echo '<div class="clear"></div>';
					?>
					
					<?php
					//Product short DESC
					echo '<div class="product-s-desc">
							<p class="product_s_desc">';
					echo shopFunctionsF::limitStringByWord($product->product_s_desc, 55, '...');
					echo '</p></div>';
					?>
					
					<?php	
					//Product image
					if (!empty($product->images[0]) )
						$image = $product->images[0]->displayMediaThumb('class="featuredProductImage" border="0"',false) ; 
						else $image = '';
						echo '<div class="product-image">';
						//echo JHTML::_('link', JRoute::_('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id='.$product->virtuemart_product_id.'&virtuemart_category_id='.$product->virtuemart_category_id),$image,array('title' => $product->product_name) );
						echo '<a class="modal" href="'.$product->images[0]->file_url.'" title="'.$product->product_name.'"><img src="'.$product->images[0]->file_url_thumb.'" alt="'.$product->product_name.'" /></a>';
						echo '</div>'; ?>
					
					<div class="product-price">
						<?php
						//Product Price
						if ($show_price) {
							echo '<p>';
							// 		echo $currency->priceDisplay($product->prices['salesPrice']);
							if (!empty($product->prices['salesPrice'] ) ) echo JText::_('COM_VIRTUEMART_PRODUCT_SALESPRICE') . '<span class="PricesalesPrice">'.$currency->createPriceDiv('salesPrice','',$product->prices,true).'</span><br />';
							//if (!empty($product->prices['discountAmount']) ) echo JText::_('COM_VIRTUEMART_PRODUCT_DISCOUNT_AMOUNT') . '<span class="PricesalesPrice">'.$currency->createPriceDiv('discountAmount','',$product->prices,true).'</span><br />';
							if ($currency->createPriceDiv('discountAmount','',$product->prices,true) != null) echo JText::_('COM_VIRTUEMART_PRODUCT_DISCOUNT_AMOUNT') . '<span class="PricesalesPrice">'.$currency->createPriceDiv('discountAmount','',$product->prices,true).'</span><br />';
							// 		if ($product->prices['salesPriceWithDiscount']>0) echo $currency->priceDisplay($product->prices['salesPriceWithDiscount']);
							//if (!empty($product->prices['salesPriceWithDiscount']) ) echo JText::_('COM_VIRTUEMART_PRODUCT_SALESPRICE_WITH_DISCOUNT') . '<span class="PricesalesPrice">'.$currency->createPriceDiv('salesPriceWithDiscount','',$product->prices,true).'</span><br />';
							if ($currency->createPriceDiv('salesPriceWithDiscount','',$product->prices,true) != null) echo JText::_('COM_VIRTUEMART_PRODUCT_SALESPRICE_WITH_DISCOUNT') . '<span class="PricesalesPrice">'.$currency->createPriceDiv('salesPriceWithDiscount','',$product->prices,true).'</span><br />';
							echo '</p>';
						} ?>
					</div>
					
					<?php
					//Product Addtocart, Quantity and Artricbute
					if ($show_addtocart) {
						echo '<div class="product-addtocart">';
						echo JHTML::link($product->link, JText::_('COM_VIRTUEMART_PRODUCT_DETAILS'), array('title' => $product->product_name,'class' => 'product-details'));
						//echo JHTML::link($product->link, JText::_('COM_VIRTUEMART_CART_ADD_TO'), array('title' => $product->product_name,'class' => 'product-details'));
						//echo mod_virtuemart_product::addtocart($product);
						echo '</div>';
					}
					?>
				</div>
			</div>
		</div>
		<?php
			if ($col == $products_per_row && $products_per_row && $col < $totalProd ) {
				echo "	</div></div><div class='custom-vmproduct vmproduct'><div class='custom-vmproduct-i'>";
				$col= 1 ;
			} else {
				$col++;
			}
		} ?>
	</div>
</div>

<?php
} else {
$last = count($products)-1;
?>

<ul class="vmproduct<?php echo $params->get('moduleclass_sfx'); ?>">
<?php foreach ($products as $product) : ?>
 <li class="<?php echo $pwidth ?> <?php echo $float ?>">
 <?php
 if (!empty($product->images[0]) )
			$image = $product->images[0]->displayMediaThumb('class="featuredProductImage" border="0"',false) ;
		else $image = '';
			echo JHTML::_('link', JRoute::_('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id='.$product->virtuemart_product_id.'&virtuemart_category_id='.$product->virtuemart_category_id),$image,array('title' => $product->product_name) );
			echo '<div class="clear"></div>';
		$url = JRoute::_('index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id='.$product->virtuemart_product_id.'&virtuemart_category_id='.
		$product->virtuemart_category_id); ?>		<a href="<?php echo $url ?>"><?php echo $product->product_name ?></a>		<?php	echo '<div class="clear"></div>';
		if ($show_price) {
			echo $currency->createPriceDiv('salesPrice','',$product->prices,true);
			if ($product->prices['salesPriceWithDiscount']>0) echo $currency->createPriceDiv('salesPriceWithDiscount','',$product->prices,true);
		}
		if ($show_addtocart) echo mod_virtuemart_product::addtocart($product);
		?>
	</li>
<?php
	if ($col == $products_per_row && $products_per_row && $last ) {
		echo '
		</ul><div class="clear"></div>
		<ul  class="vmproduct'.$params->get('moduleclass_sfx')  .'">';
		$col= 1 ;
	} else {
		$col++;
	}
	$last--;
	endforeach; ?>
</ul><div class="clear"></div>

<?php }
	if ($footerText) : ?>
	<div class="vmfooter<?php echo $params->get( 'moduleclass_sfx' ) ?>">
		 <?php echo $footerText ?>
	</div>
<?php endif; ?>
</div>
