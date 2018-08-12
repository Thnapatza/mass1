<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "massagetype".
 *
 * @property integer $id
 * @property string $massage
 *
 * @property Work[] $works
 */
class Massagetype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'massagetype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['massage'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'massage' => 'ชนิดการนวด',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorks()
    {
        return $this->hasMany(Work::className(), ['massagetype_id' => 'id']);
    }
}
