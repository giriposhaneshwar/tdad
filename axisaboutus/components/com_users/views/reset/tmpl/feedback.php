<div class="likepop">
    <div class="ceo-heading-popup clearfix">
        <a href="javascript:void(0)" class="dialog-close close-popup"><i class="sprite-img close-pop"></i></a>
        <div class="dialog-title clearfix">
            <h3 class="car-pop-hea">Share Your Feedback</h3>
        </div>
    </div>
        <div class="dialog-content">
            <div class="clearfix">
                
                <form>
                    <div class="frm-sec">
                        <input type="text" placeholder="Name"/>
                    </div>
                    <div class="frm-sec">
                        
                        <input type="text" placeholder="Email"/>
                    </div>
                    <div class="frm-sec">
                        <input type="text" placeholder="Phone Number"/>
                    </div>
                    <div class="frm-sec">
                        <textarea  placeholder="Enter your feedback here!" class="txt-area"></textarea>
                    </div>
                    <div class="frm-sec">
                         <button type="button" class="primary-btn">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
</div>
<script>
    $(".pop-pack1").dialog({
    position: { my: "center", at: "center", of: window,collision: 'fit' }
    });
     $(".more-btn").on("click", function() {
        $(".more-btn").hide();
        $('.soc-icon-hide').css('display','inline-block');
     });
    
    
</script>