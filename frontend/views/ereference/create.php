<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\EReference */

$this->title = 'Create Ereference';
$this->params['breadcrumbs'][] = ['label' => 'Ereferences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="wrap">
        <?php include("teachernav.php"); ?>

        <div class="col-sm-9 col-sm-offset-1 content-header">
            <div class="row">

                <div class="ereference-create">
                    <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
            </div>

        </div>
    </div>

</div>



