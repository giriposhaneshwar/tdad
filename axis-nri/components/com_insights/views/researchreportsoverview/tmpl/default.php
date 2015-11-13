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
         
        <!--Fundamental Reports -->
        <div class="gray-bg">
        <div class="container_12">
        <div class="row clearfix">
            <div class="grid_12">
            <div class="stock-sec clearfix">
                <div class="stock-head">
                    <h1 class="stockhead">Fundamental Reports</h1>
                    <h4 class="stock-subdes">A brief 2 line description about fundamental reports can come over here</h4>
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
                <div class="tile-view">
                    <ul class="ca-slider mutualfundIdeas-list clearfix">
                        <li class="shadow-panel">
                            <div class="panel">
                                <div class="panel-heading clearfix">
                                    <div class="panel-heading-name">
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks covered (03)</p>
                                       <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">City Union Bank</a>, <a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">City Union Bank</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">City Union Bank</a>, <a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">City Union Bank</a>
                                    </div>
                                    <img src="images/report-video1.jpg">
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
                                            <h5 class="pro-name report-proname">High Conviction Stock Ideas</h5>
                                            <p class="reports-time">27 Jun 2015</p>
                                     </div>
                                </div>
                                <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks covered (03)</p>
                                        </div>
                                    
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">ICICI Bank</a>, <a href="javascript:void(0)">BEL</a>
                                    </div>
                                    <img src="images/report-video1.jpg">
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
                                            <h5 class="pro-name report-proname">Company Reports: Prism Cements</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks covered (03)</p>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Prism Cements</a>
                                    </div>
                                    <img src="images/report-video1.jpg">
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks covered (03)</p>
                                       <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">City Union Bank</a>, <a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">City Union Bank</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">City Union Bank</a>, <a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">City Union Bank</a>
                                    </div>
                                    <img src="images/report-video1.jpg">
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
                                            <h5 class="pro-name report-proname">High Conviction Stock Ideas</h5>
                                            <p class="reports-time">27 Jun 2015</p>
                                     </div>
                                </div>
                                <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks covered (03)</p>
                                        </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">ICICI Bank</a>, <a href="javascript:void(0)">BEL</a>
                                    </div>
                                    <img src="images/report-video1.jpg">
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
                                            <h5 class="pro-name report-proname">Company Reports: Prism Cements</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks covered (03)</p>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Prism Cements</a>
                                    </div>
                                    <img src="images/report-video1.jpg">
                                </div>
                                <div class="panel-footer">
                                    <a href="javascript:void(0)" class="download-report-btn">Download Report <i class="sprite-img down-report"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="checklist clearfix">
                    <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchreportsfundamentalreports'); ?>" class="viewall">View All</a></div>
                </div>
            </div>
            </div>
            </div>
        </div>
        </div>
        <!--Technical Reports -->
        <div class="blue-bg">
            <div class="container_12">
            <div class="row clearfix">
            <div class="grid_12">
                <div class="stock-sec clearfix">
                    <div class="stock-head">
                        <h1 class="stockhead">Technical Reports</h1>
                        <h4 class="stock-subdes">A brief 2 line description about Technical reports can come over here.</h4>
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
                    <div class="ca-container">
                        <div class="ca-wrapper">
                            <div class="tile-view">
                                <ul class="ca-slider mutualfundIdeas-list clearfix">
                                <li class="shadow-panel">
                                    <div class="panel">
                                        <div class="panel-heading clearfix">
                                    <div class="panel-heading-name">
                                            <h5 class="pro-name report-proname">Daily Technical</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div class="fly-report-desc">
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Daily Derivatives</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                        
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                    <div class="checklist clearfix">
                        <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchreportstechnicalreports'); ?>" class="viewall">View All</a></div>
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
                    <div class="stock-head">
                        <h1 class="stockhead">Mutual Funds Ideas</h1>
                        <h4 class="stock-subdes">A brief 2 line description about Mutual Fund calls can come over here</h4>
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
                    <div class="ca-container">
                        <div class="ca-wrapper">
                            <div class="tile-view">
                                <ul class="ca-slider mutualfundIdeas-list clearfix">
                                <li class="shadow-panel">
                                    <div class="panel">
                                        <div class="panel-heading clearfix">
                                    <div class="panel-heading-name">
                                            <h5 class="pro-name report-proname">Kenneth Andrade’s Resignation from IDFC</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                       <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	There is no change in our recommendation for any of the three Funds managed by Kenneth Andrade
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	There is no change in our recommendation for any of the three Funds managed by Kenneth Andrade
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Budget Proposals Impacting Mutual Fund Industry</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div>
                                            
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	
                                    </div>
                                    <p class="report-desc">
                                    	Surcharge on income distributed by mutual funds increased from 10% to 12%. This will result in reduced income
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	Surcharge on income distributed by mutual funds increased from 10% to 12%. This will result in reduced income
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                       <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                       <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                    <div class="checklist clearfix">
                       <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchreportsmutualfundreports'); ?>" class="viewall">View All</a></div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
         <!--Sector economy other -->  
         <div class="blue-bg">
            <div class="container_12">
            <div class="row clearfix">
            <div class="grid_12">
                <div class="stock-sec clearfix">
                    <div class="stock-head">
                        <h1 class="stockhead">Sector, Economy, Other Reports</h1>
                        <h4 class="stock-subdes smal-subdes">A brief 2 line description about Sector, Economy, Other reports can come over here</h4>
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
                    <div class="ca-container">
                        <div class="ca-wrapper">
                            <div class="tile-view">
                                <ul class="ca-slider mutualfundIdeas-list clearfix">
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
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div>
                                            
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                                            <h5 class="pro-name report-proname">Pick of the Week</h5>
                                            <p class="reports-time">29 Jun 2015</p>
                                     </div>
                                </div>
                                        <div class="panel-body reports-video">
                                	<div class="clearfix">
                                        <p class="stocks-coverd">Stocks / Derivatives Contracts covered (06)</p>
                                        <div class="fly-contratcs">
                                            <a href="javascript:void(0)" class="report-showall">Show All</a>
                                            <div class="report-name-fly">
                                            	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="report-names overflow-dots">
                                    	<a href="javascript:void(0)">Balkrishna Industries</a>, <a href="javascript:void(0)">Bhel</a>, <a href="javascript:void(0)">LICHSG</a>, <a href="javascript:void(0)">DHFL</a>, <a href="javascript:void(0)">Apollo Tyre</a>, <a href="javascript:void(0)">Glenmark</a>, <a href="javascript:void(0)">REC</a>, <a href="javascript:void(0)">Union Bk</a>
                                    </div>
                                    <p class="report-desc">
                                    	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                    </p>
                                    <div>
                                    	<a href="javascript:void(0)" class="desc-content">See Full Description</a>
                                        <p class="report-content">
                                            	CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth CGD: Entering the unregulated era SC verdict removes all overhang of regulation; focus now on volume growth
                                            </p>
                                    </div>
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
                    <div class="checklist clearfix">
                     <div class="checkresearch-rgt"><a href="<?php echo JRoute::_('index.php?option=com_insights&view=researchreportssectoreconomyothers'); ?>" class="viewall">View All</a></div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>