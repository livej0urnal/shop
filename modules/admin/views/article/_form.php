<?php

use yii\helpers\Html;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Blog::find()->all(), 'id', 'name')) ?>


    <?= $form->field($model, 'created_up')->textInput() ?>

    <?php echo $form->field($model, 'content')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),]); ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'description')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),]); ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recent_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'related_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'related')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'recent')->checkbox([ '0', '1', ]) ?>

    <?= $form->field($model, 'enable')->checkbox([ '0', '1', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
