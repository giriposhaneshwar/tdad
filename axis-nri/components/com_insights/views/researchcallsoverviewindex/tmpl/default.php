<?php
/**
 * @version     1.0.0
 * @package     com_insights
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      venkatesh <venkat_vend@thinkdesign.in> - http://thinkdesign.in
 */
// no direct access
defined('_JEXEC') or die;


?>
<?php /*?><?php if ($this->item) : ?>

    <div class="item_fields">
        <table class="table">
            
        </table>
    </div>
    
    <?php
else:
    echo JText::_('COM_INSIGHTS_ITEM_NOT_LOADED');
endif;
?>
<?php */?>

<?php
$this->_addPath( 'template', JPATH_COMPONENT  . '/views/researchcallsoverview/tmpl' );
echo $this->loadTemplate('breadcrumb');
						   
						   ?>	

    <section class="site-start-modules">
    <!-- Welcome Search Section -->
        <div class="new-banner">
            <img src="images/banner.jpg">
        </div>
        <div class="banner-com">
            <h1 class="wel-hea">Welcome to Research ideas.</h1>
            <p class="wel-sub-hea mt5">Tell us about your investment preferences</p>
            <div class="invest-drop coath-text">
                <span class="invest-drop-nrml">I want to invest for</span>
                <div class="invest-drop-txt">
                    <p class="invest-down"><span class="intvest-time invest-item-time"></span><span class="inst-arrow"><i class="sprite-img invest-arrow"></i></span></p>
                    <ul class="drop-down-menu rea-mod-time time-drop">
                        <li>
                            <a href="javascript:void(0)">
                            <span class="invest-time">Long term</span><span class="mod-time">More than 1yr</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                            <span class="invest-time">Intermediate term</span><span class="mod-time">6 months to 1 year</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                            <span class="invest-time">Short term</span><span class="mod-time">5 days to 30 days</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                            <span class="invest-time">Very Short term</span><span class="mod-time">0 to 5 days</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <span class="invest-drop-nrml">in</span>
                <div class="invest-drop-txt mob-time">
                    <p class="invest-down"><span class="intvest-time invest-items-term"></span><span class="inst-arrow"><i class="sprite-img invest-arrow"></i></span></p>
                    <ul class="drop-down-menu rea-mod-time name-drop">
                        <li class="check-terms">
                            <label for="term1" class="checkbox">	
                            <input type="checkbox" name="term" id="term1" value="Stocks">
                            Stocks
                            </label>
                        </li>
                        <li class="check-terms disabled">
                                <label for="term2" class="checkbox disabled">	
                                <input type="checkbox" name="term-dis" id="term2" value="Derivatives" disabled>
                                Derivatives
                                </label>
                                <small>Not applicable for Term Selected</small>
                            </li>
                            <li class="check-terms">
                                <label for="term3" class="checkbox">	
                                <input type="checkbox" name="term" id="term3" value="Mutual Funds">
                                Mutual Funds
                                </label>
                            </li>
                            
                            <li>
                               <a href="javascript:void(0)" class="invest-drop-close"><span>Done</span></a> 
                            </li>
                    </ul>
                </div>
            </div>
            <a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchcallsoverview'); ?>" class="secondary-btn">Suggest me Research Ideas</a>
        </div>
    </section>
     <div class="empty-space">
    </div>
    <div  class="overlay"></div>
<div class="coatch-overlay">
	<div class="container_12 coatch-container">
    	<div class="coatch-boxes">
        <div class="coatch-lfttxt">
        	<p class="left-image"><img src="images/left-coatch.png" alt=""></p>
            <div class="lft-txt">
            	<p>Click here to select the time frame for which you can keep your money invested</p>
            </div>
        </div>
        <div class="coatch-rgttxt">
        <div class="rgt-txt">
            	<p>Click here to select the time frame for which you can keep your money invested</p>
            </div>
        	<p class="right-image"><img src="images/right-coatch.png" alt=""></p>
            
        </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
	$("body").addClass("overlayhide");
	});
</script>