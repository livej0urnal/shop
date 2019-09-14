<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "blogcomments".
 *
 * @property integer $id
 * @property integer $article_id
 * @property string $author
 * @property string $img_author
 * @property string $content
 */
class Blogcomments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogcomments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'author', 'img_author', 'content'], 'required'],
            [['article_id'], 'integer'],
            [['author', 'img_author', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'author' => 'Author',
            'img_author' => 'Img Author',
            'content' => 'Content',
        ];
    }
}
