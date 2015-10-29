<?php
/**
 * @version			$Id: OtModulesRenderer.php 1.0 May 2012 19:02:38Z OmegaTheme $
 * @package			OmegaTheme Joomla Template
 * @author				OmegaTheme (services@omegatheme.com)
 * @link 					http://omegatheme.com
 * @copyright		Copyright (C) 2012 OmegaTheme
 * @license				GNU/GPL V2
 * @description	This file contains custom class for modules rendering. 
 *				Overide joomla core class JDocumentRenderer -> JDocumentRendererModules
 *				Add ability of custom layout
 *
 *				This is a cut-off version for a simple and clear.
 *				For common using.
**/

class JDocumentRendererOtModules extends JDocumentRenderer
{

	/**
	 * function render($position, $params = array(), $content = null);
	 *
	 * Overide joomla core function: renderer() in JDocumentRenderer class
	 * Renders a script and returns the results as a string
	 *
	 * @access public
	 * @param string 	$name		The name of the element to render
	 * @param array 	$array		Array of values
	 * @param string 	$content	Override the output of the renderer
	 * @return string	Overrided output of module
	 * @call (none)
	 */
	function render($name, $params = array(), $content = null)
	{

		// init vars
		// Import JDocumentRendererModules class
		$renderer =& $this->_doc->loadRenderer('module');
		// get all modules in element name(position) $name
		$modules  =& JModuleHelper::getModules($name);
		$count    = count($modules);
		$contents = '';
		foreach ($modules as $index => $module)
		{
			// set additional params
			$params['count'] = $count;
			$params['order'] = $index + 1;
			$params['first'] = $params['order'] == 1;
			$params['last'] = $params['order'] == $count;

			$output = $renderer->render($module, $params, $content);
			// wrap module output by a div element if needed (call by 'wrapper' in jdoc:include command)
			if (isset($params['wrapper']) && $params['wrapper']) {
				$output = JDocumentRendererOtModules::wrapping($output, $params);
			}
			$contents .= $output;
		}
		return $contents;
	}
	
	/**
	 * function wrapping($content, $params = array());
	 *
	 * wrap module output by a div element if needed (call by 'wrapper' in jdoc:include command)
	 * @param string 	$content	The module_content will be wrapped
	 * @param array 	$array		Array of values
	 * @return string	The output of the script
	 * @call	wrapping() <- applyLayout()
	 */
	function wrapping($content, $params = array())
	{	
		$layout = JDocumentRendererOtModules::applyLayout(trim($params['layout']) ? trim($params['layout']) : null, $params['boxlayout']);
		
		//echo '<pre>'; var_dump($params['boxlayout']); die(); echo '</pre>';
		
		$class  = array($params['wrapper']);

		// apply width by number of modules per position and preset proportion
		if (isset($layout[$params['count']][$params['order'] - 1])) {
			$class[] = 'width'.$layout[$params['count']][$params['order'] - 1];
		}

		// which is separator?
		if (!$params['last']) {
			$class[] = 'separator';
		}

		return sprintf('<div class="%s">%s</div>', implode(' ', $class), $content);
	}
	
	/**
	 * function applyLayout($name);
	 *
	 * apply custom layout class (width)
	 * @param string 	$name	The name of layout()
	 * @return array	The output of the script
	 * @call	none
	 */
	 
	function applyLayout($name, $boxlayout)
	{
		
		switch ($name)
		{
			case 'custom' :
				$layout_boxes = explode(";", $boxlayout);
				$layout = array();
				foreach ($layout_boxes as $idx => $layout_box)
				{
					if (trim($layout_box) !=""){
						$layout[$idx+1] = explode(",", trim(str_replace(array(" ", "(", ")"), array("", "", ""), $layout_box)));
					}
				}
				
			break;
			
			default:
				$layout = array(
						1 => array('100'),
						2 => array('50', '50'),
						3 => array('33', '33', '33'),
						4 => array('25', '25', '25', '25'),
						5 => array('20', '20', '20', '20', '20'));
				break;
		}
		
		return $layout;
	}
}
/* end of class JDocumentRendererOtModules */