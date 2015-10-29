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
 * @version $Id: default_images.php 6188 2012-06-29 09:38:30Z Milbo $
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
$app =& JFactory::getApplication();
//var_dump ($this->product->images); die;
?>

<script src="<?php echo JURI::base().'templates/'.$app->getTemplate().'/js/cloud-zoom.1.0.2.min.js'; ?>" type="text/javascript"></script>
<script type="text/javascript">
window.addEvent('load', function() {
	$jsmart(function($){
		$('a.cloud-zoom-gallery').bind('click', function(){
			$('a#yt_popup').attr('href', $(this).attr('href'));
		});
		$('img.zoom-tiny-image').bind('click', function(){
			$('img.img-cloud-zoom').attr('title', $(this).attr('title'));
		});
	});
});

</script>
<div id="yt_vmimg_detail" class="zoom-section"> 
	<?php
	// Product Main Image
	if (!empty($this->product->images[0])) {
	    ?>
		<div class="zoom-small-image">
	    <?php
	    //	echo $this->product->images[0]->file_url_thumb.'</br>';
	    //	echo $this->product->images[0]->file_url.'</br>';
	    ?>
		<div style="top: 0px; z-index: 996; position: relative; width: 400px; height: 250px;" id="wrap">
			<a rel="position:'inside'" id="yt-zoom" class="cloud-zoom modal" href="<?php echo JURI::base().$this->product->images[0]->file_url; ?>" style="position: relative; display: block;">
				<img class="img-cloud-zoom" title="<?php echo $this->product->images[0]->file_name; ?>" alt="" src="<?php echo JURI::base().$this->product->images[0]->file_url; ?>" style="display: block; width: 400px; height: 250px;" />
				<!--<span style="position: absolute; bottom: 0; left:0; display: block; height: 50px; width:50px; z-index:9999;">click</span>-->
			</a>
			<!--<div style="background-image: url("."); z-index: 999; position: absolute; width: 440px; height: 280px; left: 0px; top: 0px; cursor: move;" class="mousetrap">
			</div>-->
            <div class="popup-btn">
                <a id="yt_popup" class="modal" href="<?php echo JURI::base().$this->product->images[0]->file_url; ?>">popup</a>        
            </div>
		</div>
		<?php //echo $this->product->images[0]->displayMediaFull('class="medium-image" id="medium-image"', false, "class='modal'", true); ?>
	    </div>
	<?php } // Product Main Image END ?>
	<?php
	// Showing The Additional Images
	// if(!empty($this->product->images) && count($this->product->images)>1) {
	if (!empty($this->product->images) and count ($this->product->images)>1) {
	    ?>
		<div class="zoom-desc">
		<?php
		// List all Images
		if (count($this->product->images) > 0) {
		    foreach ($this->product->images as $image) {
		    //	echo $image->file_url_thumb.'</br>';
		    //	echo $image->file_url.'</br>';
		    ?>
			<a rel="useZoom: 'yt-zoom', smallImage: '<?php echo JURI::base().$image->file_url; ?>' " title="Red" class="cloud-zoom-gallery" href="<?php echo JURI::base().$image->file_url; ?>">
				<img title="<?php echo $image->file_name; ?>" alt="<?php echo $image->file_title; ?>" src="<?php echo JURI::base().$image->file_url_thumb; ?>" class="zoom-tiny-image"/>
			</a>
			<?php
			//echo '<div class="floatleft">' . $image->displayMediaThumb('class="product-image"', true, 'class="modal"', true, true) . '</div>'; //'class="modal"'
		    }
		}
		?>
	    </div>
	<?php
	} // Showing The Additional Images END ?>
</div>