<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?//= Html::a('Create Course', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

<!--    <ul>-->
<!--        <li>-->
<!--            --><?//=  Html::a('More <i class="glyphicon glyphicon-eye-open"></i>',['/course/view', 'id' => $model->course_code ]);?>
<!--        </li>-->
<!--    </ul>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'course_name',
            [
                'label'=>'',
                'format' => 'raw',
                'value'=>function($model) {
                    return Html::a('More <i class="glyphicon glyphicon-eye-open"></i>',['/course/view', 'id' => $model->course_code ]);
                },
            ],
        ],
    ]); ?>
</div>
