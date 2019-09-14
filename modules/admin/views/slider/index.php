<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <h5><?= Html::encode($this->title) ?></h5>

    <p>
        <?= Html::a('Create Slider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'image',
            [
                    'attribute' => 'image',
                    'value' => function ($data)
                    {
                        return '<img src="'. $data->image . '" class="preview-slider"/>';
                    },
                    'format' => 'html',
            ],
            'title',
            //'description',
            [
                'attribute' => 'description',
                'format' => 'html',
            ],
            'link',
            'class',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
