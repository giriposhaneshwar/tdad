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
?><?php */?>
 <?php
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
            <div class="invest-drop">
                <span class="invest-drop-nrml">I want to invest for</span>
                <div class="invest-drop-txt">
                    <p class="invest-down"><span class="intvest-time invest-item-time">Long term</span><span class="inst-arrow"><i class="sprite-img invest-arrow"></i></span></p>
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
                    <p class="invest-down"><span class="intvest-time invest-items-term">Stocks</span><span class="inst-arrow"><i class="sprite-img invest-arrow"></i></span></p>
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
            <a href="overview.html" class="secondary-btn">Modify</a>
        </div>
        <!--  Stock list Section -->
        <!--Premium Ideas -->
        <div class="gray-bg">
            <div class="container_12">
                <div class="row clearfix">
                    <div class="grid_12">
                        <div class="stock-sec">
                            <div class="stock-head clearfix">
                                <h1 class="stockhead">Premium Ideas</h1>
                                <h4 class="stock-subdes">These are the Investment Ideas available to you as per the subscription. Visit our Offerings
                                    section to view all the Products.													
                                </h4>
                            </div>
                            <div class="stock-details clearfix">
                                <div class="sort-slide-num">
                                    <div class="sort-by">
                                        <label><i class="sprite-img compare-ar-icon sort-menu-icon"></i><span class="sortname dis-none">Sort by :</span></label>
                                        <div class="sort-name">
                                            <span class="sort-select-name">Date</span> <i class="sprite-img sort-icon"></i>
                                            <ul class="drop-down-menu sort-list">
                                                <li>
                                                    <a href="javascript:void(0)">Date</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Stock Name</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Buy</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Sell</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="slider-num dis-none"> 1 - 3 of 100 Calls</p>
                                </div>
                                <div class="compare-righ clearfix">
                                    <ul class="cart-list over-cart-list">
                                        <li><a href="javascript:void(0)" class="wishlist"><i class="sprite-img compare-ar-icon wishlist-icon"></i><span class="dis-none">Add to Watchlist</span></a></li>
                                        <li><a href="javascript:void(0)"><i class="sprite-img compare-ar-icon compare-icon"></i><span class="dis-none">Compare</span></a></li>
                                        <li class="cart-more-menu">
                                            <a href="javascript:void(0)" class="cartmore"><i class="sprite-img data-points-icons cart-more"></i> </a>
                                            <ul class="cart-more-items drop-down-menu">
                                                <li><a href="javascript:void(0)"><i class="sprite-img pdf-icon"></i> </a></li>
                                                <li><a href="javascript:void(0)"><i class="sprite-img excel-icon"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="sprite-img print-icon"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Compare -->
                            <div class="compare-flyout sel-msg-fly">
                                <p class="msg-select">1 Schemes selected please click on any of above icon to complete the task</p>
                            </div>
                            <div class="compare-flyout schesme-wish">
                                <div class="msg-select clearfix">
                                    <p class="add-wish-msg">1 Schemes / Add to Watchlist</p>
                                    <div class="sort-name add-wish-sel">
                                        <span class="sort-select-name sel-compare">Wishlist</span> <i class="sprite-img sort-icon"></i>
                                        <ul class="drop-down-menu sort-list sel-compare-li">
                                            <li>
                                                <a href="javascript:void(0)">Wishlist1</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Wishlist2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Wishlist3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Wishlist4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wish-btns">
                                        <a href="javascript:void(0)" class="secondary-btn add-wish">Add</a>
                                        <a href="javascript:void(0)" class="thrid-btn cancel-wish">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sucess-msg wish-suces">
                                You have successfully added and 2 Schemes to Important Stocks watchlist!
                            </div>
                            <!-- Close Compare -->
                            <div class="tile-view">
                                <ul class="ca-slider mutualfundIdeas-list clearfix">
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="tooltipdiv">
                                                <div class="panel-recamond">
                                                    <div class="thumb-tool">
                                                        <img src="images/thumb-icon.png">
                                                        <div class="tooltip-bdy">
                                                            <div class="tooltip-inner">
                                                                <h6>Highly Recommended </h6>
                                                                <p class="tool-con">As apart from AxisDirect Research Team, Reuters and theScreeners have also given Buy Recommendation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">5 mins ago</p>
                                                    <div class="panel-subname tooltipdiv">
                                                        <p class="mb10 sub-hea">Game Changers</p>
                                                        <div class="top headingtooltip">
                                                            <div class="tooltip-inner">
                                                                The Description of pick of the week  can come here
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name tooltipdiv">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">MOLDTKPACEQ</a></h5>
                                                        <div class="top headingtooltip">
                                                            <div class="tooltip-inner">
                                                                MOLDTKPACEQ
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">412.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">410.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Expected Return</small>
                                                        <h4 class="pro-val-normal">12.00%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target</small>
                                                        <h4 class="pro-val-normal pro-val">460.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><a href="javascript:void(0)"><img src="images/buy.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">19 mins ago</p>
                                                    <p class="mb10 sub-hea">Hidden Gems</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">FSLEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">310.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">300.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Book Loss</small>
                                                        <h4 class="pro-val-normal">10.00%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Closure Price</small>
                                                        <h4 class="pro-val-normal pro-val">270.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><a href="javascript:void(0)"><img src="images/buy.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">Closed : 1 hour ago</p>
                                                    <p class="mb10 sub-hea">The Titans</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">INOXWINDEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">382.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">400.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Book Profit</small>
                                                        <h4 class="pro-val-normal">15.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target Achieved</small>
                                                        <h4 class="pro-val-normal pro-val">340.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><a href="javascript:void(0)"><img src="images/sell-disable.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="tooltipdiv">
                                                <div class="panel-recamond">
                                                    <div class="thumb-tool">
                                                        <img src="images/thumb-icon.png">
                                                        <div class="tooltip-bdy">
                                                            <div class="tooltip-inner">
                                                                <h6>Highly Recommended </h6>
                                                                <p class="tool-con">As apart from AxisDirect Research Team, Reuters and theScreeners have also given Buy Recommendation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">5 mins ago</p>
                                                    <p class="mb10 sub-hea">Game Changers</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">MOLDTKPACEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">412.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">410.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Expected Return</small>
                                                        <h4 class="pro-val-normal">12.00%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target</small>
                                                        <h4 class="pro-val-normal pro-val">460.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><a href="javascript:void(0)"><img src="images/buy-disable.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">19 mins ago</p>
                                                    <p class="mb10 sub-hea">Hidden Gems</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">FSLEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">310.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">300.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Book Loss</small>
                                                        <h4 class="pro-val-normal">10.00%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Closure Price</small>
                                                        <h4 class="pro-val-normal pro-val">270.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><a href="javascript:void(0)"><img src="images/buy.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">Closed : 1 hour ago</p>
                                                    <p class="mb10 sub-hea">The Titans</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">INOXWINDEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">382.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">400.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Book Profit</small>
                                                        <h4 class="pro-val-normal">15.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target Achieved</small>
                                                        <h4 class="pro-val-normal pro-val">340.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><a href="javascript:void(0)"><img src="images/buy-disable.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checklist clearfix">
                               <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchcallspremiumideas'); ?>" class="viewall">View All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Investment Ideas -->
        <div class="blue-bg">
            <div class="container_12">
                <div class="row clearfix">
                    <div class="grid_12">
                        <div class="stock-sec">
                            <div class="stock-head clearfix">
                                <h1 class="stockhead">Investment Ideas</h1>
                                <h4 class="stock-subdes">Our Fundamental Research team identifies these investment opportunities which need
                                    investment horizon from 6 months to year to achieve the forecasted targets.
                                </h4>
                            </div>
                            <div class="stock-details clearfix">
                                <div class="sort-slide-num">
                                    <div class="sort-by">
                                        <label><i class="sprite-img compare-ar-icon sort-menu-icon"></i><span class="sortname dis-none">Sort by :</span></label>
                                        <div class="sort-name">
                                            <span class="sort-select-name">Date</span> <i class="sprite-img sort-icon"></i>
                                            <ul class="drop-down-menu sort-list">
                                                <li>
                                                    <a href="javascript:void(0)">Date</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Stock Name</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Buy</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Sell</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="slider-num dis-none"> 1 - 3 of 100 Calls</p>
                                </div>
                                <div class="compare-righ clearfix">
                                    <ul class="cart-list over-cart-list">
                                        <li><a href="javascript:void(0)" class="wishlist"><i class="sprite-img compare-ar-icon wishlist-icon"></i><span class="dis-none">Add to Watchlist</span></a></li>
                                        <li><a href="javascript:void(0)"><i class="sprite-img compare-ar-icon compare-icon"></i><span class="dis-none">Compare</span></a></li>
                                        <li class="cart-more-menu">
                                            <a href="javascript:void(0)" class="cartmore"><i class="sprite-img data-points-icons cart-more"></i> </a>
                                            <ul class="cart-more-items drop-down-menu">
                                                <li><a href="javascript:void(0)"><i class="sprite-img pdf-icon"></i> </a></li>
                                                <li><a href="javascript:void(0)"><i class="sprite-img excel-icon"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="sprite-img print-icon"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Compare -->
                            <div class="compare-flyout sel-msg-fly">
                                <p class="msg-select">1 Schemes selected please click on any of above icon to complete the task</p>
                            </div>
                            <div class="compare-flyout schesme-wish">
                                <div class="msg-select clearfix">
                                    <p class="add-wish-msg">2 Schemes / Add to Watchlist</p>
                                    <div class="sort-name add-wish-sel">
                                        <span class="sort-select-name sel-compare">Date</span> <i class="sprite-img sort-icon"></i>
                                        <ul class="drop-down-menu sort-list sel-compare-li">
                                            <li>
                                                <a href="javascript:void(0)">Date</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Stock Name</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Buy</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Sell</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wish-btns">
                                        <a href="javascript:void(0)" class="secondary-btn add-wish">Add</a>
                                        <a href="javascript:void(0)" class="thrid-btn cancel-wish">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sucess-msg wish-suces">
                                You have successfully added and 2 Schemes to Important Stocks watchlist!
                            </div>
                            <!-- Close Compare -->
                            <div class="tile-view">
                                <ul class="ca-slider mutualfundIdeas-list clearfix">
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="tooltipdiv">
                                                <div class="panel-recamond">
                                                    <div class="thumb-tool">
                                                        <img src="images/thumb-icon.png">
                                                        <div class="tooltip-bdy">
                                                            <div class="tooltip-inner">
                                                                <h6>Highly Recommended </h6>
                                                                <p class="tool-con">Apart from AxisDirect Research, Reuters have also given Buy Recommendation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">19 mins ago</p>
                                                    <p class="mb10 sub-hea">Pick of the Week</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">MOLDTKPACEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">200.25</h4>
                                                    </li>
                                                    <li >
                                                        <small>Expected Return</small>
                                                        <h4 class="pro-val-normal">12.00%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target</small>
                                                        <h4 class="pro-val-normal pro-val">224.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><a href="javascript:void(0)" data-url="index.php?

