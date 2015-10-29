<?php
// no direct access
defined('_JEXEC') or die;
?>
<?php
JHtml::_('behavior.keepalive');
$app = JFactory::getApplication();
include_once(dirname(__FILE__).DS.'login.js.php');
?>
<?php if ($type == 'logout') : ?>
    <form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="sj_login_form">
    <ul class="sj-login-regis">
    <?php if ($params->get('greeting')) : ?>
        <li class="sj-logout">
	    	<span>
				<span>
			        <?php if($params->get('name') == 0) : {
			            echo JText::sprintf('MOD_LOGIN_HINAME', $user->get('name'));
			        } else : {
			            echo JText::sprintf('MOD_LOGIN_HINAME', $user->get('username'));
			        } endif; ?>
			    </span>
	        </span>
	   		 <?php endif; ?>
            <a href="javascript:;" name="Submit" class="logout-switch" onclick="$('sj_login_form').submit();">
            	<span>
            		<?php echo JText::_('JLOGOUT'); ?>
            	</span>
            </a> 
            <input type="hidden" name="option" value="com_users" />
            <input type="hidden" name="task" value="user.logout" />
            <input type="hidden" name="return" value="<?php echo $return; ?>" />
        <?php echo JHtml::_('form.token'); ?>
        </li>
    </ul>
    </form>
<?php else : ?>
<ul class="mobi-sj-login-regis" style="display: none">
	<li class="sj-login">
		<a 
                class="login-switch text-font"
                href="<?php echo JRoute::_('index.php?option=com_users&view=login');?>" 
                title="<?php JText::_('Login');?>">
                <?php echo JText::_('JLOGIN'); ?>
        </a>
    </li>
	<li class="sj-register">
        <a 
                class="register-switch text-font" 
                href="<?php echo JRoute::_("index.php?option=com_users&view=registration");?>">
            	<?php echo JText::_('JREGISTER');?>
        </a>
	</li>
</ul>
<ul class="sj-login-regis">
	<li class="sj-login">
		<a 
                class="login-switch text-font"
                onclick="return false;"
                href="<?php echo JRoute::_('index.php?option=com_users&view=login');?>" 
                title="<?php JText::_('Login');?>">
        	<span class="title-link"><?php echo JText::_('JLOGIN'); ?><span class="arrow-down"></span></span>
        </a>
	   	<div id="sj_login_box" class="show-box" style="display:none;">
	   		<div class="sj_box_inner">
	        	<div class="sj_box_title">
	        		<h3><?php //echo JText::_('SINGIN'); ?>Member Account</h3>
	        	</div>
	        	<div class="sj_box_content">
		            <form id="login_form" action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post">
		                <?php if ($params->get('pretext')): ?>
		                <div class="pretext">
		                    <p><?php echo $params->get('pretext'); ?></p>
		                </div>
		                <?php endif; ?>
		                <fieldset class="userdata">
		    				<div class="login_input">
		    					<p>
				                    <label for="modlgn-username" class="sj-login-user">
				                        <?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>
				                        <input id="modlgn-username" type="text" name="username" class="inputbox"  size="25" onfocus="if(this.value!='') this.value='';" />
				                    </label>
								</p>
								<p>
				                    <label for="modlgn-passwd" class="sj-login-password">
				                        <?php echo JText::_('JGLOBAL_PASSWORD') ?>
				                        <input id="modlgn-passwd" type="password" name="password" class="inputbox" size="25"  onfocus="if(this.value!='') this.value='';" />
				                    </label>
								</p>
		    				</div>
		    				<div class="login_button">
		    					<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
				                    <p id="form_login_remember">
				                        <input id="modlgn-remember" type="checkbox" name="remember" class="checkbox" value="yes"/>
				                        <label for="modlgn-remember"><?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?></label>
				                    </p>
				                 <?php endif; ?>
								<input type="submit" name="Submit" class="button button1" value="<?php echo JText::_('JLOGIN') ?>" />
		    				</div>
		                    <input type="hidden" name="option" value="com_users" />
		                    <input type="hidden" name="task" value="user.login" />
		                    <input type="hidden" name="return" value="<?php echo $return; ?>" />
		                    <?php echo JHtml::_('form.token'); ?>
		                </fieldset>
		    			<div class="more_login sj-login-links clearfix">
	                        <a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
	                        <?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
	                        <a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
	                        <?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a>
		                </div>
		                <?php if ($params->get('posttext')): ?>
		                <div class="posttext">
		                    <p><?php echo $params->get('posttext'); ?></p>
		                </div>
		                <?php endif; ?>
		            </form>
		    	</div>
		    </div>
        </div>
	</li>
