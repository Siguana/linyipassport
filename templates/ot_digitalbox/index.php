<?php
/**
 # ot_digitalbox - 	OT DigitalBox  Template for Joomla 2.5!
 # author 			OmegaTheme.com
 # copyright 		Copyright(C) 2012 - OmegaTheme.com. All Rights Reserved.
 # @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Website: 		http://omegatheme.com
 # Technical 		support: Forum - http://omegatheme.com/forum/
 **/
 /**------------------------------------------------------------------------
 * file: index.php 2.5.0 00001, May 2012 12:00:00Z OmegaTheme $
 * package:	OT DigitalBox Template
 *------------------------------------------------------------------------*/
 
//No direct access!
defined( '_JEXEC' ) or die( 'Restricted access' );

include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/layout/tpl.function.php');
include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/layout/splitmodules.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

</head>
<body id="ot-body" class="<?php echo $home; ?> <?php echo $this->params->get('layoutStyle'); ?> <?php echo $this->params->get('layoutType'); ?>">
	<div class="ot-wrap">
		<div class="ot-wrap-i">
			<div class="ot-widthTemp">
				<div class="ot-widthTemp-i">
					<!--******************** START HEADER ********************-->
					<div class="ot-header">
						<div class="ot-header-i">
							<?php if($this->countModules('headertop-1')) { ?>
							<div class="ot-headertop-1">
								<div class="ot-headertop-1-i">
									<jdoc:include type="modules" name="headertop-1" style="otModule" />
								</div>
							</div>
							<?php } ?>
							<?php if($this->countModules('logo + headertop-1')) { ?>
							<div class="ot-logo-headertop">
								<div class="ot-logo-headertop-i">
									<div class="ot-logo">
										<?php if($this->countModules('logo')) { ?>
										<jdoc:include type="modules" name="logo" />
										<?php } ?>
										<?php if(!$this->countModules('logo')) { ?>
										<a href="<?php echo JURI::base(); ?>" class="logo"></a>
										<?php } ?>
									</div>
									<?php if($this->countModules('headertop-2')) { ?>
									<div class="ot-headertop-2">
										<div class="ot-headertop-2-i">
											<jdoc:include type="modules" name="headertop-2" style="otModule" />
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							<?php } ?>
							<?php if($this->countModules('mainmenu')) { ?>
							<div class="ot-mainmenu">
								<div class="mainmenu-leftbg"></div>
								<div class="mainmenu-midbg">
									<div class="mainmenu-midbg-i">
										<div id="ot-mainmenu" class="ot-mainmenu-i">
											<jdoc:include type="modules" name="mainmenu" />
										</div>
									</div>
								</div>	
								<div class="mainmenu-rightbg"></div>
							</div>
							<?php } ?>
						</div>
					</div>
					<!--******************** END HEADER ********************-->
					<?php if($this->countModules('top-extend')) { ?>
					<div class="ot-top-extend">
						<div class="ot-top-extend-i">
							<jdoc:include type="modules" name="top-extend" style="otModule" />
						</div>
					</div>
					<?php } ?>
					
					<?php if($this->countModules('breadcrumb')) { ?>
					<div class="ot-breadcrumb">
						<div class="ot-breadcrumb-i">
							<jdoc:include type="modules" name="breadcrumb" style="otModule" />
						</div>
					</div>
					<?php } ?>
					
					<!--******************** START BANNER ********************-->
					<?php if($this->countModules('banner')) { ?>
					<div class="ot-banner">
						<div class="ot-banner-leftbg"></div>
						<div class="ot-banner-rightbg"></div>
						<div class="ot-banner-i">
							<jdoc:include type="modules" name="banner" style="otModule" />
						</div>
					</div>
					<?php } ?>
					<!--******************** END BANNER ********************-->
					
					<!--******************** START TOPBOXES ********************-->
					<?php
					$positionsTopBox = array('topbox-1','topbox-2','topbox-3','topbox-4','topbox-5');
					$topBoxs = splitmodules($this,$positionsTopBox,$this->params->get('CustomWidthtopBoxes'),$this->params->get('width_topboxes'));
					if($topBoxs) : 
					?>
					<?php if($this->countModules('topbox-1 + topbox-2 + topbox-3 + topbox-4 + topbox-5')) {?>
					<div class="ot-topboxes" id="ot-topboxes">
						<div class="ot-topboxes-i" id="ot-topboxes-i">
							<?php if( $this->countModules('topbox-1')) {?>
							<div class="top-box top-box-1<?php echo $topBoxs['topbox-1']['class']; ?> width<?php echo $topBoxs['topbox-1']['width']; ?>">
								<jdoc:include type="modules" name="topbox-1" style="otRounded" />
							</div>
							<?php } ?>
							<?php if( $this->countModules('topbox-2')) {?>
							<div class="top-box top-box-2<?php echo $topBoxs['topbox-2']['class']; ?> width<?php echo $topBoxs['topbox-2']['width']; ?>">
								<jdoc:include type="modules" name="topbox-2" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('topbox-3')) {?>
							<div class="top-box top-box-3<?php echo $topBoxs['topbox-3']['class']; ?> width<?php echo $topBoxs['topbox-3']['width']; ?>">
								<jdoc:include type="modules" name="topbox-3" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('topbox-4')) {?>
							<div class="top-box top-box-4<?php echo $topBoxs['topbox-4']['class']; ?> width<?php echo $topBoxs['topbox-4']['width']; ?>">
								<jdoc:include type="modules" name="topbox-4" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('topbox-5')) {?>
							<div class="top-box top-box-5<?php echo $topBoxs['topbox-5']['class']; ?> width<?php echo $topBoxs['topbox-5']['width']; ?>">
								<jdoc:include type="modules" name="topbox-5" style="otRounded" />
							</div>
							<?php }?>
						</div>
					</div>
					<?php } endif; ?>
					<!--******************** END TOPBOXES ********************-->
					
					<!--******************** START MAINBODY ********************-->
					<div class="ot-mainbody">
						<div class="ot-mainbody-i">
							<div style="clear: both;"><jdoc:include type="message" /></div>
							<?php if($this->params->get('layoutType') == 'content-left-right') { ?>
								<?php if($this->countModules('right')) { ?>
								<div class="ot-rightcolumn">
									<div class="ot-rightcolumn-i">
										<jdoc:include type="modules" name="right" style="otModule" />
									</div>
								</div>
								<?php } ?>
								<?php if($this->countModules('left')) { ?>
								<div class="ot-leftcolumn">
									<div class="ot-leftcolumn-i">
										<jdoc:include type="modules" name="left" style="otModule" />
									</div>
								</div>
								<?php } ?>
								<div class="ot-content content-<?php if(!$this->countModules('left')) echo 'full_left'; ?><?php if(!$this->countModules('right')) echo 'full_right'; ?>">
									<?php if($this->countModules('top-content')) { ?>
									<div class="ot-top-content">
										<jdoc:include type="modules" name="top-content" style="otModule" />
									</div>
									<?php } ?>
									<div class="ot-content-i">
										<jdoc:include type="component" />
									</div>
									<?php if($this->countModules('bottom-content')) { ?>
									<div class="ot-bottom-content">
										<jdoc:include type="modules" name="bottom-content" style="otModule" />
									</div>
									<?php } ?>
								</div>
							<?php } else { ?>
								<?php if($this->countModules('left')) { ?>
								<div class="ot-leftcolumn">
									<div class="ot-leftcolumn-i">
										<jdoc:include type="modules" name="left" style="otModule" />
									</div>
								</div>
								<?php } ?>
								<?php if($this->countModules('right')) { ?>
								<div class="ot-rightcolumn">
									<div class="ot-rightcolumn-i">
										<jdoc:include type="modules" name="right" style="otModule" />
									</div>
								</div>
								<?php } ?>
								<div class="ot-content content-<?php if(!$this->countModules('left')) echo 'full-left'; ?><?php if(!$this->countModules('right')) echo 'full-right'; ?>">
									<?php if($this->countModules('top-content')) { ?>
									<div class="ot-top-content">
										<jdoc:include type="modules" name="top-content" style="otModule" />
									</div>
									<?php } ?>
									<div class="ot-content-i">
										<jdoc:include type="component" />
									</div>
									<?php if($this->countModules('bottom-content')) { ?>
									<div class="ot-bottom-content">
										<jdoc:include type="modules" name="bottom-content" style="otModule" />
									</div>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<!--******************** END MAINBODY********************-->
					
					<!--******************** START BOTTOM EXTENDS ********************-->
					<?php
					$positionsBottomextend = array('bottom-extend-1','bottom-extend-2','bottom-extend-3','bottom-extend-4','bottom-extend-5');
					$bottomExtends = splitmodules($this,$positionsBottomextend,$this->params->get('CustomWidthbottomExtends'),$this->params->get('width_bottomextends'));
					if($bottomExtends) :
					?>
					<?php if($this->countModules('bottom-extend-1 + bottom-extend-2 + bottom-extend-3 + bottom-extend-4 + bottom-extend-5')) {?>
					<div class="ot-bottom-extends" id="ot-bottom-extends">
						<div class="ot-bottom-extends-i" id="ot-bottom-extends-i">
							<?php if( $this->countModules('bottom-extend-1')) {?>
							<div class="bottom-extend bottom-extend-1<?php echo $bottomExtends['bottom-extend-1']['class']; ?> width<?php echo $bottomExtends['bottom-extend-1']['width']; ?>">
								<jdoc:include type="modules" name="bottom-extend-1" style="otRounded" />
							</div>
							<?php } ?>
							<?php if( $this->countModules('bottom-extend-2')) {?>
							<div class="bottom-extend bottom-extend-2<?php echo $bottomExtends['bottom-extend-2']['class']; ?> width<?php echo $bottomExtends['bottom-extend-2']['width']; ?>">
								<jdoc:include type="modules" name="bottom-extend-2" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('bottom-extend-3')) {?>
							<div class="bottom-extend bottom-extend-3<?php echo $bottomExtends['bottom-extend-3']['class']; ?> width<?php echo $bottomExtends['bottom-extend-3']['width']; ?>">
								<jdoc:include type="modules" name="bottom-extend-3" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('bottom-extend-4')) {?>
							<div class="bottom-extend bottom-extend-4<?php echo $bottomExtends['bottom-extend-4']['class']; ?> width<?php echo $bottomExtends['bottom-extend-4']['width']; ?>">
								<jdoc:include type="modules" name="bottom-extend-4" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('bottom-extend-5')) {?>
							<div class="bottom-extend bottom-extend-5<?php echo $bottomExtends['bottom-extend-5']['class']; ?> width<?php echo $bottomExtends['bottom-extend-5']['width']; ?>">
								<jdoc:include type="modules" name="bottom-extend-5" style="otRounded" />
							</div>
							<?php }?>
						</div>
					</div>
					<?php } endif; ?>
					<!--******************** END BOTTOM EXTENDS ********************-->
					
					<!--******************** START BOTTOMBOXES ********************-->
					<?php
					$positionsBottombox = array('bottombox-1','bottombox-2','bottombox-3','bottombox-4','bottombox-5');
					$bottomBoxes = splitmodules($this,$positionsBottombox,$this->params->get('CustomWidthbottomBoxes'),$this->params->get('width_bottomboxes'));
					if($bottomBoxes) :
					?>
					<?php if($this->countModules('bottombox-1 + bottombox-2 + bottombox-3 + bottombox-4 + bottombox-5')) {?>
					<div class="ot-bottomboxes" id="ot-bottomboxes">
						<div class="ot-bottomboxes-i" id="ot-bottomboxes-i">
							<?php if( $this->countModules('bottombox-1')) {?>
							<div class="bottom-box bottom-box-1<?php echo $bottomBoxes['bottombox-1']['class']; ?> width<?php echo $bottomBoxes['bottombox-1']['width']; ?>">
								<jdoc:include type="modules" name="bottombox-1" style="otRounded" />
							</div>
							<?php } ?>
							<?php if( $this->countModules('bottombox-2')) {?>
							<div class="bottom-box bottom-box-2<?php echo $bottomBoxes['bottombox-2']['class']; ?> width<?php echo $bottomBoxes['bottombox-2']['width']; ?>">
								<jdoc:include type="modules" name="bottombox-2" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('bottombox-3')) {?>
							<div class="bottom-box bottom-box-3<?php echo $bottomBoxes['bottombox-3']['class']; ?> width<?php echo $bottomBoxes['bottombox-3']['width']; ?>">
								<jdoc:include type="modules" name="bottombox-3" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('bottombox-4')) {?>
							<div class="bottom-box bottom-box-4<?php echo $bottomBoxes['bottombox-4']['class']; ?> width<?php echo $bottomBoxes['bottombox-4']['width']; ?>">
								<jdoc:include type="modules" name="bottombox-4" style="otRounded" />
							</div>
							<?php }?>
							<?php if( $this->countModules('bottombox-5')) {?>
							<div class="bottom-box bottom-box-5<?php echo $bottomBoxes['bottombox-5']['class']; ?> width<?php echo $bottomBoxes['bottombox-5']['width']; ?>">
								<jdoc:include type="modules" name="bottombox-5" style="otRounded" />
							</div>
							<?php }?>
						</div>
					</div>
					<?php } endif; ?>
					<!--******************** END BOTTOMBOXES ********************-->
					
					<!--******************** START FOOTER ********************-->
					<div class="ot-footer">
						<div class="ot-footer-top-left"></div>
						<div class="ot-footer-top-right"></div>
						<div class="ot-footer-i">
							<?php if($this->countModules('bottom-1')) { ?>
							<div class="ot-bottom-1">
								<div class="ot-bottom-1-i">
									<jdoc:include type="modules" name="bottom-1" style="otModule" />
								</div>
							</div>
							<?php } ?>
							<?php if($this->countModules('bottom-2')) { ?>
							<div class="ot-bottom-2">
								<div class="ot-bottom-2-i">
									<jdoc:include type="modules" name="bottom-2" style="otModule" />
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<!--******************** END FOOTER ********************-->
				</div>
			</div>
		</div>
	</div>
<div style="clear: both;"><jdoc:include type="modules" name="debug" /></div>
</body>
</html>
