<?php
/**
 * @package Sj Article Slider Responsive
 * @version 2.5
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2012 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 * 
 */
defined('_JEXEC') or die;
$options = $params->toObject();
$uniqued ='container_slider_'.rand().time();
$image_config = array(
	'output_width'  => $params->get('item_image_width'),
	'output_height' => $params->get('item_image_height'),
	'function'		=> $params->get('item_image_function'),
	'background'	=> $params->get('item_image_background')
);
?>
<?php if(!empty($list)){?>
<?php if(!empty($options->pretext)) { ?>
<div class="pre-text">
	<?php echo $options->pretext; ?>
</div>
<?php } ?>
<div id="<?php echo $uniqued; ?>" class="container-slider" style="<?php if( $options->anchor == "bottom" ){ echo "margin-bottom:40px;"; }?>">
		<div class="page-title"><?php echo $options->slider_title_text;?></div>
		<?php if($options->anchor =="top"){?>
		<?php if($options->button_display == 1){?>
		<div class="page-button <?php echo $options->anchor;?> <?php echo $options->control;?>">
			<ul class="control-button">
				<li class="preview">Prev</li>
				<li class="next">Next</li>
			</ul>		
		</div>
		<?php }}?>

	<div class="slider not-js cols-6 <?php echo $options->deviceclass_sfx; ?>">
		<div class="vpo-wrap">
			<div class="vp">
				<div class="vpi-wrap">
				<?php foreach($list as $item){

				?>
					<div class="item">
						<div class="item-wrap">
							<div class="item-img">
								<div class="item-img-info">
								<?php //if( $options->item_image_linkable == 1 ){?>
									<a href="<?php echo $item->url;?>" <?php echo YTools::parseTarget($options->link_target);?>>
								<?php //}?>
										<img alt="image" src="<?php echo Ytools::resize($item->image,$image_config);?>">
								<?php //if( $options->item_image_linkable == 1 ){?>
									</a>
								<?php //}?>
								</div>
							</div>
							<div class="item-info <?php if( $options->theme == "theme2" ){ echo "item-spotlight"; }?> ">
								<div class="item-inner">
								<?php if( $options->item_title_display == 1 ){?>
									<div class="item-title">
										<?php //if( $options->item_title_linkable == 1 ){?>
										<a href="<?php echo $item->url;?>" <?php echo YTools::parseTarget($options->link_target);?>>
										<?php //}?>
											<?php echo YTools::truncate($item->title, (int)$options->item_title_max_chars, "...");?>
										<?php //if( $options->item_title_linkable == 1 ){?>
										</a>
										<?php //}?>
									</div>
								<?php }?>
									<div class="item-content">
									<?php if( $options->item_desc_display == 1 ){?>
										<div class="item-des">
										<?php 
											if ( (int)$options->item_description_striptags == 1 ){
												$keep_tags = $params->get('item_description_keeptags', '');
												$keep_tags = str_replace(array(' '), array(''), $keep_tags);
												$tmp_desc = strip_tags($item->description ,$keep_tags );
												echo YTools::truncate($tmp_desc, (int)$options->item_desc_max_chars, "...");
											} else {
												echo YTools::truncate($item->description, (int)$options->item_desc_max_chars, "...");
											}?>									
										</div>
									<?php }?>
										<?php if( $options->item_readmore_display == 1 ){?>
										<div class="item-read">
											<a href="<?php echo $item->url;?>" <?php echo YTools::parseTarget($options->link_target);?>><?php echo $options->item_readmore_text; ?></a>
										</div>	
										<?php }?>							
									</div>	
									<?php if( $options->theme == "theme2" ){
										if( $options->item_title_display == 1 || $options->item_desc_display == 1 || $options->item_readmore_display == 1 ){?>
										<div class="item-bg"></div>				
									<?php }}?>		
								</div>
							</div>						
						</div>
					</div>
				<?php }?>
				</div>
			</div>
		</div>
	</div>
	
	<?php if($options->anchor !="top"){?>
		<?php if($options->button_display == 1){?>
		<div class="page-button <?php echo $options->anchor;?> <?php echo $options->control;?>">
			<ul class="control-button">
				<li class="preview">Prev</li>
				<li class="next">Next</li>
			</ul>		
		</div>
	<?php }}?>
	
</div>
<?php if(!empty($options->posttext)) {  ?>
<div class="post-text">
	<?php echo $options->posttext; ?>
</div>
<?php } ?>
<?php }else {echo JText::_('Has no content to show!');}?>
<?php ?>
<script type="text/javascript">
//<![CDATA[
    $jsmart(document).ready(function($){
        $('#<?php echo $uniqued;?> .slider').responsiver({
            interval: <?php echo $options->delay;?>,
            speed: <?php echo $options->duration;?>,
            start: <?php echo $options->start -1;?>,
            step: <?php echo $options->scroll;?>,
            circular: true,
            preload: true,
			fx: 'slide',
            pause: 'hover',
            control:{
				prev: '#<?php echo $uniqued;?> .control-button li[class="preview"]',
				next: '#<?php echo $uniqued;?> .control-button li[class="next"]'
            },
			getColumns: function(element){
				var match = $(element).attr('class').match(/cols-(\d+)/);
				if (match[1]){
					var column = parseInt(match[1]);
				} else {
					var column = 1;
				}
				if (!column) column = 1;
				return column;
			}          
        });
    });
//]]>
</script>



