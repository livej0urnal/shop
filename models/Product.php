<?php

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord
{
    //Устанавливаем связь с таблиценй категорий
    public static function tableName()
    {
        return 'product';
    }
    //Устанавливаем связь с таблиценй товаров
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}