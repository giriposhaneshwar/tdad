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
$this->form->loadFile( dirname(__FILE__) . DS . "forms" . DS . "remind.xml");
?>
<section class="site-start">
    <div class="container_12">
<div class="sucess-msg def-msg-none">
				<p>We have sent your username to your registered email id:<a href="mailto:sameerpolekr.axis@gmail.com">sameerpolekr.axis@gmail.com</a></p>
				<p class="mt10">In case, you have also forgotten your password please <a href="javascript:void(0)">clickhere</a> o regenerate your password after your receive your username</p>
			</div>
<div class="row clearfix">
                <div class="grid_12">
                    <div class="page-heading clearfix">
                        <a href="<?php echo $this->baseurl; ?>/">Back</a>
                        <h3 class="page-left-hea">Retrieve your Username</h3>
                    </div>
                </div>
            </div>
<div class="remind row box-start clearfix<?php echo $this->pageclass_sfx?>">
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
<div class="grid_6 ">
                    <div class="two-col open-acc1">
                        <div class="reg-frm mob-down">
	<form id="user-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=remind.remind'); ?>" method="post" class="form-validate form-horizontal well">
		<?php /*?><?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
		<fieldset>
			<p><?php echo JText::_($fieldset->label); ?></p>
			<?php foreach ($this->form->getFieldset($fieldset->name) as $name => $field) : ?>
				<ul class="form-fileds mt20">
					<li class="selectme">
						<?php echo $field->label; ?>
					</li>
					<li >
						<?php echo $field->input; ?>
					</li>
				</div>
			<?php endforeach; ?>
		</fieldset>
		<?php endforeach; ?>
        <li>
				<button type="submit" class="primary-btn primary-btn-link forget-email1 validate "><?php echo JText::_('JSUBMIT'); ?></button>
			</li>
        </ul><?php */?>
		<div class="forget-email-block1">
                                    <ul class="form-fileds mt20">
                                        <li class="selectme">
                                            <label>Choose your preferable option to reset</label>
                                            <select class="select" id="forget-id">
                                                <option>Choose your option</option>
                                                <option value="usedebit">Use Debit card to retrieve immediately</option>
                                                <option value="resetpwd">Retrieve your Username through email</option>
                                            </select>
                                        </li>
                                    </ul>
                                    <!-- Debit card -->
                                    <div id="usedebit" class="resetpwd" style="display:none">
                                        <ul class="form-fileds">
                                            <li class="clearfix">
                                                <label>PAN Details</label>
                                                <p class="mandatory-field">
                                                    <input type="text" class="inp-filed">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </li>
                                            <li class="clearfix">
                                                <label>Your 16 Digit Debit Card No.</label>
                                                <p class="clearfix">
                                                    <input type="text" class="debit-card" maxlength="4">
                                                    <input type="text" class="debit-card" maxlength="4">
                                                    <input type="text" class="debit-card" maxlength="4">
                                                    <input type="text" class="debit-card" maxlength="4">
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
                                                    <p class="captcha-inp mandatory-field">
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
                                                <a href="javascript:void(0)" class="primary-btn primary-btn-link forget-email1">Retrieve</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- reset password -->
                                    <div id="resetpwd" class="resetpwd" style="display:none;">
                                        <ul class="form-fileds">
                                            <li>
                                                <label>Enter your registered E-mail id</label>
                                                <p class="mandatory-field">
                                                    <input type="email" class="inp-filed ">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
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
                                                <div class="clearfix">
                                                    <label>Enter CAPTCHA</label>
                                                    <p class="captcha-inp mandatory-field">
                                                        <input type="text" class="inp-filed">
                                                        <i class="mandatory-inp">*</i>
                                                    </p>
                                                    <p class="captcha-img">
                                                        <span class="cap-values"></span>
                                                        <i class="sprite-img captcha-reload"></i>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="primary-btn  primary-btn-link sucess-alert-btn">Proceed</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="forget-email-block2">
                                    <p class="mt20">Your Username is <span class="forget-username"><b>"sampolekar"</b></span></p>
                                </div>
			
		
		<?php echo JHtml::_('form.token'); ?>
	</form>
    </div>
    </div>
    </div>
</div>
</div>
</section>