<?php
	$config     = &JFactory::getConfig();
	
	$option = JRequest::getCmd('option');
	$task = JRequest::getCmd('task');
	if($option!='com_user' && $task != 'register') { ?>
	<li class="sj-register">
        <a 
                class="register-switch text-font" 
                onclick="return false;"
                href="<?php echo JRoute::_("index.php?option=com_users&view=registration");?>">
            <span class="title-link"><?php echo JText::_('JREGISTER');?><span class="arrow-down"></span></span>
        </a>
		<script type="text/javascript" src="<?php echo JURI::base();?>media/system/js/validate.js"></script>
        <div id="sj_register_box" class="show-box" style="display:none">
        	<div class="inner">
		   		<div class="sj_box_inner">
		        	<div class="sj_box_title">
		        		<h3><?php echo JText::_('JREGISTER');?></h3>
		        	</div>
		        	<div class="sj_box_content">
			            <script type="text/javascript">
			            <!--
			                window.addEvent('domready', function(){
			                    document.formvalidator.setHandler('passverify', function (value) { return ($('password').value == value); }	);
			                });
			            // -->
			            </script>         
			            <form id="member_registration" class="form-validate" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post">
			                <div class="col-left">
				                <span class="note">
				                    <?php echo JText::_("ALL_FIELDS_ARE_REQUIRED"); ?>
				            	</span>
			                </div>
			                <div class="col-right">
								<label class="required sj-field-regis" for="jform_name" id="namemsg" title="Name&lt;br&gt;Enter your full name">
				                    <span>
				                        <?php echo JText::_( 'YT_COM_USERS_REGISTER_NAME_LABEL' ); ?>
				                    </span>				
				                    <input type="text" size="25" class="inputbox required" value="" id="jform_name" name="jform[name]" onfocus="if(this.value!='') this.value='';"/><span class="star">*</span>
				                </label>
				                <label title="" class="required sj-field-regis" for="jform_username" id="usernamemsg">
				                    <span>
				                        <?php echo JText::_( 'YT_COM_USERS_REGISTER_USERNAME_LABEL' ); ?>
				                    </span>
				                    <input type="text" size="25" class="inputbox validate-username required" value="" id="jform_username" name="jform[username]" onfocus="if(this.value!='') this.value='';"/><span class="star">*</span>
				                </label>
				                <label title="" class="required sj-field-regis" for="jform_password1" id="pwmsg">
				                    <span>
				                        <?php echo JText::_( 'YT_COM_USERS_REGISTER_PASSWORD1_LABEL' ); ?>
				                    </span>
				                    <input type="password" size="25" class="inputbox validate-password required" value="" id="jform_password1" name="jform[password1]" onfocus="if(this.value!='') this.value='';"/><span class="star">*</span>                     
				                </label>
				                <label title="" class="required sj-field-regis" for="jform_password2" id="pw2msg">
				                    <span>
				                        <?php echo JText::_( 'YT_COM_USERS_REGISTER_PASSWORD2_LABEL' ); ?>
				                    </span>
				                    <input type="password" size="25" class="inputbox validate-password required" value="" id="jform_password2" name="jform[password2]" onfocus="if(this.value!='') this.value='';"/><span class="star">*</span>
				                </label>    
				                <label title="" class="required sj-field-regis" for="jform_email1" id="emailmsg">
				                    <span>
				                        <?php echo JText::_( 'YT_COM_USERS_REGISTER_EMAIL1_LABEL' ); ?>
				                    </span>
				                    <input type="text" size="25" class="inputbox validate-email required" value="" id="jform_email1" name="jform[email1]" onfocus="if(this.value!='') this.value='';"/><span class="star">*</span>
				                </label>
				                <label title="" class="required sj-field-regis" for="jform_email2" id="email2msg">
				                    <span>
				                        <?php echo JText::_( 'YT_COM_USERS_REGISTER_EMAIL2_LABEL'); ?>
				                    </span>
				                    <input type="text" size="25" class="inputbox validate-email required" value="" id="jform_email2" name="jform[email2]" onfocus="if(this.value!='') this.value='';"/><span class="star">*</span>
				                               
				                </label>

				            	<input type="submit" class="validate button" value="<?php echo JText::_( 'YT_COM_USERS_REGISTER_SUBMIT_BOTTOM'); ?>"  />
			                </div>

			                <input type="hidden" name="option" value="com_users" />
			                <input type="hidden" name="task" value="registration.register" />
			                <?php echo JHtml::_('form.token');?>
			            </form>
			     	</div>
			     </div>
			</div>
    	</div>
    </li>
</ul>
<?php 
	} // End $option!='com_user' && $task != 'register'
endif; // End type=login(not logout)
?>