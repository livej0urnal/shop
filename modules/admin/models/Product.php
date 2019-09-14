<?php

namespace app\modules\admin\models;
use app\modules\admin\models\Category;
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $content
 * @property double $price
 * @property double $old_price
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $cover_img
 * @property string $single_img
 * @property string $hit
 * @property string $new
 * @property string $sale
 */
class Product extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className() , ['id' => 'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name'], 'required'],
            [['category_id'], 'integer'],
            [['content', 'hit', 'new', 'sale'], 'string'],
            [['price', 'old_price'], 'number'],
            [['name', 'keywords', 'description', 'img', 'cover_img', 'single_img'], 'string', 'max' => 255],

        ];
    }
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ',
            'name' => 'Name',
            'content' => 'Content',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'img' => 'Img',
            'cover_img' => 'Cover Img',
            'single_img' => 'Single Img',
            'hit' => 'Hit',
            'new' => 'New',
            'sale' => 'Sale',
        ];
    }
}
