<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Blogcomments */

$this->title = 'Create Blogcomments';
$this->params['breadcrumbs'][] = ['label' => 'Blogcomments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogcomments-create">

    <h5><?= Html::encode($this->title) ?></h5>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
