<div id="site-header-wrap">
    <!-- Top Bar -->
    <div id="top-bar">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">
                <div class="top-bar-content">
                    <span id="top-bar-text">
                        <i class="fa fa-map-marker"></i>1 Beverly Hills, Los Angeles, CA, 90210, United States
                        <i class="fa fa-phone"></i>+1 (390) 379 3368
                    </span><!-- /#top-bar-text -->
                </div><!-- /.top-bar-content -->

                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="icons">
                            <a href="#" title="Twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            <a href="#" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            <a href="#" title="Google Plus"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            <a href="#" title="Pinterest"><span class="fa fa-pinterest" aria-hidden="true"></span></a>
                            <a href="#" title="Dribbble"><span class="fa fa-dribbble" aria-hidden="true"></span></a>
                        </span>
                    </div>
                </div><!-- /.top-bar-socials -->
            </div>
        </div>
    </div><!-- /#top-bar -->

    <!-- Header -->
    <header id="site-header" class="header-front-page style-1">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner">
                <div id="site-logo" class="clearfix">
                    <div id="site-logo-inner">
                        <a href="home-hero-slideshow.html" title="Construction" rel="home" class="main-logo">
                            <img src="/assets/img/logo.png" alt="Construction" data-retina="/assets/img/logo@2x.png" data-width="204" data-height="30">
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                <nav id="main-nav" class="main-nav">
                    <ul class="menu">
                        <?php foreach ($categories as $category): ?>
                        <li class="menu-item">
<!--                            menu-item-has-children current-menu-item-->
                            <a href="<?= $category['slug'] ?>"><?= $category['title'] ?></a>
<!--                            <ul class="sub-menu">-->
<!--                                <li class="menu-item"><a href="home-hero-slideshow.html">Slideshow Fullscreen</a></li>-->
<!--                                <li class="menu-item"><a href="home-revolution-slider-full-screen.html">Revolution Fullscreen</a></li>-->
<!--                                <li class="menu-item"><a href="home-revolution-slider-simple.html">Revolution Simple</a></li>-->
<!--                                <li class="menu-item"><a href="one-page-hero-slideshow.html">One-page Slideshow</a></li>-->
<!--                            </ul>-->
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav><!-- /#main-nav -->

                <div class="nav-top-cart-wrapper">
                    <a class="nav-cart-trigger" href="#">
                        <span class="fa fa-shopping-cart cart-icon">
                            <span class="shopping-cart-items-count">3</span>
                        </span>
                    </a>

                    <div class="nav-shop-cart">
                        <div class="widget_shopping_cart_content">
                            <ul class="cart_list product_list_widget ">
                                <li class="mini_cart_item">
                                    <a href="#" class="remove" title="Remove this item">×</a>
                                    <a href="#">
                                        <img width="160" height="160" src="/assets/img/shop-item.png" alt="image">
                                        Shop Item 01
                                    </a>

                                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>200.00</span>
                                    </span>
                                </li>
                                <li class="mini_cart_item">
                                    <a href="#" class="remove" title="Remove this item">×</a>
                                    <a href="#">
                                        <img width="160" height="160" src="/assets/img/shop-item.png" alt="image">
                                        Shop Item 02
                                    </a>

                                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>70.00</span>
                                    </span>
                                </li>
                                <li class="mini_cart_item">
                                    <a href="#" class="remove" title="Remove this item">×</a>
                                    <a href="#">
                                        <img width="160" height="160" src="/assets/img/shop-item.png" alt="image">
                                        Shop Item 03
                                    </a>

                                    <span class="quantity">1 × <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>30.00</span>
                                    </span>
                                </li>
                            </ul><!-- /.product_list_widget -->

                            <p class="total">
                                <strong>Subtotal:</strong>
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>300.00
                                </span>
                            </p>

                            <p class="buttons">
                                <a href="#" class="wprt-button small">View Cart</a>
                                <a href="#" class="wprt-button small checkout">Checkout</a>
                            </p>
                        </div>
                    </div>
                </div><!-- /.nav-top-cart-wrapper -->
            </div>
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- /#site-header-wrap -->