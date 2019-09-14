<?php

namespace app\models;


use yii\db\ActiveRecord;

class Comments extends ActiveRecord
{
    public static function tableName()
    {
        return 'blogcomments';
    }
    public function getArticle()
    {
        return $this->hasOne(Article::className() , ['article_id' => 'id']);
    }

}