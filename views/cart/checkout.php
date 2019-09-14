<?php
 use yii\helpers\Url;
 use yii\helpers\Html;
 use yii\widgets\ActiveForm;
 use app\assets\CheckAppAsset;
?>

<?php
   CheckAppAsset::register($this);
?>
<!-- Page Title -->
<section class="page-title text-center">
    <div class="container relative clearfix">
        <div class="title-holder">
            <div class="title-text">
                <h1 class="uppercase">Checkout</h1>
            </div>
        </div>
    </div>
</section> <!-- end page title -->

<!-- Checkout -->
<section class="section-wrap checkout pt-0 pb-50">

    <div class="container relative">
        <div class="row">
            <?php if(Yii::$app->session->hasFlash('success')): ?>
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo Yii::$app->session->getFlash('success'); ?>
                </div>
            <?php endif; ?>

            <?php if(Yii::$app->session->hasFlash('error')) : ?>
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo Yii::$app->session->getFlash('error'); ?>
                </div>
            <?php endif; ?>
            <?php if(!empty($session['cart'])): ?>
            <?php $form = ActiveForm::begin(['enableClientScript' => true]) ?>
            <div class="ecommerce col-xs-12">

                    <div class="col-md-8" id="customer_details">

                        <div>

                                <?= $form->field($order, 'name') ?>
                                <?= $form->field($order, 'email') ?>
                                <?= $form->field($order, 'phone') ?>
                                <?= $form->field($order, 'address') ?>

                        </div>
                    </div> <!-- end col -->

                    <div class="col-md-4">
                        <div class="order-review-wrap ecommerce-checkout-review-order" id="order_review">
                            <h2 class="heading uppercase mb-30">Your Order</h2>
                            <table class="table shop_table ecommerce-checkout-review-order-table">
                                <tbody>
                                 <?php foreach ($session['cart'] as $id => $item) : ?>
                                <tr>
                                    <th><a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$id]) ?>"><?= $item['name'] ?></a><span class="count"> x <?= $item['qty'] ?></span></th>
                                    <td>
                                        <span>$<?= $item['price'] ?></span>
                                    </td>
                                </tr>
                                 <?php endforeach;?>
                                <tr class="cart-subtotal">
                                    <th>Products</th>
                                    <td>
                                        <strong><span ><?= $session['cart.qty'] ?></span></strong>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td>
                                        <strong><span>$<?= $session['cart.sum'] ?></span></strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div id="payment" class="ecommerce-checkout-payment">

                                <div class="form-row place-order">
                                    <?= Html::submitButton('Place order' , ['class' => 'btn btn-lg']) ?>
                                </div>
                            </div>

                    </div> <!-- end order review -->
                    </div>



            </div> <!-- end ecommerce -->
                <?php ActiveForm::end() ?>
            <?php else: ?>
            <?php endif; ?>
        </div> <!-- end row -->
    </div> <!-- end container -->

</section> <!-- end checkout -->
