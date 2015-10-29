<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<!-- Currency Selector Module -->
<?php echo $text_before ?>
<div id="vm_currency">  
    <form id="selectform" class="cur_box"  action="<?php echo JURI::getInstance()->toString(); ?>" method="get" name="user_mode">
       <?php echo JHTML::_('select.genericlist', $currencies, 'virtuemart_currency_id', "class='inputbox' OnChange='user_mode.submit();return false;'", 'virtuemart_currency_id', 'currency_txt', $virtuemart_currency_id); ?>
    </form>
</div>
