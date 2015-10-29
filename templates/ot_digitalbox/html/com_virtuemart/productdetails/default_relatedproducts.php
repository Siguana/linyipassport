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
?>
<div class="product-related-products">
	<!--<h4><?php //echo JText::_('COM_VIRTUEMART_RELATED_PRODUCTS'); ?></h4>-->
	<?php
	//var_dump($this->product->customfieldsRelatedProducts); die();
	foreach ($this->product->customfieldsRelatedProducts as $field) { ?>
		<?php //var_dump($field); die(); ?>
		<div class="product-field product-field-type-<?php echo $field->field_type ?>">
			<div class="product-field-i">
				<span class="product-field-display"><?php echo $field->display ?></span>
				<span class="product-field-desc"><?php echo jText::_($field->custom_field_desc) ?></span>
			</div>
		</div>
	<?php } ?>
</div>



















