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
$this->_addPath( 'template', JPATH_COMPONENT  . '/views/researchreportsoverview/tmpl' );
echo $this->loadTemplate('breadcrumb');
						   
						   ?>	
<section class="site-start-modules">
        <!-- Welcome Search Section -->
        <div class="new-banner">
            <img src="images/banner.jpg">
        </div>
        <div class="container_12">
            <div class="row clearfix">
                <div class="grid_12">
                    <div class="box-start">
                        <div class="stock-head">
                            <h1 class="stockhead">Sector, Economy, Other Reports</h1>
                            <h4 class="stock-subdes smal-subdes">A brief 2 line description about Sector, Economy, Other reports can come over here</h4>
                        </div>
                        <div class="filter-row">
                            <div class="clearfix">
                                <div class="filter-button">
                                    <div class="fill-box">
                                        <p class="fil-dis"><i class="sprite-img filter-icon"></i><span class="dis-none">Refine Search</span></p>
                                    </div>
                                    <div class="filter-content-box">
                                        <div class="row serach-box-fly clearfix">
                                            <ul class="fill-box1 clearfix">
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
                                                    <div class="custom-radio">
                                                        <label>Published Date</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="pu-all" class="c-radio">
                                                                <input type="radio" name="date" id="pu-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pu-today" class="c-radio">
                                                                <input type="radio" name="date" id="pu-today">
                                                                <span class="listitems">Today </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pu-week" class="c-radio">
                                                                <input type="radio" name="date" id="pu-week">
                                                                <span class="listitems">This Week</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="pu-month" class="c-radio">
                                                                <input type="radio" name="date" id="pu-month">
                                                                <span class="listitems">This Month</span> </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-radio">
                                                        <label>Format</label>
                                                        <ul class="radio-sec rd-btn clearfix">
                                                            <li>
                                                                <label for="for-all" class="c-radio">
                                                                <input type="radio" name="format" id="for-all" checked>
                                                                <span class="listitems">All</span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="for-video" class="c-radio">
                                                                <input type="radio" name="format" id="for-video">
                                                                <span class="listitems">Video </span> </label>
                                                            </li>
                                                            <li>
                                                                <label for="for-pdf" class="c-radio">
                                                                <input type="radio" name="format" id="for-pdf">
                                                                <span class="listitems">Pdfs</span> </label>
                                                            </li>
                                                        </ul>
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
                        </div>
                        <div class="grid-box">
                            <ul class="invest-ment mutualfundIdeas-list clearfix">
                                <li class="shadow-panel">
                                                <div class="panel">
                                                    <div class="panel-heading clearfix">
                                                        <div class="panel-heading-name">
                                                            <h5 class="pro-name report-proname">Sector Update : Logistics Monitor</h5>
                                                            <p class="reports-time">29 Jun 2015</p>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body reports-video">
                                                        <div class="clearfix">
                                                            <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                                            <div class="fly-contratcs">
                                                                <a href="javascript:void(0)" class="report-showall">Show All</a>
                                                                <div class="report-name-fly">
                                                                    <a href="javascript:void(0)">Gateway Distriparks</a>, <a href="javascript:void(0)">Container Corporation of India</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="report-names overflow-dots">
                                                            <a href="javascript:void(0)">Gateway Distriparks</a>, <a href="javascript:void(0)">Container Corporation of India</a>
                                                        </div>
                                                        <div class="report-desc">
                                                            CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                                        </div>
                                                        <a href="javascript:void(0)" class="desc-content report-ful-desc" data-url="index.php?
option=com_users&view=reset&layout=reports-sector-logistics-popup&tmpl=component" title="reports-sector-logistics-popup">See Full Description</a>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="download-report-btn">Download Report <i class="sprite-img down-report"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                <li class="shadow-panel">
                                    <div class="panel">
                                        <div class="panel-heading clearfix">
                                            <div class="panel-heading-name">
                                                <h5 class="pro-name report-proname">Quick Note: Economy</h5>
                                                <p class="reports-time">29 Jun 2015</p>
                                            </div>
                                        </div>
                                        <div class="panel-body reports-video">
                                            <div class="clearfix">
                                                <p class="stocks-coverd">Stocks / Derivatives Contracts covered</p>
                                            </div>
                                            <div class="report-names overflow-dots">
                                            </div>
                                            <div class="report-desc">
                                                FY15 CAD at USD 27.9 bn on lower oil prices; heavy capital flows allow RBI to add USD 61.4 bn to FX reserves
                                            </div>
                                            <a href="javascript:void(0)" class="desc-content report-ful-desc" data-url="index.php?
