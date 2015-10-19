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
        <div class="new-banner">
            <img src="images/banner.jpg">
        </div>
        <!--  Stock list Section -->
        <div class="container_12">
            <div class="row clearfix">
                <div class="grid_12">
                    <div class="box-start">
                        <div class="stock-head clearfix">
                            <h1 class="stockhead">Mutual Fund Ideas</h1>
                            <h4 class="stock-subdes">Returns displayed below for 1 Year duration are absolute and for the greater
                                duration, they are compounded Annual Growth Rates.
                            </h4>
                        </div>
                        <div class="filter-row">
                            <div class="clearfix">
                                <div class="filter-button">
                                    <div class="fill-box">
                                        <p class="fil-dis"><i class="sprite-img filter-icon"></i><span class="dis-none">Refine Search</span></p>
                                    </div>
                                    <div class="filter-content-box">
                                        <div class="serach-box-fly clearfix">
                                            <ul class="fill-box1 clearfix">
                                                <li>
                                                    <div class="fill-box1">
                                                        <div class="custom-radio selectme">
                                                            <label>AMC</label>
                                                            <select class="select">
                                                                <option>Select</option>
                                                                <option>AMC1</option>
                                                                <option>AMC2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio selectme">
                                                        <label>Category</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>Category1</option>
                                                            <option>Category2</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio selectme">
                                                        <label>Subcategory</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>Subcategory1</option>
                                                            <option>Subcategory2</option>
                                                        </select>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="serach-box-fly clearfix">
                                            <ul class="fill-box1 clearfix">
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Value Research Rating</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="all" class="c-radio">
                                                                <input type="radio" name="1" id="v-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="today" class="c-radio">
                                                                <input type="radio" name="1" id="today">
                                                                <span class="listitems">3 stars</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="lastweek" class="c-radio">
                                                                <input type="radio" name="1" id="lastweek">
                                                                <span class="listitems">4 stars</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="lastmonth" class="c-radio">
                                                                <input type="radio" name="1" id="lastmonth">
                                                                <span class="listitems">5 stars</span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Value Research Return Grade</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="re-all" class="c-radio">
                                                                <input type="radio" name="2" id="vre-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="re-buy" class="c-radio">
                                                                <input type="radio" name="2" id="re-buy">
                                                                <span class="listitems">High </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="re-sell" class="c-radio">
                                                                <input type="radio" name="2" id="re-sell">
                                                                <span class="listitems">Above Average </span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Value Research Risk Grade</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="re-all" class="c-radio">
                                                                <input type="radio" name="3" id="risk-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="re-buy" class="c-radio">
                                                                <input type="radio" name="3" id="re-buy">
                                                                <span class="listitems">High </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="re-sell" class="c-radio">
                                                                <input type="radio" name="3" id="re-sell">
                                                                <span class="listitems">Above Average </span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="serach-box-fly clearfix">
                                            <ul class="fill-box1 clearfix">
                                                <li>
                                                    <div class="custom-radio selectme">
                                                        <label>Recommende Investment Horizon</label>
                                                        <select class="select">
                                                            <option>Select</option>
                                                            <option>Subcategory1</option>
                                                            <option>Subcategory2</option>
                                                        </select>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="serach-box-fly serach-box-fly-last search-fly-btn">
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
                                    <span class="filter-label">Category</span>
                                    <span class="filter-name">Category1</span>
                                    <i class="sprite-img filter-ele-close"></i>
                                </p>
                                <p class="filter-box-name">
                                    <span class="filter-label">Published Date</span>
                                    <span class="filter-name">Today</span>
                                    <i class="sprite-img filter-ele-close"></i>
                                </p>
                                <p class="filter-box-name">
                                    <span class="filter-label">Format</span>
                                    <span class="filter-name">Video</span>
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
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago mob-dis">15 days ago</p>
                                                <p class="mb10 sub-hea">Equity Diversified Funds</p>
                                                <div class="panel-compare-action">
                                                    <label class="checkbox wish-compare-in">
                                                    <input type="checkbox" id="" name="" value="">
                                                    </label>
                                                </div>
                                                <div class="panel-heading-name">
                                                    <h5 class="pro-name"><a href="javascript:void(0)">Axis Equity Fund</a></h5>
                                                </div>
                                                <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                            </div>
                                            <div class="tablelables mt20">
                                                <small>Benchmark</small>
                                                <p>3 years and above</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-33 clearfix">
                                                <li class="mtn-5">
                                                    <small>1Y Return</small>
                                                    <h4 class="pro-val-normal">1.96%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>3Y Return</small>
                                                    <h4 class="pro-val-normal">10.25%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>5Y Return</small>
                                                    <h4 class="pro-val-normal">19.70%</h4>
                                                </li>
                                            </ul>
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>NAV</small>
                                                    <h4 class="pro-val-normal">18.450</h4>
                                                </li>
                                                <li class="mtn-5">
                                                    <small>Suggested Horizon</small>
                                                    <h4 class="pro-val-normal">3Y & above</h4>
                                                </li>
                                            </ul>
                                            <div class="axisdir-view-gir axisdir-mut-view">
                                                <p>Value Research</p>
                                                <p class="mt5">
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">TRADE</a>
                                            <a href="javascript:void(0)" class="view-details ca-more pop-like" data-url="index.php?option=com_users&view=reset&layout=mutual_popup&tmpl=component" title="mutual-popup"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago  mob-dis">4 days ago</p>
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
                                            <div class="tablelables mt20">
                                                <small>Benchmark</small>
                                                <p>3 years and above</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-33 clearfix">
                                                <li class="mtn-5">
                                                    <small>1Y Return</small>
                                                    <h4 class="pro-val-normal">7.25%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>3Y Return</small>
                                                    <h4 class="pro-val-normal">10.05%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>5Y Return</small>
                                                    <h4 class="pro-val-normal">13.25%</h4>
                                                </li>
                                            </ul>
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>NAV</small>
                                                    <h4 class="pro-val-normal">30.16</h4>
                                                </li>
                                                <li class="mtn-5">
                                                    <small>Suggested Horizon</small>
                                                    <h4 class="pro-val-normal">3Y & above</h4>
                                                </li>
                                            </ul>
                                            <div class="axisdir-view-gir axisdir-mut-view">
                                                <p>Value Research</p>
                                                <p class="mt5">
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">TRADE</a>
                                            <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago mob-dis">4 days ago</p>
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
                                            <div class="tablelables mt20">
                                                <small>Benchmark</small>
                                                <p>3 years and above</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-33 clearfix">
                                                <li class="mtn-5">
                                                    <small>1Y Return</small>
                                                    <h4 class="pro-val-normal">7.25%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>3Y Return</small>
                                                    <h4 class="pro-val-normal">10.05%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>5Y Return</small>
                                                    <h4 class="pro-val-normal">13.25%</h4>
                                                </li>
                                            </ul>
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>NAV</small>
                                                    <h4 class="pro-val-normal">30.16</h4>
                                                </li>
                                                <li class="mtn-5">
                                                    <small>Suggested Horizon</small>
                                                    <h4 class="pro-val-normal">3Y & above</h4>
                                                </li>
                                            </ul>
                                            <div class="axisdir-view-gir axisdir-mut-view">
                                                <p>Value Research</p>
                                                <p class="mt5">
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">TRADE</a>
                                            <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago mob-dis">15 days ago</p>
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
                                            <div class="tablelables mt20">
                                                <small>Benchmark</small>
                                                <p>3 years and above</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-33 clearfix">
                                                <li class="mtn-5">
                                                    <small>1Y Return</small>
                                                    <h4 class="pro-val-normal">1.96%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>3Y Return</small>
                                                    <h4 class="pro-val-normal">10.25%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>5Y Return</small>
                                                    <h4 class="pro-val-normal">19.70%</h4>
                                                </li>
                                            </ul>
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>NAV</small>
                                                    <h4 class="pro-val-normal">18.450</h4>
                                                </li>
                                                <li class="mtn-5">
                                                    <small>Suggested Horizon</small>
                                                    <h4 class="pro-val-normal">3Y & above</h4>
                                                </li>
                                            </ul>
                                            <div class="axisdir-view-gir axisdir-mut-view">
                                                <p>Value Research</p>
                                                <p class="mt5">
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">TRADE</a>
                                            <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago mob-dis">4 days ago</p>
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
                                            <div class="tablelables mt20">
                                                <small>Benchmark</small>
                                                <p>3 years and above</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-33 clearfix">
                                                <li class="mtn-5">
                                                    <small>1Y Return</small>
                                                    <h4 class="pro-val-normal">7.25%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>3Y Return</small>
                                                    <h4 class="pro-val-normal">10.05%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>5Y Return</small>
                                                    <h4 class="pro-val-normal">13.25%</h4>
                                                </li>
                                            </ul>
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>NAV</small>
                                                    <h4 class="pro-val-normal">30.16</h4>
                                                </li>
                                                <li class="mtn-5">
                                                    <small>Suggested Horizon</small>
                                                    <h4 class="pro-val-normal">3Y & above</h4>
                                                </li>
                                            </ul>
                                            <div class="axisdir-view-gir axisdir-mut-view">
                                                <p>Value Research</p>
                                                <p class="mt5">
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">TRADE</a>
                                            <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel clearfix">
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago mob-dis">4 days ago</p>
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
                                            <div class="tablelables mt20">
                                                <small>Benchmark</small>
                                                <p>3 years and above</p>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-33 clearfix">
                                                <li class="mtn-5">
                                                    <small>1Y Return</small>
                                                    <h4 class="pro-val-normal">7.25%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>3Y Return</small>
                                                    <h4 class="pro-val-normal">10.05%</h4>
                                                </li>
                                                <li class="border mtn-5">
                                                    <small>5Y Return</small>
                                                    <h4 class="pro-val-normal">13.25%</h4>
                                                </li>
                                            </ul>
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>NAV</small>
                                                    <h4 class="pro-val-normal">30.16</h4>
                                                </li>
                                                <li class="mtn-5">
                                                    <small>Suggested Horizon</small>
                                                    <h4 class="pro-val-normal">3Y & above</h4>
                                                </li>
                                            </ul>
                                            <div class="axisdir-view-gir axisdir-mut-view">
                                                <p>Value Research</p>
                                                <p class="mt5">
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-fill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                    <i class="sprite-img data-points-icons star-unfill"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="panel-footer clearfix">
                                            <a href="javascript:void(0)" class="primary-btn grid-button">TRADE</a>
                                            <a href="javascript:void(0)" class="view-details ca-more" ><span>View Details</span><i class="sprite-img arrow-right"></i></a>
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
                               
  
    <!-- DIALOG SECTION -->

<!-- Pop up boxes -->

<div class="jqpop pop-pack">

</div>