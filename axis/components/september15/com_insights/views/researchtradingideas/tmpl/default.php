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
        <div class="container_12">
        <div class="row clearfix">
            <div class="grid_12">
            <div class="box-start">
                <div class="stock-head clearfix">
                            <h1 class="stockhead">Trading Ideas</h1>
                            <h4 class="stock-subdes">Our Technical & Derivatives Research teams identify these trading opportunities based on
short term trends. Investment horizon can range from 1 day to 1 month.</h4>
                        </div>
                <div class="filter-row">
                    <div class="clearfix">
                        <div class="filter-button">
                            <div class="fill-box">
                                <p class="fil-dis"><i class="sprite-img filter-icon"></i><span class="dis-none">Refine Search</span></p>
                            </div>
                            <div class="filter-content-box">
                                <div class="clearfix">
                                        <div class="acc-fill row serach-box-fly clearfix">
                                        <h3 class="filter-box-heading">Open Calls</h3>
                                        <p class="fill-expansion"><i class="sprite-img fil-plus"></i>  </p>
                                    </div>
                                    <ul class="fill-box1 fill-call-data clearfix">
                                    	<li>
                                        	<div class="custom-radio">
                                                    <label>Entry Price</label>
                                                    <ul class="radio-sec rd-btn clearfix">
                                                        <li>
                                                            <label for="inv-all" class="c-radio">
                                                            <input type="radio" name="value1" id="inv-all" checked>
                                                            <span class="listitems">All</span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="inv-6" class="c-radio">
                                                            <input type="radio" name="value1" id="inv-6">
                                                            <span class="listitems">Triggered</span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="inv-12" class="c-radio">
                                                            <input type="radio" name="value1" id="inv-12">
                                                            <span class="listitems">Not Triggered </span> </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                        </li>
                                        <li>
                                        	<div class="custom-radio">
                                                    <label>Current Reward : Risk</label>
                                                    <ul class="radio-sec rd-btn clearfix">
                                                        <li>
                                                            <label for="ct1" class="c-radio">
                                                            <input type="radio" name="r1" id="ct1" checked>
                                                            <span class="listitems">  All </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="ct2" class="c-radio">
                                                            <input type="radio" name="r1" id="ct2">
                                                            <span class="listitems"> &gt;1.1 </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="ct3" class="c-radio">
                                                            <input type="radio" name="r1" id="ct3">
                                                            <span class="listitems"> &gt;2.1 </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="ct4" class="c-radio">
                                                            <input type="radio" name="r1" id="ct4">
                                                            <span class="listitems"> &gt;3.1 </span> </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                       	</li>
                                        <li>
                                       	<div class="custom-radio">
                                                    <label>Potential Upside / Downside from entry</label>
                                                    <ul class="radio-sec rd-btn clearfix">
                                                        <li>
                                                            <label for="pot1" class="c-radio">
                                                            <input type="radio" name="potential-upside" id="pot1" checked>
                                                            <span class="listitems">  All </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="pot2" class="c-radio">
                                                            <input type="radio" name="potential-upside" id="pot2">
                                                            <span class="listitems"> &gt;6 </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="pot3" class="c-radio">
                                                            <input type="radio" name="potential-upside" id="pot3">
                                                            <span class="listitems"> &gt;4 </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="pot4" class="c-radio">
                                                            <input type="radio" name="potential-upside" id="pot4">
                                                            <span class="listitems"> &gt;2 </span> </label>
                                                        </li>
                                                    </ul>
                                                </div> 
                                       </li>
                                        
                                    </ul>
                                    <div class="acc-fill row serach-box-fly clearfix">
                                        <h3 class="filter-box-heading">Closed Calls</h3>
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
                                                            <span class="listitems"> &gt;6% </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="book-10" class="c-radio">
                                                            <input type="radio" name="booked-profilt" id="book-10">
                                                            <span class="listitems"> &gt;4% </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="book-20" class="c-radio">
                                                            <input type="radio" name="booked-profilt" id="book-20">
                                                            <span class="listitems"> &gt;2% </span> </label>
                                                        </li>
                                                        <li>
                                                            <label for="book-30" class="c-radio">
                                                            <input type="radio" name="booked-profilt" id="book-30">
                                                            <span class="listitems"> &lt;2% </span> </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                                <div class="serach-box-fly clearfix">
                                    <div class="clearfix">
                                        <h3 class="filter-box-heading">Select Stock(s)</h3>
                                    </div>
                                    <ul class="fill-box1 mt20 clearfix">
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
                                                <label>Product Type</label>
                                                <select class="select">
                                                    <option>All</option>
                                                    <option>Andhara prdesh</option>
                                                    <option>Telangana</option>
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
                                 <div class="serach-box-fly clearfix">
                                    <div class="clearfix">
                                        <h3 class="filter-box-heading">Derivatives</h3>
                                    </div>
                                    <ul class="fill-box1 mt20 clearfix">
                                    	<li>
                                       	<div class="custom-radio">
                                                <label>Instrument</label>
                                                <ul class="radio-sec rd-btn clearfix">
                                                    <li>
                                                        <label for="der-all" class="c-radio">
                                                        <input type="radio" name="derivatives" id="mar-all" checked>
                                                        <span class="listitems"> All </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="der-fut" class="c-radio">
                                                        <input type="radio" name="derivatives" id="der-fut">
                                                        <span class="listitems"> Futures </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="der-opt" class="c-radio">
                                                        <input type="radio" name="derivatives" id="der-opt">
                                                        <span class="listitems"> Options </span> </label>
                                                    </li>
                                                </ul>
                                            </div> 
                                       </li>
                                       <li>
                                       <div class="custom-radio selectme">
                                                <label>Underlying</label>
                                                <ul class="radio-sec rd-btn clearfix">
                                                    <li>
                                                        <label for="und-all" class="c-radio">
                                                        <input type="radio" name="underlaying" id="und-all" checked>
                                                        <span class="listitems"> All </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="und-stock" class="c-radio">
                                                        <input type="radio" name="underlaying" id="und-stock">
                                                        <span class="listitems"> Stock </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="und-index" class="c-radio">
                                                        <input type="radio" name="underlaying" id="und-index">
                                                        <span class="listitems"> Index </span> </label>
                                                    </li>
                                                </ul>
                                            </div>
                                       </li>
                                       <li>
                                       <div class="custom-radio">
                                                <label>Underlying Stock / Index Search</label>
                                                <div class="page-search">
                                                    <input type="text" class="search-page-inp" placeholder="All">
                                                    <p class="search-icon-area"><i class="sprite-img search-page-icon"></i></p>
                                                </div>
                                            </div>
                                       </li>
                                    </ul>
                                    
                                </div>
                                 <div class="serach-box-fly clearfix">
                                    <ul class="fill-box1 mt20 clearfix">
                                    	<li>
                                       	<div class="custom-radio">
                                                <label>Product Type</label>
                                                <ul class="radio-sec rd-btn clearfix">
                                                    <li>
                                                        <label for="pro-all" class="c-radio">
                                                        <input type="radio" name="protype" id="pro-all" checked>
                                                        <span class="listitems"> All </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="pro-type" class="c-radio">
                                                        <input type="radio" name="protype" id="pro-type">
                                                        <span class="listitems"> Product Type </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="pro-bnst" class="c-radio">
                                                        <input type="radio" name="protype" id="pro-bnst">
                                                        <span class="listitems"> BNST </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="pro-snbt" class="c-radio">
                                                        <input type="radio" name="protype" id="pro-snbt">
                                                        <span class="listitems"> SNBT </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="pro-posi" class="c-radio">
                                                        <input type="radio" name="protype" id="pro-posi">
                                                        <span class="listitems"> Positional </span> </label>
                                                    </li>
                                                </ul>
                                            </div> 
                                       </li>
                                       <li>
                                       <div class="custom-radio selectme">
                                                <label>Recommendation</label>
                                                <ul class="radio-sec rd-btn clearfix">
                                                    <li>
                                                        <label for="re-all" class="c-radio">
                                                        <input type="radio" name="recomendation" id="re-all" checked>
                                                        <span class="listitems"> All </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="re-buy" class="c-radio">
                                                        <input type="radio" name="recomendation" id="re-buy">
                                                        <span class="listitems"> Buy </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="re-sell" class="c-radio">
                                                        <input type="radio" name="recomendation" id="re-sell">
                                                        <span class="listitems"> Sell </span> </label>
                                                    </li>
                                                </ul>
                                            </div>
                                       </li>
                                       <li>
                                       <div class="custom-radio selectme">
                                                <label>Issued / Closed</label>
                                                <ul class="radio-sec rd-btn clearfix">
                                                    <li>
                                                        <label for="issue-all" class="c-radio">
                                                        <input type="radio" name="issueclose" id="issue-all" checked>
                                                        <span class="listitems"> All </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="issue-today" class="c-radio">
                                                        <input type="radio" name="issueclose" id="issue-today">
                                                        <span class="listitems"> Today </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="issue-week" class="c-radio">
                                                        <input type="radio" name="issueclose" id="issue-week">
                                                        <span class="listitems"> Last Week </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="issue-month" class="c-radio">
                                                        <input type="radio" name="issueclose" id="issue-month">
                                                        <span class="listitems"> Last Month </span> </label>
                                                    </li>
                                                </ul>
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
                            <span class="filter-label">Entry Price</span>
                            <span class="filter-name">Triggered</span>
                            <i class="sprite-img filter-ele-close"></i>
                        </p>
                        <p class="filter-box-name">
                            <span class="filter-label">Current Reward : Risk</span>
                            <span class="filter-name"> &gt; 1.1</span>
                            <i class="sprite-img filter-ele-close"></i>
                        </p>
                        <p class="filter-box-name">
                            <span class="filter-label">Potential Upside / Downside from entry</span>
                            <span class="filter-name"> &gt; 6 </span>
                            <i class="sprite-img filter-ele-close"></i>
                        </p>
                        <p class="filter-box-name">
                            <span class="filter-label">Booked Profit</span>
                            <span class="filter-name"> &gt; 6% </span>
                            <i class="sprite-img filter-ele-close"></i>
                        </p>
                    </div>
                </div>
                <div class="wish-compare">
                    <div class="stock-details clearfix">
                    <div class="sort-slide-num clearfix">
                    	<ul class="gri-lis">
                        <li><a href="javascript:void(0)" class="grid-ico active"><i class="sprite-img li-grid-list grid-icon"></i></a></li>
                        	<li><a href="javascript:void(0)" class="list-ico"><i class="sprite-img li-grid-list list-icon"></i></a></li>
                        </ul>
                        <div class="sort-by">
                            <label><span class="sortname dis-none">Sort by :</span></label>
                            <div class="sort-name"> <span class="sort-select-name">Date</span> <i class="sprite-img sort-icon"></i>
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
                        <p class="msg-select">2 Schemes selected please click on any of above icon to complete the task</p>
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
                    <div class="grid-box">
                        <ul class="invest-ment mutualfundIdeas-list clearfix">
                            <li class="shadow-panel">
                                    <div class="panel clearfix">
                                        <div class="panel-heading">
                                            <div class="clearfix">
                                                <p class="timeago mob-dis">2 mins ago</p>
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
                                            <div class="tablelables mt20">
                                                <p>Call given us</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="pd-list-50 clearfix">
                                                <li class="mtn-5">
                                                    <small>Current Price</small>
                                                    <h4 class="pro-val-normal">100.25</h4>
                                                </li>
                                                <li class="border mtn-5">
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
                                                <li class="list-block">
                                                    <small>Target Spread</small>
                                                    <h4 class="pro-val-normal">27.00</h4>
                                                </li>
                                                <li class="list-block border">
                                                    <small>Stop loss</small>
                                                    <h4 class="pro-val-normal">1050</h4>
                                                </li>
                                            </ul>
                                            <div class="axisdir-view-gir">
                                            	
                                                <p>AxisDirect View:<a href="javascript:void(0)" data-url="index.php?

