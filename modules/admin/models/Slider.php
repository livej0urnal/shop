<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $class
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'title', 'description', 'link', 'class'], 'required'],
            [['image', 'title', 'description', 'link', 'class'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'description' => 'Description',
            'link' => 'Link',
            'class' => 'Class',
        ];
    }
}
