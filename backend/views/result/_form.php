<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Result */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'result_student_id')->dropDownList(ArrayHelper::map(\frontend\models\User::find()->andWhere(['=','user_type_id',3])->all(),'id','username')) ?>


    <?= $form->field($model, 'result_exam_name')->dropDownList(ArrayHelper::map(\frontend\models\Course::find()->all(), 'course_code', 'course_name')) ?>
    <?= $form->field($model, 'result_status')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
