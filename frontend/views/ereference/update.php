<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\EReference */

$this->title = 'Update Ereference: ' . $model->e_reference_file;
$this->params['breadcrumbs'][] = ['label' => 'Ereferences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->e_reference_id, 'url' => ['view', 'id' => $model->e_reference_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="wrap">
    <?php include("teachernav.php"); ?>

    <div class="col-sm-9 col-sm-offset-1 content-header">
        <div class="row">

            <div class="ereference-update">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>


        </div>

    </div>
</div>

</div>