option=com_users&view=reset&layout=insight_like_popup&tmpl=component" title="insight-like-popup" class="pop-like"><img src="images/buy.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">19 mins ago</p>
                                                    <p class="mb10 sub-hea">High Conviction Ideas</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">FSLEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">29.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">31.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Expected Return</small>
                                                        <h4 class="pro-val-normal">12.90%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target</small>
                                                        <h4 class="pro-val-normal pro-val">35.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="tooltipdiv">
                                                <div class="panel-recamond">
                                                    <div class="thumb-tool">
                                                        <img src="images/thumb-icon.png">
                                                        <div class="tooltip-bdy">
                                                            <div class="tooltip-inner">
                                                                <h6>Highly Recommended </h6>
                                                                <p class="tool-con">As apart from AxisDirect Research Team, Reuters and theScreeners have also given Buy Recommendation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">Closed: 1 hour ago</p>
                                                    <p class="mb10 sub-hea">Initiating Coverage</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">INOXWINDEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">382.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">400.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Book Profit</small>
                                                        <h4 class="pro-val-normal">15.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target</small>
                                                        <h4 class="pro-val-normal pro-val">340.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="tooltipdiv">
                                                <div class="panel-recamond">
                                                    <div class="thumb-tool">
                                                        <img src="images/thumb-icon.png">
                                                        <div class="tooltip-bdy">
                                                            <div class="tooltip-inner">
                                                                <h6>Highly Recommended </h6>
                                                                <p class="tool-con">As apart from AxisDirect Research Team, Reuters and theScreeners have also given Buy Recommendation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">19 mins ago</p>
                                                    <p class="mb10 sub-hea">Pick of the Week</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">MOLDTKPACEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">200.25</h4>
                                                    </li>
                                                    <li >
                                                        <small>Expected Return</small>
                                                        <h4 class="pro-val-normal">12.00%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target</small>
                                                        <h4 class="pro-val-normal pro-val">224.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">19 mins ago</p>
                                                    <p class="mb10 sub-hea">High Conviction Ideas</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">FSLEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">29.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">31.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Expected Return</small>
                                                        <h4 class="pro-val-normal">12.90%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target</small>
                                                        <h4 class="pro-val-normal pro-val">35.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="tooltipdiv">
                                                <div class="panel-recamond">
                                                    <div class="thumb-tool">
                                                        <img src="images/thumb-icon.png">
                                                        <div class="tooltip-bdy">
                                                            <div class="tooltip-inner">
                                                                <h6>Highly Recommended </h6>
                                                                <p class="tool-con">As apart from AxisDirect Research Team, Reuters and theScreeners have also given Buy Recommendation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">Closed: 1 hour ago</p>
                                                    <p class="mb10 sub-hea">Initiating Coverage</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">INOXWINDEQ</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">382.00</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Entry Price</small>
                                                        <h4 class="pro-val-normal">400.00</h4>
                                                    </li>
                                                    <li >
                                                        <small>Book Profit</small>
                                                        <h4 class="pro-val-normal">15.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>Target</small>
                                                        <h4 class="pro-val-normal pro-val">340.00</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checklist clearfix">
                                <div class="checkresearch-lft"><a href="javascript:void(0)" class="checkpremium" title="premium"><i class="sprite-img diamond"></i><span>Premium Research plans</span></a></div>
                           <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchcallsinvestmentidea'); ?>" class="viewall">View All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Trading Ideas -->
        <div class="gray-bg">
            <div class="white-background">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                            <div class="stock-sec clearfix">
                                <div class="stock-head clearfix">
                                    <h1 class="stockhead">Trading Ideas</h1>
                                    <h4 class="stock-subdes">Our Technical & Derivatives Research teams identify these trading opportunities based on
                                        short term trends. Investment horizon can range from 1 day to 1 month.
                                    </h4>
                                </div>
                                <div class="stock-details clearfix">
                                    <div class="sort-slide-num">
                                        <div class="sort-by">
                                            <label><i class="sprite-img compare-ar-icon sort-menu-icon"></i><span class="sortname dis-none">Sort by :</span></label>
                                            <div class="sort-name">
                                                <span class="sort-select-name">Date</span> <i class="sprite-img sort-icon"></i>
                                                <ul class="drop-down-menu sort-list">
                                                    <li>
                                                        <a href="javascript:void(0)">Date</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Stock Name</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Buy</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">Sell</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="slider-num dis-none"> 1 - 3 of 100 Strategies</p>
                                    </div>
                                    <div class="compare-righ clearfix">
                                        <ul class="cart-list over-cart-list">
                                            <li><a href="javascript:void(0)" class="wishlist"><i class="sprite-img compare-ar-icon wishlist-icon"></i><span class="dis-none">Add to Watchlist</span></a></li>
                                            <li><a href="javascript:void(0)"><i class="sprite-img compare-ar-icon compare-icon"></i><span class="dis-none">Compare</span></a></li>
                                            <li class="cart-more-menu">
                                                <a href="javascript:void(0)" class="cartmore"><i class="sprite-img data-points-icons cart-more"></i> </a>
                                                <ul class="cart-more-items drop-down-menu">
                                                    <li><a href="javascript:void(0)"><i class="sprite-img pdf-icon"></i> </a></li>
                                                    <li><a href="javascript:void(0)"><i class="sprite-img excel-icon"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="sprite-img print-icon"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Compare -->
                                <div class="compare-flyout sel-msg-fly">
                                    <p class="msg-select">1 Schemes selected please click on any of above icon to complete the task</p>
                                </div>
                                <div class="compare-flyout schesme-wish">
                                    <div class="msg-select clearfix">
                                        <p class="add-wish-msg">2 Schemes / Add to Watchlist</p>
                                        <div class="sort-name add-wish-sel">
                                            <span class="sort-select-name sel-compare">Date</span> <i class="sprite-img sort-icon"></i>
                                            <ul class="drop-down-menu sort-list sel-compare-li">
                                                <li>
                                                    <a href="javascript:void(0)">Date</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Stock Name</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Buy</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Sell</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wish-btns">
                                            <a href="javascript:void(0)" class="secondary-btn add-wish">Add</a>
                                            <a href="javascript:void(0)" class="thrid-btn cancel-wish">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sucess-msg wish-suces">
                                    You have successfully added and 2 Schemes to Important Stocks watchlist!
                                </div>
                                <!-- Close Compare -->
                                <div class="tile-view">
                                    <ul class="ca-slider mutualfundIdeas-list clearfix">
                                        <li class="shadow-panel slide-box">
                                            <div class="panel">
                                            	<div class="tooltipdiv">
                                                <div class="panel-recamond">
                                                    <div class="thumb-tool">
                                                        <img src="images/thumb-icon.png">
                                                        <div class="tooltip-bdy">
                                                            <div class="tooltip-inner">
                                                                <h6>Highly Recommended </h6>
                                                                <p class="tool-con">Apart from AxisDirect Research, theScreeners have also given Buy Recommendation</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="panel-heading">
                                                    <div class="clearfix">
                                                        <p class="timeago">2 mins ago</p>
                                                        <p class="mb10 sub-hea">Intraday</p>
                                                        <div class="panel-compare-action">
                                                            <label class="checkbox wish-compare">
                                                            <input type="checkbox" id="" name="" value="">
                                                            </label>
                                                        </div>
                                                        <div class="panel-heading-name">
                                                            <h5 class="pro-name"><a href="javascript:void(0)">Reliance FUTSTK- July15</a></h5>
                                                        </div>
                                                        <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="pd-list-50 clearfix">
                                                        <li>
                                                            <small>Current Price</small>
                                                            <h4 class="pro-val-normal">100.25</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Entry Price Range</small>
                                                            <p class="entryprice-trade">95 - 97</p>
                                                        </li>
                                                        <li >
                                                            <small>Stop Loss</small>
                                                            <h4 class="pro-val-normal">93.50</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Target</small>
                                                            <h4 class="pro-val-normal pro-val">103.50</h4>
                                                        </li>
                                                    </ul>
                                                    <div class="axisdir-view-gir">
                                                        <p><span class="axis-view">AxisDirect View</span><a href="javascript:void(0)" data-url="index.php?

