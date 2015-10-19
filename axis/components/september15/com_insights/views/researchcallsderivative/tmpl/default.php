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
                        <h1 class="stockhead">Derivative Strategies</h1>
                        <h4 class="stock-subdes">These are the strategies in which a basket of positions in two or more 
Derivative Contracts is recommended. Duration is generally till the Expiry Day of the Current month.</h4>
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
                                        	<div class="custom-radio">
                                            <label>Status</label>
                                             <ul class="radio-sec rd-btn clearfix">
                                                    <li>
                                                        <label for="sta-open" class="c-radio">
                                                        <input type="radio" name="Status" id="sta-open" checked>
                                                        <span class="listitems">Open</span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="sta-close" class="c-radio">
                                                        <input type="radio" name="Status" id="sta-close">
                                                        <span class="listitems"> Close </span> </label>
                                                    </li>
                                                </ul>
                                        </div>
                                        </li>
                                        <li>
                                        	<div class="custom-radio">
                                            <label>Published Date</label>
                                            <ul class="radio-sec rd-btn clearfix">
                                                    <li>
                                                        <label for="pub-all" class="c-radio">
                                                        <input type="radio" name="published" id="pub-all" checked>
                                                        <span class="listitems">All</span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="pub-today" class="c-radio">
                                                        <input type="radio" name="published" id="pub-today">
                                                        <span class="listitems"> Today </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="pub-week" class="c-radio">
                                                        <input type="radio" name="published" id="pub-week">
                                                        <span class="listitems"> This Week </span> </label>
                                                    </li>
                                                    <li>
                                                        <label for="pub-month" class="c-radio">
                                                        <input type="radio" name="published" id="pub-month">
                                                        <span class="listitems"> This Month </span> </label>
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
                            <span class="filter-label">Status</span>
                            <span class="filter-name">Open</span>
                            <i class="sprite-img filter-ele-close"></i>
                        </p>
                        <p class="filter-box-name">
                            <span class="filter-label">Published Date</span>
                            <span class="filter-name">Today</span>
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
                <div class="grid-box">
                    <ul class="invest-ment mutualfundIdeas-list clearfix">
                        <li class="shadow-panel">
                                        <div class="panel clearfix">
                                            <div class="panel-heading">
                                                <div class="clearfix">
                                                    <p class="timeago mob-dis">2 mins ago</p>
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
                                                <div class="tablelables mt20">
                                                <p>Startegy given on</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                            </div>
                                            <div class="panel-body">
                                                <ul class="pd-list-50 clearfix">
                                                    <li class="mtn-5">
                                                        <small>Current Ratio</small>
                                                        <h4 class="pro-val-normal">2.125</h4>
                                                    </li>
                                                    <li class="border mtn-5">
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
                                                <div class="axisdir-view-gir clearfix">
                                            	<ul class="pd-list-50-derviative">
                                                <li class="list-block mtn-5">
                                                    <small>Max Risk</small>
                                                    <h4 class="pro-val-normal">1000</h4>
                                                </li>
                                                <li class="list-block bor-der">
                                                    <small>Max Reward</small>
                                                    <h4 class="pro-val-normal">1500</h4>
                                                </li>
                                                </ul>
                                            </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                                
                                                <a href="javascript:void(0)" class="view-details ca-more pop-like" data-url="index.php?

