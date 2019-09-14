<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\widgets\Alert;
use app\assets\AppAsset;
?>
<!-- Hero Slider -->
<section class="section-wrap nopadding">
    <div class="container">
        <div class="entry-slider">
            <div class="flexslider" id="flexslider-hero">
                <ul class="slides clearfix">
  <?= \app\components\SliderWidget::widget(['tpl' => 'slider']); ?>
                  </ul>
            </div>
        </div> <!-- end slider -->
    </div>
</section> <!-- end hero slider -->

<?php if(!empty($new)): ?>
<!-- New Arrivals -->
<section class="section-wrap new-arrivals pb-40">
    <div class="container">

        <div class="row heading-row">
            <div class="col-md-12 text-center">
                <h2 class="heading uppercase"><small>New Arrivals</small></h2>
            </div>
        </div>

        <div class="row row-10">
            <?php foreach ($new as $news) :?>
            <div class="col-md-3 col-xs-6">
                <div class="product-item">
                    <div class="product-img">
                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$news['id']]) ?>">
                            <?= Html::img($news->img , ['alt' => $news->name ]) ?>
                            <?= Html::img($news->cover_img , ['alt' => $news->name, 'class' => 'back-img']) ?>
                        </a>
                        <?php if(!$news->sale <= 0 ): ?>
                        <div class="product-label">
                            <span class="sale">sale</span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="product-details">
                        <h3>
                            <a class="product-title" href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$news['id']]) ?>"><?= $news->name ?></a>
                        </h3>
                        <span class="price">
                    <?php if(!$news->old_price <= 0 ): ?>
                        <del>
                    <span>$<?= $news->old_price ?></span>
                  </del>
                    <?php endif; ?>
                  <ins>
                    <span class="ammount">$<?= $news->price ?></span>
                  </ins>
                </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div> <!-- end row -->

    </div>
</section> <!-- end new arrivals -->
<?php endif; ?>
<!-- Newsletter -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="newsletter-box">
                <h5 class="uppercase">Subscribe to Receive Our Updates</h5>
                <form>
                    <input type="email" class="newsletter-input" placeholder="Your email">
                    <input type="submit" class="newsletter-submit btn btn-md btn-dark" value="subscribe">
                </form>
            </div>
        </div>
    </div>
</div>
<?php if(!empty($hits)): ?>
<!-- Best Sellers -->
<section class="section-wrap pb-0">
    <div class="container">

        <div class="row heading-row">
            <div class="col-md-12 text-center">
                <h2 class="heading uppercase"><small>Best Sellers</small></h2>
            </div>
        </div>

        <div class="row row-10">
            <?php foreach ($hits as $hit) :?>
            <div class="col-md-3 col-xs-6 animated-from-left">
                <div class="product-item">
                    <div class="product-img">
                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$hit['id']]) ?>">
                            <?= Html::img($hit->img , ['alt' => $hit->name ]) ?>
                            <?= Html::img($hit->cover_img , ['alt' => $hit->name, 'class' => 'back-img']) ?>
                        </a>
                        <?php if(!$hit->sale <= 0 ): ?>
                            <div class="product-label">
                                <span class="sale">sale</span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="product-details">
                        <h3>
                            <a class="product-title" href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$hit['id']]) ?>"><?= $hit->name ?></a>
                        </h3>
                        <span class="price">
                            <?php if(!$hit->old_price <= 0 ): ?>
                  <del>
                    <span>$<?= $hit->old_price ?></span>
                  </del>
                            <?php endif; ?>
                  <ins>
                    <span class="ammount">$<?= $hit->price ?></span>
                  </ins>
                </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div> <!-- end row -->

    </div>
</section> <!-- end best sellers -->
<?php endif; ?>
<!-- Partners -->
<section class="section-wrap partners pt-0 pb-50">
    <div class="container">
        <div class="row">

            <div id="owl-partners" class="owl-carousel owl-theme">

                <div class="item">
                    <a href="#">
                        <img src="/img/partners/partner_logo_dark_1.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="/img/partners/partner_logo_dark_2.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="/img/partners/partner_logo_dark_3.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="/img/partners/partner_logo_dark_4.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="/img/partners/partner_logo_dark_5.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="/img/partners/partner_logo_dark_6.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="/img/partners/partner_logo_dark_1.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="/img/partners/partner_logo_dark_2.png" alt="">
                    </a>
                </div>

            </div> <!-- end carousel -->

        </div>
    </div>
</section> <!-- end partners -->