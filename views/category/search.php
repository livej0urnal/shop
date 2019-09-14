<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\models\Category;
use app\models\Product;
use yii\widgets\LinkPager;
?>

<!-- Catalogue -->
<section class="section-wrap pt-70 pb-40 catalogue">

    <div class="container relative">
        <div class="row">
            <?php if(!empty($products)) : ?>
                <div class="col-md-9 catalogue-col right mb-50">

                    <div class="shop-catalogue grid-view left col-sm-12">

                        <div class="row row-10 items-grid">
                            <?php foreach ($products as $product) : ?>

                                <div class="col-md-4 col-xs-6">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product['id']]) ?>">
                                                <?= Html::img($product->img , ['alt' => $product->name ]) ?>
                                                <?= Html::img($product->cover_img , ['alt' => $product->name, 'class' => 'back-img']) ?>
                                            </a>
                                            </a>
                                            <?php if(!$product->sale <= 0 ): ?>
                                                <div class="product-label">
                                                    <span class="sale">sale</span>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                        <div class="product-details">
                                            <h3>
                                                <a class="product-title" href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product['id']]) ?>"><?= $product->name ?></a>
                                            </h3>
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
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div> <!-- end row -->
                    </div> <!-- end grid mode -->

                    <div class="clear"></div>

                    <!-- Pagination -->
                    <div class="pagination-wrap">
                        <?php echo LinkPager::widget([
                            'pagination' => $pages,
                            'options' => ['class' => 'pagination right clear'],
                            'linkOptions' => ['class' => 'link-pagination'],
                        ]); ?>
                    </div>

                </div> <!-- end col -->

                       <!-- Sidebar -->
                <aside class="col-md-3 sidebar left-sidebar">
                    <!-- Filter by Price -->
                    <div class="widget filter-by-price clearfix">
                        <h3 class="widget-title uppercase">Filter by Price</h3>

                        <div id="slider-range"></div>
                        <p>
                            <label for="amount">Price:</label>
                            <input type="text" id="amount" readonly style="border:0;">
                            <a href="#" class="btn btn-sm btn-dark">Filter</a>
                        </p>
                    </div>

                    <!-- Select size -->
                    <div class="widget categories">
                        <h3 class="widget-title uppercase">Select size</h3>
                        <ul class="list-no-dividers">
                            <li>
                                <a href="#">Large</a>
                            </li>
                            <li>
                                <a href="#">Medium</a>
                            </li>
                            <li>
                                <a href="#">Small</a>
                            </li>
                            <li>
                                <a href="#">X-Large</a>
                            </li>
                            <li>
                                <a href="#">X-Small</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Select color -->
                    <div class="widget categories">
                        <h3 class="widget-title uppercase">Select color</h3>
                        <ul class="list-no-dividers">
                            <li>
                                <a href="#">White</a>
                            </li>
                            <li>
                                <a href="#">Grey</a>
                            </li>
                            <li>
                                <a href="#">Black</a>
                            </li>
                            <li>
                                <a href="#">Pink</a>
                            </li>
                            <li>
                                <a href="#">Green</a>
                            </li>
                        </ul>
                    </div>
                    <?php if(!empty($best)): ?>

                        <!-- Bestsellers -->
                        <div class="widget bestsellers">
                            <div class="products-widget">
                                <h3 class="widget-title uppercase">Bestsellers</h3>

                                <ul class="product-list-widget">
                                    <?php foreach ($best as $bes) :?>
                                        <li class="clearfix">
                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$bes['id']]) ?>">
                                                <?= Html::img($bes->img , ['alt' => $bes->name ]) ?>
                                                <span class="product-title"><?= $bes->name ?></span>
                                            </a>
                                            <span class="price">
                      <ins>
                        <span class="ammount">$<?= $bes->price ?></span>
                      </ins>
                    </span>
                                        </li>

                                    <?php endforeach; ?>
                                </ul>

                            </div>
                        </div>
                    <?php endif; ?>


                </aside> <!-- end sidebar -->
            <?php else: ?>
                <h4 style="text-align: center;">Товаров нет</h4>
            <?php endif; ?>
        </div> <!-- end row -->
    </div> <!-- end container -->

</section>
<!-- end catalogue -->
