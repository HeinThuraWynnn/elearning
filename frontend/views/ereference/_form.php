<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\models\Course;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\EReference */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ereference-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'e_reference_course_code')->dropDownList(
            ArrayHelper::map(\frontend\models\Course::find()->all(), 'course_code','course_name'),['prompt'=>'-- Select Course--'])
     ?>

    <?= $form->field($model, 'file')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
