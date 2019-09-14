<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogcomments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogcomments-index">

    <h5><?= Html::encode($this->title) ?></h5>

    <p>
        <?= Html::a('Create Blogcomments', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'article_id',

            'author',
            //'img_author',
            //'content',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
