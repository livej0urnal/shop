<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Admin Login';
$this->params['breadcrumbs'][] = $this->title;
?>
    <section class="page-title text-center">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase"><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
        </div>
    </section> <!-- end page title -->
    <!-- login -->
    <section class="section-wrap login-register pt-0 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="login">
                        <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"col-sm-12\">{input} {label}</div>\n<div class=\"col-sm-12\">{error}</div>",
                        ]) ?>

                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary login-button', 'name' => 'login-button']) ?>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- end login -->
