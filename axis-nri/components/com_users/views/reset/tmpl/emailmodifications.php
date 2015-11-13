<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<section class="site-start">
    <div class="container_12">

            <div class="sucess-msg def-msg">
                <p>Alternatively you can also <a href="<?php echo JRoute::_('index.php?option=com_users&view=login'); ?>">Login</a> and goto 'View/Update Profile' in 'My Account' to mofdify your registered Email ID</p>
            </div>
            <div class="sucess-msg def-msg-none">
                <p>Your Email Id hasbeen successfully updated to <a href="mailto:sameerpolekr123.axis@gmail.com">sameerpolekr123.axis@gmail.com</a></p>
            </div>
            <div class="row clearfix">
                <div class="grid_12">
                    <div class="page-heading clearfix">
                        <a href="<?php echo $this->baseurl; ?>/">Back</a>
                        <h3 class="page-left-hea">Email Modification</h3>
                    </div>
                </div>
            </div>
            <div class="row box-start clearfix">
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
                <div class="grid_6 open-acc1">
                    <div class="two-col">
                        <div class="reg-frm">
                            <form>
                                <div class="forget-email-block1">
                                    <ul class="form-fileds">
                                        <li>
                                            <label>PAN</label>
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
                                                <select class="select" id="help-about">
                                                    <option>Month</option>
                                                    <option>May</option>
                                                </select>
                                            </div>
                                            <div class="reg-state valid-year">
                                                <select class="select" id="help-about">
                                                    <option>Year</option>
                                                    <option>2015</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <label>ATM Pin</label>
                                            <p class="mandatory-field small-inp">
                                                <input type="text" class="inp-filed">                
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
                                            <span class="inp-desc-msg">Image Charectors are case sensitive</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="primary-btn reg-btn forget-email1 primary-btn-link">Submit</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="forget-email-block2">
                                    <ul class="form-fileds mt20">
                                        <li>
                                            <label>Enter your New E-Mail ID</label>
                                            <p class="mandatory-field">
                                                <input type="text" class="inp-filed">                
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                        </li>
                                        <li>
                                            <label>Confirm E-Mail ID</label>
                                            <p class="mandatory-field">
                                                <input type="text" class="inp-filed">                
                                                <i class="mandatory-inp">*</i>
                                            </p>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link">Submit</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </section>