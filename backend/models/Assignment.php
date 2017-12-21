<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "assignment".
 *
 * @property integer $assignment_id
 * @property integer $assignment_course_id
 * @property string $assignment_file
 * @property string $assignment_uploaded_date
 * @property integer $assignment_student_id
 *
 * @property Course $assignmentCourse
 * @property Student $assignmentStudent
 */
class Assignment extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['assignment_course_id', 'assignment_file', ], 'required'],
            [['assignment_course_id', 'assignment_student_id'], 'integer'],
            [['assignment_uploaded_date'], 'safe'],
            [['assignment_file'], 'file'],
            [['assignment_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['assignment_course_id' => 'course_code']],
            [['assignment_student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['assignment_student_id' => 'student_reg_no']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'assignment_id' => 'Assignment ID',
            'assignment_course_id' => 'Assignment Course ID',
            'assignment_file' => 'Assignment File',
            'assignment_student_id' => 'Assignment Student ID',
            ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignmentCourse()
    {
        return $this->hasOne(Course::className(), ['course_code' => 'assignment_course_id']);
    }
}
