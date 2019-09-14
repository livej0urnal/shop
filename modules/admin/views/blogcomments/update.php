<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Blogcomments */

$this->title = 'Update Blogcomments: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Blogcomments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blogcomments-update">

    <h5><?= Html::encode($this->title) ?></h5>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
