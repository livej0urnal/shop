
<!-- Page Title -->
<section class="page-title text-center">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">Shopping Cart</h1>
            </div>
        </div>
    </div>
</section> <!-- end page title -->
<!-- Cart -->

<section class="section-wrap shopping-cart pt-0">

    <div class="container relative">
        <div class="row">
            <?php if(!empty($session['cart'])): ?>
            <div class="col-md-12">
                <div class="table-wrap mb-30">

                    <table class="shop_table cart table">
                        <thead>
                        <tr>
                            <th class="product-name" colspan="2">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($session['cart'] as $id => $item) : ?>
                        <tr class="cart_item">
                            <td class="product-thumbnail">
                                <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$id]) ?>" style="color: inherit">
                                    <?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => '60'])  ?>
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$id]) ?>"><?= $item['name'] ?></a>
<!--                                <ul>-->
<!--                                    <li>Size: XL</li>-->
<!--                                    <li>Color: White</li>-->
<!--                                </ul>-->
                            </td>
                            <td class="product-price">
                                <span class="amount">$<?= $item['price'] ?></span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity buttons_added">
                                    <p style="text-align: center"> <?= $item['qty'] ?></p>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <p>$<?= $item['price']*$item['qty'] ?></p>
                            </td>
                            <td class="product-remove">
                                <a href="#" class="remove del-cart-product" title="Remove this item" data-id="<?= $id; ?>">
                                    <i class="icon icon_close"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
                <div class="row">

                    <div class="col-md-4" style="float: right">
                        <div class="cart_totals">
                            <h2 class="heading relative heading-small uppercase mb-30">Cart Totals</h2>
                            <table class="table shop_table">
                                <tbody>
                                <tr class="order-total">
                                    <th><strong>Products</strong></th>
                                    <td>
                                        <strong><span class="amount"><?= $session['cart.qty'] ?></span></strong>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th><strong>Order Total</strong></th>
                                    <td>
                                        <strong><span class="amount">$<?= $session['cart.sum'] ?></span></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div> <!-- end col cart totals -->
                 </div> <!--       end row-->
                <div class="row mb-50">

                    <div class="col-md-12">
                        <div class="actions right">
                            <div class="wc-proceed-to-checkout">
                                <a href="<?= \yii\helpers\Url::to(['cart/checkout']) ?>" class="btn btn-md btn-color" ><span>proceed to checkout</span></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- end col -->
        </div> <!-- end row -->

            <?php else: ?>
                <h4 style="text-align: center">The cart is empty</h4>
            <?php endif; ?>
        </div> <!-- end row -->


    </div> <!-- end container -->

</section> <!-- end cart -->

