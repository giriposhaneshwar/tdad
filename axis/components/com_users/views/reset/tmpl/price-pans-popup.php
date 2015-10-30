
<div class="custom-dialog likepop price-popup">
    <div class="dialog-content">
    <h5>Searching for the Best Plan</h5>
    <h3>Calculating “Equivalent Delivery Turnover”...</h3>
    <div class="progressbar"></div>
    <ul class="pri-cal-box clearfix">
        <li>
            <div class="pri-box1 pri-pop-box">
                <div class="befe-cal">
                    <p>Equity Delivery</p>
                    <p class="bef-cal-val">40000</p>
                </div>
                <p class="afte-cal">1</p>
            </div>
        </li>
        <li class="plus">+</li>
        <li>
            <div class="pri-box2 pri-pop-box">
                <div class="befe-cal">
                    <p>Equity Intraday</p>
                    <p class="bef-cal-val">50000</p>
                </div>
                <p class="afte-cal">10</p>
            </div>
        </li>
        <li class="plus">+</li>
       <li>
            <div class="pri-box3 pri-pop-box">
                <div class="befe-cal">
                    <p>Futures</p>
                    <p class="bef-cal-val">50000</p>
                </div>
                <p class="afte-cal">10</p>
            </div>
        </li>
        <li class="plus">+</li>
        <li>
            <div class="pri-box4 pri-pop-box">
                <div class="befe-cal">
                    <p>Options</p>
                    <p class="bef-cal-val">50000</p>
                </div>
                <p class="afte-cal">10</p>
            </div>
        </li>
        <li class="amountsec">
            <div class="pop-cal-sec">
        <p><span class="cal-sy">=</span> 3,66,000 <span>per Month</span></p>
        <p><span class="cal-sy">X</span> 12 <span>Months</span></p>
        <p class="pop-fin-cal"><span class="cal-sy">=</span> 44,00,000 <span>per year</span></p>
    </div>
        </li>
    </ul>   
    
    <div class="pri-pop-fot">
    <p>Leverage for various products differ. In order to bring all the turnover at par with delivery.</p>
<p>We divide them by product-wise factor. For Example Intraday is divided by 10 to arrive at equivalent daily turnover.</p>
    </div>
    </div>
</div>



<script>

     // priceing progress bar -- >offerings
     
    
     $(function() {
    var progressbar = $( ".progressbar" ),
      progressLabel = $( ".progress-label" );
 
    progressbar.progressbar({
      value: false,
      change: function() {
        progressLabel.text( progressbar.progressbar( "value" ) + "%" );
      },
      complete: function() {
        progressLabel.text( "Complete!" );
      }
    });
 
    function progress() {
      var val = progressbar.progressbar( "value" ) || 0;
 
      progressbar.progressbar( "value", val + 2 );
 
      if ( val < 99 ) {
        setTimeout( progress, 105 );
      }
    }
 
    setTimeout( progress, 0 );
    });
    
    $('.pri-cal-box').each(function() {
        $(this).children().each(function(i) {
            $(this).delay((i++) * 700).animate({left:0, opacity:1});
        });
    });
    
     $(".pop-price").dialog({
        position: { my: "center", at: "center", of: window,collision: 'fit' }
     });
     
     setTimeout(function(){
        $('.pop-pack').dialog('close');
        $('body').removeClass('popup-overflow');
        $('.plans-invest').show();
        
    }, 9000);
     
    
</script>