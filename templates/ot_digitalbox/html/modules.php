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
 * file: modules.php 2.5.0 00001, May 2012 12:00:00Z OmegaTheme $
 * package:	OT DigitalBox Template
 *------------------------------------------------------------------------*/
 
//No direct access!
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php
function modChrome_otBox($module, &$params, &$attribs)
{	
	//$first = $attribs['first'] ? 'first' : '';
	//$last = $attribs['last'] ? 'last' : '';
	?>
	<div class="otBox-1 module<?php echo $params->get('moduleclass_sfx'); ?> <?php ///echo $first; ?> <?php //echo $last; ?>">
		<div class="otBox-2">
			<div class="otBox-3">
				<div class="otBox-4">
					<div class="otBox-i">
						<?php if ($module->showtitle != 0) : ?>
							<h3><span class="title-module"><?php echo $module->title; ?></span></h3>
						<?php endif; ?>
						<div class="otModuleContent-i clearfix">
							<?php echo $module->content; ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
<?php
}
?>
<?php
function modChrome_otRounded($module, &$params, &$attribs)
{
	?>
	<div class="otRounded module<?php echo $params->get('moduleclass_sfx'); ?>">
		<div class="otRounded-topLeft-bg"></div>
		<div class="otRounded-topRight-bg"></div>
		<div class="otRounded-mid">
			<?php if ($module->showtitle != 0) : ?>
				<h3><span class="title-module"><?php echo $module->title; ?></span></h3>
			<?php endif; ?>
			<div class="otRounded-mid-i">
				<div class="otRounded-i">
					<div class="otModuleContent-i clearfix">
						<?php echo $module->content; ?>
					</div>
				</div>	
			</div>
		</div>
		<div class="otRounded-bottomLeft-bg"></div>
		<div class="otRounded-bottomRight-bg"></div>
	</div>
<?php
}
?>
<?php
 function modChrome_otModule($module, &$params, &$attribs)
{ ?>
	<div class="otModule module<?php echo $params->get('moduleclass_sfx'); ?>">
		<div class="otModule-i">
			<?php if ($module->showtitle != 0) : ?>
				<h3><span class="title-module"><?php echo $module->title; ?></span></h3>
			<?php endif; ?>
			<div class="otModuleContent-i clearfix">
				<?php echo $module->content; ?>
			</div>
		</div>
	</div>
<?php
}
?>