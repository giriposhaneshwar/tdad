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
JHtml::_('behavior.formvalidator');
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
$this->form->reset( true );   
$this->form->loadFile( dirname(__FILE__) . DS . "forms" . DS . "registration.xml");
?>
<section class="site-start">
    <div class="container_12">
<div class="sucess-msg def-msg-none">
                <p class="sucess-main">Your request hasbeen registered sucessfully.</p>
                <p class="sucess-sub">Our executive will get in touch with you soon</p>
            </div>
            <div class="row clearfix">
                <div class="grid_12">
                    <div class="page-heading clearfix">
                        <a href="<?php echo $this->baseurl; ?>/">Back</a>
                        <h3 class="page-left-hea">Open An Account With Us</h3>
                    </div>
                </div>
            </div>
<div class="registration row box-start clearfix<?php echo $this->pageclass_sfx?>">
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
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
<div class="grid_6">
                    <div class="two-col open-acc1">
                        <div class="reg-frm">
	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
		<?php /*?><?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
			<?php $fields = $this->form->getFieldset($fieldset->name);?>
			<?php if (count($fields)):?>
				<fieldset>
				<?php if (isset($fieldset->label)):// If the fieldset has a label set, display it as the legend.?>
					<legend><?php echo JText::_($fieldset->label);?></legend>
				<?php endif;?>
				<?php foreach ($fields as $field) :// Iterate through the fields in the set and display them.?>
					<?php if ($field->hidden):// If the field is hidden, just display the input.?>
						<?php echo $field->input;?>
					<?php else:?>
						<div class="control-group">
							<div class="control-label">
							<?php echo $field->label; ?>
							<?php if (!$field->required && $field->type != 'Spacer') : ?>
								<span class="optional"><?php echo JText::_('COM_USERS_OPTIONAL');?></span>
							<?php endif; ?>
							</div>
							<div class="controls">
								<?php echo $field->input;?>
							</div>
						</div>
					<?php endif;?>
				<?php endforeach;?>
				</fieldset>
			<?php endif;?>
		<?php endforeach;?>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JREGISTER');?></button>
				<a class="btn" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
			</div>
		</div><?php */?>
        
                                <div class="forget-email-block1">
                                    <ul class="form-fileds">
                                        <li class="selectme">
                                            <label>Select Your Account Type</label>
                                            <select class="select">
                                                <option>RI</option>
                                                <option>NRI</option>
                                            </select>
                                        </li>
                                        <?php foreach ($this->form->getFieldsets() as $fieldset): // Iterate through the form fieldsets and display each one.?>
			<?php $fields = $this->form->getFieldset($fieldset->name);?>
                                        <?php foreach ($fields as $field) :// Iterate through the fields in the set and display them.?>
					<?php if ($field->hidden):// If the field is hidden, just display the input.?>
						<?php echo $field->input;?>
					<?php else:?>
                    <?php
				$label=str_replace("Name","Enter Your Full Name",$field->label);
				$label=str_replace("Email Address","Email Address",$label);				
				$label=str_replace('*',"",$label);
				
				?>
						<li>
							<?php echo $label; ?>
                                            <p class="mandatory-field">
								<?php echo $field->input;?>
                                <i class="mandatory-inp">*</i>
                                            </p>
                         </li>
					<?php endif;?>
				<?php endforeach;?>
               <?php endforeach;?>                         <?php /*?><li>
                                            <label>Enter Your Full Name</label>
                                            <p class="mandatory-field">
                                                <input type="text" class="inp-filed">
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                        </li>
                                        <!--<li class="error-msg">-->
                                        <li>
                                            <label>Email Address</label>
                                            <p class="mandatory-field">
                                                <input type="text" class="inp-filed">                
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                           <!-- <span>Please write valid email address</span>-->
                                        </li><?php */?>
                                        <li>
                                            <label>Contact</label>
                                            <div class="clearfix">
                                                <div class="small-inp">
                                                    <input type="text" class="inp-filed std-code">
                                                    <span class="inp-desc-msg">STD</span>
                                                </div>
                                                <div class="std-inp">
                                                    <input type="text" class="inp-filed">
                                                    <span class="inp-desc-msg">Mobile</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="selectme">
                                            <label>State</label>
                                            <select class="select" id="help-about" data-placeholder="Month">
                                                <option>Select Your State</option>
                                                <option>Andhara prdesh</option>
                                                <option>Telangana</option>
                                            </select>
                                        </li>
                                        <li class="selectme">
                                            <label>City</label>
                                            <select class="select" id="help-about" data-placeholder="Month">
                                                <option>Select Your City</option>
                                                <option>Hyderabad</option>
                                            </select>
                                        </li>
                                        <li>
                                            <div class="clearfix">
                                                <label>Enter CAPTCHA</label>
                                                <p class="reg-inp captcha-inp mandatory-field">
                                                    <input type="text" class="inp-filed">                
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                                <p class="captcha-img">
                                                    <span class="cap-values"></span>
                                                    <i class="sprite-img captcha-reload"></i>
                                                </p>
                                            </div>
                                            <span class="inp-desc-msg">Image Charectors are case sensitive</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link forget-email1">Submit</a>
                                        </li>
                                        <li>
                                            <label for="cw" class="checkbox">	
                                            <input type="checkbox" name="" id="cw">
                                            I authorize Axis Securities to email me on the above mentioned E-Mail ID to explain the product features and other details.
                                            </label>
                                        </li>
                                       </ul>
                                    <ul class="already-reg">
                                        <li>
                                            <span class="already-reg-cnt">Alredy Registered?</span>
                                            <a href="<?php echo JRoute::_('index.php?option=com_users&view=login'); ?>" class="login-acc">Login to your Account <i class="sprite-img reg-icon"></i></a>
                                        </li>
                                        <li>
                                            <span class="already-reg-cnt">Not yet convinced</span>
                                            <a href="<?php echo JRoute::_('index.php?option=com_users&view=registration&layout=opentrialaccount'); ?>" class="login-acc">Open a 60 daysfree trialaccount <i class="sprite-img reg-icon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="forget-email-block2">
                                    <div class="inp-labels">
                                     <ul class="form-fileds">
                                        <li class="selectme">
                                            <div class="reg-otp1">
                                                <label>Enter OTP</label>
                                                <p class="mandatory-field reg-inp">
                                                    <input type="text" class="inp-filed">                
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </div>
                                            <div class="reg-otp2">
                                                <a href="javascript:void(0)">Resend OTP</a>
                                                <span class="otp-msg">Wait for 60 seconds</span>
                                            </div>
                                         </li>
                                         <li>
                                            <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link forget-email1 sucess-alert-btn">Submit</a>
                                         </li>
                                       </ul>
                                    </div>
                                </div>
                            
		<?php echo JHtml::_('form.token');?>
	</form>
    </div>
    </div>
    </div>
</div>
</div>
</section>