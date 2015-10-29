<?php
/**
 # ot_digitalbox  		OT DigitalBox  Template for Joomla 2.5!
 # author 			OmegaTheme.com
 # copyright 		Copyright(C) 2012 - OmegaTheme.com. All Rights Reserved.
 # @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 # Website: 		http://omegatheme.com
 # Technical 		support: Forum - http://omegatheme.com/forum/
 **/
 /**------------------------------------------------------------------------
 * file: googlefontsloader.php 2.5.0 00001, May 2012 12:00:00Z OmegaTheme $
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
class JFormFieldGoogleFontsLoader extends JFormField
{
	// Name of Element
	protected $type = 'GoogleFontsLoader';
	
	// Function to create an element
	protected function getInput()
	{
		$fontsSeraliazed = file_get_contents('http://demo.omegatheme.com/webfonts/index.php?c=get-font-array');
		$_SESSION["gfontlist"] = $fontsSeraliazed;
		
        return '';
	}
}						