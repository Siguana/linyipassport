<?php
/**
 # ot_digitalbox	 		OT DigitalBox  Template for Joomla 2.5!
 # author 			OmegaTheme.com
 # copyright 		Copyright(C) 2012 - OmegaTheme.com. All Rights Reserved.
 # @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Website: 		http://omegatheme.com
 # Technical 		support: Forum - http://omegatheme.com/forum/
 **/
 /**------------------------------------------------------------------------
 * file: googlefontpreview.php 2.5.0 00001, May 2012 12:00:00Z OmegaTheme $
 * package:	OT DigitalBox Template
 *------------------------------------------------------------------------*/

//No direct access!
defined( 'JPATH_BASE' ) or die();

jimport('joomla.html.html');
jimport('joomla.form.formfield');
 /**
 * @package 	Joomla.Framework
 * @subpackage		Parameter
 * @since		1.6
 */
class JFormFieldGoogleFontPreview extends JFormField
{
	// Name of Element
	protected $type = 'GoogleFontPreview';
	
	// Function to create an element
	protected function getInput()
	{
		$addCSS = '<style type="text/css">
								div.font-preview{
									background: none repeat scroll 0 0 #DDDDDD;
									border: 1px solid #999999;
									font-size: 30px;
									height: 60px;
									padding: 20px 10px;
									position: fixed;
									right: 50%;
									text-align: center;
									top: 50%;
									width: 200px;
								}
								span.span-font-preview{
									float: left;
									width: 100%;
									text-align: center;
								}
								a#font-preview-close-btn{
									background: url("../templates/ot_digitalbox/elements/images/close-icon.png") no-repeat scroll 0 0 transparent;
									color: #FFFFFF;
									font-size: 18px;
									height: 20px;
									position: absolute;
									right: 2px;
									top: 2px;
									width: 60px;
								}
							</style>';
		$fontPreview = '<div style="display: none;" class="font-preview"><span style="font-size: 30px;" class="span-font-preview">font preview</span><a id="font-preview-close-btn" onclick="closePreview()" href="javascript:void(0)"></a></div>';
		
		return $fontPreview . $addCSS;
	}
}						