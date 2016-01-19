<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offices".
 *
 * @property integer $id
 * @property string $name_th
 * @property string $email
 * @property integer $department_id
 * @property string $address
 * @property string $position
 * @property string $status
 * @property string $tel
 * @property string $fax
 * @property string $logo
 */
class Offices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_th', 'email', 'department_id', 'address', 'position', 'status', 'tel', 'fax', 'logo'], 'required'],
            [['department_id'], 'integer'],
            [['address', 'status'], 'string'],
            [['name_th', 'email', 'position', 'tel', 'fax'], 'string', 'max' => 200],
            [['logo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_th' => 'สำนัก/ศูนย์ (ภาษาไทย)',
            'email' => 'E-mail',
            'department_id' => 'สังกัด',
            'address' => 'ที่อยู่',
            'position' => 'พิกัด',
            'status' => 'สถานะ',
            'tel' => 'เบอร์โทร',
            'fax' => 'แฟกซ์',
            'logo' => 'logo',
        ];
    }
}
