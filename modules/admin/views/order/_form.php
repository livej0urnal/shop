<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use app\assets\DateAppAsset;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>
    <pre class="prettyprint prettyprinted" style="background: green; color: white;">Created : <?= $model->created_at ?></pre>
    <pre class="prettyprint prettyprinted">Last updated : <?= $model->created_at ?></pre>

    <?= $form->field($model, 'updated_at')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0' => 'Active', '1' => 'Complete', ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
