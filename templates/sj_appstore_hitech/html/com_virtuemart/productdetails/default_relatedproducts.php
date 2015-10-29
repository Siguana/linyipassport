<?php
/**
 *
 * Show the product details page
 *
 * @package	VirtueMart
 * @subpackage
 * @author Max Milbers, Valerie Isaksen

 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: default_relatedproducts.php 5406 2012-02-09 12:22:33Z alatak $
 */

// Check to ensure this file is included in Joomla!
defined ( '_JEXEC' ) or die ( 'Restricted access' );
$model = new VirtueMartModelProduct();
$calculator = calculationHelper::getInstance();
$currency = CurrencyDisplay::getInstance();
?>
        <div class="product-related-products">
    	<h4 class="relate"><?php echo JText::_('COM_VIRTUEMART_RELATED_PRODUCTS'); ?></h4>

    <?php
    $database = & JFactory::getDBO();
    foreach ($this->product->customfieldsRelatedProducts as $field) {
		
		//var_dump($field); die;
	?><div class="product-field product-field-type-<?php echo $field->field_type ?>">
		    <span class="product-field-display"><?php echo $field->display ?></span>
		    
			<span class="product-field-desc">
			<?php
				echo jText::_($field->custom_field_desc);
				
				$product = $model->getProductSingle($field->custom_value,false);
				$price = $calculator -> getProductPrices($product);
				echo jText::_('COM_VIRTUEMART_CART_PRICE');
				echo "<strong>" .$currency->priceDisplay($price['salesPrice'])."</strong>";
				?> 
			</span>
				
				<?php // This is the beginning of "Add to cart" ?>
				
				<form method="post" class="product" action="index.php" id="addtocartproduct<?php echo $product->virtuemart_product_id ?>">
					<div class="addtocart-bar">
							<?php // Display the quantity box ?>
							<!-- <label for="quantity<?php echo $product->virtuemart_product_id;?>" class="quantity_box"><?php echo JText::_('COM_VIRTUEMART_CART_QUANTITY'); ?>: </label> -->
							<span class="quantity-box">
								<input style="display:none;" type="text" class="quantity-input" name="quantity[]" value="1" />
							</span>
							
							<?php // Display the quantity box END ?>
				
							<?php // Add the button
							$button_lbl = JText::_('COM_VIRTUEMART_CART_ADD_TO');
							$button_cls = ''; //$button_cls = 'addtocart_button';
							if (VmConfig::get('check_stock') == '1' && !$product->product_in_stock) {
								$button_lbl = JText::_('COM_VIRTUEMART_CART_NOTIFY');
								$button_cls = 'notify-button';
							} ?>
				
							<?php // Display the add to cart button ?>
							<!--
							<span class="addtocart-button">
								<input type="submit" name="addtocart"  class="addtocart-button" value="<?php echo $button_lbl ?>" title="<?php echo $button_lbl ?>" />
							</span>
							-->
						<div class="clear"></div>
						</div>
				
						<?php // Display the add to cart button END ?>
						<input type="hidden" class="pname" value="<?php echo $product->product_name ?>">
						<input type="hidden" name="option" value="com_virtuemart" />
						<input type="hidden" name="view" value="cart" />
						<noscript><input type="hidden" name="task" value="add" /></noscript>
						<input type="hidden" name="virtuemart_product_id[]" value="<?php echo $product->virtuemart_product_id ?>" />
						<?php /** @todo Handle the manufacturer view */ ?>
						<input type="hidden" name="virtuemart_manufacturer_id" value="<?php echo $product->virtuemart_manufacturer_id ?>" />
						<input type="hidden" name="virtuemart_category_id[]" value="<?php echo $product->virtuemart_category_id ?>" />
				</form>
			<!-- <span class="product-field-desc"><?php echo jText::_($field->custom_field_desc) ?></span> -->
		</div>
	<?php } ?>
        </div>
