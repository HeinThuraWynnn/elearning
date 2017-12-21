<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ereferences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrap">
    <?php include("teachernav.php"); ?>

    <div class="col-sm-9 col-sm-offset-1 content-header">
        <div class="row">


            <div class="ereference-index">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Create Ereference', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

//            'e_reference_id',
                        'e_reference_course_code',
                        'e_reference_file',
//            'e_reference_user_id',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>

    </div>
</div>

</div>
