<?php


namespace app\controllers;
use app\models\Blog;
use app\models\Article;
use app\models\Comments;
use yii\data\Pagination;
use Yii;



class BlogController extends AppController
{
    public function actionView()
    {
        $id = Yii::$app->request->get('id');
        $category = Blog::findOne($id);
        $blog = Blog::find()->all();
        $articles = Article::find()->all();
        $comments = Comments::find()->all();
        if(empty($articles)){
            throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
        }
        $query = Article::find()->orderby(['id'=>SORT_DESC])->where(['enable' => '1' ]);
        $pages = new Pagination(['totalCount'=> $query->count(), 'pageSize' => 3 , 'forcePageParam' => false, 'pageSizeParam' => false]);
        $articles = $query->offset($pages->offset)->limit($pages->limit)->all();
        $recent = Article::find()->where(['recent' => '1'])->limit(5)->all();
        $this->setMeta('Blog | Fox store');
        return $this->render('view' , compact('articles' , 'blog' , 'pages' , 'recent', 'comments' ));
    }
    public function actionSingle($id)
    {
        $id = Yii::$app->request->get('id');
        $article = Article::findOne($id);
        $category = Blog::find()->all();
        if(empty($article))
        {
            throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
        }
        $comments = Comments::find()->where(['article_id' => $id ])->all();
        $recent = Article::find()->where(['recent' => '1'])->limit(5)->all();
        $related = Article::find()->where(['related' => '1'])->limit(3)->all();
        $this->setMeta($article->name. ' | Fox store', $article->keywords, $article->description);
        return $this->render('single', compact('article' , 'recent' , 'related' , 'category' , 'comments'));
    }
    public function actionCategory()
    {
        $id = Yii::$app->request->get('id');
        $category = Blog::findOne($id);
        $arg = Blog::find()->all();
        if(empty($category))
        {
            throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
        }
        $query = Article::find()->orderby(['id'=>SORT_DESC])->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3 , 'forcePageParam' => false, 'pageSizeParam' => false ]);
        $articles = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta( $category->name .' | Fox store' , $category->keywords, $category->description);
        $recent = Article::find()->where(['recent' => '1'])->limit(5)->all();
        return $this->render('category', compact('category' , 'articles' , 'pages' , 'recent', 'arg'));
    }
}