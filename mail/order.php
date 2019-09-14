<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\assets\CheckAppAsset;
?>

<?php
CheckAppAsset::register($this);
?>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($session['cart'] as $id => $item ): ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td><?= $item['qty'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['qty'] * $item['price'] ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Total quantity</td>
            <td colspan="1"><?= $session['cart.qty'] ?></td>
        </tr>
        <tr>
            <td colspan="3">Total order</td>
            <td colspan="1"><?= $session['cart.sum'] ?></td>
        </tr>
        </tbody>
    </table>
</div>

