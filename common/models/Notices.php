<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "notices".
 *
 * @property int $id
 * @property string $email order notice email
 * @property int $is_deleted
 * @property int $created_at
 * @property int $updated_at
 */
class Notices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'created_at', 'updated_at'], 'required'],
            [['is_deleted', 'created_at', 'updated_at'], 'integer'],
            [['email'], 'string', 'max' => 100],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => '邮箱',
            'is_deleted' => '是否删除',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
