<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h5><?= Html::encode($this->title) ?></h5>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            //'category_id',
            [
                    'attribute' => 'category_id',
                    'value' => function($data){
                        return $data->category->name;
                    },
            ],

            //'content:ntext',
            'price',
            //'old_price',
            //'keywords',
            //'description',
            //'img',
            //'cover_img',
            //'single_img',
            [
                'attribute' => 'hit',
                'value' => function($data){
                    return !$data->hit ? '<span class="text-danger">No</span>' : '<span class="text-success">Yes</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'new',
                'value' => function($data){
                    return !$data->new ? '<span class="text-danger">No</span>' : '<span class="text-success">Yes</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'sale',
                'value' => function($data){
                    return !$data->sale ? '<span class="text-danger">No</span>' : '<span class="text-success">Yes</span>';
                },
                'format' => 'html',
            ],
            //'hit',
            //'new',
            //'sale',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