option=com_users&view=reset&layout=trading_popup&tmpl=component" title="trading-popup" class="pop-like"><img src="images/buy.png" class="buy-icon"></a></p>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                        </div>
                                    </div>
                                </li>
                            <li class="shadow-panel">
                                <div class="panel clearfix">
                                    <div class="panel-heading">
                                        <div class="clearfix">
                                            <p class="timeago mob-dis">Closed : 20 mins ago</p>
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
                                        <div class="tablelables mt20">
                                                <p>Call given us</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="pd-list-50 clearfix">
                                            <li class="mtn-5">
                                                <small>Current Price</small>
                                                <h4 class="pro-val-normal">231.50</h4>
                                            </li>
                                            <li class="border mtn-5">
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
                                            <li class="list-block">
                                                    <small>Target Spread</small>
                                                    <h4 class="pro-val-normal">27.00</h4>
                                                </li>
                                                <li class="list-block border">
                                                    <small>Stop loss</small>
                                                    <h4 class="pro-val-normal">1050</h4>
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
                            <li class="shadow-panel">
                                <div class="panel clearfix">
                                    <div class="panel-heading">
                                        <div class="clearfix">
                                            <p class="timeago  mob-dis">Closed 20 mins ago</p>
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
                                        <div class="tablelables mt20">
                                                <p>Call given us</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="pd-list-50 clearfix">
                                            <li class="mtn-5">
                                                <small>Current Price</small>
                                                <h4 class="pro-val-normal">2010.00</h4>
                                            </li>
                                            <li class="border mtn-5">
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
                                            <li class="list-block">
                                                    <small>Target Spread</small>
                                                    <h4 class="pro-val-normal">27.00</h4>
                                                </li>
                                                <li class="list-block border">
                                                    <small>Stop loss</small>
                                                    <h4 class="pro-val-normal">1050</h4>
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
                            <li class="shadow-panel">
                                <div class="panel clearfix">
                                    <div class="panel-heading">
                                        <div class="clearfix">
                                            <p class="timeago  mob-dis">2 mins ago</p>
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
                                        <div class="tablelables mt20">
                                                <p>Call given us</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="pd-list-50 clearfix">
                                            <li class="mtn-5">
                                                <small>Current Price</small>
                                                <h4 class="pro-val-normal">100.25</h4>
                                            </li>
                                            <li class="border mtn-5">
                                                <small>Entry Price Range</small>
                                                <p class="entryprice-trade">95 - 97</p>
                                            </li>
                                            <li>
                                                <small>Stop Loss</small>
                                                <h4 class="pro-val-normal">93.50</h4>
                                            </li>
                                            <li class="border">
                                                <small>Target</small>
                                                <h4 class="pro-val-normal pro-val">103.50</h4>
                                            </li>
                                            <li class="list-block">
                                                    <small>Target Spread</small>
                                                    <h4 class="pro-val-normal">27.00</h4>
                                                </li>
                                                <li class="list-block border">
                                                    <small>Stop loss</small>
                                                    <h4 class="pro-val-normal">1050</h4>
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
                            <li class="shadow-panel">
                                <div class="panel clearfix">
                                    <div class="panel-heading">
                                        <div class="clearfix">
                                            <p class="timeago mob-dis">Closed : 20 mins ago</p>
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
                                        <div class="tablelables mt20">
                                                <p>Call given us</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="pd-list-50 clearfix">
                                            <li class="mtn-5">
                                                <small>Current Price</small>
                                                <h4 class="pro-val-normal">231.50</h4>
                                            </li>
                                            <li class="border mtn-5">
                                                <small>Entry Price</small>
                                                <p class="entryprice-trade">230</p>
                                            </li>
                                            <li>
                                                <small>Loss Booked at</small>
                                                <h4 class="pro-val-normal pro-val">239.00</h4>
                                            </li>
                                            <li class="border">
                                                <small>Target</small>
                                                <h4 class="pro-val-normal">230.50</h4>
                                            </li>
                                            <li class="list-block">
                                                <small>Current Price</small>
                                                <h4 class="pro-val-normal">231.50</h4>
                                            </li>
                                            <li class="list-block border">
                                                <small>Entry Price</small>
                                                <p class="entryprice-trade">230</p>
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
                            <li class="shadow-panel">
                                <div class="panel clearfix">
                                    <div class="panel-heading">
                                        <div class="clearfix">
                                            <p class="timeago mob-dis">Closed 20 mins ago</p>
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
                                        <div class="tablelables mt20">
                                                <p>Call given us</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="pd-list-50 clearfix">
                                            <li class="mtn-5">
                                                <small>Current Price</small>
                                                <h4 class="pro-val-normal">2010.00</h4>
                                            </li>
                                            <li class="border mtn-5">
                                                <small>Entry Price Range</small>
                                                <p class="entryprice-trade">250.00 - 260.00</p>
                                            </li>
                                            <li>
                                                <small>Stop Loss</small>
                                                <h4 class="pro-val-normal">270.00</h4>
                                            </li>
                                            <li class="border">
                                                <small>Profit Booked at</small>
                                                <h4 class="pro-val-normal pro-val">240.00</h4>
                                            </li>
                                            <li class="list-block">
                                                    <small>Target Spread</small>
                                                    <h4 class="pro-val-normal">27.00</h4>
                                                </li>
                                                <li class="list-block border">
                                                    <small>Stop loss</small>
                                                    <h4 class="pro-val-normal">1050</h4>
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