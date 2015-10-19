<div class="custom-dialog likepop">
        <div class="vdetail-title clearfix">
            <a href="javascript:void(0)" class="dialog-close close-popup"><i class="sprite-img close-pop"></i></a>
        
        <div class="dialog-title clearfix">
            <div class="pop-name-btn clearfix">
            	<p class="mb10 sub-hea">Pair Trade</p>
            	<h5 class="pro-name pop-name"><a href="javascript:void(0)">Nifty</a></h5>
                <a href="javascript:void(0)" class="primary-btn buy-rgt">Invest</a>
            </div>
            <div class="mt10">
            	<p class="pop-lastupdated">Last Updated: 29 Jun 15 | 10:30 AM</p>
                <div class="clearfix mt5">
                <div class="mar-val-inper pop-left-price">
                    <h2 class="mar-val">879.90 <span><i class="sprite-img market-val-inc"></i>37.46 (0.22%)</span></h2>
                </div>
                 <div class="pop-right-compare">
                    <ul class="cart-list over-cart-list">
                        <li><a href="javascript:void(0)"><i class="sprite-img compare-ar-icon compare-icon"></i><span class="dis-none">Add to Watchlist</span></a></li>
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
            </div>
        </div>
    </div>
        <div class="popup-insight">
        <div class="dialog-content">
        	
            <ul class="cadialog-list">
                <li class="clearfix">
                	<div class="acc-fill pair-heading clearfix">
                    <h3 class="filter-box-heading">Contracts</h3>
                     <p class="fill-expansion"><i class="sprite-img fil-plus"></i>  </p>
                     </div>
                    <ul class="contractslist pair-con">
                        <li>
                            <ul class="contracts-table clearfix">
                                <li>
                                    <h5>NIFTY OTPIDX-AUG15-CA-8300</h5>
                                    <p class="leg">(Leg 1)</p>
                                </li>
                                <li>
                                    <p class="smalltext">Entry Price</p>
                                    <h5>25</h5>
                                </li>
                                <li>
                                    <p class="smalltext">Current Price</p>
                                    <h5>25</h5>
                                </li>
                                <li>
                                    <p class="smalltext">No. of lots</p>
                                    <h5>01</h5>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="buy-btn">Buy</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="contracts-table clearfix">
                                <li>
                                    <h5>NIFTY OTPIDX-AUG15-CA-8300</h5>
                                    <p class="leg">(Leg 2)</p>
                                </li>
                                <li>
                                    <p class="smalltext">Entry Price</p>
                                    <h5>12</h5>
                                </li>
                                <li>
                                    <p class="smalltext">Current Price</p>
                                    <h5>12.74</h5>
                                </li>
                                <li>
                                    <p class="smalltext">No. of lots</p>
                                    <h5>1</h5>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="sell-btn">Sell</a>	
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="contracts-table clearfix">
                                <li>
                                    <h5>Basket</h5>
                                </li>
                                <li>
                                    <p class="smalltext">Entry Spread</p>
                                    <p>13</p>
                                </li>
                                <li>
                                    <p class="smalltext">Current Spread</p>
                                    <p>15.26</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="clearfix">
                    <div class="acc-fill pair-heading clearfix">
                    <h3 class="filter-box-heading">Strategy Details</h3>
                     <p class="fill-expansion"><i class="sprite-img fil-plus"></i>  </p>
                     </div>
                    <ul class="detailslist pair-con">
                        <li><p class="det-list-hea">Risk</p><p class="det-list-con">Limited to Rs. 1000/- at and below 8350 for the basket</p></li>
                        <li><p class="det-list-hea">Reward</p><p class="det-list-con">Maximum Rs. 2750/- above 8550 for the basket</p></li>
                        <li><p class="det-list-hea">Breakeven</p><p class="det-list-con">8460 below which there is loss and above this level there is profit</p></li>
                        <li><p class="det-list-hea">Rationale</p> <p class="det-list-con">Option open interest distribution indicates Nifty may trade in the range of 8300–8550 in the Jul’15 series. We expect corrective action from current levels and hence the strategy has been formulated taking cognizance of above levels.</p></li>
                    </ul>
                </li>
                <li class="clearfix">
                    <div class="acc-fill pair-heading clearfix">
                    <h3 class="filter-box-heading">Pay-Off Chart</h3>
                     <p class="fill-expansion"><i class="sprite-img fil-plus"></i>  </p>
                     </div>
                    <div class="detailslist pair-con">
                    	<img src="images/graph3.jpg">
                        
                        <p class="graph-desc">This chart is plotted assuming that the positions are taken at the entry price of the strategy</p>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </div>
    <script>
	//cart more-menu	
    $(".cartmore").on('click', function() {
        $(this).closest('.cart-more-menu').find('.cart-more-items').toggle();
    });
    $(document).click(function(e) {
        var p = $(e.target).closest('.cart-more-menu').length
        if (!p) {
            $(".cart-more-items").hide();
        }
    });
	$(".cart-more-items li a").on('click', function() {
		$(".cart-more-items").hide();
	});
	
	$(".acc-fill").click(function() {
        $(this).next(".pair-con").slideToggle("").siblings(".pair-con:visible").slideUp("");
        $(this).toggleClass("current");
        $(this).siblings(".acc-fill").removeClass("current");
    });
	$(".pop-pack").dialog({
		position: { my: "center", at: "center", of: window,collision: 'fit' }
    });
	</script>