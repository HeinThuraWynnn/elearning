<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enrolls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enroll-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Enroll', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'enroll_id',
            'enroll_student_reg_no',
            'enroll_course_code',
            'enroll_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
