<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $title
 * @property string $name
 * @property string $lastname
 * @property string $name_en
 * @property string $lastname_en
 * @property string $type
 * @property string $position
 * @property integer $office_id
 * @property integer $group_id
 * @property string $email
 * @property string $tel
 * @property string $fax
 * @property string $mobile
 * @property string $image
 * @property string $status
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'name', 'lastname', 'name_en', 'lastname_en', 'type', 'position', 'office_id', 'group_id', 'email', 'tel', 'fax', 'mobile', 'image', 'status'], 'required'],
            [['title', 'type', 'status'], 'string'],
            [['office_id', 'group_id'], 'integer'],
            [['name', 'lastname', 'name_en', 'lastname_en', 'position', 'email', 'image'], 'string', 'max' => 200],
            [['tel', 'fax', 'mobile'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'คำนำหน้า',
            'name' => 'ชื่อ',
            'lastname' => 'นามสกุล',
            'name_en' => 'Name',
            'lastname_en' => 'Surname',
            'type' => 'ประเภท',
            'position' => 'ตำแหน่ง',
            'office_id' => 'ศูนย์/สำนัก/กอง',
            'group_id' => 'กลุ่ม/ฝ่าย/ส่วน',
            'email' => 'E-mail',
            'tel' => 'เบอร์สำนักงาน',
            'fax' => 'Fax',
            'mobile' => 'มือถือ',
            'image' => 'รูปภาพ',
            'status' => 'สถานะ',
        ];
    }
}
