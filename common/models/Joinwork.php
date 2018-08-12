<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "joinwork".
 *
 * @property integer $id
 * @property string $comment
 * @property integer $point
 * @property integer $work_id
 * @property integer $created_work
 * @property integer $user_id
 * @property integer $join_status
 * @property integer $join_created_at
 * @property integer $join_updated_at
 */
class Joinwork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'joinwork';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment'], 'string'],
            [['point', 'work_id', 'created_work', 'user_id', 'join_status', 'join_created_at', 'join_updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'แสดงความคิดเห็น',
            'point' => 'คะแนนร่วมงาน',
            'work_id' => 'ไอดีงาน',
            'created_work' => 'ไอดีผู้ประกาศงาน',
            'user_id' => 'ไอดีผู้ใช้',
            'join_status' => 'สถานะ',
            'join_created_at' => 'ร่วมงานเมื่อ',
            'join_updated_at' => 'อัปเดตเมื่อ',
        ];
    }
}
