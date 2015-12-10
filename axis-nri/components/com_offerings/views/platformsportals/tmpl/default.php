<?php
$ps    = $_SERVER['PHP_SELF'];
$split = explode('index.php', $ps);

if ($_SERVER['HTTP_REFERER'] != 'http://'.$_SERVER['HTTP_HOST'].$split[0]) {
	$this->_addPath('template', JPATH_COMPONENT.'/views/platformsportals/tmpl');
	echo $this->loadTemplate('breadcrumb');
}

?>
<?php //echo $_SERVER['HTTP_REFERER'];?>
<!-- Content -->
    <section class="site-start-modules">
        <div class="fullpage fullpage-web">
            <div class="fullpage-box" id="section0">
                <div class="container_12">
                    <div class="fullsec-move clearfix">
                        <a href="<?php echo $_SERVER['HTTP_REFERER'];?>"><i class="sprite-img plat-back"></i></a>
                        <div class="grid_12 product-center">
                            <h1 class="banner-title">WORKS ON EVERYTHING</h1>
                            <p class="product-paragraph par-cen-pading">We are getting increasingly mobile and increasingly comfortable with different devices too. You don’t have to say glued to just one device as our web portal is a completely responsive one that works on all your devices- smartphone, tablet or desktop.</p>
                            <p class="plat-images-tgap"><img src="images/products/web-1-01.png"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box blockbg" id="section1">
                <div class="container_12">
                    <div class="fullsec-move clearfix">
                        <div class="grid_6">
                            <ul class="image-platfade sec-9">
                                <li><img src="images/products/web-2-01.png" class="pic-28"></li>
                                <li><img src="images/products/web-2-02.png" class="pic-29"></li>
                                <li><img src="images/products/web-2-03.png" class="pic-30"></li>
                            </ul>
                        </div>
                        <div class="grid_6">
                            <div class="con-mov-sec">
                                <h1 class="banner-title">DON’T GET LOST!</h1>
                                <p class="product-paragraph palt-right-pading">Don’t waste your time or get lost in realms of information and data you do not require. Using customized & easy filters and search bar built across the portal, find exactly what you are looking for. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box" id="section2">
                <div class="container_12">
                    <div class="fullsec-move clearfix">
                        <div class="grid_5">
                            <div class="con-mov-sec-1">
                                <h1 class="banner-title">Live Markets.<br>Wherever</h1>
                                <p class="product-paragraph palt-right-pading">Never lose track of your portfolio and markets. With out new top scroll bar follow you across pages so that you always stay connected with the live indices, latest news and your portfolio movements. What’s more, you get a complete market and portfolio snapshot on just one tap.</p>
                            </div>
                        </div>
                        <div class="grid_7">
                            <ul class="image-platfade sec-7">
                                <li><img src="images/products/web-3-01.png" class="pic-6"></li>
                                <li><img src="images/products/web-3-02.png" class="pic-5"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box blockbg" id="section3">
                <div class="container_12">
                    <div class="fullsec-move clearfix">
                        <div class="grid_12 product-center">
                            <h1 class="banner-title">PLAY YOUR CARDS RIGHT</h1>
                            <p class="product-paragraph par-cen-pading">Say bye to old data representation style in complex tables. Say hello to our simplified card view that highlights just the right amount of information. It’s neat, clutter free and smart; designed to keep your investment journey simple.</p>

                                <p class="plat-images-tgap"><img src="images/products/web-4-05.png"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box" id="section6">
                <div class="funtastic-down"></div>
                <div class="container_12">
                    <div class="fullsec-move clearfix">
                        <div class="grid_12 product-center blockbg">
                            <div class="con-mov-sec-neg">
                                <h1 class="banner-title">Fun-tastic Learning</h1>
                                <p class="product-paragraph par-cen-pading">Gaining investment knowledge mustn’t be a boring, complex activity neither should the lack of knowledge be your barrier to investing wisely. Sharpen your knowledge with our fun filled quizzes, calculators, webinars, videos and more. Learning about money was never this fun!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box blockbg" id="section7">
                <div class="container_12">
                    <div class="fullsec-move clearfix">
                        <div class="grid_8">
                            <ul class="image-platfade">
                                <li> <img src="images/products/web-5-01.png" class="pic-16"></li>
                                <li><img src="images/products/web-5-02.png" class="pic-17"></li>
                                <li><img src="images/products/web-5-03.png" class="pic-18"></li>
                                <li><img src="images/products/web-5-04.png" class="pic-19"></li>
                            </ul>
                        </div>
                        <div class="grid_4">
                            <div class="con-mov-sec-1">
                                <h1 class="banner-title">NEVER MISS A NEWS... EVER!</h1>
                                <p class="product-paragraph">AxisDirect web portal lets you access live markets through RSS feeds, video channels, tweets and more. So whenever you wish to trade, be well informed on the market movements and make the right trading moves. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box" id="section8">
                <div class="container_12">
                    <div class="fullsec-move clearfix">
                        <div class="grid_6">
                            <ul class="image-platfade sec-2">
                                <li><img src="images/products/web-6-01.png" class="pic-20"></li>
                                <li><img src="images/products/web-6-02.png" class="pic-21"></li>
                                <li><img src="images/products/web-6-03.png" class="pic-22"></li>
                            </ul>
                        </div>
                        <div class="grid_6">
                            <div class="con-mov-sec">
                                <h1 class="banner-title">Do things you love, we notify</h1>
                                <p class="product-paragraph palt-right-pading">This intuitive platform is smartly designed to give you customized alerts and notifications.
                                    So now don’t worry about missing an important investment opportunity. Your set notifications will call you out, in time for making the most of the right investment opportunity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fullpage-box blockbg" id="section9">
                <div class="container_12">
                    <div class="fullsec-move clearfix">
                        <div class="grid_7">
                            <div class="sec-10">
                                <img src="images/products/web-7-01.png">
                            </div>
                        </div>

                        <div class="grid_5">
                            <div class="con-mov-sec">
                                <h1 class="banner-title">BEAUTIFULLY REINVENTED TO KEEP <br> YOUR INVESTMENT JOURNEY SIMPLE!</h1>
                                <a href="javascript:void(0)" class="product-button transitions">Sound great! I want to get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fullpage-mob">
            <div class="ful-sec-bac ful-sec-1">
                <div class="container_12">
                    <div class="clearfix">
                        <div class="grid_12">
                            <a href="<?php echo $_SERVER['HTTP_REFERER'];?>"><i class="sprite-img plat-back"></i></a>
                            <div class="fullpage-images">
                                <img src="images/products/web-1-01-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">WORKS ON EVERYTHING</h1>
                                <p class="product-paragraph">We are getting increasingly mobile and increasingly comfortable with different devices too. You don’t have to say glued to just one device as our web portal is a completely responsive one that works on all your devices- smartphone, tablet or desktop.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ful-sec-bac ful-sec-2 blockbg">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                            <div class="fullpage-images">
                                <img src="images/products/web-2-03-small.png" >
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">DON’T GET LOST!</h1>
                                <p class="product-paragraph">Don’t waste your time or get lost in realms of information and data you do not require. Using customized & easy filters and search bar built across the portal, find exactly what you are looking for. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ful-sec-bac ful-sec-3">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                            <div class="fullpage-images">
                                <img src="images/products/web-3-02-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">Live Markets.<br>Wherever</h1>
                                <p class="product-paragraph">Never lose track of your portfolio and markets. With out new top scroll bar follow you across pages so that you always stay connected with the live indices, latest news and your portfolio movements. What’s more, you get a complete market and portfolio snapshot on just one tap.</p>
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
                                <img src="images/products/web-4-05-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">PLAY YOUR CARDS RIGHT</h1>
                                <p class="product-paragraph">Say bye to old data representation style in complex tables. Say hello to our simplified card view that highlights just the right amount of information. It’s neat, clutter free and smart; designed to keep your investment journey simple.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ful-sec-bac1 ful-sec-7">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">Fun-tastic Learning</h1>
                                <p class="product-paragraph">Gaining investment knowledge mustn’t be a boring, complex activity neither should the lack of knowledge be your barrier to investing wisely. Sharpen your knowledge with our fun filled quizzes, calculators, webinars, videos and more. Learning about money was never this fun!</p>
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
                                <img src="images/products/web-5-04-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">NEVER MISS A NEWS... EVER!</h1>
                                <p class="product-paragraph">AxisDirect web portal lets you access live markets through RSS feeds, video channels, tweets and more. So whenever you wish to trade, be well informed on the market movements and make the right trading moves. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ful-sec-bac ful-sec-9">
                <div class="container_12">
                    <div class="row clearfix">
                        <div class="grid_12">
                            <div class="fullpage-images">
                                <img src="images/products/web-6-03-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">Do things you love, we notify</h1>
                                <p class="product-paragraph">This intuitive platform is smartly designed to give you customized alerts and notifications.
                                    So now don’t worry about missing an important investment opportunity. Your set notifications will call you out, in time for making the most of the right investment opportunity.
                                </p>
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
                            <img src="images/products/web-7-01-small.png">
                            </div>
                            <div class="fullpage-ban-con">
                                <h1 class="banner-title">BEAUTIFULLY REINVENTED TO KEEP <br> YOUR INVESTMENT JOURNEY SIMPLE!</h1>
                                <a href="javascript:void(0)" class="product-button transitions">Sound greats! I want to get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>