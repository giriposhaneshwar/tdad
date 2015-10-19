<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.axisaboutus
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
// JHtml::_('bootstrap.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery-latest.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery-ui.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/select2.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.bxslider.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/wow.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/viewportchecker.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/lightGallery.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/core.js');


// Add Stylesheets
// $doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/fonts.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/media.css');


// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span6";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = "span9";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "span9";
}
else
{
	$span = "span12";
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
	<?php // Use of Google Font ?>
	<?php if ($this->params->get('googleFont')) : ?>
		<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName'); ?>' rel='stylesheet' type='text/css' />
		<style type="text/css">
			h1,h2,h3,h4,h5,h6,.site-title{
				font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName')); ?>', sans-serif;
			}
		</style>
	<?php endif; ?>
	<?php // Template color ?>
	<?php if ($this->params->get('templateColor')) : ?>
	<style type="text/css">
		body.site
		{
			/*border-top: 3px solid <?php echo $this->params->get('templateColor'); ?>;*/
			background-color: <?php echo $this->params->get('templateBackgroundColor'); ?>
		}
		a
		{
			color: <?php echo $this->params->get('templateColor'); ?>;
		}
		.navbar-inner, .nav-list > .active > a, .nav-list > .active > a:hover, .dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover,
		.btn-primary
		{
			background: <?php echo $this->params->get('templateColor'); ?>;
		}
		.navbar-inner
		{
			-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
		}
	</style>
	<?php endif; ?>
	<!--[if lt IE 9]>
		<script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
	echo ($this->direction == 'rtl' ? ' rtl' : '');
?>">

	<!-- Body -->
	<div class="body">
		<div class="mainContainer container-fluid cps cms">
			<div class="headContainer clearfix cps">
		        <?php if ($this->countModules('position-1')) : ?>		          
		          <header class="headersec">
				    <p class="responsivesec"><a href="javascript:void(0)"><i class="sprite-img responsive-menu"></i></a></p>
			        <div class="logosec"><a href="index.php"><img src="images/logo.png" alt="Axis Bank"></a></div>
			        <div class="navigationfull-section">
	                    <jdoc:include type="modules" name="position-1" style="none" />
	                </div>
			        <div class="axisdirectlinksec"><a href="javasccript:void(0)">Axis Direct</a></div>
				</header>
				<?php endif; ?>
		    </div>
			<div class="bodyContainer">
				<div class="bodyInnerContent">
					<main id="content" role="main" class="<?php echo $span; ?>">
						<!-- Begin Content -->
						<jdoc:include type="message" />
						<jdoc:include type="component" />
						<!-- <jdoc:include type="modules" name="position-8" style="none" /> -->
						<!-- End Content -->
					</main>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer class="footer-section">
	    <div class="container_12">
	        <div class="clearfix">
	            <div class="grid_12">
	                <jdoc:include type="modules" name="footerNav" style="none" />
	                <jdoc:include type="modules" name="footerLinks" style="none" />
	            </div>
	        </div>
	    </div>
	    <div class="copy-rights">
	        <div class="container_12">
	            <div class="clearfix">
	                <div class="grid_12">
	                    <jdoc:include type="modules" name="footerLegal" style="none" />
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
