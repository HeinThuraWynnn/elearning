<?php
/**
 * Created by PhpStorm.
 * User: hein
 * Date: 10/8/17
 * Time: 12:41 AM
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$connection = \Yii::$app->db;

$this->title = 'e-Reference Files';

$this->params['breadcrumbs'][] = ['label' => 'Student Dashboard', 'url' => ['studentdashboard']];
$this->params['breadcrumbs'][] = $this->title;

$user_id = Yii::$app->user->identity->id;

?>

<h1><?= Html::encode($this->title) ?></h1>
<div class="container">
    <div class="col-sm-3" style="background:gainsboro;border-radius: 5px; box-shadow: 1px 3px 1px blue; ">
        <div class="card-header" style="border-bottom: 1px #000 solid;"><h4>References</h4> </div>
        <div>
            <?php

                if(count($model)>0){
                    foreach ($model as $data) {
                        extract($data);
    //                    echo "<pre>";
    //                    print_r($data);
    //                    echo "</pre>";
                       $efile = $data['e_reference_file'];
                ?>
            <ul>
                <li class="">
                <?php echo $efile; ?> <?= Html::a('<i class="glyphicon glyphicon-download-alt
"></i>',['/student/download/','id' => $efile])?>
                </li>
            </ul>
            <?php

                    }
                }?>

        </div>
    </div>
</div>
