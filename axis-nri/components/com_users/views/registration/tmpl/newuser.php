<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<section class="site-start">
    <div class="container_12">
<div class="row clearfix">
                <div class="grid_12">
                    <div class="page-heading clearfix">
                        <a href="<?php echo $this->baseurl; ?>/">Back</a>
                        <h3 class="page-left-hea">Active Your Account</h3>
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
  <div class="grid_6">
                    <div class="two-col  open-acc1 inp-labels">
                        <div class="reg-frm">
                            <form>
                                <div class="profileaddresschangestep1 pacs">
                                    <!-- Steps Wizard -->
                                    <ul class="stepswizard clearfix">
                                        <li class="current"><span class="step-no">1</span><span class="step-name">Enter Details</span></li>
                                        <li><span class="step-no">2</span><span class="step-name">Create Credentials</span></li>
                                        <li><span class="step-no">3</span><span class="step-name">Verify Account</span></li>
                                    </ul>
                                    <div class="frm-fields unfreeze">
                                        <span class="wiz-choose">
                                        <label for="debitcard" class="radio">	
                                        <input type="radio" name="debitcard" id="debitcard" value="pan" checked>
                                        Activate using your Axis Bank Debit Card ?
                                        </label>
                                        </span>
                                        <span class="wiz-choose">
                                        <label for="otp" class="radio">	
                                        <input type="radio" name="debitcard" id="otp" value="username">
                                        Activate using OTP ?
                                        </label>
                                        </span>
                                    </div>
                                    <div class="pan">
                                        <ul class="form-fileds mt10">
                                            <li class="clearfix">
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
                                            <li> <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link pcacs-tabs" id="profileaddresschangestep2">Submit</a></li>
                                        </ul>
                                    </div>
                                    <div class="username">
                                        <div class="forget-email-block1">
                                            <ul class="form-fileds mt10">
                                                <li class="clearfix">
                                                    <label>PAN</label>
                                                    <p class="mandatory-field">
                                                        <i class="sprite-img mandatory-normal"></i>
                                                        <input type="text" class="inp-filed">
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="newuser-msg">OTP will be sent to your registered Mobile Number <a href="tel:9999996521">+91-9999996521</a> and <a href="mailto:sameer@gmail.com">sameer@gmail.com</a></p>
                                                </li>
                                                <li> <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link forget-email1">Submit</a></li>
                                            </ul>
                                        </div>
                                        <div class="forget-email-block2">
                                            <ul class="form-fileds mt10">
                                                <li class="clearfix">
                                                    <label>PAN</label>
                                                    <p class="mandatory-field">
                                                        <input type="text" class="inp-filed">
                                                        <i class="mandatory-inp">*</i>
                                                    </p>
                                                </li>
                                                <li class="clearfix">
                                                    <label>Enter OTP</label>
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
                                                <li> <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link pcacs-tabs" id="profileaddresschangestep2">Proceed</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="profileaddresschangestep2 pacs"  style="display:none;">
                                    <!-- Steps Wizard -->
                                    <ul class="stepswizard clearfix">
                                        <li class="completed"><span class="step-no">&#10004;</span><span class="step-name">Enter Details</span></li>
                                        <li class="current"><span class="step-no">2</span><span class="step-name">Create Credentials</span></li>
                                        <li><span class="step-no">3</span><span class="step-name">Verify Account</span></li>
                                    </ul>
                                    <div class="create-user-block">
                                        <ul class="form-fileds mt10">
                                            <li class="clearfix">
                                                <label>Enter Username</label>
                                                <p class="mandatory-field">
                                                    <input type="text" class="inp-filed">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </li>
                                            <li class="clearfix">
                                                <label>Password</label>
                                                <p class="mandatory-field">
                                                    <input type="password" class="inp-filed">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </li>
                                            <li class="clearfix">
                                                <label>Confirm Password</label>
                                                <p class="mandatory-field">
                                                    <input type="password" class="inp-filed">
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
                                                <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link pcacs-tabs" id="profileaddresschangestep3">Proceed</a>
                                            </li>
                                        </ul>
                                        <p class="frm-fields">Already have a Username & Password? <a href="javascript:void(0)" class="already-user">Click here</a></p>
                                    </div>
                                    <div class="already-user-block">
                                        <ul class="form-fileds mt10">
                                            <li class="clearfix">
                                                <label>Existing  Username</label>
                                                <p class="mandatory-field">
                                                    <input type="text" class="inp-filed">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </li>
                                            <li class="clearfix">
                                                <label>Existing  Password</label>
                                                <p class="mandatory-field">
                                                    <input type="password" class="inp-filed">
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
                                                <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link pcacs-tabs" id="profileaddresschangestep3">Proceed</a>
                                            </li>
                                        </ul>
                                        <p class="frm-fields">Create Username & Password? <a href="javascript:void(0)" class="create-user">Click here</a></p>
                                    </div>
                                </div>
                                <div class="profileaddresschangestep3 pacs"  style="display:none;">
                                    <!-- Steps Wizard -->
                                    <ul class="stepswizard clearfix">
                                        <li class="completed"><span class="step-no">&#10004;</span><span class="step-name">Enter Details</span></li>
                                        <li class="completed"><span class="step-no">&#10004;</span><span class="step-name">Create Credentials</span></li>
                                        <li class="current"><span class="step-no">3</span><span class="step-name">Verify Account</span></li>
                                    </ul>
                                    <div class="sucess-msg-wiz">
                                        <div class="frm-fields">
                                            <p class="wiz-sucess">We will be sending a verification link to your registered E-mail id <a href="mailto:sameerpolekr.axis@gmail.com">sameerpolekr.axis@gmail.com</a></p>
                                            <p class="frm-fields wiz-note">Note:This is to ensure that your Contract notes and other communication from us is sent on the correct Email ID. Is the above E-mail ID correct?</p>
                                        </div>
                                        <div class="mt20">
                                            <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link">Yes to Send</a>
                                            <a href="javascript:void(0)" class="primary-btn secondary-btn reg-btn primary-btn-link no-modify">No to Modify</a>
                                        </div>
                                    </div>
                                    <div class="account-step-1-block">
                                        <ul class="form-fileds">
                                            <li class="clearfix">
                                                <label>Your current registered Email</label>
                                                <a href="mailto:sameerpolekr.axis@gmail.com">sameerpolekr.axis@gmail.com</a>
                                            </li>
                                            <li class="clearfix">
                                                <label>Your correct Email id</label>
                                                <p class="mandatory-field">
                                                    <input type="email" class="inp-filed">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </li>
                                            <li class="clearfix">
                                                <label>Confirm Email id</label>
                                                <p class="mandatory-field">
                                                    <input type="email" class="inp-filed">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link account-step-1">Submit</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="account-step-2-block">
                                        <ul class="form-fileds">
                                            <li class="clearfix">
                                                <label>Your 16 Digit Debit Card No.</label>
                                                <p class="clearfix">
                                                    <input type="text" class="debit-card " maxlength="4">
                                                    <input type="text" class="debit-card" maxlength="4">
                                                    <input type="text" class="debit-card" maxlength="4">
                                                    <input type="text" class="debit-card" maxlength="4">
                                                </p>
                                            </li>
                                            <li class="clearfix">
                                                <label>ATM Pin</label>
                                                <p class="mandatory-field smal-inp">
                                                    <input type="text" class="inp-filed " maxlength="4">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </li>
                                            <li class="clearfix">
                                                <label>Valid Upto</label>
                                                <p class="reg-state valid-year">
                                                    <select class="select" id="help-about" data-placeholder="Month">
                                                        <option>Month</option>
                                                        <option>May</option>
                                                    </select>
                                                </p>
                                                <p class="reg-state valid-year">
                                                    <select class="select" id="help-about" data-placeholder="Month">
                                                        <option>Year</option>
                                                        <option>2015</option>
                                                    </select>
                                                </p>
                                            </li>
                                            <li>
                                                <div class="clearfix">
                                                    <label>Enter CAPTCHA</label>
                                                    <p class="captcha-inp mandatory-field">
                                                        <input class="inp-filed" type="text">
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
                                                <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link">Submit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
</div>
</div>
</section>