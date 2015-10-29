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
 * file: googlefonts.php 2.5.0 00001, May 2012 12:00:00Z OmegaTheme $
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
class JFormFieldGoogleFonts extends JFormField
{
	// Name of Element
	protected $type = 'GoogleFonts';
	
	// Construct an array of the HTML OPTION statements.
	var $_options = array();
	
	// Function to create an element
	protected function getInput()
	{
		//$fontsSeraliazed = file_get_contents('http://galaxytheme.com/webfonts/index.php?c=get-font-array');
		$fontsSeraliazed = $_SESSION["gfontlist"] ? $_SESSION["gfontlist"] : '';
		$fontArray = @unserialize($fontsSeraliazed);
		
		$this->_options[] =  JHTML::_('select.option', 'none', JText::_('--Default (Not use Google font)--'));
		if (is_array($fontArray) && !empty($fontArray))
		{
			foreach ($fontArray as $fontvalue) {
				$this->_options[] = JHTML::_('select.option', $fontvalue, JText::_($fontvalue));
			}
		}
		$attributes = '';
		$attributes .= ' onchange="fontPreview(this.value);" style="width: 50%;"';
		
        // Render the HTML SELECT list.
        return JHTML::_('select.genericlist', $this->_options, $this->name, $attributes, 'value', 'text', $this->value, $this->id);
	}
}						