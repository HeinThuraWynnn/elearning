<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\Query;
use backend\models\User;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'teacher_user_id')->dropDownList( ArrayHelper::map(\backend\models\User::find()->andWhere(['=','user_type_id',2])->all(),'id' ,'username'),['prompt' => '--Select Teacher Name --'])->label("Teacher Name <font style='color:red'>*</font>")?>

    <?= $form->field($model, 'teacher_course_id')->dropDownList(ArrayHelper::map(\backend\models\Course::find()->all(),'course_code','course_name'),['prompt'=>'--Select A Course --'])->label("Course Name <font style='color:red'>*</font>") ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
