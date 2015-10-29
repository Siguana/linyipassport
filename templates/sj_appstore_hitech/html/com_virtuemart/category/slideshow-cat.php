<?php
/*
 * ------------------------------------------------------------------------
 * Yt FrameWork for Joomla 2.5
 * ------------------------------------------------------------------------
 * Copyright (C) 2009 - 2012 The YouTech JSC. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: The YouTech JSC
 * Websites: http://www.smartaddons.com - http://www.cmsportal.net
 * ------------------------------------------------------------------------
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
$db		= JFactory::getDBO();
if ($this->category->haschildren) {
	$category_filter = "AND pcx.virtuemart_category_id IN ('".$this->category->virtuemart_category_id."'";
	foreach($this->category->children as $categoryID){
		$category_filter .= ",'".$categoryID->virtuemart_category_id."'";
		$query = "SELECT c.category_child_id as cat_child
				  FROM #__virtuemart_category_categories as c
				  WHERE c.category_parent_id='".$categoryID->virtuemart_category_id."'
		";
		$db->setQuery($query);
		$id = $db->loadObjectList();
		if($id){
			foreach($id as $id){
				$category_filter .= ",'".$id->cat_child."'";
			}
		}
	}
	$category_filter .= ")";
} else {
	$category_filter = "AND pcx.virtuemart_category_id IN (".$this->category->virtuemart_category_id . ")";
}
// var_dump($category_filter); die();
//$category_filter = "AND pcx.virtuemart_category_id IN (" . implode(',', $params['source']) . ")";
//$category_filter = "AND pcx.virtuemart_category_id IN (".$this->category->virtuemart_category_id . ")";
// Specical Product
$source_filter = "AND p2.product_special=1";
$source_order_by ="ORDER BY p2.created_on DESC";
$source_limit="LIMIT 0, 5";
$lang_params = &JComponentHelper::getParams('com_languages');
$lang = $lang_params->get('site', 'en-GB'); //use default joomla
$lang = strtolower(strtr($lang,'-','_'));
$query = "
		SELECT
			p1.virtuemart_product_id AS id,
			p1.product_name AS title,
			p1.product_s_desc AS description,
			p1.slug AS slug,
			p2.product_sku AS sku,
			p2.product_in_stock,
			p2.product_ordered,
			p2.product_sales,
			price.virtuemart_product_price_id,
			price.product_price,
			(
				SELECT m.file_url
				FROM #__virtuemart_medias m
				INNER JOIN #__virtuemart_product_medias pm ON pm.virtuemart_media_id=m.virtuemart_media_id
				WHERE pm.virtuemart_product_id=p2.virtuemart_product_id AND m.published=1
				ORDER BY pm.ordering
				LIMIT 0, 1
			) AS image,
			(SELECT COUNT(pr.virtuemart_rating_review_id) FROM #__virtuemart_rating_reviews pr WHERE pr.virtuemart_product_id=p2.virtuemart_product_id AND pr.published=1) AS reviews,
			GROUP_CONCAT(pcx.virtuemart_category_id) AS categories
		FROM #__virtuemart_products_$lang AS p1
			JOIN #__virtuemart_products AS p2 USING (virtuemart_product_id)
			LEFT JOIN #__virtuemart_product_prices AS price ON price.virtuemart_product_id=p1.virtuemart_product_id
			JOIN #__virtuemart_product_categories AS pcx ON pcx.virtuemart_product_id=p1.virtuemart_product_id
		WHERE
			p2.published=1
$category_filter
$source_filter
		GROUP BY p2.virtuemart_product_id
$source_order_by
$source_limit
";
$db->setQuery($query);
$rows = $db->loadObjectList();
//var_dump($rows); die("abc");
 if (!class_exists( 'VmConfig' )) require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart'.DS.'helpers'.DS.'config.php');
	VmConfig::loadConfig();
	if (!class_exists( 'calculationHelper' )) require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart'.DS.'helpers'.DS.'calculationh.php');
	if (!class_exists( 'CurrencyDisplay' )) require(JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_virtuemart'.DS.'helpers'.DS.'currencydisplay.php');
	$vmconfig_show_prices = VmConfig::get('show_prices');//var_dump($vmconfig_show_prices); die("cbcbcb");
	$calculator = calculationHelper::getInstance();	
	$currency = CurrencyDisplay::getInstance();	
// return data
$items = array();
if(!empty($rows)){
	
	if (count($rows)){
		foreach($rows as $product){//var_dump($product); die("cbcbcb");
			$product->title = $product->title;//var_dump($product->title); die("abc");
			
			$product->link = JRoute::_( 'index.php?option=com_virtuemart&view=productdetails&virtuemart_product_id='.$product->id.'&virtuemart_category_id='.$product->categories);			
			
			$product->image = (empty( $product->image) || !file_exists($product->image) ) ? 'nophoto.gif' : $product->image ;
			$calculator = calculationHelper::getInstance();
			$product->categories = explode(',', $product->categories);
			$product->prices = $calculator->getProductPrices($product);

		}
		$imgResizeConfig = array(
						'background' => '#FFFFFF',
						'thumbnail_mode' => 'fill'
					);
		YtUtils::getImageResizerHelper($imgResizeConfig);
		foreach($rows as $key => $product){
			$vm = array();
			$vm['id'] = $product->id;//var_dump($vm['id']); die("abcbc");
			$vm['title'] = $product->title;
			$vm['image'] = YtUtils::resize($product->image, '729', '400', 'fill');
			//$vm['image'] = $product->image;
			$vm['link']  = $product->link;
			$vm['price'] = $product->prices;
			$vm['desc']  = $product->description;
			
			$items[] = $vm;//var_dump($items); die("ancnc");
		}
	}
	//var_dump($items); die();
	//$currencysymbol = $_SESSION['product_currency'];
	//$vm_currency_display = &CurrencyDisplay::getInstance();
	//echo $vm_currency_display; die;
}
?>
<?php 
	if(!empty($items)){
?>
<script type="text/javascript">
	function addcart_sl(productid){
		document.forms["sl_product_"+productid].submit();
	}
</script>
<div id="wrapslider" style="">
	<div class="opa left"><div class="pad left"></div></div>
	<div class="opa right"><div class="pad right"></div></div>
	<div class="wrap_slide" style="width: 100%; margin: 0 auto;">
		<div class="flexslider" style="width: 79.1%; margin: 0 auto;">
	        <ul class="slides">
	        <?php foreach($items as $product):?>
	            <li>
	                <a href="<?php echo $product['link']; ?>">
	                	<img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" />
						<span class="border_img"></span>
	                </a>
					<div class="sl_item_info" style="<?php if(count($items) == 1){ echo 'opacity: 1'; } ?>">
						<div class="sl_item_info_in">
							<div class="addtocart_button">
								<form id="sl_product_<?php echo $product['id']; ?>"method="post" class="js-recalculate" action="index.php" >
									<span class="sj-bt submitbtn">
										<span class="salesPrice">
											<?php 
												$vm_currency_display = &CurrencyDisplay::getInstance();
												echo  $vm_currency_display->priceDisplay($product['price']['salesPrice']);
												?>
										</span>
										<span class="addtocart-btn">
											<a href="javascript: addcart_sl(<?php echo $product['id']; ?>)" class="addtocart-btn" title="<?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?>"><?php echo JText::_('COM_VIRTUEMART_CART_ADD_TO') ?></a>
										</span>
									</span>
                                    <input type="hidden" value="1" name="quantity[]" class="quantity-input js-recalculate"/>
									<!-- <input type="hidden" class="pname" value="<?php echo $product['name'] ?>" /> -->
									<input type="hidden" name="option" value="com_virtuemart" />
									<input type="hidden" name="view" value="cart" />
									<input type="hidden" name="task" value="add" />
									<input type="hidden" name="virtuemart_product_id[]" value="<?php echo $product['id']; ?>" />
								</form>
							</div>
							<div class="title_desc">
								<a class="pro_title" href="<?php echo $product['link']; ?>">
									<?php echo $product['title']; ?>
								</a>
								<span class="desc">
								<?php // Product Short Description
									if(!empty($product['desc'])) {							
									 echo shopFunctionsF::limitStringByWord($product['desc'], 150, '...'); 
								
									} ?>
									<?php //echo substr($product['desc'],0,80).'...'; ?>
								</span>
							</div>
						</div>
					</div>
	            </li>
	        <?php endforeach; ?>
	        </ul>
	    </div>
	</div>
</div>
<?php
	
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::base() . 'templates/' . $app->getTemplate().'/css/vmslideshow.css');
?>
<script type="text/javascript" src="<?php echo JURI::base() . 'templates/' . $app->getTemplate().'/js/jquery.flexslider-min.js'; ?>"></script>
<script type="text/javascript">
	window.addEvent('load', function() {
		$jsmart('.flexslider').flexslider({
			namespace: "flex-",             //{NEW} String: Prefix string attached to the class of every element generated by the plugin
			selector: ".slides > li",       //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
			animation: "slide",              //String: Select your animation type, "fade" or "slide"
			easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
			direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
			reverse: false,                 //{NEW} Boolean: Reverse the animation direction
			animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
			smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
			startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
			slideshow: true,                //Boolean: Animate slider automatically
			slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationSpeed: 600,            //Integer: Set the speed of animations, in milliseconds
			initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
			randomize: false,               //Boolean: Randomize slide order
			 
			// Usability features
			pauseOnAction: false,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
			touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
			video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
			 
			// Primary Controls
			controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
			prevText: "Previous",           //String: Set the text for the "previous" directionNav item
			nextText: "Next",               //String: Set the text for the "next" directionNav item
			 
			// Secondary Navigation
			keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
			multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
			mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
			pausePlay: false,               //Boolean: Create pause/play dynamic element
			pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
			playText: 'Play',               //String: Set the text for the "play" pausePlay item
			 
			// Special properties
			controlsContainer: "",          //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
			manualControls: "",             //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
			sync: "",                       //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
			asNavFor: "",                   //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
			 
			// Carousel Options
			itemWidth: 0,                   //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
			itemMargin: 0,                  //{NEW} Integer: Margin between carousel items.
			minItems: 0,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
			maxItems: 0,                    //{NEW} Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.
			move: 0,                        //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.
			 
			// Callback API
			start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
			before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
			after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
			end: function(){},              //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
			added: function(){},            //{NEW} Callback: function(slider) - Fires after a slide is added
			removed: function(){}           //{NEW} Callback: function(slider) - Fires after a slide is removed
		});
		//$jsmart('#content_main').masonry('reload');
	});
</script>
<?php 
	}
?>