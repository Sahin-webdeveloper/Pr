<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Construction - Ultimate Construction Template</title>
    <meta name="description" content="Template built for Construction Company, Building Services, Architecture, Engineering, Cleaning Service and other Construction related services">
    <meta name="keywords" content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <meta name="author" content="blogwp.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="/assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/icon/apple-touch-icon-158-precomposed.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="front-page no-sidebar site-layout-full-width menu-has-cart header-sticky header-style-1">
<div id="top"></div>

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <?= $this->include('includes/header') ?>

        <?= $this->renderSection('content') ?>

        <?= $this->include('includes/footer') ?>

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top">TOP</a>

<!-- Javascript -->
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/animsition.js"></script>
<script type="text/javascript" src="/assets/js/plugins.js"></script>
<script type="text/javascript" src="/assets/js/countTo.js"></script>
<script type="text/javascript" src="/assets/js/fitText.js"></script>
<script type="text/javascript" src="/assets/js/flexslider.js"></script>
<script type="text/javascript" src="/assets/js/vegas.js"></script>
<script type="text/javascript" src="/assets/js/owlCarousel.js"></script>
<script type="text/javascript" src="/assets/js/cube.portfolio.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

<?= $this->renderSection('scripts') ?>

</body>
</html>
