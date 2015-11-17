<?php
$ps    = $_SERVER['PHP_SELF'];
$split = explode('index.php', $ps);

if ($_SERVER['HTTP_REFERER'] != 'http://'.$_SERVER['HTTP_HOST'].$split[0]) {
	$this->_addPath('template', JPATH_COMPONENT.'/views/platformstrades/tmpl');
	echo $this->loadTemplate('breadcrumb');
}

?>
<?php // echo $_SERVER['HTTP_REFERER'];?>

<!-- Content -->
    <section class="site-start-modules">
        <div class="fullpage fullpage-web">
            <div class="fullpage-box darkbg" id="section0">
                <div class="container_12">
                    <div class="fullsec-move">
                        <a href="<?php echo $_SERVER['HTTP_REFERER'];?>"><i class="sprite-img plat-back"></i></a>
                        <div class="clearfix">
                            <div class="grid_6">
                                <div class="con-mov-sec">
                                    <h1 class="banner-title">Live streaming market rates</h1>
                                    <p class="product-paragraph palt-right-pading">Get live streaming quotes on any stock you wish, when you trade through DIRECTTRADE- our desktop application. There is no need to click ‘Refresh’, as live streaming of quotes happens on your screen automatically. </p>
                                </div>
                            </div>
                            <div class="grid_6">
                                <ul class="image-platfade sec-6">
                                    <li><img src="images/products/trade-1-01.png" class="pic-31"></li>
                                    <li><img src="images/products/trade-1-02.png" class="pic-32"></li>
                                    <li><img src="images/products/trade-1-03.png" class="pic-33"></li>
                                    <li><img src="images/products/trade-1-04.png" class="pic-34"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box blockbg" id="section1">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="fullsec-move">
                            <div class="grid_12 product-center">
                                <h1 class="banner-title">World Is Moving Towards ‘Instant’.<br> So Should Your Platform</h1>
                                <p class="product-paragraph palt-center-pading">DIRECTTREADE gets you instant updates on key information you would want to know regarding your trades. Be it trade confirmations, order status, open positions, MTM or more, get auto-resfreshed information in an instant.</p>
                                <ul class="trade-instant">
                                    <li>
                                        <i class="inst-icon1"></i>
                                        <h3>Order Book</h3>
                                    </li>
                                    <li>
                                        <i class="inst-icon2"></i>
                                        <h3>Trade Book</h3>
                                    </li>
                                    <li>
                                        <i class="inst-icon3"></i>
                                        <h3>Net Position</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box darkbg" id="section2">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="fullsec-move">
                            <div class="grid_12 product-center">
                                <h1 class="banner-title">As You Like It</h1>
                                <p class="product-paragraph par-cen-pading">DIRECTTRADE gets you instant updates on key information you would want to know regarding your trades. Be it trade confirmations, order status, open positions, MTM or more, get auto-refreshed information in an instant.</p>
                                <ul class="trade-ask clearfix">
                                    <li>
                                        <i class="as-like-1"></i>
                                        <h3>Multiple Market Watch</h3>
                                    </li>
                                    <li>
                                        <i class="as-like-2"></i>
                                        <h3>Set Alerts</h3>
                                    </li>
                                    <li>
                                        <i class="as-like-3"></i>
                                        <h3>Customise</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box blockbg" id="section3">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="fullsec-move">
                            <div class="grid_12 product-center">
                                <h1 class="banner-title">Deeper Analysis with Ease</h1>
                                <p class="product-paragraph par-cen-pading">Do in-depth analysis with ease through the advanced charts created in DIRECTTRADE. There are dynamic intraday charts that give you useful tick-by-tick updates and analysis. Then there are trendlines, technical indicators and more which a pro like you will absolutely love.</p>
                                <p><img src="images/products/trade-4-01.png" class="mt30"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box" id="section4">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="fullsec-move">
                            <div class="grid_12 product-center">
                                <h1 class="banner-title">Joy Lies in Speed</h1>
                                <p class="product-paragraph par-cen-pading">Speed is very, very critical when you trade. Knowing this well, DIRECTTRADE includes short cut keys that enable you to place your trading orders at rapid speed and even get a quick access to key reports. Order placement and access to reports- Done so quickly.</p>
                                <p><img src="images/products/trade-5-01.png"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box blockbg" id="section5">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="fullsec-move">
                            <div class="grid_6">
                                <p class="trade-light-img"><img src="images/products/trade-6-01.png"></p>
                            </div>
                            <div class="grid_6">
                                <div class="con-mov-sec">
                                    <p class="trade-logo"><img src="images/products/direct-trade-llogo.png"></p>
                                    <h1 class="banner-title">Lightning Fast <br> desktop Trading<br>Application</h1>
                                    <a href="javascript:void(0)" class="product-button transitions pro-exp-btn">Open an Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fullpage-mob">
            <div class="ful-sec-bac ful-sec-1">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                        <a href="<?php echo $_SERVER['HTTP_REFERER'];?>"><i class="sprite-img plat-back"></i></a>
                            <div class="fullpage-images">
                                <img src="images/products/trade-1-04-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">Live streaming market rates</h1>
                                <p class="product-paragraph">Get live streaming quotes on any stock you wish, when you trade through DIRECTTRADE- our desktop application. There is no need to click ‘Refresh’, as live streaming of quotes happens on your screen automatically. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ful-sec-bac ful-sec-2 blockbg">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12 product-center">
                            <h1 class="banner-title">World Is Moving Towards ‘Instant’.So Should Your Platform</h1>
                            <p class="product-paragraph">DIRECTTREADE gets you instant updates on key information you would want to know regarding your trades. Be it trade confirmations, order status, open positions, MTM or more, get auto-resfreshed information in an instant.</p>
                            <ul class="trade-instant">
                                <li>
                                    <i class="inst-icon1"></i>
                                    <h3>Order Book</h3>
                                </li>
                                <li>
                                    <i class="inst-icon2"></i>
                                    <h3>Trade Book</h3>
                                </li>
                                <li>
                                    <i class="inst-icon3"></i>
                                    <h3>Net Position</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ful-sec-bac ful-sec-3">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                            <div class="fullpage-images">
                                <img src="images/products/trade-3-03-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">As You Like It</h1>
                                <p class="product-paragraph">DIRECTTRADE gets you instant updates on key information you would want to know regarding your trades. Be it trade confirmations, order status, open positions, MTM or more, get auto-refreshed information in an instant. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ful-sec-bac ful-sec-4 blockbg">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                            <div class="fullpage-images">
                                <img src="images/products/trade-4-01-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">Deeper Analysis with Ease</h1>
                                <p class="product-paragraph">Do in-depth analysis with ease through the advanced charts created in DIRECTTRADE. There are dynamic intraday charts that give you useful tick-by-tick updates and analysis. Then there are trendlines, technical indicators and more which a pro like you will absolutely love.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ful-sec-bac ful-sec-5">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                            <div class="fullpage-images">
                                <img src="images/products/trade-5-01-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">Joy Lies in Speed</h1>
                                <p class="product-paragraph">Speed is very, very critical when you trade. Knowing this well, DIRECTTRADE includes short cut keys that enable you to place your trading orders at rapid speed and even get a quick access to key reports. Order placement and access to reports- Done so quickly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ful-sec-bac ful-sec-6 blockbg">
            <div class="container_12">
                <div class="row clearfix">
                    <div class="grid_12">
                        <div class="fullpage-images">
                            <img src="images/products/trade-6-01-small.png">
                        </div>
                        <div class="fullpage-ban-con">
                            <p class="trade-logo"><img src="images/products/direct-trade-llogo.png"></p>
                            <h1 class="banner-title">Lightning Fast <br> desktop Trading<br>Application</h1>
                            <a href="javascript:void(0)" class="product-button transitions pro-exp-btn">Open an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>