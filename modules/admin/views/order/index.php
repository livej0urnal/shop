<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h5><?= Html::encode($this->title) ?></h5>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
             //'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
