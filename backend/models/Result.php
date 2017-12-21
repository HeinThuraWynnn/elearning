<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property integer $result_id
 * @property integer $result_student_id
 * @property string $result_status
 * @property string $result_exam_name
 *
 * @property User $resultStudent
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['result_student_id', 'result_status', 'result_exam_name'], 'required'],
            [['result_student_id'], 'integer'],
            [['result_status'], 'string'],
            [['result_exam_name'], 'string', 'max' => 255],
            [['result_student_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['result_student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'result_id' => 'Result ID',
            'result_student_id' => 'Result Student ID',
            'result_status' => 'Result Status',
            'result_exam_name' => 'Result Exam Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResultStudent()
    {
        return $this->hasOne(User::className(), ['id' => 'result_student_id']);
    }
}
