<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <!-- Featured Title -->
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Our Services</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="#" title="Construction" rel="home" class="trail-begin">Home</a>
                            <span class="sep">/</span>
                            <span class="trail-end">Our Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <section class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="110" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-12 -->

                                    <?php foreach ($services as $service): ?>
                                        <div class="col-md-4">

                                        <div class="service-item clearfix">
                                            <div class="thumb">
                                                <img
                                                    src="<?= $service['gallery']['images'][0] ?? '' ?>"
                                                    alt="<?= $service['title'] ?>"
                                                />
                                            </div>
                                            <div class="service-item-wrap">
                                                <h3 class="title font-size-18">
                                                    <a href="#">
                                                        <?= $service['title'] ?>
                                                    </a>
                                                </h3>
                                                <p>
                                                    <?= $service['description'] ?>
                                                </p>
                                                <a href="/services/<?= $service['id'] ?>" class="wprt-button small rounded-3px">
                                                    READ MORE
                                                </a>
                                            </div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="60" data-mobi="30" data-smobi="30"></div>

<!--                                        <div class="service-item clearfix">-->
<!--                                            <div class="thumb"><img src="/assets/img/services/10.jpg" alt="image" /></div>-->
<!--                                            <div class="service-item-wrap">-->
<!--                                                <h3 class="title font-size-18"><a href="#">Green Building</a></h3>-->
<!--                                                <p>Sed sit amet sapien sit amet odio lobortis ullamcorper quis vel nisl. Nam blandit maximus tristique. Vivamus enim quam.</p>-->
<!--                                                <a href="/services/1" class="wprt-button small rounded-3px">READ MORE</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>-->
                                    </div>
                                    <?php endforeach; ?>
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
