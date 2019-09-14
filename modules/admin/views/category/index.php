<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h5><?= Html::encode($this->title) ?></h5>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            //'parent_id',
            [
                    'attribute' => 'parent_id',
                    'value'  => function($data){
                        return $data->category->name;
                    },
             ],
            'keywords',
            'description',
            //'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
