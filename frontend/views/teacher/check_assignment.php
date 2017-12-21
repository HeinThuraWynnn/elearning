<?php
/**
 * Created by PhpStorm.
 * User: hein
 * Date: 10/8/17
 * Time: 4:15 AM
 */

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$connection = \Yii::$app->db;

$this->title = 'Check Assignment Files';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Home', 'url' => ['teacherhome']];
$this->params['breadcrumbs'][] = $this->title;

$user_id = Yii::$app->user->identity->id;

?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="teacher-index">

    <div class="container">

        <div class="wrap">
            <?php include("teachernav.php"); ?>


            <div class="col-sm-6 col-sm-offset-1" style="background:gainsboro;border-radius: 5px; box-shadow: 1px 3px 1px blue; ">
                <div class="card-header" style="border-bottom: 1px #000 solid;"><h4>Assignments</h4> </div>
                    <div>
                        <br>
                        <br>
                        <?php

                        if(count($model)>0){
                            foreach ($model as $data) {
                                extract($data);
                                //                    echo "<pre>";
                                //                    print_r($data);
                                //                    echo "</pre>";
                                $efile = $data['assignment_file'];
                                ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li class="">
                                                <?php echo $efile; ?>
                                                <?= Html::a('<i class="glyphicon glyphicon-download-alt"></i>',['/teacher/download/','id' => $efile])?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $data['assignment_student_id']?>
                                    </div>
                                    <div class="col-sm-3">
                                        <?php echo $data['assignment_uploaded_date']?>
                                    </div>
                                </div>
                            <br/>
                        </div>
                            <?php
                            }
                        }?>
                </div>
            </div>
        </div>
    </div>