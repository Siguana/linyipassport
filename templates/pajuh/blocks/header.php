<?php
/**
 * ------------------------------------------------------------------------
 * JA T3v2 System Plugin for J25 & J30
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites: http://www.joomlart.com - http://www.joomlancers.com
 * ------------------------------------------------------------------------
 */

// No direct access
defined('_JEXEC') or die;
?>
<?php
$app =  JFactory::getApplication();
$siteName = $app->getCfg('sitename');
if ($this->getParam('logoType', 'image')=='image'): ?>
<h1 class="logo">
    <a href="<?php JURI::base(true) ?>" title="<?php echo $siteName; ?>"><span><?php echo $siteName; ?></span></a>
</h1>
<?php else:
$logoText = (trim($this->getParam('logoText'))=='') ? $siteName : JText::_(trim($this->getParam('logoText')));
$sloganText = JText::_(trim($this->getParam('sloganText'))); ?>
<div class="logo-text">
    <h1><a href="<?php JURI::base(true) ?>" title="<?php echo $siteName; ?>"><span><?php echo $logoText; ?></span></a></h1>
    <p class="site-slogan"><?php echo $sloganText;?></p>
</div>
<?php endif; ?>

<?php if($this->countModules('login')) :?>
<div id="userlogin">
  	<jdoc:include type="modules" name="login" />
</div>
<?php endif; ?>
  
<?php if($this->countModules('topnav')) :?>
<div id="ja-topnav">
 	<jdoc:include type="modules" name="topnav" />
</div>
<?php endif; ?>

<?php if($this->countModules('cart')) :?>
    <div id="mycart">
	   	<a href="index.php?option=com_virtuemart&amp;view=cart" id="mycart-button">
           	<span class="circle-in-cart"></span>
           	<?php echo JText::_('TPL_LANG_MY_CART'); ?> : 
            <strong>0</strong>
            <?php echo JText::_('TPL_LANG_CART_ITEM'); ?></a> 
    </div>
<?php endif; ?>		

<?php if($this->countModules('cart')) : ?>	
    <div id="pop-up-overlay"></div>
<?php endif; ?>
