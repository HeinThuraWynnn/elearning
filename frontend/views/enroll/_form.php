<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Enroll */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enroll-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'enroll_student_reg_no')->textInput() ?>

    <?= $form->field($model, 'enroll_course_code')->dropDownList(ArrayHelper::map(\frontend\models\Course::find()->all(),'course_code','course_name')) ?>

    <?= $form->field($model, 'enroll_date')->textInput(array('readonly'=>true)); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
