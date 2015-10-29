<?php //use this code to call "VirtueMartViewProductdetails" class create button addtocart : echo $this->loadTemplate('addtocart_btn') ?>
<form method="post" class="product js-recalculate" action="index.php" >

	<?php // Display the quantity box

		$stockhandle = VmConfig::get('stockhandle', 'none');
		if (($stockhandle == 'disableit' or $stockhandle == 'disableadd') and ($product->product_in_stock - $product->product_ordered) < 1) {
	 ?>

	<?php } else { ?>
							<!-- <label for="quantity<?php echo $product->virtuemart_product_id; ?>" class="quantity_box"><?php echo JText::_('COM_VIRTUEMART_CART_QUANTITY'); ?>: </label> -->
			<span class="quantity-box" style="display:none">
			<input type="text" class="quantity-input js-recalculate" name="quantity[]" value="<?php if (isset($product->min_order_level) && (int) $product->min_order_level > 0) {
		echo $product->min_order_level;
	} else {
		echo '1';
	} ?>" />
			</span>

			<?php // Display the quantity box END ?>

			<?php
			// Display the add to cart button
			?>
			<span class="sj-bt submitbtn">
				<span class="">
					<input type="submit" name="addtocart" class="addtocart-button" value="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>" title="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>" />
				</span>
			</span>
			<?php // Display the add to cart button END  ?>
			<input type="hidden" class="pname" value="<?php echo $product->product_name ?>" />
			<input type="hidden" name="option" value="com_virtuemart" />
			<input type="hidden" name="view" value="cart" />
			<noscript><input type="hidden" name="task" value="add" /></noscript>
			<input type="hidden" name="virtuemart_product_id[]" value="<?php echo $product->virtuemart_product_id ?>" />
		<?php /** @todo Handle the manufacturer view */ ?>
			<input type="hidden" name="virtuemart_manufacturer_id" value="<?php echo $product->virtuemart_manufacturer_id ?>" />
			<input type="hidden" name="virtuemart_category_id[]" value="<?php echo $product->virtuemart_category_id ?>" />
				
	<?php } ?>

</form>