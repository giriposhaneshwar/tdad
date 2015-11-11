<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<title>AxisDirect</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--<jdoc:include type="head" />-->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/media.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-latest.js" ></script> 

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-ui.js" ></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
</head>
<body>
<div id="main">
  <header>
    <div class="header-top">
      <div class="before-expand">
        <div class="clearfix">
         <div class="leftpart">
              <div class="top-news">
                <?php if ($this->countModules('market_snapshot_top1')) : ?>
                <jdoc:include type="modules" name="market_snapshot_top1" style="none" />
                <?php endif; ?>
              </div>
            </div>
            <div class="rightpart">
              <div class="top-news top-news-right clearfix">
                <?php if ($this->countModules('market_snapshot_top2')) : ?>
                <jdoc:include type="modules" name="market_snapshot_top2" style="none" />
                <?php endif; ?>
                <?php /*?><?php if ($this->countModules('market_snapshot_top3')) : ?>
                <jdoc:include type="modules" name="market_snapshot_top3" style="none" />
                <?php endif; ?><?php */?>
              </div>
            </div>
        </div>
      </div>
      <div class="after-expand ">
        <div class="clearfix">
         	<div class="box-1">
              <?php if ($this->countModules('market_snapshot1')) : ?>
              <jdoc:include type="modules" name="market_snapshot1" style="none" />
              <?php endif; ?>
            </div>
            <div class="box-2">
              <?php if ($this->countModules('market_snapshot2')) : ?>
              <jdoc:include type="modules" name="market_snapshot2" style="none" />
              <?php endif; ?>
            </div>
            <div class="box-3">
              <?php if ($this->countModules('market_snapshot3')) : ?>
              <jdoc:include type="modules" name="market_snapshot3" style="none" />
              <?php endif; ?>
            </div>
            <div class="box-4">
              <?php if ($this->countModules('market_snapshot4')) : ?>
              <jdoc:include type="modules" name="market_snapshot4" style="none" />
              <?php endif; ?>
            </div>
        </div>
      </div>
      <p class="header-top-expand-arrow"> <i class="sprite-img open-arrow"></i> </p>
    </div>
    <div class="header-second-mobile clearfix"> <i class="sprite-img responsive-menu"></i> <a href="<?php echo $this->baseurl; ?>/" class="logo_mobile"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png"></a>
      
      <div class="mob-nav-rig clearfix">
            	<a href="javascript:void(0);" class="country-drop"><span class="coun-select-val">INDIA</span> <i class="sprite-img support-icon"></i></a>
                <ul class="header-top-country">
                    <li><a href="javascript:void(0)">INDIA</a></li>
                    <li><a href="javascript:void(0)">NRI</a></li>
                </ul>
                <p class="res-moremenu"><i class="sprite-img more-menu"></i></p>
            </div>
    </div>
    
    <div class="header-second-web ">
      <div class="logosection"> <a href="<?php echo $this->baseurl; ?>/" class="logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" class="logo-web"></a></div>
      <div class="menu-section tophead">
      	<div class="user-login-area clearfix">
           <?php if ($this->countModules('top_navigation_login')) : ?>
        <jdoc:include type="modules" name="top_navigation_login" style="none" />
        <?php endif; ?>
          </div>
          <?php if ($this->countModules('top_navigation')) : ?>
      <jdoc:include type="modules" name="top_navigation" style="none" />
      <?php endif; ?>
          
      </div>
    </div>
  </header>
<!--  <section class="site-start">
    <div class="container_12">-->
      <jdoc:include type="component"/>
   <!-- </div>
  </section>-->
  <!-- footer -->
  <footer class="footer">
    <div class="container_12">
      <div class="row clearfix">
        <div class="grid_2">
          <?php if ($this->countModules('footer_position1')) : ?>
          <jdoc:include type="modules" name="footer_position1" style="none" />
          <?php endif; ?>
        </div>
        <div class="grid_2">
          <?php if ($this->countModules('footer_position2')) : ?>
          <jdoc:include type="modules" name="footer_position2" style="none" />
          <?php endif; ?>
        </div>
        <div class="grid_2">
          <?php if ($this->countModules('footer_position3')) : ?>
          <jdoc:include type="modules" name="footer_position2" style="none" />
          <?php endif; ?>
        </div>
        <div class="grid_2">
          <?php if ($this->countModules('footer_position4')) : ?>
          <jdoc:include type="modules" name="footer_position3" style="none" />
          <?php endif; ?>
        </div>
        <div class="grid_4">
          <?php if ($this->countModules('footer_position5')) : ?>
          <jdoc:include type="modules" name="footer_position5" style="none" />
          <?php endif; ?>
        </div>
      </div>
      <div class="divider mt20"></div>
    </div>
    <div class="container_12">
      <div class="row clearfix">
        <div class="axis-info grid_12">
          <?php if ($this->countModules('footer_bottom')) : ?>
          <jdoc:include type="modules" name="footer_bottom" style="none" />
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="footer-lastline shadow-before-border">
      <div class="shadow-after-border">
        <div class="container_12">
          <div class="row footer-lastmenu clearfix">
              <?php if ($this->countModules('footer')) : ?>
              <jdoc:include type="modules" name="footer" style="none" />
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="overlay"></div>
  <div class="pop-pack"></div>
</div>

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-ui.js" ></script> 
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.ui.touch-punch.min.js" ></script> 
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/axisNav.js" ></script> 
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/select2.js" ></script> 
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.newsTicker.js" ></script> 
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/checkboxradio-min.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.bxslider.min.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.sliderTabs.min.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/simplecalendar.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.timer-plugin.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.countdown.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.singlePageNav.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/wow.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/rate-it.js" ></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.fullPage.js" ></script>
<?php /*?><script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-migrate-1.2.1.js" ></script> 
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.contentcarousel.js" ></script> <?php */?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/core.js" ></script>


</body>
</html>