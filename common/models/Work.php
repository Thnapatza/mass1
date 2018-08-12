<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "work".
 *
 * @property integer $id
 * @property integer $massagetype_id 
 * @property string $name_office
 * @property string $description
 * @property string $location 
* @property double $lat 
* @property double $lng 
 * @property integer $money1
 * @property string $tel
 * @property integer $work_user_id
 * @property integer $work_created_at
 * @property integer $work_status
 * @property integer $work_address_id
 * @property string $img
 * @property Address $workAddress
 * @property User $workUser
 * @property string $rod
 * @property string $timework
 * @property string $endtimework
 * @property string $wifi
 * @property string $monday
 * @property string $tuesday
 * @property string $wendesday
 * @property string $thursday
 * @property string $friday
 * @property string $saturday
 * @property string $sunday
 * 
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    const     STATUS_DELETED = 0;
    const     STATUS_ACTIVE = 1;
    public $province_name;
    
    public $geo_id,$province_id,$amphur_id,$district_id ,$nameSearch;
    public static function tableName()
    {
        return 'work';
    }

    /**
     * @inheritdoc
     */
    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['work_created_at'],
                    //ActiveRecord::EVENT_BEFORE_UPDATE => ['work_created_at'],
                ],
            ],
        ];
    }
    public function rules()
    {
        return [
            [['name_office', 'description'], 'required'],
            [['description', 'snack', 'location','rod','wifi','monday','tuesday','wendesday','thursday','friday','saturday','sunday'], 'string'],
            [['star', 'work_user_id', 'work_created_at', 'work_status', 'work_address_id'], 'integer'],
            [['massagetype','name_office'], 'string', 'max' => 30],
            [['lat', 'lng'], 'number'],
            [['tel','timework','endtimework','money1'], 'string', 'max' => 50],
            [['img'],'file','skipOnEmpty' => true,'extensions' => 'jpg,png'],
            [['img'],'file', 'maxSize'=>'100000000'],
            [['imgs'],'file','skipOnEmpty' => true,'maxFiles' => 5,  'extensions' => 'jpg,png'],
            [['imgs'],'file', 'maxSize'=>'100000000'],
            [['work_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['work_user_id' => 'id']],
            [['createdby_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdby_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */

    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'massagetype' => 'ชนิดการนวด', 
            'name_office' => 'ชื่อสถานที่นวด',
            'description' => 'รายละเอียดงาน',
            'money1' => 'ค่าใช้จ่าย',
            'tel' => 'เบอร์โทร',
            'work_user_id' => 'ไอดีผู้ใช้งาน',
            'work_created_at' => 'ประกาศ',
            'work_status' => 'สถานะ',
            'work_address_id' => 'ไอดีที่อยู่',
            'location' => 'ที่อยู่',
            'lat' => 'Lat',
            'lng' => 'Lng', 
            'img'=>'รูปแสดงภาพหลัก',
            'imgs' => 'รูปแสดงภาพรายละเอียด อัพโหลดได้หลายรูป',
            'timework' => 'เวลาทำการ',
            'star' => '',
            'createdby_id' => 'คนสร้าง',
            'rod' => 'ลานจอดรถ',
            'monday'=> 'วันจันทร์',
            'tuesday'=> 'วันอังคาร์',
            'wendesday'=> 'วันพุธ',
            'thursday'=> 'วันพฤหัสบดี',
            'friday'=> 'วันศุกร์',
            'saturday'=> 'วันเสาร์',
            'sunday'=> 'วันอาทิตย์',
            'wifi' => 'WIFI',
            'snack' => 'ของว่าง ของกินเล่น',
            'endtimework'=> 'เวลาปิดทำการ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedby()
    {
        return $this->hasOne(User::className(), ['id' => 'createdby_id']);
    }
    
    public function getMassagetype()
    {
        return $this->hasOne(Massagetype::className(), ['id' => 'massagetype_id']);
    }
    
    
    public function getAddress()
    {
        return $this->hasOne(Address::className(), ['id' => 'work_address_id']);
    }

    /** 
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'work_user_id']);
    }
}
