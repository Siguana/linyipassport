<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_login
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<?php if ($type == 'logout') : ?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="form-login">
<?php if ($params->get('greeting')) : ?>
	<div class="hi-user">
	<?php if($params->get('name') == 0) : {
		echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('name')));
	} else : {
		echo JText::sprintf('MOD_LOGIN_HINAME', htmlspecialchars($user->get('username')));
	} endif; ?>
	</div>
<?php endif; ?>
	<div class="log-out">
		<input type="submit" name="Submit" class="submit-button button" value="<?php echo JText::_('JLOGOUT'); ?>" />
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.logout" />
		<input type="hidden" name="return" value="<?php echo $return; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
<?php else : ?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="form-login" >
	<?php if ($params->get('pretext')): ?>
		<div class="pretext">
		<p><?php echo $params->get('pretext'); ?></p>
		</div>
	<?php endif; ?>
	<fieldset class="input">
		<p id="form-login-username">
			<!--<label for="modlgn_username"><?php //echo JText::_('Username') ?></label>-->
			<span><input id="modlgn_username" type="text" onfocus="if(this.value=='Username') this.value='';" onblur="if(this.value=='') this.value='Username';" value="Username" name="username" class="inputbox" alt="username" size="18" /></span>
		</p>
		<p id="form-login-password">
			<!--<label for="modlgn_passwd"><?php //echo JText::_('Password') ?></label>-->
			<span><input id="modlgn_passwd" type="password" onfocus="if(this.value=='password') this.value='';" onblur="if(this.value=='') this.value='password';" value="password" name="passwd" class="inputbox" size="18" alt="password" /></span>
		</p>
		<!--
		<?php //if(JPluginHelper::isEnabled('system', 'remember')) : ?>
		<p id="form-login-remember">
			<label for="modlgn_remember"><?php //echo JText::_('Remember me') ?></label>
			<input id="modlgn_remember" type="checkbox" name="remember" class="inputbox" value="yes" alt="Remember Me" />
		</p>
		<?php //endif; ?>
		-->
		<input type="submit" name="Submit" class="submit-button button" value="<?php echo JText::_('JLOGIN') ?>" />
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.login" />
		<input type="hidden" name="return" value="<?php echo $return; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</fieldset>
	<ul>
		<?php
		$usersConfig = &JComponentHelper::getParams( 'com_users' );
		if ($usersConfig->get('allowUserRegistration')) : ?>
		<li class="register">
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
				<?php echo JText::_('MOD_LOGIN_REGISTER'); ?></a>
		</li>
		<?php endif; ?>
		<li class="forgot-password">
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
		</li>
		<li class="forgot-username">
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a>
		</li>
	</ul>
	<?php if ($params->get('posttext')): ?>
		<div class="posttext">
		<p><?php echo $params->get('posttext'); ?></p>
		</div>
	<?php endif; ?>
</form>
<?php endif; ?>