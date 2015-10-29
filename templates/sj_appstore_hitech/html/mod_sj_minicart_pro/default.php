<?php
/**
 * @package Sj MiniCart Pro
 * @version 2.5
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2012 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 * 
 */
defined('_JEXEC') or die; ?>
<?php
JHtml::_('behavior.keepalive');
$app = JFactory::getApplication();
include_once(dirname(__FILE__).DS.'popup.js.php');
?>
<?php 
	$options = $params->toObject();
	$uniqued=rand().time();
?>

<ul class="sj-login-regis">
	<li class="sj-login">
		<a 
			class="login-switch text-font"
			href="<?php echo JRoute::_('index.php?option=com_virtuemart&view=cart');?>" 
			title="<?php JText::_('Mycart');?>">
        	<span class="title-link"><?php echo JText::_('MY_CART'); ?><span class="arrow-down"></span></span>
        </a>
		<div class="sj-minicart-pro cart-box" id="sj_minicart_pro_<?php echo $uniqued; ?>"  style="display: none;" >
			<div class="mc-wrap"><!-- Begin mc-wrap -->
				<div class="sj_box_title">
					<h3><?php echo JText::_('MY_CART'); ?></h3>
				</div>
				<div class="mc-content"><!-- Begin mc-content -->
				
					<div class="mc-empty" <?php echo (!empty($cart->products))?'style="display:none;"':'style="display:block;"' ?> >
						<?php echo JText::_('EMPTY_CART_LABEL'); ?>
					</div>
					
					<div class="mc-content-inner" <?php echo (!empty($cart->products))?'style="display:block;"':'style="display:none;"'; ?>  >
						<div class="mc-list"  >
							<div class="mc-list-inner" >
								<?php require JModuleHelper::getLayoutPath('mod_sj_minicart_pro', 'list'); ?>
							</div>
						</div>		
						<div class="mc-space"></div>
						<?php require JModuleHelper::getLayoutPath('mod_sj_minicart_pro', 'coupon'); ?>
						
						<div class="mc-footer">
							<div class="mc-footer-in">
								<div class="mc-wrap_coll">
									<div class="mc-top">
										<span class="mc-update-btn">Update</span>
									</div>	
									<?php echo($options->goto_cart_display)?$cart->cart_show:''; ?>
								</div>
								<?php if($options->total_price_display==1){ ?>
									<span class="mc-totalprice-footer">
										<?php echo  $cart->billTotal ?>
									</span>
								<?php } ?>
								<?php if($options->checkout_display==1){ ?>
								<a class="mc-checkout-footer button1" href="<?php echo $cart->checkout;?>">	
									Checkout
								</a>
								<?php } ?>
							</div>
							<div class="clear"></div>
						</div>
						<div class="mc-space"></div>
					</div>
		
				</div><!-- End mc-content -->
				
			</div><!-- End mc-wrap -->
		</div>
	</li>
</ul>



<?php @ob_start(); ?>
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content{
		<?php echo ($options->product_list_display==0 && $options->coupon_form_display==0 && $options->goto_cart_display==0 && $options->checkout_display == 0  && $options->total_price_display ==0)?'display:none!important;':''; ?>
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content .mc-content-inner{
		width:<?php echo $options->cart_detail_width ?>px;
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-list .mc-product-inner .mc-image{
		max-width:<?php echo $maxwidthImage = ($options->cart_detail_width - 120) ?>px;
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?>  .mc-content .mc-content-inner  .mc-list-inner{
		height:<?php echo $options->product_max_height ?>px;
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content .mc-content-inner .mc-list,
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content .mc-content-inner .mc-top{
		display:<?php echo ($options->product_list_display==1)?'block':'none;' ?>
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content .mc-content-inner .mc-coupon{
		display:<?php echo ($options->coupon_form_display==1)?'block':'none;' ?>
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content .mc-content-inner  .mc-footer{
		display:<?php echo ($options->goto_cart_display==1 || $options->checkout_display == 1  || $options->total_price_display ==1)?'block':'none;' ?>
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content .mc-content-inner .mc-coupon .coupon-label,
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content .mc-content-inner .mc-coupon .coupon-input{
		<?php echo($options->coupon_label_display==0)?'display:block; text-align:center;':''; ?>
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-content .mc-content-inner .mc-coupon  .coupon-message{
		<?php echo($options->coupon_label_display==0)?'text-align:center;padding:0;':''; ?>
	}
	
	#sj_minicart_pro_<?php echo $uniqued; ?> .mc-list .mc-product-inner .mc-attribute{
		margin-left:<?php echo ($options->item_image_width<=$maxwidthImage)?($options->item_image_width + 10):$maxwidthImage+13 ?>px;
	}
	.rtl #sj_minicart_pro_<?php echo $uniqued; ?> .mc-list .mc-product-inner .mc-attribute{
		margin-left: 15px;
		margin-right:<?php echo ($options->item_image_width<=$maxwidthImage)?($options->item_image_width + 10):$maxwidthImage+13 ?>px;
	}
	
<?php
	$stylesheet = @ob_get_contents();
	@ob_end_clean();
	$docs = JFactory::getDocument();
	$docs->addStyleDeclaration($stylesheet );
?>
