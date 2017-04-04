<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

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
class Articles extends ActiveRecord
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
            [['title', 'content', 'category'], 'required'],
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
            'title' => '文章标题',
            'content' => '文章内容',
            'category' => '所属分类',
            'views' => '浏览量',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
    
    public function behaviors()
    {
    	return [
			'timestamp' => [
				'class' => TimestampBehavior::className(),
					'attributes' => [
						ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
						ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
					],
			],
    	];
    }
    
	/**
	 * 获取文章分类列表
	 * 
	 * @return string[]
	 */
    public function categoryList()
    {
    	return [
    		'0' => '投资组合',
    		'1' => '动态资讯',
    	];
    }
}
