<ul>
<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php if($type == 'logout') : ?>
<form>
<?php if ($params->get('greeting')) : ?>
<li><span class="logout-switch"><?php echo JText::sprintf( 'MOD_LOGIN_HINAME', $user->get('name') ); ?></span>
		<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGOUT'); ?>" />
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.logout" />
		<input type="hidden" name="return" value="<?php echo $return; ?>" />
		<?php echo JHtml::_('form.token'); ?>		
	</li></form>
<?php endif; ?>

<?php else : ?>
	<li>
		<a class="login-switch" href="<?php echo JRoute::_('index.php?option=com_users&view=login');?>" onclick="showBox('user-login','mod_login_username',this, window.event || event);return false;" title="<?php JText::_('Login'); ?> Login"><span>Login</span></a>
	
	<!--LOGIN FORM content-->
	<div id="user-login"><div class="main-inner1">
	<?php if(JPluginHelper::isEnabled('authentication', 'openid')) : ?>
        <?php JHTML::_('script', 'openid.js'); ?>
    <?php endif; ?>
    <form action="<?php echo JRoute::_( 'index.php', true, $params->get('usesecure')); ?>" method="post" name="login" id="login-form" >
        <?php echo $params->get('pretext'); ?>
    <fieldset class="userdata">
	<p id="form-login-username">
		<label for="modlgn-username"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?></label>
		<input id="modlgn-username" type="text" name="username" class="inputbox"  size="18" />
	</p>
	<p id="form-login-password">
		<label for="modlgn-passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
		<input id="modlgn-passwd" type="password" name="password" class="inputbox" size="18"  />
	</p>
    	<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGIN') ?>" />
	<input type="hidden" name="option" value="com_users" />
	<input type="hidden" name="task" value="user.login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<?php echo JHtml::_('form.token'); ?>
	<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
	<p id="form-login-remember">
		<label for="modlgn-remember"><?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?></label>
		<input id="modlgn-remember" type="checkbox" name="remember" value="yes"/>
	</p>
	<?php endif; ?>

    </fieldset>
	<ul>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
		</li>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
			<?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a>
		</li>
		<?php
		$usersConfig = JComponentHelper::getParams('com_users');
		if ($usersConfig->get('allowUserRegistration')) : ?>
		<li>
			<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>">
				<?php echo JText::_('MOD_LOGIN_REGISTER'); ?></a>
		</li>
		<?php endif; ?>
	</ul>
                
        <?php echo $params->get('posttext'); ?>
    
        <input type="hidden" name="option" value="com_users" />
        <input type="hidden" name="task" value="user.login" />
        <input type="hidden" name="return" value="<?php echo $return; ?>" />
        <?php echo JHTML::_( 'form.token' ); ?>
    </form>
    </div></div>
		
	</li>
	<?php 
				$option = JRequest::getCmd('option');
				$task = JRequest::getCmd('task');
				if($option!='com_user' && $task != 'registration') { ?>
	<li>
		<a class="register-switch" href="<?php echo JRoute::_("index.php?option=com_users&view=registration");?>">
			<span><?php echo JText::_('Register');?></span>
		</a>

	</li>
	<?php } ?>
		<!--LOgIN FORM content-->
<?php endif; ?>
</ul>