option=com_users&view=reset&layout=derivative_pair_popup&tmpl=component" title="derivative-pair-popup"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                        <li class="shadow-panel">
                            <div class="panel clearfix">
                                <div class="panel-heading">
                                    <div class="clearfix">
                                        <p class="timeago mob-dis">2 mins ago</p>
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
                                    <div class="tablelables mt20">
                                                <p>Startegy given on</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                </div>
                                <div class="panel-body">
                                    <ul class="pd-list-50 clearfix">
                                        <li class="mtn-5">
                                            <small>Current Spread</small>
                                            <h4 class="pro-val-normal">15.26</h4>
                                        </li>
                                        <li class="border mnt-20">
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
                                    <div class="axisdir-view-gir">
                                            	<ul class="pd-list-50-derviative clearfix">
                                                <li class="list-block mtn-5">
                                                    <small>Max Risk</small>
                                                    <h4 class="pro-val-normal">1000</h4>
                                                </li>
                                                <li class="list-block">
                                                    <small>Max Reward</small>
                                                    <h4 class="pro-val-normal">1500</h4>
                                                </li>
                                                </ul>
                                            </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                    <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="shadow-panel">
                            <div class="panel clearfix">
                                <div class="panel-heading">
                                    <div class="clearfix">
                                        <p class="timeago mob-dis">2 mins ago</p>
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
                                    <div class="tablelables mt20">
                                                <p>Startegy given on</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                </div>
                                <div class="panel-body">
                                    <ul class="pd-list-50 clearfix">
                                        <li class="mtn-5">
                                            <small>Current Premium</small>
                                            <h4 class="pro-val-normal">100.00</h4>
                                        </li>
                                        <li class="border mtn-5">
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
                                    <div class="axisdir-view-gir">
                                            	<ul class="pd-list-50-derviative clearfix">
                                                <li class="list-block mtn-5">
                                                    <small>Max Risk</small>
                                                    <h4 class="pro-val-normal">1000</h4>
                                                </li>
                                                <li class="list-block">
                                                    <small>Max Reward</small>
                                                    <h4 class="pro-val-normal">1500</h4>
                                                </li>
                                                </ul>
                                            </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                    <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="shadow-panel">
                            <div class="panel clearfix">
                                <div class="panel-heading clearfix">
                                    <div class="clearfix">
                                        <p class="timeago mob-dis">2 mins ago</p>
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
                                    <div class="tablelables mt20">
                                                <p>Startegy given on</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                </div>
                                <div class="panel-body">
                                    <ul class="pd-list-50 clearfix">
                                        <li class="mtn-5">
                                            <small>Current Ratio</small>
                                            <h4 class="pro-val-normal">2.125</h4>
                                        </li>
                                        <li class="border mtn-5">
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
                                    <div class="axisdir-view-gir">
                                            	<ul class="pd-list-50-derviative clearfix">
                                                <li class="list-block mtn-5">
                                                    <small>Max Risk</small>
                                                    <h4 class="pro-val-normal">1000</h4>
                                                </li>
                                                <li class="list-block">
                                                    <small>Max Reward</small>
                                                    <h4 class="pro-val-normal">1500</h4>
                                                </li>
                                                </ul>
                                            </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                    <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="shadow-panel">
                            <div class="panel clearfix">
                                <div class="panel-heading">
                                    <div class="clearfix">
                                        <p class="timeago mob-dis">2 mins ago</p>
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
                                    <div class="tablelables mt20">
                                                <p>Startegy given on</p>
                                                <p>29-09-2015,05:26 PM</p>
                                    		</div>
                                </div>
                                <div class="panel-body">
                                    <ul class="pd-list-50 clearfix">
                                        <li class="mtn-5">
                                            <small>Current Spread</small>
                                            <h4 class="pro-val-normal">15.26</h4>
                                        </li>
                                        <li class="border mtn-5">
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
                                    <div class="axisdir-view-gir">
                                            	<ul class="pd-list-50-derviative clearfix">
                                                <li class="list-block mtn-5">
                                                    <small>Max Risk</small>
                                                    <h4 class="pro-val-normal">1000</h4>
                                                </li>
                                                <li class="list-block">
                                                    <small>Max Reward</small>
                                                    <h4 class="pro-val-normal">1500</h4>
                                                </li>
                                                </ul>
                                            </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="javascript:void(0)" class="primary-btn">TRADE</a>
                                    <a href="javascript:void(0)" class="view-details ca-more"><span>View Details</span><i class="sprite-img arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="shadow-panel">
                            <div class="panel clearfix">
                                <div class="panel-heading">
                                    <div class="clearfix">
                                        <p class="timeago mob-dis">2 mins ago</p>
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
                                    <div class="tablelables mt20">
                                                <p>Startegy given on</p>
                                                <p>29-09-2015,05:26 PM</p>
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
                                    <div class="axisdir-view-gir">
                                            	<ul class="pd-list-50-derviative clearfix">
                                                <li class="list-block mtn-5">
                                                    <small>Max Risk</small>
                                                    <h4 class="pro-val-normal">1000</h4>
                                                </li>
                                                <li class="list-block">
                                                    <small>Max Reward</small>
                                                    <h4 class="pro-val-normal">1500</h4>
                                                </li>
                                                </ul>
                                            </div>
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
            </div>
        </div>
    </section>
    <!-- DIALOG SECTION -->

<!-- Pop up boxes -->
<div class="jqpop pop-pack">

</div>