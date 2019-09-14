<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property string $id
 * @property string $name
 * @property string $keywords
 * @property string $description
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
