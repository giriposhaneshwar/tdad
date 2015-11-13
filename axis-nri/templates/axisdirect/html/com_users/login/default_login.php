<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
$this->form->reset( true );   
$this->form->loadFile( dirname(__FILE__) . DS . "forms" . DS . "login.xml");
?><section class="site-start">
    <div class="container_12">
 <div class="row clearfix">
                <div class="grid_12">
                    <div class="page-heading clearfix">
                    	<a href="<?php echo $this->baseurl; ?>/">Back</a>
                        <h3 class="page-left-hea">Login to Your Account</h3>
                    </div>
                </div>
            </div>
            
<div class="row box-start clearfix<?php echo $this->pageclass_sfx?>">
<div class="grid_6 dis-none">
                    <div class="two-col">
                        <div class="clearfix">
                            <h4 class="fourth-heading">Take a quick tour</h4>
                            <img src="images/video.jpg" class="mt10 plain-video">
                            <div class="mt30">
                                <h4>Quick links</h4>
                                <ul class="mt10 list-icon">
                                    <li><a href="javascript:void(0)">I have locked my Account</a></li>
                                    <li><a href="javascript:void(0)">I want to  know my Account opening status</a></li>
                                    <li><a href="javascript:void(0)">Immediate Assistance Happy to help you. our toll free number</a></li>
                                </ul>
                                <p class="contact-list">
                                    <i class="sprite-img phone-icon"></i>
                                    <span class="tool-no">
                                    <span class="toll-free-no"><a href="tel:18002100808">1800 - 210 - 0808</a></span>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	<div class="login-description">
	<?php endif; ?>

		<?php if ($this->params->get('logindescription_show') == 1) : ?>
			<?php echo $this->params->get('login_description'); ?>
		<?php endif; ?>

		<?php if (($this->params->get('login_image') != '')) :?>
			<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JTEXT::_('COM_USERS_LOGIN_IMAGE_ALT')?>"/>
		<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	</div>
	<?php endif; ?>
 <div class="grid_6">
                    <div class="two-col open-acc1">
                        <div class="reg-frm">
	<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-validate form-horizontal well">

		<fieldset><ul class="form-fileds">
         
			<?php foreach ($this->form->getFieldset('credentials') as $field) : 
			 
			?>
			 	<?php if (!$field->hidden) : 
				$label=str_replace("Username","Enter Username",$field->label);
				$label=str_replace("Password","Enter Password",$label);				
				$label=str_replace('*',"",$label);
				
				?>
                
                                        <li>
                                            <?php echo $label; ?>
                                            <p class="mandatory-field">
                                                
                                                <?php 
												
												echo $field->input; ?>               
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                          <?php if(strstr($field->label,"Password")){?>
                                            <a href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>" class="inp-desc-msg dir-link">
												<?php echo JText::_('COM_USERS_LOGIN_RESET'); ?></a>
                                             <?php   }
											 elseif(strstr($field->label,"Username"))
											 {
												 ?>
                                                 <a href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>" class="inp-desc-msg dir-link">
			<?php echo JText::_('COM_USERS_LOGIN_REMIND'); ?></a>
                                                 <?php
											 }
											 ?>
                                        </li>
                                        
                                      
					 
				<?php endif; ?>
			<?php endforeach; ?>
            <li class="selectme">
                                        <label>Your Date of Birth</label>
                                        <ul class="dob">
                                            <li>
                                                <select class="select full-width" data-placeholder="Day">
                                                    <option>DD</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                </select>
                                            </li>
                                            <li>
                                                <select class="select full-width" data-placeholder="Month">
                                                    <option>MM</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                </select>
                                            </li>
                                            <li>
                                                <select class="select full-width" data-placeholder="Year">
                                                    <option>YYYY</option>
                                                    <option>2001</option>
                                                    <option>2000</option>
                                                    <option>1999</option>
                                                    <option>1998</option>
                                                    <option>1997</option>
                                                    <option>1996</option>
                                                    <option>1995</option>
                                                    <option>1994</option>
                                                    <option>1993</option>
                                                    <option>1992</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </li>
            <li class="selectme">
                <label>Take me to</label>
                <select class="select">
                    <option>Choose Your option</option>
                    <option>My Portpolio</option>
                </select>
            </li>  
			<li>
				
					<button type="submit" class="primary-btn reg-btn primary-btn-link">
						<?php echo JText::_('JLOGIN'); ?>
					</button>
				<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
			</li>
            <?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
			<li>
				 
                <label for="cw" class="checkbox checked"><span class="icon"></span><span class="icon-to-fade"></span>	
                                            <input type="checkbox" name="" id="cw">
                                            <?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME') ?>
                                            </label>
                <input id="remember" type="checkbox" name="remember" class="inputbox" value="yes"/> 
			</li>
			<?php endif; ?>
			<?php echo JHtml::_('form.token'); ?>
		 </ul></fieldset>
       
	</form>
    
    </div>
    </div>
    </div>
</div>
<div>
	
</div>
</div>
</section>