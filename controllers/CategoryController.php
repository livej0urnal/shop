<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use app\models\Product;
use yii\data\Pagination;


class CategoryController extends AppController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $hits = Product::find()->where(['hit' => '1'])->limit(8)->all();
        $new = Product::find()->where(['new' => '1'])->limit(8)->all();
        $this->setMeta('Fox store ');
        return $this->render('index', compact('hits', 'new'));
    }

    /**
     * @return string
     */
    public function actionAbout()
    {
        $this->setMeta( 'About us | Fox store');
        return $this->render('about');
    }
    public function actionContact()
    {
        $this->setMeta( 'Contact us | Fox store');
        return $this->render('contact');
    }

    /**
     * @param $id
     * @return string
     */
    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $category = Category::findOne($id);
        if(empty($category)){
            throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
        }
        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6 , 'forcePageParam' => false, 'pageSizeParam' => false ]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $best = Product::find()->where(['hit' => '1'])->limit(3)->all();
        $this->setMeta( $category->name .' | Fox store' , $category->keywords, $category->description);
        return $this->render('view', compact('products', 'pages' , 'category', 'best'));
    }


    public function actionSearch()
    {
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta($q .' | Fox store');
        if(!$q)
        {
            return $this->render('search');
        }

        $query = Product::find()->where(['like', 'name', $q ]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6 , 'forcePageParam' => false, 'pageSizeParam' => false ]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }


}