<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Enroll */

$this->title = 'Update Enroll: ' . $model->enroll_id;
$this->params['breadcrumbs'][] = ['label' => 'Enrolls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->enroll_id, 'url' => ['view', 'id' => $model->enroll_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enroll-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