option=com_users&view=reset&layout=trading_popup&tmpl=component" title="trading-popup" class="pop-like"><img src="images/buy.png" class="buy-icon"></a></p>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="shadow-panel slide-box">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="clearfix">
                                                        <p class="timeago">Closed : 20 mins ago</p>
                                                        <p class="mb10 sub-hea">Positional (10 Days)</p>
                                                        <div class="panel-compare-action">
                                                            <label class="checkbox wish-compare">
                                                            <input type="checkbox" id="" name="" value="">
                                                            </label>
                                                        </div>
                                                        <div class="panel-heading-name">
                                                            <h5 class="pro-name"><a href="javascript:void(0)">Unitech EQ</a></h5>
                                                        </div>
                                                        <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="pd-list-50 clearfix">
                                                        <li>
                                                            <small>Current Price</small>
                                                            <h4 class="pro-val-normal">231.50</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Entry Price</small>
                                                            <p class="entryprice-trade">230</p>
                                                        </li>
                                                        <li >
                                                            <small>Loss Booked at</small>
                                                            <h4 class="pro-val-normal pro-val">239.00</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Target</small>
                                                            <h4 class="pro-val-normal">230.50</h4>
                                                        </li>
                                                    </ul>
                                                    <div class="axisdir-view-gir">
                                                        <p><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></p>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="shadow-panel slide-box">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="clearfix">
                                                        <p class="timeago">Closed 20 mins ago</p>
                                                        <p class="mb10 sub-hea">Buy Now Sell Tomorrow</p>
                                                        <div class="panel-compare-action">
                                                            <label class="checkbox wish-compare">
                                                            <input type="checkbox" id="" name="" value="">
                                                            </label>
                                                        </div>
                                                        <div class="panel-heading-name">
                                                            <h5 class="pro-name"><a href="javascript:void(0)">Nifty OTPIDX-Aug15-PA-8300</a></h5>
                                                        </div>
                                                        <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="pd-list-50 clearfix">
                                                        <li>
                                                            <small>Current Price</small>
                                                            <h4 class="pro-val-normal">2010.00</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Entry Price Range</small>
                                                            <p class="entryprice-trade">250.00 - 260.00</p>
                                                        </li>
                                                        <li >
                                                            <small>Stop Loss</small>
                                                            <h4 class="pro-val-normal">270.00</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Profit Booked at</small>
                                                            <h4 class="pro-val-normal pro-val">240.00</h4>
                                                        </li>
                                                    </ul>
                                                    <div class="axisdir-view-gir">
                                                        <p><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></p>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="shadow-panel slide-box">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="clearfix">
                                                        <p class="timeago">2 mins ago</p>
                                                        <p class="mb10 sub-hea">Intraday</p>
                                                        <div class="panel-compare-action">
                                                            <label class="checkbox wish-compare">
                                                            <input type="checkbox" id="" name="" value="">
                                                            </label>
                                                        </div>
                                                        <div class="panel-heading-name">
                                                            <h5 class="pro-name"><a href="javascript:void(0)">Reliance FUTSTK- July15</a></h5>
                                                        </div>
                                                        <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="pd-list-50 clearfix">
                                                        <li>
                                                            <small>Current Price</small>
                                                            <h4 class="pro-val-normal">100.25</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Entry Price Range</small>
                                                            <p class="entryprice-trade">95 - 97</p>
                                                        </li>
                                                        <li >
                                                            <small>Stop Loss</small>
                                                            <h4 class="pro-val-normal">93.50</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Target</small>
                                                            <h4 class="pro-val-normal pro-val">103.50</h4>
                                                        </li>
                                                    </ul>
                                                    <div class="axisdir-view-gir">
                                                        <p><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></p>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="shadow-panel slide-box">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="clearfix">
                                                        <p class="timeago">Closed : 20 mins ago</p>
                                                        <p class="mb10 sub-hea">Positional (10 Days)</p>
                                                        <div class="panel-compare-action">
                                                            <label class="checkbox wish-compare">
                                                            <input type="checkbox" id="" name="" value="">
                                                            </label>
                                                        </div>
                                                        <div class="panel-heading-name">
                                                            <h5 class="pro-name"><a href="javascript:void(0)">Unitech EQ</a></h5>
                                                        </div>
                                                        <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="pd-list-50 clearfix">
                                                        <li>
                                                            <small>Current Price</small>
                                                            <h4 class="pro-val-normal">231.50</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Entry Price</small>
                                                            <p class="entryprice-trade">230</p>
                                                        </li>
                                                        <li >
                                                            <small>Loss Booked at</small>
                                                            <h4 class="pro-val-normal pro-val">239.00</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Target</small>
                                                            <h4 class="pro-val-normal">230.50</h4>
                                                        </li>
                                                    </ul>
                                                    <div class="axisdir-view-gir">
                                                        <p><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></p>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="shadow-panel slide-box">

                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="clearfix">
                                                        <p class="timeago">Closed 20 mins ago</p>
                                                        <p class="mb10 sub-hea">Buy Now Sell Tomorrow</p>
                                                        <div class="panel-compare-action">
                                                            <label class="checkbox wish-compare">
                                                            <input type="checkbox" id="" name="" value="">
                                                            </label>
                                                        </div>
                                                        <div class="panel-heading-name">
                                                            <h5 class="pro-name"><a href="javascript:void(0)">Nifty OTPIDX-Aug15-PA-8300</a></h5>
                                                        </div>
                                                        <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <ul class="pd-list-50 clearfix">
                                                        <li>
                                                            <small>Current Price</small>
                                                            <h4 class="pro-val-normal">2010.00</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Entry Price Range</small>
                                                            <p class="entryprice-trade">250.00 - 260.00</p>
                                                        </li>
                                                        <li >
                                                            <small>Stop Loss</small>
                                                            <h4 class="pro-val-normal">270.00</h4>
                                                        </li>
                                                        <li class="border">
                                                            <small>Profit Booked at</small>
                                                            <h4 class="pro-val-normal pro-val">240.00</h4>
                                                        </li>
                                                    </ul>
                                                    <div class="axisdir-view-gir">
                                                        <p><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></p>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checklist clearfix">
                                    <div class="checkresearch-lft"><i class="sprite-img sms"></i><a href="javascript:void(0)" class="checkpremium" title="sms">Reasearch on SMS</a></div>
                             <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchtradingideas'); ?>" class="viewall">View All</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Derivative Strategies -->
        <div class="blue-bg">
            <div class="container_12">
                <div class="row clearfix">
                    <div class="grid_12">
                        <div class="stock-sec clearfix">
                            <div class="stock-head clearfix">
                                <h1 class="stockhead">Derivative Strategies</h1>
                                <h4 class="stock-subdes">These are the strategies in which a basket of positions in two or more 
                                    Derivative Contracts is recommended. Duration is generally till the Expiry Day of the Current month.
                                </h4>
                            </div>
                            <div class="stock-details clearfix">
                                <div class="sort-slide-num">
                                    <div class="sort-by">
                                        <label><i class="sprite-img compare-ar-icon sort-menu-icon"></i><span class="sortname dis-none">Sort by :</span></label>
                                        <div class="sort-name">
                                            <span class="sort-select-name">Date</span> <i class="sprite-img sort-icon"></i>
                                            <ul class="drop-down-menu sort-list">
                                                <li>
                                                    <a href="javascript:void(0)">Date</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Stock Name</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Buy</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Sell</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="slider-num dis-none"> 1 - 3 of 100 Strategies</p>
                                </div>
                                <div class="compare-righ clearfix">
                                    <ul class="cart-list over-cart-list">
                                        <li><a href="javascript:void(0)" class="wishlist"><i class="sprite-img compare-ar-icon wishlist-icon"></i><span class="dis-none">Add to Watchlist</span></a></li>
                                        <li><a href="javascript:void(0)"><i class="sprite-img compare-ar-icon compare-icon"></i><span class="dis-none">Compare</span></a></li>
                                        <li class="cart-more-menu">
                                            <a href="javascript:void(0)" class="cartmore"><i class="sprite-img data-points-icons cart-more"></i> </a>
                                            <ul class="cart-more-items drop-down-menu">
                                                <li><a href="javascript:void(0)"><i class="sprite-img pdf-icon"></i> </a></li>
                                                <li><a href="javascript:void(0)"><i class="sprite-img excel-icon"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="sprite-img print-icon"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Compare -->
                            <div class="compare-flyout sel-msg-fly">
                                <p class="msg-select">1 Schemes selected please click on any of above icon to complete the task</p>
                            </div>
                            <div class="compare-flyout schesme-wish">
                                <div class="msg-select clearfix">
                                    <p class="add-wish-msg">2 Schemes / Add to Watchlist</p>
                                    <div class="sort-name add-wish-sel">
                                        <span class="sort-select-name sel-compare">Date</span> <i class="sprite-img sort-icon"></i>
                                        <ul class="drop-down-menu sort-list sel-compare-li">
                                            <li>
                                                <a href="javascript:void(0)">Date</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Stock Name</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Buy</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Sell</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wish-btns">
                                        <a href="javascript:void(0)" class="secondary-btn add-wish">Add</a>
                                        <a href="javascript:void(0)" class="thrid-btn cancel-wish">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sucess-msg wish-suces">
                                You have successfully added and 2 Schemes to Important Stocks watchlist!
                            </div>
                            <!-- Close Compare -->
                            <div class="ca-container">
                                <div class="ca-wrapper">
                                    <div class="tile-view">
                                        <ul class="ca-slider mutualfundIdeas-list clearfix">
                                            <li class="shadow-panel slide-box">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <p class="timeago">2 mins ago</p>
                                                            <p class="mb10 sub-hea">Pair Trade</p>
                                                            <div class="panel-compare-action">
                                                                <label class="checkbox wish-compare">
                                                                <input type="checkbox" id="" name="" value="">
                                                                </label>
                                                            </div>
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Nifty</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ul class="pd-list-50 clearfix">
                                                            <li>
                                                                <small>Current Ratio</small>
                                                                <h4 class="pro-val-normal">2.125</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Entry Ratio</small>
                                                                <h4 class="pro-val-normal">2.015</h4>
                                                            </li>
                                                            <li >
                                                                <small>Stop-Loss Ratio</small>
                                                                <h4 class="pro-val-normal">1.982 </h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Target Ratio</small>
                                                                <h4 class="pro-val-normal pro-val">2.245</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                        <a href="javascript:void(0)" class="view-details ca-more pop-like" data-url="index.php?
