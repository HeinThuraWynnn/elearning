<?php

namespace frontend\models;

use yii\web\UploadedFile;

use Yii;

/**
 * This is the model class for table "e_reference".
 *
 * @property integer $e_reference_id
 * @property integer $e_reference_course_code
 * @property string $e_reference_file
 * @property integer $e_reference_user_id
 *
 * @property Course $eReferenceCourseCode
 * @property User $eReferenceUser
 */
class EReference extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'e_reference';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['e_reference_course_code', 'e_reference_file', 'e_reference_user_id'], 'required'],
            [['e_reference_course_code', 'e_reference_user_id'], 'integer'],
            [['e_reference_file','file'], 'file'],
            [['e_reference_course_code'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['e_reference_course_code' => 'course_code']],
            [['e_reference_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['e_reference_user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'e_reference_id' => 'E Reference ID',
            'e_reference_course_code' => 'E Reference Course Code',
            'e_reference_file' => 'E Reference File',
            'e_reference_user_id' => 'E Reference User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEReferenceCourseCode()
    {
        return $this->hasOne(Course::className(), ['course_code' => 'e_reference_course_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEReferenceUser()
    {
        return $this->hasOne(User::className(), ['id' => 'e_reference_user_id']);
    }
}
