<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="order-view">

    <h4>Order № <?= $model->id ?></h4>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $items = $model->orderItems;?>
    <div class="table-bordered detail-view">
        <table class="table-hover table-striped">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($items as $item ): ?>
                <tr>
                    <td><a href="<?= \yii\helpers\Url::to(['/product/view', 'id'=>$item->product_id]) ?>" target="_blank" style="color: inherit"><?= $item['name'] ?></a></td>
                    <td><?= $item['qty_item'] ?></td>
                    <td>$<?= $item['price'] ?></td>
                    <td>$<?= $item['sum_item'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'updated_at',
            'qty',
            'sum',
            [
                'attribute' => 'status',
                'value' => function ($data){
                    return !$data->status ? '<span class="text-danger">Active</span>' : '<span class="text-success">Complete</span>';
                },
                'format' => 'html',
            ],
            'name',
            'email:email',
            'phone',
            'address',
        ],
    ]) ?>




</div>
