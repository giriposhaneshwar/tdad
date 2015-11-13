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
$this->_addPath( 'template', JPATH_COMPONENT  . '/views/researchcallsoverview/tmpl' );
echo $this->loadTemplate('breadcrumb');
						   
						   ?>
<section class="site-start-modules">
        <!--  Stock list Section -->
        <div class="new-banner">
            <img src="images/banner.jpg">
        </div>
        <div class="container_12">
            <div class="row clearfix">
                <div class="grid_12">
                    <div class="box-start">
                        <div class="stock-head clearfix">
                            <h1 class="stockhead">Premium Ideas</h1>
                            <h4 class="stock-subdes">These are the Investment Ideas available to you as per the subscription. Visit our Offerings
                                section to view all the Products.													
                            </h4>
                        </div>
                        <div class="filter-row">
                            <div class="clearfix">
                                <div class="filter-button">
                                    <div class="fill-box">
                                        <p class="fil-dis"><i class="sprite-img filter-icon"></i><span class="dis-none">Refine Search</span></p>
                                    </div>
                                    <div class="filter-content-box">
                                        <div class="row serach-box-fly clearfix">
                                            <ul class="fill-box1">
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Issued / Closed</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="all" class="c-radio">
                                                                <input type="radio" name="2" id="all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="today" class="c-radio">
                                                                <input type="radio" name="2" id="today">
                                                                <span class="listitems">Today</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="lastweek" class="c-radio">
                                                                <input type="radio" name="2" id="lastweek">
                                                                <span class="listitems">Last Week</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="lastmonth" class="c-radio">
                                                                <input type="radio" name="2" id="lastmonth">
                                                                <span class="listitems">Last Month</span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="fill-box1">
                                                        <div class="custom-radio">
                                                            <label>Recommendation</label>
                                                            <ul class="radio-sec rd-btn clearfix">
                                                                <li>
                                                                    <label for="re-all" class="c-radio">
                                                                    <input type="radio" name="1" id="re-all" checked>
                                                                    <span class="listitems">All</span> </label>
                                                                </li>
                                                                <li>
                                                                    <label for="re-buy" class="c-radio">
                                                                    <input type="radio" name="1" id="re-buy">
                                                                    <span class="listitems">Buy </span> </label>
                                                                </li>
                                                                <li>
                                                                    <label for="re-sell" class="c-radio">
                                                                    <input type="radio" name="1" id="re-sell">
                                                                    <span class="listitems">Sell </span> </label>
                                                                </li>
                                                                <li>
                                                                    <label for="re-hold" class="c-radio">
                                                                    <input type="radio" name="1" id="re-hold">
                                                                    <span class="listitems">Hold</span> </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="fill-box1">
                                                        <div class="custom-radio selectme">
                                                            <label>Product Type</label>
                                                            <select class="select">
                                                                <option>All</option>
                                                                <option>Product Type1</option>
                                                                <option>Product Type2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--<div class="clearfix">
                                            <div class="acc-fill row serach-box-fly clearfix">
                                                <h3 class="tertiary-heading filter-box-heading">Open Calls</h3>
                                                <p class="fill-expansion"><i class="sprite-img fil-plus"></i>  </p>
                                            </div>
                                            <ul class="fill-box1 fill-call-data clearfix">
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Investment Horizon from Issued Date</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="inv-all" class="c-radio">
                                                                <input type="radio" name="value1" id="inv-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="inv-6" class="c-radio">
                                                                <input type="radio" name="value1" id="inv-6">
                                                                <span class="listitems">6 - 9M </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="inv-12" class="c-radio">
                                                                <input type="radio" name="value1" id="inv-12">
                                                                <span class="listitems">12M </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="inv-12m" class="c-radio">
                                                                <input type="radio" name="value1" id="inv-12m">
                                                                <span class="listitems"> &gt;12M </span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Potential Upside</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="pot-all" class="c-radio">
                                                                <input type="radio" name="potential-upside" id="pot-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pot-10" class="c-radio">
                                                                <input type="radio" name="potential-upside" id="pot-10">
                                                                <span class="listitems"> &gt;10% </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pot-20" class="c-radio">
                                                                <input type="radio" name="potential-upside" id="pot-20">
                                                                <span class="listitems"> &gt;20% </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pot-30" class="c-radio">
                                                                <input type="radio" name="potential-upside" id="pot-30">
                                                                <span class="listitems"> &gt;30% </span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mt30">
                                                        <label for="cw" class="checkbox">	
                                                        <input type="checkbox" name="" id="cw">
                                                        Only Highly Recommended
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="acc-fill row serach-box-fly clearfix">
                                                <h3 class="tertiary-heading filter-box-heading">Closed Calls</h3>
                                                <p class="fill-expansion"><i class="sprite-img fil-plus"></i>  </p>
                                            </div>
                                            <ul class="fill-box1 fill-call-data clearfix">
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Booked Profit</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="book-all" class="c-radio">
                                                                <input type="radio" name="booked-profilt" id="book-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="book-10g" class="c-radio">
                                                                <input type="radio" name="booked-profilt" id="book-10g">
                                                                <span class="listitems"> &lt;10% </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="book-10" class="c-radio">
                                                                <input type="radio" name="booked-profilt" id="book-10">
                                                                <span class="listitems"> &gt;10% </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="book-20" class="c-radio">
                                                                <input type="radio" name="booked-profilt" id="book-20">
                                                                <span class="listitems"> &gt;20% </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="book-30" class="c-radio">
                                                                <input type="radio" name="booked-profilt" id="book-30">
                                                                <span class="listitems">  &gt;30% </span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                        <div class="row serach-box-fly clearfix">
                                            <div class="clearfix">
                                                <h3 class="tertiary-heading filter-box-heading">Select Stock(s)</h3>
                                            </div>
                                            <div class="mt20">
                                                <ul class="fill-box1">
                                                    <li>
                                                        <div class="custom-radio">
                                                            <label>Market Cap</label>
                                                            <ul class="radio-sec rd-btn clearfix">
                                                                <li>
                                                                    <label for="mar-all" class="c-radio">
                                                                    <input type="radio" name="market-cap" id="mar-all" checked>
                                                                    <span class="listitems"> All </span> </label>
                                                                </li>
                                                                <li>
                                                                    <label for="mar-large" class="c-radio">
                                                                    <input type="radio" name="market-cap" id="mar-large">
                                                                    <span class="listitems"> Large </span> </label>
                                                                </li>
                                                                <li>
                                                                    <label for="mar-mid" class="c-radio">
                                                                    <input type="radio" name="market-cap" id="mar-mid">
                                                                    <span class="listitems"> Mid </span> </label>
                                                                </li>
                                                                <li>
                                                                    <label for="mar-small" class="c-radio">
                                                                    <input type="radio" name="market-cap" id="mar-small">
                                                                    <span class="listitems">  Small </span> </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-radio selectme">
                                                            <label>Sector</label>
                                                            <select class="select">
                                                                <option>All</option>
                                                                <option>Sector1</option>
                                                                <option>Sector2</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-radio">
                                                            <label>Stock Search</label>
                                                            <div class="page-search">
                                                                <input type="text" class="search-page-inp" placeholder="All">
                                                                <p class="search-icon-area"><i class="sprite-img search-page-icon"></i></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="serach-box-fly clearfix">
                                            <ul class="fill-box1 clearfix">
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Status</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="st-all" class="c-radio">
                                                                <input type="radio" name="status" id="st-all" checked>
                                                                <span class="listitems"> All </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="st-type" class="c-radio">
                                                                <input type="radio" name="status" id="st-type">
                                                                <span class="listitems"> Open </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="st-bnst" class="c-radio">
                                                                <input type="radio" name="status" id="st-bnst">
                                                                <span class="listitems"> Close </span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                         <div class="serach-box-fly clearfix">
                                        	<ul class="fill-box1 clearfix">
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Investment Horizon from Issued Date</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="inv-all" class="c-radio">
                                                                <input type="radio" name="value1" id="inv-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="inv-6" class="c-radio">
                                                                <input type="radio" name="value1" id="inv-6">
                                                                <span class="listitems">6 - 9M </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="inv-12" class="c-radio">
                                                                <input type="radio" name="value1" id="inv-12">
                                                                <span class="listitems">12M </span> </label>
                                                            </li>
                                                            <li>

                                                                <label for="inv-12m" class="c-radio">
                                                                <input type="radio" name="value1" id="inv-12m">
                                                                <span class="listitems"> &gt;12M </span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Potential Upsid from now</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="pot-all" class="c-radio">
                                                                <input type="radio" name="potential-upside" id="pot-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pot-10" class="c-radio">
                                                                <input type="radio" name="potential-upside" id="pot-10">
                                                                <span class="listitems"> &gt;10% </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pot-20" class="c-radio">
                                                                <input type="radio" name="potential-upside" id="pot-20">
                                                                <span class="listitems"> &gt;20% </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pot-30" class="c-radio">
                                                                <input type="radio" name="potential-upside" id="pot-30">
                                                                <span class="listitems"> &gt;30% </span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mt30">
                                                        <label for="cw" class="checkbox">	
                                                        <input type="checkbox" name="" id="cw">
                                                        Only Highly Recommended
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                          </div>
                                        <div class="row serach-box-fly serach-box-fly-last search-fly-btn">
                                            <a href="javascript:void(0)" class="secondary-btn fil-fly-btns">APPLY</a>
                                            <a href="javascript:void(0)" class="thrid-btn fil-fly-btns">RESET</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-search">
                                    <input type="text" class="search-page-inp" placeholder="What do you want to research today?..">
                                    <p class="search-icon-area"><i class="sprite-img search-page-icon"></i></p>
                                </div>
                            </div>
                            <div class="filter-elements clearfix">
                                <p class="filter-box-name">
                                    <span class="filter-label">Issued Date</span>
                                    <span class="filter-name">Today</span>
                                    <i class="sprite-img filter-ele-close"></i>
                                </p>
                                <p class="filter-box-name">
                                    <span class="filter-label">Recommendation</span>
                                    <span class="filter-name">Buy</span>
                                    <i class="sprite-img filter-ele-close"></i>
                                </p>
                                <p class="filter-box-name">
                                    <span class="filter-label">Potential Upside</span>
                                    <span class="filter-name">>10%</span>
                                    <i class="sprite-img filter-ele-close"></i>
                                </p>
                            </div>
                        </div>
                        <div class="stock-details clearfix">
                            <div class="sort-slide-num clearfix">
                                <ul class="gri-lis">
                                    <li><a href="javascript:void(0)" class="grid-ico active"><i class="sprite-img li-grid-list grid-icon"></i></a></li>
                                    <li><a href="javascript:void(0)" class="list-ico"><i class="sprite-img li-grid-list list-icon"></i></a></li>
                                </ul>
                                <div class="sort-by">
                                    <label><span class="sortname dis-none">Sort by :</span></label>
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
                            </div>
                            <div class="compare-righ">
                                <ul class="cart-list">
                                    <li><a href="javascript:void(0)" class="wishlist wishlist-in"><i class="sprite-img compare-ar-icon wishlist-icon"></i><span class="dis-none">Add to Watchlist</span></a></li>
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
                        <div class="compare-flyout sel-msg-fly sel-msg-fly-in">
                            <p class="msg-select">2 Schemes selected please click on any of above icon to complete the task</p>
                        </div>
                        <div class="compare-flyout schesme-wish schesme-wish-in">
                            <div class="msg-select clearfix">
                                <p class="add-wish-msg">2 Schemes / Add to Watchlist</p>
                                <div class="sort-name add-wish-sel">
                                    <span class="sort-select-name sel-compare">Date</span> <i class="sprite-img sort-icon"></i>
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
                                            <a href="javascript:void(0)">Wishlist14</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wish-btns">
                                    <a href="javascript:void(0)" class="secondary-btn add-wish">Add</a>
                                    <a href="javascript:void(0)" class="thrid-btn cancel-wish-in">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="sucess-msg wish-suces wish-suces-in" >
                            You have successfully added and 2 Schemes to Important Stocks watchlist!
                        </div>
                        <!-- Close Compare -->
                        <div class="grid-box">
                            <ul class="invest-ment mutualfundIdeas-list clearfix">
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
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
                                                <p class="timeago mob-dis">19 mins ago</p>
                                                <p class="mb10 sub-hea">Pick of the Week</p>
                                                <div class="panel-compare-action">
                                                    <label class="checkbox wish-compare-in">
                                                    <input type="checkbox" id="" name="" value="">
                                                    </label>
                                                </div>
                                                <div class="panel-heading-name">
                                                    <h5 class="pro-name"><a href="javascript:void(0)">MOLDTKPACEQ</a></h5>
                                                </div>
                                                <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                            </div>
                                            <div class="tablelables mt10">
                                                <p>Duration 6 - 9 Months</p>
                                                <p class="mt5">Initiated on 22/08/15</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>Current Price</small>
                                                    <h4 class="pro-val-normal">210.25</h4>
                                                </li>
                                                <li class="border mtn-5">
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
                                                <p class="axis-dir-view-grid"><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                                <ul class="pd-list-50-derviative clearfix">
                                                    <li class="list-block mtn-5">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                    <li class="list-block bor-der">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">Invest</a>
                                            <div class="list-axis-view">
                                            	<p><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago mob-dis">19 mins ago</p>
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
                                            <div class="tablelables mt10">
                                                <p>Duration 6 - 9 Months</p>
                                                <p class="mt5">Initiated on 22/08/15</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>Current Price</small>
                                                    <h4 class="pro-val-normal">29.00</h4>
                                                </li>
                                                <li class="border mtn-5">
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
                                                <p class="axis-dir-view-grid"><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                                <ul class="pd-list-50-derviative clearfix">
                                                    <li class="list-block mtn-5">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                    <li class="list-block bor-der">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">Invest</a>
                                            <div class="list-axis-view">
                                            	<p><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
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
                                                <p class="timeago mob-dis">Closed: 1 hour ago</p>
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
                                            <div class="tablelables mt10">
                                                <p>Duration 6 - 9 Months</p>
                                                <p class="mt5">Initiated on 22/08/15</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>Current Price</small>
                                                    <h4 class="pro-val-normal">382.00</h4>
                                                </li>
                                                <li class="border mtn-5">
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
                                                <p class="axis-dir-view-grid"><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></a></p>
                                                <ul class="pd-list-50-derviative clearfix">
                                                    <li class="list-block mtn-5">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                    <li class="list-block bor-der">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">Invest</a>
                                            <div class="list-axis-view">
                                            	<p><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
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
                                                <p class="timeago mob-dis">19 mins ago</p>
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
                                            <div class="tablelables mt10">
                                                <p>Duration 6 - 9 Months</p>
                                                <p class="mt5">Initiated on 22/08/15</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>Current Price</small>
                                                    <h4 class="pro-val-normal">210.25</h4>
                                                </li>
                                                <li class="border mtn-5">
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
                                                <p class="axis-dir-view-grid"><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                                <ul class="pd-list-50-derviative clearfix">
                                                    <li class="list-block mtn-5">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                    <li class="list-block bor-der">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">Invest</a>
                                            <div class="list-axis-view grid-button">
                                            	<p><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago mob-dis">19 mins ago</p>
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
                                            <div class="tablelables mt10">
                                                <p>Duration 6 - 9 Months</p>
                                                <p class="mt5">Initiated on 22/08/15</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>Current Price</small>
                                                    <h4 class="pro-val-normal">29.00</h4>
                                                </li>
                                                <li class="border mtn-5">
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
                                                <p class="axis-dir-view-grid"><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                                <ul class="pd-list-50-derviative clearfix">
                                                    <li class="list-block mtn-5">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                    <li class="list-block bor-der">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">Invest</a>
                                            <div class="list-axis-view">
                                            	<p><span class="axis-view">AxisDirect View</span><img src="images/buy.png" class="buy-icon"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
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
                                                <p class="timeago mob-dis">Closed: 1 hour ago</p>
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
                                            <div class="tablelables mt10">
                                                <p>Duration 6 - 9 Months</p>
                                                <p class="mt5">Initiated on 22/08/15</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>Current Price</small>
                                                    <h4 class="pro-val-normal">382.00</h4>
                                                </li>
                                                <li class="border mtn-5">
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
                                                <p class="axis-dir-view-grid"><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></a></p>
                                                <ul class="pd-list-50-derviative clearfix">
                                                    <li class="list-block mtn-5">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                    <li class="list-block bor-der">
                                                        <small>Current Price</small>
                                                        <h4 class="pro-val-normal">210.25</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">Invest</a>
                                            <div class="list-axis-view">
                                            	<p><span class="axis-view">AxisDirect View</span><img src="images/buy-disable.png" class="buy-icon"></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>