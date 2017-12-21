<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "enroll".
 *
 * @property integer $enroll_id
 * @property integer $enroll_student_reg_no
 * @property integer $enroll_course_code
 * @property integer $enroll_date
 *
 * @property Student $enrollStudentRegNo
 * @property Course $enrollCourseCode
 */
class Enroll extends \yii\db\ActiveRecord
{

    public $course_id ;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enroll';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enroll_student_reg_no', 'enroll_course_code', 'enroll_date'], 'required'],
            [['enroll_student_reg_no', 'enroll_course_code', ], 'integer'],
            [['enroll_date'], 'safe'],
            [['enroll_student_reg_no'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['enroll_student_reg_no' => 'id']],
            [['enroll_course_code'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['enroll_course_code' => 'course_code']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'enroll_id' => 'Enroll ID',
            'enroll_student_reg_no' => 'Enroll Student Reg No',
            'enroll_course_code' => 'Enroll Course Code',
            'enroll_date' => 'Enroll Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollStudentRegNo()
    {
        return $this->hasOne(User::className(), ['id' => 'enroll_student_reg_no']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnrollCourseCode()
    {
        return $this->hasOne(Course::className(), ['course_code' => 'enroll_course_code']);
    }
}