option=com_users&view=reset&layout=derivative_pair_popup&tmpl=component" title="derivative-pair-popup"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="shadow-panel slide-box">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <p class="timeago">2 mins ago</p>
                                                            <p class="mb10 sub-hea">Bear Call Spread</p>
                                                            <div class="panel-compare-action">
                                                                <label class="checkbox wish-compare">
                                                                <input type="checkbox" id="" name="" value="">
                                                                </label>
                                                            </div>
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Nifty</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ul class="pd-list-50 clearfix">
                                                            <li>
                                                                <small>Current Spread</small>
                                                                <h4 class="pro-val-normal">15.26</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Entry Spread</small>
                                                                <h4 class="pro-val-normal">13.00</h4>
                                                            </li>
                                                            <li >
                                                                <small>Stop-Loss Spread</small>
                                                                <h4 class="pro-val-normal">5.00</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Target Spread</small>
                                                                <h4 class="pro-val-normal pro-val">27.00</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                        <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="shadow-panel slide-box">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <p class="timeago">2 mins ago</p>
                                                            <p class="mb10 sub-hea">Buy Straddle</p>
                                                            <div class="panel-compare-action">
                                                                <label class="checkbox wish-compare">
                                                                <input type="checkbox" id="" name="" value="">
                                                                </label>
                                                            </div>
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Nifty</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ul class="pd-list-50 clearfix">
                                                            <li>
                                                                <small>Current Premium</small>
                                                                <h4 class="pro-val-normal">100.00</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Entry Premium</small>
                                                                <h4 class="pro-val-normal">90.00</h4>
                                                            </li>
                                                            <li >
                                                                <small>Book loss at</small>
                                                                <h4 class="pro-val-normal pro-val">75.00</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Target Premium</small>
                                                                <h4 class="pro-val-normal">120</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                        <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="shadow-panel slide-box">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <p class="timeago">2 mins ago</p>
                                                            <p class="mb10 sub-hea">Pair Trade</p>
                                                            <div class="panel-compare-action">
                                                                <label class="checkbox wish-compare">
                                                                <input type="checkbox" id="" name="" value="">
                                                                </label>
                                                            </div>
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Nifty</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ul class="pd-list-50 clearfix">
                                                            <li>
                                                                <small>Current Ratio</small>
                                                                <h4 class="pro-val-normal">2.125</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Entry Ratio</small>
                                                                <h4 class="pro-val-normal">2.015</h4>
                                                            </li>
                                                            <li >
                                                                <small>Stop-Loss Ratio</small>
                                                                <h4 class="pro-val-normal">1.982 </h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Target Ratio</small>
                                                                <h4 class="pro-val-normal pro-val">2.245</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                        <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="shadow-panel slide-box">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <p class="timeago">2 mins ago</p>
                                                            <p class="mb10 sub-hea">Bear Call Spread</p>
                                                            <div class="panel-compare-action">
                                                                <label class="checkbox wish-compare">
                                                                <input type="checkbox" id="" name="" value="">
                                                                </label>
                                                            </div>
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Nifty</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ul class="pd-list-50 clearfix">
                                                            <li>
                                                                <small>Current Spread</small>
                                                                <h4 class="pro-val-normal">15.26</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Entry Spread</small>
                                                                <h4 class="pro-val-normal">13.00</h4>
                                                            </li>
                                                            <li >
                                                                <small>Stop-Loss Spread</small>
                                                                <h4 class="pro-val-normal">5.00</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Target Spread</small>
                                                                <h4 class="pro-val-normal pro-val">27.00</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                        <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="shadow-panel slide-box">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <p class="timeago">2 mins ago</p>
                                                            <p class="mb10 sub-hea">Buy Straddle</p>
                                                            <div class="panel-compare-action">
                                                                <label class="checkbox wish-compare">
                                                                <input type="checkbox" id="" name="" value="">
                                                                </label>
                                                            </div>
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Nifty</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <ul class="pd-list-50 clearfix">
                                                            <li>
                                                                <small>Current Premium</small>
                                                                <h4 class="pro-val-normal">100.00</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Entry Premium</small>
                                                                <h4 class="pro-val-normal">90.00</h4>
                                                            </li>
                                                            <li >
                                                                <small>Book loss at</small>
                                                                <h4 class="pro-val-normal pro-val">75.00</h4>
                                                            </li>
                                                            <li class="border">
                                                                <small>Target Premium</small>
                                                                <h4 class="pro-val-normal">120</h4>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                        <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="checklist clearfix">
                                <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchcallsderivative'); ?>" class="viewall">View All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Mutual Funds -->
        <div class="gray-bg">
            <div class="container_12">
                <div class="row clearfix">
                    <div class="grid_12">
                        <div class="stock-sec clearfix">
                            <div class="stock-head clearfix">
                                <h1 class="stockhead">Mutual Fund Ideas</h1>
                                <h4 class="stock-subdes">Returns displayed below for 1 Year duration are absolute and for the greater
                                    duration, they are compounded Annual Growth Rates.
                                </h4>
                            </div>
                            <div class="stock-details clearfix">
                                <div class="sort-slide-num">
                                    <div class="sort-by">
                                        <label><i class="sprite-img compare-ar-icon sort-menu-icon"></i><span class="sortname dis-none">Sort by :</span></label>
                                        <div class="sort-name">
                                            <span class="sort-select-name">Date</span> <i class="sprite-img sort-icon"></i>
                                            <ul class="drop-down-menu sort-list">
                                                <li>
                                                    <a href="javascript:void(0)">Date</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Stock Name</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Buy</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Sell</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="slider-num dis-none"> 1 - 3 of 100 Calls</p>
                                </div>
                                <div class="compare-righ clearfix">
                                    <ul class="cart-list over-cart-list">
                                        <li><a href="javascript:void(0)" class="wishlist"><i class="sprite-img compare-ar-icon wishlist-icon"></i><span class="dis-none">Add to Watchlist</span></a></li>
                                        <li><a href="javascript:void(0)"><i class="sprite-img compare-ar-icon compare-icon"></i><span class="dis-none">Compare</span></a></li>
                                        <li class="cart-more-menu">
                                            <a href="javascript:void(0)" class="cartmore"><i class="sprite-img data-points-icons cart-more"></i> </a>
                                            <ul class="cart-more-items drop-down-menu">
                                                <li><a href="javascript:void(0)"><i class="sprite-img pdf-icon"></i> </a></li>
                                                <li><a href="javascript:void(0)"><i class="sprite-img excel-icon"></i></a></li>
                                                <li><a href="javascript:void(0)"><i class="sprite-img print-icon"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Compare -->
                            <div class="compare-flyout sel-msg-fly">
                                <p class="msg-select">1 Schemes selected please click on any of above icon to complete the task</p>
                            </div>
                            <div class="compare-flyout schesme-wish">
                                <div class="msg-select clearfix">
                                    <p class="add-wish-msg">2 Schemes / Add to Watchlist</p>
                                    <div class="sort-name add-wish-sel">
                                        <span class="sort-select-name sel-compare">Date</span> <i class="sprite-img sort-icon"></i>
                                        <ul class="drop-down-menu sort-list sel-compare-li">
                                            <li>
                                                <a href="javascript:void(0)">Date</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Stock Name</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Buy</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Sell</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wish-btns">
                                        <a href="javascript:void(0)" class="secondary-btn add-wish">Add</a>
                                        <a href="javascript:void(0)" class="thrid-btn cancel-wish">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sucess-msg wish-suces">
                                You have successfully added and 2 Schemes to Important Stocks watchlist!
                            </div>
                            <!-- Close Compare -->
                            <div class="tile-view">
                                <ul class="ca-slider mutualfundIdeas-list clearfix">
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">15 days ago</p>
                                                    <p class="mb10 sub-hea">Equity Diversified Funds</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">Axis Equity Fund</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-33 clearfix">
                                                    <li>
                                                        <small>1Y Return</small>
                                                        <h4 class="pro-val-normal">1.96%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>3Y Return</small>
                                                        <h4 class="pro-val-normal">10.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>5Y Return</small>
                                                        <h4 class="pro-val-normal">19.70%</h4>
                                                    </li>
                                                </ul>
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>NAV</small>
                                                        <h4 class="pro-val-normal">18.450</h4>
                                                    </li>
                                                    <li>
                                                        <small>Suggested Horizon</small>
                                                        <h4 class="pro-val-normal">3Y & above</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p>Value Research</p>
                                                    <p class="mt5">
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                <a href="javascript:void(0)" class="view-details ca-more pop-like" data-url="index.php?option=com_users&view=reset&layout=mutual_popup&tmpl=component" title="mutual-popup"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">4 days ago</p>
                                                    <p class="mb10 sub-hea">Equity - Diversified</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">Franklin India High</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-33 clearfix">
                                                    <li>
                                                        <small>1Y Return</small>
                                                        <h4 class="pro-val-normal">7.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>3Y Return</small>
                                                        <h4 class="pro-val-normal">10.05%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>5Y Return</small>
                                                        <h4 class="pro-val-normal">13.25%</h4>
                                                    </li>
                                                </ul>
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>NAV</small>
                                                        <h4 class="pro-val-normal">30.16</h4>
                                                    </li>
                                                    <li>
                                                        <small>Suggested Horizon</small>
                                                        <h4 class="pro-val-normal">3Y & above</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p>Value Research</p>
                                                    <p class="mt5">
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">4 days ago</p>
                                                    <p class="mb10 sub-hea">Equity - Diversified</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">BSL Long Term</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-33 clearfix">
                                                    <li>
                                                        <small>1Y Return</small>
                                                        <h4 class="pro-val-normal">7.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>3Y Return</small>
                                                        <h4 class="pro-val-normal">10.05%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>5Y Return</small>
                                                        <h4 class="pro-val-normal">13.25%</h4>
                                                    </li>
                                                </ul>
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>NAV</small>
                                                        <h4 class="pro-val-normal">30.16</h4>
                                                    </li>
                                                    <li>
                                                        <small>Suggested Horizon</small>
                                                        <h4 class="pro-val-normal">3Y & above</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p>Value Research</p>
                                                    <p class="mt5">
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">15 days ago</p>
                                                    <p class="mb10 sub-hea">Equity Diversified Funds</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">Axis Equity Fund</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-33 clearfix">
                                                    <li>
                                                        <small>1Y Return</small>
                                                        <h4 class="pro-val-normal">1.96%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>3Y Return</small>
                                                        <h4 class="pro-val-normal">10.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>5Y Return</small>
                                                        <h4 class="pro-val-normal">19.70%</h4>
                                                    </li>
                                                </ul>
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>NAV</small>
                                                        <h4 class="pro-val-normal">18.450</h4>
                                                    </li>
                                                    <li>
                                                        <small>Suggested Horizon</small>
                                                        <h4 class="pro-val-normal">3Y & above</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p>Value Research</p>
                                                    <p class="mt5">
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">4 days ago</p>
                                                    <p class="mb10 sub-hea">Equity - Diversified</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">Franklin India High</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-33 clearfix">
                                                    <li>
                                                        <small>1Y Return</small>
                                                        <h4 class="pro-val-normal">7.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>3Y Return</small>
                                                        <h4 class="pro-val-normal">10.05%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>5Y Return</small>
                                                        <h4 class="pro-val-normal">13.25%</h4>
                                                    </li>
                                                </ul>
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>NAV</small>
                                                        <h4 class="pro-val-normal">30.16</h4>
                                                    </li>
                                                    <li>
                                                        <small>Suggested Horizon</small>
                                                        <h4 class="pro-val-normal">3Y & above</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p>Value Research</p>
                                                    <p class="mt5">
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="shadow-panel slide-box">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago">4 days ago</p>
                                                    <p class="mb10 sub-hea">Equity - Diversified</p>
                                                    <div class="panel-compare-action">
                                                        <label class="checkbox wish-compare">
                                                        <input type="checkbox" id="" name="" value="">
                                                        </label>
                                                    </div>
                                                    <div class="panel-heading-name">
                                                        <h5 class="pro-name"><a href="javascript:void(0)">BSL Long Term</a></h5>
                                                    </div>
                                                    <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-33 clearfix">
                                                    <li>
                                                        <small>1Y Return</small>
                                                        <h4 class="pro-val-normal">7.25%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>3Y Return</small>
                                                        <h4 class="pro-val-normal">10.05%</h4>
                                                    </li>
                                                    <li class="border">
                                                        <small>5Y Return</small>
                                                        <h4 class="pro-val-normal">13.25%</h4>
                                                    </li>
                                                </ul>
                                                <ul class="pd-list-50 clearfix">
                                                    <li>
                                                        <small>NAV</small>
                                                        <h4 class="pro-val-normal">30.16</h4>
                                                    </li>
                                                    <li>
                                                        <small>Suggested Horizon</small>
                                                        <h4 class="pro-val-normal">3Y & above</h4>
                                                    </li>
                                                </ul>
                                                <div class="axisdir-view-gir">
                                                    <p>Value Research</p>
                                                    <p class="mt5">
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-fill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                        <i class="sprite-img star-unfill"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checklist clearfix">
                          <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchcallsmutualfundideas'); ?>" class="viewall">View All</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                              
  
 
    
    
<!-- DIALOG SECTION -->

<!-- Pop up boxes -->
<div class="jqpop pop-pack">

</div>


