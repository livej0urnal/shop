<?php

namespace app\models;

use yii\db\ActiveRecord;

class Blog extends ActiveRecord
{
    public static function tableName()
    {
        return 'blog';
    }
    public function getArticles(){
        return $this->hasMany(Article::className(), ['category_id' => 'id']);
    }
}