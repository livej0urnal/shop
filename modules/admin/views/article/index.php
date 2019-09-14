<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h5><?= Html::encode($this->title) ?></h5>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'category_id',
            [
                'attribute' => 'category_id',
                'value' => function($data){
                    return $data->blog->name;
                },
            ],
            'created_up',
            'name',
            //'content:ntext',
            // 'keywords',
            // 'description',
            // 'img',
            // 'recent_img',
            // 'related_img',
             'author',
            // 'related',
            // 'recent',
            // 'enable',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
