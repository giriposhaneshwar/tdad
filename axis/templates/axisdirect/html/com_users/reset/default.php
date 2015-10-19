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
?>
<section class="site-start">
    <div class="container_12">
 <div class="row clearfix">
                <div class="grid_12">
                    <div class="page-heading clearfix">
                        <a href="<?php echo $this->baseurl; ?>/">Back</a>
                        <h3 class="page-left-hea">Request a new password for your account</h3>
                    </div>
                </div>
            </div>
<div class="reset row box-start clearfix<?php echo $this->pageclass_sfx?>">
 <div class="grid_6 dis-none">
                    <div class="two-col">
                        <div class="clearfix">
                            <h4>Take a quick tour</h4>
                            <img src="images/video.jpg" class="mt10 plain-video">
                            <div class="mt30">
                                <h6 class="quicktour-bor"><i class="sprite-img tour-icon tour-email"></i>Email Us</h6>
                                <ul class="tour-list">
                                    <li>
                                        <label>RI</label>
                                        <p class="tour-info"><a href="mailto:helpdesk@axisdirect.in">helpdesk@axisdirect.in</a></p>
                                    </li>
                                    <li>
                                        <label>NRI</label>
                                        <p><a href="mailto:nri@axisdirect.in">nri@axisdirect.in</a></p>
                                    </li>
                                </ul>
                                <h6 class="mt20 quicktour-bor"><i class="sprite-img tour-icon tour-phone"></i>Contact Us</h6>
                                <ul class="tour-list">
                                    <li>
                                        <label>RI</label>
                                        <p class="tour-info"><a href="tel:1800-210-0808">1800-210-0808</a> / <a href="tel:022-61480808">022-61480808</a></p>
                                    </li>
                                    <li>
                                        <label>NRI</label>
                                        <p><a href="tel:91226148089">+91-22-6148089</a></p>
                                    </li>
                                </ul>
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
<div class="grid_6">
                    <div class="two-col open-acc1">
                        <div class="reg-frm mob-down">
	<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=reset.request'); ?>" method="post" class="form-validate form-horizontal well">
		<?php /*?><?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
			<fieldset>
				<p><?php echo JText::_($fieldset->label); ?></p>
				<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field) : ?>
					<div class="control-group">
						<div class="control-label">
							<?php echo $field->label; ?>
						</div>
						<div class="controls">
							<?php echo $field->input; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</fieldset>
		<?php endforeach; ?>

		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary validate"><?php echo JText::_('JSUBMIT'); ?></button>
			</div>
		</div><?php */?>
       
                            <div class="forget-email-block1">
                                <ul class="form-fileds">
                                    <li>
                                        <label>Enter Username</label>
                                        <p class="mandatory-field">
                                            <input type="text" class="inp-filed">                
                                            <i class="mandatory-inp">*</i>
                                        </p>
                                    </li>
                                    <li class="selectme">
                                        <label>Choose your preferable option to reset</label>
                                        <select class="select" id="forget-id">
                                            <option>Select</option>
                                            <option value="usedebit">Use Debit card to reset immediately</option>
                                            <option value="resetpwd">Receive a reset password link via email</option>
                                            <option value="otpreg">Send OTP to my registered Mobile No.</option>
                                        </select>
                                    </li>
                                </ul>
                                <!-- Debit card -->
                                <div id="usedebit" class="resetpwd" style="display:none">
                                    <ul class="form-fileds">
                                        <li class="clearfix">
                                            <label>ATM Pin</label>
                                            <p class="mandatory-field small-inp">
                                                <input type="text" class="inp-filed">                
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                        </li>
                                        <li class="clearfix">
                                            <label>Valid Upto</label>
                                            <div class="reg-state valid-year">
                                                <select class="select" id="help-about" data-placeholder="Month">
                                                    <option>Month</option>
                                                    <option>May</option>
                                                </select>
                                            </div>
                                            <div class="reg-state valid-year">
                                                <select class="select" id="help-about" data-placeholder="Month">
                                                    <option>Year</option>
                                                    <option>2015</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="clearfix">
                                                <label>Enter CAPTCHA</label>
                                                <p class="mandatory-field captcha-inp">
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
                                            <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link">Proceed</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- reset password -->
                                <div id="resetpwd" class="resetpwd" style="display:none;">
                                    <ul class="form-fileds">
                                        <li>
                                            <label>Your Date of Birth</label>
                                            <ul class="dob">
                                                <li>
                                                    <select class="select">
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
                                                    <select class="select">
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
                                                    <select class="select">
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
                                        <li>
                                            <span class="wiz-choose">
                                            <label for="bankaccnum" class="radio">
                                            <input type="radio" id="bankaccnum" name="paymentradio" checked>
                                            Bank account number
    
                                            </label>
                                            </span>
                                            <span class="wiz-choose">
                                            <label for="axisdirectnum" class="radio">
                                            <input type="radio" id="axisdirectnum" name="paymentradio" >
                                            Axis direct account number
                                            </label>
                                            </span>
                                            <p class="mandatory-field">
                                                <input type="text" class="inp-filed ">
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                        </li>
                                        <li>
                                            <label>Enter CAPTCHA</label>
                                            <p class="mandatory-field captcha-inp">
                                                <input type="text" class="inp-filed">
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                            <p class="captcha-img">
                                                <span class="cap-values"></span>
                                                <i class="sprite-img captcha-reload"></i>
                                            </p>
                                            <span class="inp-desc-msg">Image Charectors are case sensitive</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link forget-email1">Proceed</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Send OTP -->
                                <div id="otpreg" class="resetpwd" style="display:none">
                                    <ul class="form-fileds">
                                        <li>
                                            <label>Your mobile number</label>
                                            <p>99999999</p>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Send OTP</a>
                                        </li>
                                        <li>
                                            <label>Enter OTP</label>
                                            <p class="mandatory-field">
                                                <input type="text" class="inp-filed ">
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="primary-btn primary-btn-link">Change Password</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="forget-email-block2">
                                 <ul class="form-fileds">
                                    <li>                    
                                        <label>New Password</label>
                                        <p class="mandatory-field">
                                            <input type="password" class="inp-filed">
                                            <i class="mandatory-inp">*</i>
                                        </p>
                                    </li>
                                    <li>
                                        <ul class="reset-pwd-rules">
                                            <li>The password should be between 6-12 characters and contain at least one: Alphabet,Number, Special Character. The special characters that can be used are @ # $ % ^ & * ! ( ).</li>
                                            <li>The password cannot be same as login id and it cannot match with last 3 passwords.</li>
                                            <li>The password will automatically expire after 90 days. You will have to change this password compulsorily every 90 calendar days.</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <label>Confirm Password</label>
                                        <p class="mandatory-field">
                                            <input type="password" class="inp-filed">
                                            <i class="mandatory-inp">*</i>
                                        </p>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link">Done</a>
                                    </li>
                                </ul>
                            </div>
                    	
		<?php echo JHtml::_('form.token'); ?>
	</form>
    </div>
    </div>
    </div>
</div>
</div>
</section>