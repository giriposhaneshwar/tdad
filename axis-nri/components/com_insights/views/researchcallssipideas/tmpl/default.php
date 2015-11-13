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
        <div class="gray-bg">
            <div class="container_12">
                <div class="row clearfix">
                    <div class="grid_12">
                        <div class="stock-sec clearfix">
                            <div class="stock-head clearfix">
                                <h1 class="stockhead">Stock SIP Ideas</h1>
                                <h4 class="stock-subdes">Our Fundamental Research team identifies these investment opportunities which need
investment horizon from six months to year to achieve the forecasted targets.

                                </h4>
                            </div>
                            <p class="last-updated"><span>Last updated:</span> 29  Jun 15  | 10:30 AM</p>
                            <div class="slide-tabs">
                                <div class="slide-tab">
                                    <ul>
                                        <li>
                                            <a href="#1">
                                                <p class="mar-name">Yes Bank</p>
                                                <p class="mar-years">5 Year SIP Return</p>
                                                <p class="mar-per">221.4%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#2">
                                                <p class="mar-name">Reliance</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">196.4%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#3">
                                                <p class="mar-name">Yes Bank</p>
                                                <p class="mar-years">5 Year SIP Return</p>
                                                <p class="mar-per">221.4%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#4">
                                                <p class="mar-name">ITC</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">176.6%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#5">
                                                <p class="mar-name">Infosys</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">159.1%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#6">
                                                <p class="mar-name">ITC</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">176.6%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#7">
                                                <p class="mar-name">Infosys</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">159.1%</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Afterwards, include the div panels representing the panels of our slider -->
                                    <div id="1">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Yes Bank</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="2">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Reliance</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="3">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Yes Bank</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="4">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">ITC</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="5">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Infosys</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="6">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">ITC</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="7">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Infosys</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blue-bg">
            <div class="container_12">
                <div class="row clearfix">
                    <div class="grid_12">
                        <div class="stock-sec clearfix">
                            <div class="stock-head clearfix">
                                <h1 class="stockhead">MF SIP Ideas</h1>
                                <h4 class="stock-subdes">Our Fundamental Research team identifies these investment opportunities which need
                                    investment horizon from six months to year to achieve the forecasted targets.
                                </h4>
                            </div>
                            <p class="last-updated"><span>Last updated:</span> 29  Jun 15  | 10:30 AM</p>
                            <div class="slide-tabs">
                                <div class="slide-tab">
                                    <ul>
                                        <li>
                                            <a href="#8">
                                                <p class="mar-name">Yes Bank</p>
                                                <p class="mar-years">5 Year SIP Return</p>
                                                <p class="mar-per">221.4%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#9">
                                                <p class="mar-name">Reliance</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">196.4%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#10">
                                                <p class="mar-name">Yes Bank</p>
                                                <p class="mar-years">5 Year SIP Return</p>
                                                <p class="mar-per">221.4%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#11">
                                                <p class="mar-name">ITC</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">176.6%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#12">
                                                <p class="mar-name">Infosys</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">159.1%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#13">
                                                <p class="mar-name">ITC</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">176.6%</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#14">
                                                <p class="mar-name">Infosys</p>
                                                <p class="mar-years">5 Year Returns</p>
                                                <p class="mar-per">159.1%</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Afterwards, include the div panels representing the panels of our slider -->
                                    <div id="8">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Yes Bank</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="9">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Reliance</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="10">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Yes Bank</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="11">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">ITC</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="12">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Infosys</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="13">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">ITC</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="14">
                                        <div class="mar-main clearfix">
                                            <div class="mar-left">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <div class="clearfix">
                                                            <div class="panel-heading-name">
                                                                <h5 class="pro-name"><a href="javascript:void(0)">Infosys</a></h5>
                                                            </div>
                                                            <p class="panel-heading-moreIcon"><a href="javascript:void(0)" class="open-addto"><img src="images/more-Icon.png"></a></p>
                                                        </div>
                                                        <div class="mar-val-inper">
                                                            <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p class="invest-rupe">Investment of Rs 5000 monthly</p>
                                                        <ul class="invest-lsit">
                                                            <li class="investlsit-left">
                                                                <p>&nbsp; </p>
                                                                <p class="invest-year">1 Yr</p>
                                                                <p class="invest-year">2 Yr</p>
                                                                <p class="invest-year">3 Yr</p>
                                                            </li>
                                                            <li class="investlsit-middle">
                                                                <p class="invest-title">Invested Money</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                                <p>2,45,438</p>
                                                            </li>
                                                            <li class="investlsit-right">
                                                                <p class="invest-title">Value of Investment</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                                <p>1,45,438</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="panel-footer">
                                                        <a href="javascript:void(0)" class="primary-btn">Invest</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mar-right">
                                                <img src="images/invest-graph.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>