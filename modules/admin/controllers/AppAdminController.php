<?php


namespace app\modules\admin\controllers;
use yii\filters\AccessControl;

use yii\web\Controller;

class AppAdminController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}