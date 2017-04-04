<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title the article title
 * @property string $content the article content
 * @property int $category the article category
 * @property int $views the article views
 * @property int $created_at
 * @property int $updated_at
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'category', 'created_at', 'updated_at'], 'required'],
            [['content'], 'string'],
            [['category', 'views', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'category' => '分类',
            'views' => '浏览量',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
