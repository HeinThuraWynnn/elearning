<?php
/**
 * Created by PhpStorm.
 * User: hein
 * Date: 10/5/17
 * Time: 2:26 AM
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\Query;



/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Home';
$this->params['breadcrumbs'][] = $this->title;

$connection = \Yii::$app->db;

$user_id = Yii::$app->user->identity->id;
?>

<div class="teacher-index">



    <div class="wrap">
        <?php include("teachernav.php"); ?>

        <div class="col-sm-9 col-sm-offset-1 content-header">
        <div class="row">
            <div class="col-sm-3" style="background:gainsboro;border-radius: 5px; box-shadow: 1px 3px 1px blue; ">
                <div class="card-header" style="border-bottom: 1px #000 solid;"><h4>Courses<h4> </div>
                <div><?php

                    $yii_sql = "SELECT teacher_course_id FROM teacher WHERE teacher_user_id = $user_id ";

                    $course = $connection->createCommand($yii_sql);

                    $yii_query = $course->queryAll();

                    if(count($yii_query)>0){
                        foreach ($yii_query as $data) {

                        extract($data);


                        $yii_sql1 = "SELECT * FROM course WHERE course_code = $teacher_course_id";

                        $name_course = $connection->createCommand($yii_sql1);

                        $yii_query1 = $name_course->queryAll();

                        if(count($yii_query1)>0) {
                            foreach ($yii_query1 as $name) {

                            extract($name);


                    //                    echo "<pre>";
                    //                    print_r($yii_query1);
                    //                    echo "</pre>";


                    ?>
                    <h5><a href="http://localhost/elearning/elearning/frontend/web/teacher/check_assignment/<?php echo $course_code?>"><?php
                            echo $course_name;

                            }
                            }
                            }
                            }

                            ?>
                        </a></h5></div>
            </div>
        </div>

        </div>
    </div>

</div>