<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $teacher_id
 * @property integer $teacher_user_id
 * @property integer $teacher_course_id
 *
 * @property User $teacherUser
 * @property Course $teacherCourse
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_user_id', 'teacher_course_id'], 'required'],
            [['teacher_user_id', 'teacher_course_id'], 'integer'],
            [['teacher_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['teacher_user_id' => 'id']],
            [['teacher_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['teacher_course_id' => 'course_code']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'teacher_user_id' => 'Teacher User ID',
            'teacher_course_id' => 'Teacher Course ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherUser()
    {
        return $this->hasOne(User::className(), ['id' => 'teacher_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherCourse()
    {
        return $this->hasOne(Course::className(), ['course_code' => 'teacher_course_id']);
    }
}
