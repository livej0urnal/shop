<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use app\models\Product;

class ProductController extends AppController
{
    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if(empty($product)){
            throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
        }
        $this->setMeta($product->name .' | Fox store' , $product->keywords, $product->description);
        $new = Product::find()->where(['new' => '1'])->limit(8)->all();
        return $this->render('view', compact('product', 'new'));
    }
}