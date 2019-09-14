<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Blogcomments */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Blogcomments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogcomments-view">

    <h5><?= Html::encode($this->title) ?></h5>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'article_id',
            'author',
            'img_author',
            'content',
        ],
    ]) ?>

</div>
