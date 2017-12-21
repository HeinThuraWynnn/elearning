<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $student_reg_no
 * @property string $student_code
 * @property integer $student_user_id
 * @property string $student_fname
 * @property string $student_dob
 * @property string $student_add
 *
 * @property User $studentUser
 * @property Course $studentCourse
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_fname', 'student_dob', 'student_add'], 'required'],
            [['student_user_id', ], 'integer'],
            [['student_dob'], 'safe'],
            [['student_add'], 'string'],
            [['student_code', 'student_fname'], 'string', 'max' => 255],
            [['student_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['student_user_id' => 'id']],

         ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_reg_no' => 'Student Reg No',
            'student_code' => 'Student Code',
            'student_user_id' => 'Student User ID',
            'student_fname' => 'Student Fname',
            'student_dob' => 'Student Dob',
            'student_add' => 'Student Add',


        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudentUser()
    {
        return $this->hasOne(User::className(), ['id' => 'student_user_id']);
    }

}
