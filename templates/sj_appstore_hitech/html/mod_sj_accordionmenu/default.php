<?php
/**
 * @package SJ Accordion Menu
 * @version 2.5
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2012 YouTech Company. All Rights Reserved.
 * @author YouTech Company http://www.smartaddons.com
 * 
 */
    defined('_JEXEC') or die;
    @ob_start();
    include JModuleHelper::getLayoutPath($module->module, 'styles');
    $stylesheet = @ob_get_contents();
    @ob_end_clean();
    $docs = JFactory::getDocument();
    $docs->addStyleDeclaration($stylesheet );

	$app = JFactory::getApplication();
	$templateDir = JURI::base() . 'templates/' . $app->getTemplate();
	
    $ImageUrl = $templateDir.'/html/mod_sj_accordionmenu/images';
	  $bulletImage = $ImageUrl."/button.png";
	  $bulletActive = $ImageUrl."/button-active.png";
	
	@ob_start();
    include "accordionmenu.js.php";
    $javascript = @ob_get_contents();
    @ob_end_clean();
    $docs->addCustomTag($javascript);
	?>

	<?php if(isset($list) && count($list)){
		$countUlOpened = 0;
		$level = 1;
				
		for($i = 0; $i < count($list); $i++){
			if($i == 0){?>
			     <ul class='sj-accordion-menu level1' id='sj_accordion_menu_<?php echo $module->id;?>'>
			<?php	$countUlOpened++;
			}
			$class = "class='level".$level;
			if($list[$i]->id == $itemID){
				$class.= " current";
				$class.= " opened";
			}
			$class .= "'";

			$li = "<li ".$class.">";
			$li .= "<div class='sj-item-wrapper'>";
			if($showBullet == "true"){
				$divMenuButton = "<div class='sj-menu-button'>";
				if($i < count($list)-1 && $list[$i+1]->level > $list[$i]->level){
					//$divMenuButton.="<span>+</span>";
					$divMenuButton.="<img class='sj-menuicon' alt='' src='".$bulletImage."'/>";
				}
				$divMenuButton .= "</div>";
				$li.=$divMenuButton;
			}
			$style = "";
			$target = "";
			switch ($list[$i]->browserNav) :
				case 1:
					$target=" target='_blank' ";
					break;
				case 2:
					$target = " onclick=\"window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;\"";
					break;
			endswitch;
			$divLink = "<div class='sj-menu-link' ".$style."><a class='".preg_replace('/[^a-zA-Z0-9]/','',$list[$i]->title)."' ".$target." href='".$list[$i]->flink."'>".$list[$i]->title."</a></div>";
			$li.=$divLink;
			$li.= "</div>";
			echo $li;
			if($i < count($list)-1  && $list[$i+1]->level > $list[$i]->level ){
				echo "<div class='sj-ul-wrapper'><ul class='level".($level+1)."'>";
				$countUlOpened++;
				$level++;
				
			}
			if($i < count($list)-1 && $list[$i+1]->level < $list[$i]->level ){
				echo "</li></ul></div></li>";
				$countUlOpened--;
				$level--;
				for($j = 1; $j < $list[$i]->level - $list[$i+1]->level; $j++){
					echo "</ul></div></li>";
					$countUlOpened--;
					$level--;
				}
			}
			if( ($i < count($list)-1 && $list[$i+1]->level == $list[$i]->level) || $i == count($list)-1){
				echo "</li>";
			}
		}
		for($i=0; $i< $countUlOpened - 1; $i++){
			echo "</ul></div></li>";
		}
		echo "</ul>";
	}
?>


