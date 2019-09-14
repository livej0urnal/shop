<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\models\Category;
use app\models\Product;
use yii\widgets\LinkPager;
?>

<!-- Single Product -->
<section class="section-wrap single-product">
    <div class="container relative">
        <div class="row">

            <div class="col-sm-6 col-xs-12 mb-60">

                <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

                    <div class="gallery-cell">
                        <a href="<?= \yii\helpers\Url::to("@web//img/shop/{$product->single_img}") ?>" class="lightbox-img">
                            <?= Html::img($product->single_img,['alt'=>$product->name]) ?>
                            <i class="icon arrow_expand"></i>
                        </a>
                    </div>
                    <div class="gallery-cell">
                        <a href="/img/shop/single_img_2.jpg" class="lightbox-img">
                            <img src="/img/shop/single_img_2.jpg" alt="" />
                            <i class="icon arrow_expand"></i>
                        </a>
                    </div>
                    <div class="gallery-cell">
                        <a href="/img/shop/single_img_3.jpg" class="lightbox-img">
                            <img src="/img/shop/single_img_3.jpg" alt="" />
                            <i class="icon arrow_expand"></i>
                        </a>
                    </div>
                    <div class="gallery-cell">
                        <a href="/img/shop/single_img_4.jpg" class="lightbox-img">
                            <img src="/img/shop/single_img_4.jpg" alt="" />
                            <i class="icon arrow_expand"></i>
                        </a>
                    </div>
                    <div class="gallery-cell">
                        <a href="/img/shop/single_img_5.jpg" class="lightbox-img">
                            <img src="/img/shop/single_img_5.jpg" alt="" />
                            <i class="icon arrow_expand"></i>
                        </a>
                    </div>

                </div> <!-- end gallery main -->

                <div class="gallery-thumbs">

                    <div class="gallery-cell">
                        <?= Html::img($product->single_img) ?>
                    </div>
                    <div class="gallery-cell">
                            <img src="/img/shop/single_img_2.jpg" alt="" />
                    </div>
                    <div class="gallery-cell">
                            <img src="/img/shop/single_img_3.jpg" alt="" />
                    </div>
                    <div class="gallery-cell">
                            <img src="/img/shop/single_img_4.jpg" alt="" />
                    </div>
                    <div class="gallery-cell">
                            <img src="/img/shop/single_img_5.jpg" alt="" />
                    </div>


                </div> <!-- end gallery thumbs -->

            </div> <!-- end col img slider -->

            <div class="col-sm-6 col-xs-12 product-description-wrap">
                <h1 class="product-title"><?= $product->name ?></h1>
                <span class="rating">
              <a href="#">3 Reviews</a>
            </span>
                <span class="price">
                    <?php if(!$product->old_price <= 0 ): ?>
              <del>
                <span>$<?= $product->old_price ?></span>
              </del>
                    <?php endif; ?>
              <ins>
                <span class="ammount">$<?= $product->price ?></span>
              </ins>
            </span>
                <p class="product-description">
                    <?= $product->description ?>
                </p>

                <div class="select-options">
                    <div class="row row-20">
                        <div class="col-sm-6">
                            <select class="color-select">
                                <option value>Select color</option>
                                <option value="white">white</option>
                                <option value="grey">grey</option>
                                <option value="black">black</option>
                                <option value="green">green</option>
                                <option value="blue">blue</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <select class="size-options">
                                <option value>Select size</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                    </div>
                </div>

                <ul class="product-actions clearfix">



                    <li>
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus" onclick="qty.value = parseInt(qty.value) - 1" />
                            <input type="number" step="1" min="0" value="1" title="Qty" class="input-text qty text" id="qty" />
                            <input type="button" value="+" class="plus" onclick="qty.value = parseInt(qty.value) + 1" />
                        </div>
                    </li>
                    <li>
                        <a href="<?= \yii\helpers\Url::to(['cart/add', 'id'=> $product->id ]) ?>" data-id="<?= $product->id ?>" class="btn btn-color btn-lg add-to-cart left"><span>Add to Cart</span></a>
                    </li>
                </ul>

                <div class="product_meta">
                    <span class="posted_in">Category:
                        <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id]) ?>">
                            <?= $product->category->name ?>
                        </a>
                    </span>
                </div>

                <div class="socials-share clearfix">
                    <div class="social-icons rounded">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                </div>
            </div> <!-- end col product description -->
        </div> <!-- end row -->

        <!-- tabs -->
        <div class="row">
            <div class="col-md-12">
                <div class="tabs tabs-bb">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-description" data-toggle="tab">Description</a>
                        </li>

                        <li>
                            <a href="#tab-reviews" data-toggle="tab">Reviews</a>
                        </li>
                    </ul> <!-- end tabs -->

                    <!-- tab content -->
                    <div class="tab-content">

                        <div class="tab-pane fade in active" id="tab-description">
                            <p>
                                <?= $product->content ?>
                            </p>
                        </div>



                        <div class="tab-pane fade" id="tab-reviews">

                            <div class="reviews">
                                <ul class="reviews-list">
                                    <li>
                                        <div class="review-body">
                                            <div class="review-content">
                                                <p class="review-author"><strong>Alexander Samokhin</strong> - May 6, 2014 at 12:48 pm</p>
                                                <div class="rating">
                                                    <a href="#"></a>
                                                </div>
                                                <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="review-body">
                                            <div class="review-content">
                                                <p class="review-author"><strong>Christopher Robins</strong> - May 6, 2014 at 12:48 pm</p>
                                                <div class="rating">
                                                    <a href="#"></a>
                                                </div>
                                                <p>This template is so awesome. I didn’t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars.</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div> <!--  end reviews -->
                        </div>

                    </div> <!-- end tab content -->

                </div>
            </div> <!-- end tabs -->
        </div> <!-- end row -->


    </div> <!-- end container -->
</section> <!-- end single product -->

<?php if(!empty($new)): ?>
<!-- Related Items -->
<section class="section-wrap related-products pt-0">
    <div class="container">
        <div class="row heading-row">
            <div class="col-md-12 text-center">
                <h2 class="heading uppercase"><small>Related Products</small></h2>
            </div>
        </div>

        <div class="row row-10">

            <div id="owl-related-products" class="owl-carousel owl-theme nopadding">
                <?php foreach ($new as $news) :?>
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
                <?php endforeach; ?>

            </div> <!-- end owl -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end related products -->
<?php endif; ?>