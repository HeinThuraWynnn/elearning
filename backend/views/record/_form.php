<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Record */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'record_id')->textInput() ?>

    <?= $form->field($model, 'production_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'album_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'singer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'cd_qty')->textInput() ?>

    <?= $form->field($model, 'onorder')->textInput() ?>

    <?= $form->field($model, 'submitDate')->textInput() ?>

    <?= $form->field($model, 'modifiedDate')->textInput() ?>

    <?= $form->field($model, 'show')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
