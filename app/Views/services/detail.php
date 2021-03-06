<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <!-- Featured Title -->
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Service Detail</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="#" title="Construction" rel="home" class="trail-begin">
                                Home
                            </a>
                            <span class="sep">/</span>
                            <span class="trail-end">
                                Service Detail
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap" class="container">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>

                            <h3 class="line-height-normal margin-bottom-10">
                                <?= $service['title'] ?>
                            </h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                            <p class="margin-bottom-0">
                                <?= $service['description'] ?>
                            </p>

                            <div class="wprt-spacer" data-desktop="35" data-mobi="35" data-smobi="35"></div>

                            <?php if (isset($service['introductions'])): ?>
                                <?php foreach ($service['introductions'] as $introduction): ?>
                                    <div class="wprt-toggle style-1">
                                        <h3 class="toggle-title">
                                            <?= $introduction['title'] ?>
                                        </h3>
                                        <div class="toggle-content">
                                            <?= $introduction['description'] ?>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            <?php endif ?>

                            <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                        </div><!-- /.col-md-12 -->

                        <?php if (isset($service['gallery'])): ?>
                            <div class="col-md-12">
                            <h3 class="line-height-normal margin-bottom-10">GALLERY PROJECT</h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                            <p class="margin-bottom-0">
                                <?= $service['gallery']['description'] ?>
                            </p>

                            <div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                            <div class="wprt-galleries-grid arrow-style-1 has-arrows arrow60 arrow-position-2" data-layout="slider" data-column="2" data-column2="2" data-column3="1" data-column4="1" data-gaph="10" data-gapv="10">
                                <div id="images-wrap" class="cbp">
                                    <?php foreach ($service['gallery']['images'] as $image): ?>
                                        <div class="cbp-item">
                                            <div class="item-wrap">
                                                <a class="zoom" href="/<?= $image ?>">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                                <img src="/<?= $image ?>" alt="image" />
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div><!-- /#images-wrap -->
                            </div><!-- /.wprt-galleries-grid -->
                        </div>
                        <?php endif ?>

                        <div class="col-md-6">
                            <div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>

                            <h3 class="line-height-normal margin-bottom-10">PRECONSTRUCTION</h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                            <p class=" margin-bottom-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit. Vivamus pretium urna at condimentum porta.</p>

                            <ul class="wprt-list style-2 accent-color">
                                <li>Lorem ipsum dolor sit amet, consectetur ea adipiscing elit.</li>
                                <li>Vestibulum eu libero volutpat, portas quam dolor acc.</li>
                                <li>Donec sodales quam id lorem lobortis nisl vehicula.</li>
                                <li>Cras id justo eget sapien scelerisque lacinia non a eros.</li>
                            </ul>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>

                            <h3 class="line-height-normal margin-bottom-10">AFTER THE PROJECT</h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit. Vivamus pretium urna at condimentum porta.</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-12">
                            <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                        </div>
                    </div><!-- /.row -->

                </div><!-- /.inner-content-wrap -->
            </div><!-- /#site-content -->

            <div id="sidebar">
                <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>

                <div id="inner-sidebar" class="inner-content-wrap">
                    <div class="widget widget_nav_menu">
                        <div class="menu-service-menu-container">
                            <ul id="menu-service-menu" class="menu">
                                <li class="menu-item current_page_item"><a href="#">CONSTRUCTION CONSULTANT</a></li>
                                <li class="menu-item"><a href="#">ARCHITECTURAL DESIGN</a></li>
                                <li class="menu-item"><a href="#">ELECTRICAL SYSTEM</a></li>
                                <li class="menu-item"><a href="#">GENERAL CONTRACTING</a></li>
                                <li class="menu-item"><a href="#">RESCONSTRUCTION SERVICES</a></li>
                                <li class="menu-item"><a href="#">PLUMBILG SERVICES</a></li>
                            </ul>
                        </div>
                    </div><!-- /.widget_nav_menu -->
                </div><!-- /#inner-sidebar -->
            </div><!-- /#sidebar -->
        </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->
<?= $this->endSection() ?>
