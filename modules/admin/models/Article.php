<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string $id
 * @property string $category_id
 * @property string $created_up
 * @property string $name
 * @property string $content
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $recent_img
 * @property string $related_img
 * @property string $author
 * @property string $related
 * @property string $recent
 * @property string $enable
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'created_up', 'name'], 'required'],
            [['category_id'], 'integer'],
            [['created_up'], 'safe'],
            [['content', 'related', 'recent', 'enable'], 'string'],
            [['name', 'keywords', 'description', 'img', 'recent_img', 'related_img', 'author'], 'string', 'max' => 255],
        ];
    }

    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['id'=>'category_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'created_up' => 'Created Up',
            'name' => 'Name',
            'content' => 'Content',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'img' => 'Img',
            'recent_img' => 'Recent Img',
            'related_img' => 'Related Img',
            'author' => 'Author',
            'related' => 'Related',
            'recent' => 'Recent',
            'enable' => 'Enable',
        ];
    }
}
