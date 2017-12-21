<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $course_code
 * @property string $course_name
 * @property string $course_short_desc
 *
 * @property EReference[] $eReferences
 * @property Enroll[] $enrolls
 * @property Teacher[] $teachers
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_short_desc'], 'required'],
            [['course_short_desc'], 'string'],
            [['course_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'course_code' => 'Course Code',
            'course_name' => 'Course Name',
            'course_short_desc' => 'Course Short Desc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEReferences()
    {
        return $this->hasMany(EReference::className(), ['e_reference_course_code' => 'course_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrolls()
    {
        return $this->hasMany(Enroll::className(), ['enroll_course_code' => 'course_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['teacher_course_id' => 'course_code']);
    }
}
