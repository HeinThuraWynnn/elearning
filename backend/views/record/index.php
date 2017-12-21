<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="record-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <a class="btn btn-success" href="/reporting/report_1/admin/record/upload">Upload Record</a>

        <?= Html::a('Create Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'record_id',
            'production_name',
            'album_name',
            'singer',
            'price',
            // 'cd_qty',
            // 'onorder',
            // 'submitDate',
            // 'modifiedDate',
            // 'show',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
