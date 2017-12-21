<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\EReference */

$this->title = $model->e_reference_file;
$this->params['breadcrumbs'][] = ['label' => 'Ereferences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wrap">
    <?php include("teachernav.php"); ?>

    <div class="col-sm-9 col-sm-offset-1 content-header">
        <div class="row">

            <div class="ereference-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->e_reference_id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->e_reference_id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>

                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'e_reference_id',
                        'e_reference_course_code',
                        'e_reference_file',
                        'e_reference_user_id',
                    ],
                ]) ?>

            </div>
        </div>

    </div>
</div>

</div>

