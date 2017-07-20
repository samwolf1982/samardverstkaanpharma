<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "demo".
 *
 * @property integer $id
 * @property string $test1
 * @property string $test2
 * @property string $test3
 * @property string $test4
 * @property string $test5
 * @property integer $test6
 * @property integer $created_at
 * @property integer $updated_at
 */
class Demo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'demo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test6', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['test1', 'test2', 'test3', 'test4', 'test5'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test1' => 'Test1',
            'test2' => 'Test2',
            'test3' => 'Test3',
            'test4' => 'Test4',
            'test5' => 'Test5',
            'test6' => 'Test6',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
