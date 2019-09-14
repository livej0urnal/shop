<?php

namespace app\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public static function tableName()
    {
        return 'article';
    }

    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id' => 'category_id']);
    }
    public function getBlogComments()
    {
        return $this->hasMany(Comments::className(), ['id' => 'article_id']);
    }
}