option=com_users&view=reset&layout=reports-sector-economy-popup&tmpl=component" title="reports-sector-economy-popup">See Full Description</a>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="javascript:void(0)" class="download-report-btn">Download Report <i class="sprite-img down-report"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel">
                                        <div class="panel-heading clearfix">
                                            <div class="panel-heading-name">
                                                <h5 class="pro-name report-proname">Monsoon Update</h5>
                                                <p class="reports-time">29 Jun 2015</p>
                                            </div>
                                        </div>
                                        <div class="panel-body reports-video">
                                            <div class="clearfix">
                                                <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                                <div class="fly-contratcs">
                                                    <a href="javascript:void(0)" class="report-showall">Show All</a>
                                                    <div class="report-name-fly">
                                                        <a href="javascript:void(0)">Mahindra & Mahindra</a>, <a href="javascript:void(0)">Maruti</a>, <a href="javascript:void(0)">ITC</a>, <a href="javascript:void(0)">HDFC Bank</a>, <a href="javascript:void(0)">Shriram Transport Finance</a>, <a href="javascript:void(0)">NHPC</a>, <a href="javascript:void(0)">M & M Financial Services</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="report-names overflow-dots">
                                                <a href="javascript:void(0)">Mahindra & Mahindra</a>, <a href="javascript:void(0)">Maruti</a>, <a href="javascript:void(0)">ITC</a>, <a href="javascript:void(0)">HDFC Bank</a>, <a href="javascript:void(0)">Shriram Transport Finance</a>, <a href="javascript:void(0)">NHPC</a>, <a href="javascript:void(0)">M & M Financial Services</a>
                                            </div>
                                            <div class="report-desc">
                                                IMD lowers monsoon rainfall forecast to 88% of LPA. Food management policy more
                                            </div>
                                            <a href="javascript:void(0)" class="desc-content report-ful-desc" data-url="index.php?
option=com_users&view=reset&layout=reports-sector-monsoon-popup&tmpl=component" title="reports-sector-monsoon-popup">See Full Description</a>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="javascript:void(0)" class="download-report-btn">Download Report <i class="sprite-img down-report"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel">
                                        <div class="panel-heading clearfix">
                                            <div class="panel-heading-name">
                                                <h5 class="pro-name report-proname">Sector Update : Logistics Monitor</h5>
                                                <p class="reports-time">29 Jun 2015</p>
                                            </div>
                                        </div>
                                        <div class="panel-body reports-video">
                                            <div class="clearfix">
                                                <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                                <div class="fly-contratcs">
                                                    <a href="javascript:void(0)" class="report-showall">Show All</a>
                                                    <div class="report-name-fly">
                                                        <a href="javascript:void(0)">Gateway Distriparks</a>, <a href="javascript:void(0)">Container Corporation of India</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="report-names overflow-dots">
                                                <a href="javascript:void(0)">Gateway Distriparks</a>, <a href="javascript:void(0)">Container Corporation of India</a>
                                            </div>
                                            <div class="report-desc">
                                                CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </div>
                                            <a href="javascript:void(0)" class="desc-content report-ful-desc" title="reports-sector-logistics-popup">See Full Description</a>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="javascript:void(0)" class="download-report-btn">Download Report <i class="sprite-img down-report"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel">
                                        <div class="panel-heading clearfix">
                                            <div class="panel-heading-name">
                                                <h5 class="pro-name report-proname">Quick Note: Economy</h5>
                                                <p class="reports-time">29 Jun 2015</p>
                                            </div>
                                        </div>
                                        <div class="panel-body reports-video">
                                            <div class="clearfix">
                                                <p class="stocks-coverd">Stocks / Derivatives Contracts covered</p>
                                            </div>
                                            <div class="report-names overflow-dots">
                                            </div>
                                            <div class="report-desc">
                                                FY15 CAD at USD 27.9 bn on lower oil prices; heavy capital flows allow RBI to add USD 61.4 bn to FX reserves
                                            </div>
                                            <a href="javascript:void(0)" class="desc-content report-ful-desc" title="reports-sector-economy-popup">See Full Description</a>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="javascript:void(0)" class="download-report-btn">Download Report <i class="sprite-img down-report"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="shadow-panel">
                                    <div class="panel">
                                        <div class="panel-heading clearfix">
                                            <div class="panel-heading-name">
                                                <h5 class="pro-name report-proname">Monsoon Update</h5>
                                                <p class="reports-time">29 Jun 2015</p>
                                            </div>
                                        </div>
                                        <div class="panel-body reports-video">
                                            <div class="clearfix">
                                                <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                                <div class="fly-contratcs">
                                                    <a href="javascript:void(0)" class="report-showall">Show All</a>
                                                    <div class="report-name-fly">
                                                        <a href="javascript:void(0)">Mahindra & Mahindra</a>, <a href="javascript:void(0)">Maruti</a>, <a href="javascript:void(0)">ITC</a>, <a href="javascript:void(0)">HDFC Bank</a>, <a href="javascript:void(0)">Shriram Transport Finance</a>, <a href="javascript:void(0)">NHPC</a>, <a href="javascript:void(0)">M & M Financial Services</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="report-names overflow-dots">
                                                <a href="javascript:void(0)">Mahindra & Mahindra</a>, <a href="javascript:void(0)">Maruti</a>, <a href="javascript:void(0)">ITC</a>, <a href="javascript:void(0)">HDFC Bank</a>, <a href="javascript:void(0)">Shriram Transport Finance</a>, <a href="javascript:void(0)">NHPC</a>, <a href="javascript:void(0)">M & M Financial Services</a>
                                            </div>
                                            <div class="report-desc">
                                                IMD lowers monsoon rainfall forecast to 88% of LPA. Food management policy more
                                            </div>
                                            <a href="javascript:void(0)" class="desc-content report-ful-desc" title="reports-sector-monsoon-popup">See Full Description</a>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="javascript:void(0)" class="download-report-btn">Download Report <i class="sprite-img down-report"></i></a>
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
        <!-- Pop up boxes -->
<div class="jqpop pop-pack">

</div>