<?php

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    //Устанавливаем связь с таблиценй категорий
    public static function tableName()
    {
        return 'category';
    }
    //Устанавливаем связь с таблиценй товаров
    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}