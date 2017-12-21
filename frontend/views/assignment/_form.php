<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\db\Query;

$connection = \Yii::$app->db;


$user_id = Yii::$app->user->identity->id;

/* @var $this yii\web\View */
/* @var $model frontend\models\Assignment */
/* @var $form yii\widgets\ActiveForm */


$yii_sql = "SELECT enroll_course_code FROM enroll WHERE enroll_student_reg_no = $user_id";

$course = $connection->createCommand($yii_sql);

$yii_query = $course->queryAll();

?>

<div class="assignment-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<!--    --><?php
//    if(count($yii_query)>0) {
//        foreach ($yii_query as $data) {
//
//            extract($data);
//            echo $form->field($model, 'assignment_course_id')->dropDownList( ArrayHelper::map(\backend\models\Course::find()->andWhere(['=','course_code',$enroll_course_code])->all(),'course_code' ,'course_name'),['prompt' => '--Select Course --'])->label("Course Name <font style='color:red'>*</font>");
////        echo "<pre>";
////        print_r($data );
////        echo "</pre>";
//////        exit;
//        }
//
//    }
//    exit;
//    ?>
<!--    ?>-->
    <?= $form->field($model, 'assignment_course_id')-> dropDownList(ArrayHelper::map(\frontend\models\Enroll::find()->andWhere(['=','enroll_student_reg_no',$user_id])->all(),'enroll_course_code','enroll_course_code')) ?>


    <?= $form->field($model, 'file')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
