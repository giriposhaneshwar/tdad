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
                        <h3 class="page-left-hea">Unfreeze your Account</h3>
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
                        <div class="forget-email-block1">
                            <div class="frm-fields unfreeze">
                                <label>Choose your preferable option</label>
                                <span class="wiz-choose">
                                <label for="pan" class="radio">
                                <input type="radio" id="pan" name="pan" value="pan" checked="checked">
                                PAN
                                </label>
                                </span>
                                <span class="wiz-choose">
                                <label for="username" class="radio">
                                <input type="radio" id="username" name="pan" value="username">
                                Username
                                </label>
                                </span>
                            </div>
                            <ul class="form-fileds">
                                <li>
                                    <div class="frm-fields pan">
                                        <label>PAN</label>
                                        <p class="mandatory-field">
                                            <input type="text" class="inp-filed">
                                            <i class="mandatory-inp">*</i>
                                        </p>
                                    </div>
                                    <div class="frm-fields username">
                                        <label>Username</label>
                                        <p class="mandatory-field">
                                            <input type="text" class="inp-filed">
                                            <i class="mandatory-inp">*</i>
                                        </p>
                                    </div>
                                </li>
                                <li class="selectme">
                                    <label>Choose your preferable option to reset</label>

                                    <select class="select" id="forget-id">
                                        <option>Choose your option</option>
                                        <option value="usedebit">Use Debit card to unfreeze</option>
                                        <option value="email-unfreeze">Use E-mail ID to unfreeze</option>
                                    </select>
                                </li>
                                <div id="usedebit" class="resetpwd" style="display:none">
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
                                    <li>
                                        <a href="javascript:void(0)" class="primary-btn primary-btn-link">Proceed</a>
                                    </li>
                                </div>
                                <div id="email-unfreeze" class="resetpwd" style="display:none">
                                    <li class="clearfix">
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
                                                <label>Enter your registered E-mail id</label>
                                                <p class="mandatory-field">
                                                    <input type="email" class="inp-filed ">
                                                    <i class="mandatory-inp">*</i>
                                                </p>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="primary-btn primary-btn-link">Proceed</a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </div>
                        <div class="forget-email-block2">
                            <ul class="form-fileds">
                                <li>
                                    <label>Enter your New E-Mail ID</label>
                                    <p class="mandatory-field">
                                        <input type="email" class="inp-filed">                
                                        <i class="mandatory-inp">*</i>
                                    </p>
                                </li>
                                <li>
                                    <label>Confirm E-Mail ID</label>
                                    <p class="mandatory-field">
                                        <input type="email" class="inp-filed">                
                                        <i class="mandatory-inp">*</i>
                                    </p>
                                </li>
                            </ul>
                            <div class="frm-fields">
                                <a href="javascript:void(0)" class="primary-btn reg-btn primary-btn-link">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </section>
        