<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th></th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
                <th><span class="glyphicon glyphicon-remove text-danger del-item"  aria-hidden="true" onclick="clearCart()" style="cursor:pointer;"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($session['cart'] as $id => $item ): ?>
                <tr>
                    <td>
                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$id]) ?>" style="color: inherit">
                        <?= \yii\helpers\Html::img($item['img'] , ['alt' => $item['name'], 'height' => '60'])  ?>
                        </a>
                    </td>
                    <td><a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$id]) ?>" style="color: inherit"><?= $item['name'] ?></a></td>
                    <td><?= $item['qty'] ?></td>
                    <td>$<?= $item['price'] ?></td>
                    <td><span class="glyphicon glyphicon-remove text-danger del-item" data-id="<?= $id; ?>" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Quantity</td>
                <td colspan="1"><?= $session['cart.qty'] ?></td>
            </tr>
            <tr>
                <td colspan="4">Sum</td>
                <td colspan="1">$<?= $session['cart.sum'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h4 style="text-align: center">The cart is empty</h4>
<?php endif; ?>
