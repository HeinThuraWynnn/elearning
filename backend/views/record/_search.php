<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RecordSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="record-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'record_id') ?>

    <?= $form->field($model, 'production_name') ?>

    <?= $form->field($model, 'album_name') ?>

    <?= $form->field($model, 'singer') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'cd_qty') ?>

    <?php // echo $form->field($model, 'onorder') ?>

    <?php // echo $form->field($model, 'submitDate') ?>

    <?php // echo $form->field($model, 'modifiedDate') ?>

    <?php // echo $form->field($model, 'show') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
