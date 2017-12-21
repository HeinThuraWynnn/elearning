<?php
/**
 * Created by PhpStorm.
 * User: hein
 * Date: 10/1/17
 * Time: 4:52 AM
 */

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Enroll;
use yii\helpers\ArrayHelper;
use yii\db\Query;

use yii\web\Session;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students Dash Board';
$this->params['breadcrumbs'][] = $this->title;

$connection = \Yii::$app->db;


$user_id = Yii::$app->user->identity->id;
?>

<h1><?= Html::encode($this->title) ?></h1>
<div class="container">
    <div class="col-sm-3" style="background:gainsboro;border-radius: 5px; box-shadow: 1px 3px 1px blue; ">
        <div class="card-header" style="border-bottom: 1px #000 solid;"><h4>Enrolled Course<h4> </div>
        <div><?php

            $yii_sql = "SELECT enroll_course_code FROM enroll WHERE enroll_student_reg_no = $user_id  ORDER BY enroll_date DESC ";

            $course = $connection->createCommand($yii_sql);

            $yii_query = $course->queryAll();

            if(count($yii_query)>0){
            foreach ($yii_query as $data) {

            extract($data);



            $yii_sql1 = "SELECT * FROM course WHERE course_code = $enroll_course_code";

            $name_course = $connection->createCommand($yii_sql1);

            $yii_query1 = $name_course->queryAll();

            if(count($yii_query1)>0) {
            foreach ($yii_query1 as $name) {

            extract($name);
//            echo "<pre>";
//            print_r($yii_query1);
//            echo "</pre>";



            ?>
                <h5><a href="http://localhost/elearning/elearning/frontend/web/student/enroll_detail/<?php echo $course_code?>"><?php
                echo $course_name;
//                        echo "<pre>";
//                        print_r($_SESSION);
//                        echo "<pre>";
//                        $session = new Session;
//                        $session->open();
//                        $course_code_session = $session->get('course_code_session');
//                        $course_code_session = $session['course_code_session'];
//                        $course_code_session = isset($_SESSION['course_code_session']) ? $_SESSION['course_code_session'] : null;
//
//                        $session->set('course_code_session', $course_code);
//                        $session['course_code_session'] = $course_code;
//                        $_SESSION['course_code_session'] = $course_code;


                }
                }
                }
                }

                ?>
            </a></h5>


        </div>
    </div>
    <div class="col-sm-3 col-sm-offset-1" style="background:gainsboro;border-radius: 5px; box-shadow: 1px 3px 1px blue; ">
        <div class="card-header" style="border-bottom: 1px #000 solid;"><h4>Assignment Upload<h4> </div>
        <div>
            <br/>
            <a class="btn btn-primary text-center" href="/elearning/elearning/frontend/web/assignment/create">Upload</a>
            <a class="btn btn-primary text-center" href="/elearning/elearning/frontend/web/assignment">Uploaded Assignments</a>

        </div>
        <br/>
    </div>
</div>
</div>