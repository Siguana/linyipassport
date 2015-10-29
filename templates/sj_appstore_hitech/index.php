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
defined( '_JEXEC' ) or die( 'Restricted access' );
// Get the path of template folder
$tPath = dirname(__FILE__);
// Include class YtTemplate
include_once ($tPath.DS.'includes'.DS.'yt_template.class.php');
//
include_once ($tPath.DS.'includes'.DS.'frame_inc.php');
// Check RTL or LTF direction
$dir = ($ytrtl == 'rtl') ? 'dir="rtl"' : '';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" <?php echo $dir; ?> lang="<?php echo $this->language; ?>">
<head>
	<jdoc:include type="head" />
	<?php
	// Device Mobile
	$browser = new Browser();
	?>
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1; user-scalable=yes;" />
    <?php if ($browser->getBrowser()== Browser::BROWSER_IPHONE ){?>
        <meta name="apple-touch-fullscreen" content="YES" />
    <?php } ?>
	<script type="text/javascript">
		var TMPL_NAME = '<?php echo $yt->template; ?>';
	</script>

</head>
<?php
	//
	$cls_body = '';
	//render a class for home page
	$cls_body .= $yt->isHomePage() ? 'homepage ' : '';
	//add a class for each component
	$cls_body .= (JRequest::getVar('option')!= null) ? JRequest::getVar('option') .' ' : '';
	//add a view class which helps you easy to style
	$cls_body .= (JRequest::getVar('view')!= null) ? 'view-' . JRequest::getVar('view') . ' ' : '';
	//for stype. With each style, we will use one class
	$cls_body .= $yt->getParam('sitestyle').' ';
	//for RTL direction
	$cls_body .= ($ytrtl == 'rtl') ? 'rtl' . ' ' : '';
	//add a class according to the template name
	$cls_body .= $yt->template. ' ';
	//add a class for fontsize
	$cls_body .=  ($browser->getBrowser()== Browser::PLATFORM_IPAD )?'ipadbrowser ':'';
	$cls_body .=  'fs' . $yt->getParam('fontsize');

?>
<body id="bd" class="<?php echo $cls_body; ?>">	 
	 <jdoc:include type="modules" name="debug" />                                   
	<div id="yt_wrapper">
		<div id="yt_wrapper_inner1">
			<div id="yt_wrapper_inner2">
   			<a id="top" name="scroll-to-top"></a>
			<?php
			/*render blocks. for positions of blocks, please refer layouts folder.
			 With each layout, it will read xml and render here */
			foreach($yt_render->arr_TB as $tagBD) {
				 //check if position has module
				 if( $tagBD["countModules"] > 0 ) {
					// BEGIN: Content Area
					if( ($tagBD["name"] == 'content') ) { 
						//class for content area
						$cls_content  = $tagBD['class_content'];
						$cls_content  .= ' block';
						$cls_content  .= ($tagBD["countModules"]==1)?" gridsingle":"";
						?>
						<div id="<?php echo $tagBD["id"]; ?>" class="<?php echo $cls_content;?>">
							<div class="yt-main">
								<div class="yt-main-in1">
									<div class="yt-main-in2 clearfix">
            							<?php
											$countL = $countR = $countM = $countCL1 = $countCL2 = 0;
											// BEGIN: foreach position of block content
											// IMPORTANT: Please do not edit this block
											foreach($tagBD['positions'] as $position):
												include($tPath . DS . 'includes' . DS . 'block-content.php');
											endforeach; 
											// END: foreach position of block content
										?>
									</div>
								</div>
							</div>            
						</div>
						<?php
							// END: Content Area
						} elseif ($tagBD["name"] != 'content'){ 
							// BEGIN: For other blocks
							$clearfix = ( isset( $tagBD["no-clearfix"] ) && $tagBD["no-clearfix"] == '1') ? '' : ' clearfix';
						?>       
						<div id="<?php echo $tagBD["id"]; ?>" class="block">
							<div class="yt-main">
								<div class="yt-main-in1">
									<div class="yt-main-in2<?php echo $clearfix;?>">
									<?php		
									if( !empty($tagBD["hasGroup"]) && $tagBD["hasGroup"] == "1"){
										// BEGIN: For Group attribute
										$flag = ''; 
										$openG = 0; 
										$c = 0;
										foreach( $tagBD['positions'] as $posFG ):  
											$c = $c + 1;
											if( $posFG['group'] != "" && $posFG['group'] != $flag){ 
												$flag = $posFG['group'];
												if ($openG == 0) { 
													$openG = 1;
													$groupnormal = 'group-' . $flag.$tagBD['class_groupnormal'];
													$group_style = isset($tagBD['width-' . $flag]) ? 'width:' . $tagBD['width-'.$flag]. '; ' : '' ;
													$group_style .= $float1;
													echo '<div class="' . $groupnormal . ' clearfix" style="' . $group_style . '">' ; 
													echo $yt->renPositionsGroup($posFG);	
													if($c == count( $tagBD['positions']) ) {
														echo '</div>';
													}
												} else {
													$openG = 0;
													$groupnormal = 'group-' . $flag;
													$group_style = $tagBD['width-'.$flag] ;
												
													echo '</div>';
													echo '<div class="' . $groupnormal . ' clearfix" style="' . $group_style . ';' . $float1 . '">' ; 								
													echo $yt->renPositionsGroup($posFG);
												}
											} elseif ($posFG['group'] != "" && $posFG['group'] == $flag){
												echo $yt->renPositionsGroup($posFG);
												if($c == count( $tagBD['positions']) ) {
													echo '</div>';
												}
											}elseif($posFG['group']==""){ 
												if($openG ==1){
													$openG = 0;
													echo '</div>';
												}
												echo $yt->renPositionsGroup($posFG);
											}
										endforeach;
										// END: For Group attribute
									}else{ 
										// BEGIN: for Tags without group attribute
										if(isset($tagBD['positions'])){ 
											if(isset($tagBD['autosize'])){
												echo $yt->renPositionsNormal($tagBD['positions'], $tagBD["countModules"], $tagBD["limited"], $tagBD['autosize']);
											}else{
												echo $yt->renPositionsNormal($tagBD['positions'], $tagBD["countModules"], $tagBD["limited"]);
											}
										}
										// END: for Tags without group attribute
									}
									?>
								</div>
							</div>
						</div>
					</div>
				<?php
					//END: For other blocks
				   }
				}
			}
			?>
   			</div>
		</div>
	</div>
   
   <?php
	if( !$yt->is_mobile && $yt->getParam('showCpanel') ) {
		include_once ($tPath.DS.'includes'.DS.'bottom.php');
	}
	// Iclude masonry
	include_once ($tPath.DS.'includes'.DS.'script_masonry.php');
	// Include isotobe
	include_once ($tPath.DS.'includes'.DS.'script_isotobe.php');
	?>
</body>
</html>