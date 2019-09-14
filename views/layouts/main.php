<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <!-- Google Fonts -->
    <?php $this->head() ?>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700%7CRaleway:300,400,700%7CPlayfair+Display:700' rel='stylesheet'>


    <!-- Favicons -->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>

<body class="relative">

<?php $this->beginBody() ?>

<main class="content-wrapper oh">

    <!-- Navigation -->
    <header class="nav-type-1">

        <div class="top-bar hidden-sm hidden-xs">
            <div class="container">
                <div class="top-bar-line">
                    <div class="row">
                        <div class="top-bar-links">
                            <ul class="col-sm-6 top-bar-acc">
                                <?php if (!Yii::$app->user->isGuest) : ?>
                                <li class="top-bar-link"><a href="/admin/" target="_blank">Dashboard</a></li>
                                <?php endif; ?>
                                <li class="top-bar-link"><a href="/category/1">For man</a></li>
                                <li class="top-bar-link"><a href="/category/2">For woman</a></li>
                                <li class="top-bar-link"><a href="/category/3">Accessories</a></li>
                                <li class="top-bar-link"><a href="/category/4">Bags</a></li>
                            </ul>

                            <ul class="col-sm-6 text-right top-bar-currency-language">
                                 <li>
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-vimeo"></i></a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- end top bar -->

        <nav class="navbar navbar-static-top">
            <div class="navigation" id="sticky-nav">
                <div class="container relative">

                    <div class="row">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Mobile cart -->
                            <div class="nav-cart mobile-cart hidden-lg hidden-md">
                                <div class="nav-cart-outer">
                                    <div class="nav-cart-inner">
                                        <a href="#" class="nav-cart-icon">2</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="header-wrap">
                            <div class="header-wrap-holder">

                                <!-- Search -->
                                <div class="nav-search hidden-sm hidden-xs">
                                    <form method="get" class="mobile-search relative" action="<?= \yii\helpers\Url::to(['category/search']) ?>">
                                        <input type="text" class="form-control search" placeholder="Search..." name="q">
                                        <button type="submit" class="search-button">
                                            <i class="icon icon_search"></i>
                                        </button>
                                    </form>
                                </div>

                                <!-- Logo -->
                                <div class="logo-container">
                                    <div class="logo-wrap text-center">
                                        <a href="<?= \yii\helpers\Url::home() ?>">
                                            <img class="logo" src="/img/logo_dark.png" alt="logo">
                                        </a>
                                    </div>
                                </div>



                                <!-- Cart -->
                                <div class="nav-cart-wrap hidden-sm hidden-xs">
                                    <div class="nav-cart right">
                                        <div class="nav-cart-outer">
                                            <div class="nav-cart-inner">
                                                <?php if(!empty($_SESSION['cart'])): ?>
                                                <a href="#" onclick="return false" class="nav-cart-icon"><?php echo $_SESSION['cart.qty']; ?></a>
                                                <?php else: ?>
                                                <a href="#" onclick="return getCart()" class="nav-cart-icon">0</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="nav-cart-container">
                                            <div class="nav-cart-items">
                                                <?php if(!empty($_SESSION['cart'])): ?>
                                            <?php foreach ($_SESSION['cart'] as  $item ): ?>
                                                <div class="nav-cart-item clearfix">
                                                    <div class="nav-cart-img">
                                                            <?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => '50'])  ?>
                                                    </div>
                                                    <div class="nav-cart-title">

                                                            <?= $item['name'] ?>
                                                        <div class="nav-cart-price">
                                                            <span><?= $item['qty'] ?> x</span>
                                                            <span>$<?= $item['price'] ?></span>
                                                        </div>
                                                    </div>

                                                </div>

                                            <?php endforeach; ?>
                                                <?php else: ?>
                                                    <h5 style="text-align: center" class="danger">The cart is empty</h5>
                                                    <div class="clearfix"></div>
                                                <?php endif; ?>
                                            </div> <!-- end cart items -->

                                            <div class="nav-cart-summary">

                                                <?php if(!empty($_SESSION['cart'])): ?>
                                                <span>Cart Subtotal</span>
                                                <span class="total-price">$<?php echo $_SESSION['cart.sum']; ?></span>
                                                <?php else: ?>
                                                <?php endif;?>
                                            </div>

                                            <div class="nav-cart-actions mt-20">
                                                <?php if(!empty($_SESSION['cart'])): ?>
                                                <a href="<?= \yii\helpers\Url::to(['cart/view']) ?>" class="btn btn-md btn-dark"><span>View Cart</span></a>
                                                <a href="<?= \yii\helpers\Url::to(['cart/checkout']) ?>" class="btn btn-md btn-color mt-10"><span>Proceed to Checkout</span></a>
                                                <?php else: ?>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-cart-amount right">
                      <span>

                        <?php if(!empty($_SESSION['cart'])):?>
                            <a href="#" onclick="return getCart()"> Cart   /  $<?php echo $_SESSION['cart.sum']; ?> </a>
                        <?php else:?>
                        <?php endif; ?>
                      </span>
                                    </div>
                                </div> <!-- end cart -->






                            </div>
                        </div> <!-- end header wrap -->

                        <div class="nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav">

                                    <li id="mobile-search" class="hidden-lg hidden-md">
                                        <form method="get" class="mobile-search relative" action="<?= \yii\helpers\Url::to(['category/search']) ?>">
                                            <input type="text" class="form-control search" placeholder="Search..." name="q">
                                            <button type="submit" class="search-button">
                                                <i class="icon icon_search"></i>
                                            </button>
                                        </form>
                                    </li>

                                    <li class="dropdown">
                                        <a href="<?= \yii\helpers\Url::home() ?>">Home</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="/category/about">About Us</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                                        <ul class="dropdown-menu megamenu">
                                            <li>
                                                <div class="megamenu-wrap">
                                                    <div class="row">
                                                        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="/blog/view">Blog</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="/category/contact">Contact us</a>
                                    </li>
                                    <li class="mobile-links">
                                        <ul>
                                            <li>
                                                <a href="/admin/" target="_blank">Login</a>
                                            </li>
                                            <li>
                                                <a href="#">My Account</a>
                                            </li>
                                            <li>
                                                <a href="#">My Wishlist</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul> <!-- end menu -->
                            </div> <!-- end collapse -->
                        </div> <!-- end col -->

                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div> <!-- end navigation -->
        </nav> <!-- end navbar -->
    </header> <!-- end navigation -->

    <?= $content; ?>

    <!-- Footer Type-1 -->
    <footer class="footer footer-type-1 bg-white">
        <div class="container">
            <div class="footer-widgets top-bottom-dividers pb-mdm-20">
                <div class="row">

                    <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title uppercase">Information</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">Our stores</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Business with us</a></li>
                                <li><a href="#">Delivery information</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title uppercase">Help</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Track order</a></li>
                                <li><a href="#">F.A.Q</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4 col-xs-4 col-xxs-12">
                        <div class="widget footer-links">
                            <h5 class="widget-title uppercase">Account</h5>
                            <ul class="list-no-dividers">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Order history</a></li>
                                <li><a href="#">Special gifts</a></li>
                                <li><a href="#">Track order</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <h5 class="widget-title uppercase">about us</h5>
                            <p class="mb-0">A-ha Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine.</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget footer-get-in-touch">
                            <h5 class="widget-title uppercase">Contact</h5>
                            <address class="footer-address"><span>Address:</span> Philippines, PO Box 620067, Talay st. 66, A-ha inc.</address>
                            <p>Phone: <a href="tel:+1-888-1554-456-123">+ 1-888-1554-456-123</a></p>
                            <p>Email: <a href="mailto:themesupport@gmail.com">themesupport@gmail.com</a></p>
                            <div class="social-icons rounded mt-20">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                    </div> <!-- end stay in touch -->

                </div>
            </div>
        </div> <!-- end container -->

        <div class="bottom-footer bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 copyright sm-text-center">
              <span>
                &copy; 2018
              </span>
                    </div>

                    <div class="col-sm-4 text-center">
                        <div id="back-to-top">
                            <a href="#top">
                                <i class="fa fa-angle-up"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-amex"></i>
                    </div>
                </div>
            </div>
        </div> <!-- end bottom footer -->
    </footer> <!-- end footer -->
<?php
    \yii\bootstrap\Modal::begin([
        'header' => '<h4 style="text-align: center">Cart</h4>',
        'size'   => 'modal-lg',
        'id'     => 'cart',
        'footer' => '<button type="button" class="btn btn-default left " data-dismiss="modal" onclick="location.reload()">Return to shop</button>                   
                   <a href="'. \yii\helpers\Url::to(['cart/view']) .'" class="add-to-scart"><button type="button" class="btn btn-default btn-color right">View cart</button></a>
                    <button type="button" class="btn btn-danger" onclick="clearCart()" style="margin-right: 10px;">Clear cart</button>'
    ]);
    \yii\bootstrap\Modal::end();
?>
</main> <!-- end main container -->


<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>