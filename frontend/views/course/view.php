<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\Session;


/* @var $this yii\web\View */
/* @var $model frontend\models\Course */

$this->title = $model->course_name;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-view">

    <h1><?= Html::encode($this->title) ?></h1>
<!---->
<!--    <p>-->
<!--        --><?//= Html::a('Update', ['update', 'id' => $model->course_code], ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::a('Delete', ['delete', 'id' => $model->course_code], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
//        ]) ?>
<!--    </p>-->

<!--    --><?//= $session = Yii::$app->session;
//
//    ?>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'course_code',
            'course_name',
            'course_short_desc'
//            [
//                'label'=>'',
//                'format' => 'raw',
//                'value'=>function($model) {
//                    return Html::a('More <i class="glyphicon glyphicon-eye-open"></i>',['/enroll/create',]);
//                },
//            ],
        ],
    ])

    ?>


    <?php
    if(!\Yii::$app->user->isGuest) {
        $user = \Yii::$app->user->identity->id;
        $userType = \Yii::$app->user->identity->user_type_id;

        $session = new Session;
    $session->open();
    $course_code_session = $session->get('course_code_session');
    $course_code_session = $session['course_code_session'];
    $course_code_session = isset($_SESSION['course_code_session']) ? $_SESSION['course_code_session'] : null;

    $session->set('course_code_session', $model->course_code);
    $session['course_code_session'] = $model->course_code;
    $_SESSION['course_code_session'] = $model->course_code;
//    if (isset($_SESSION['course_code_session'])){
//        echo $session['course_code_session'];
//    }
    ?>
    <?php
    //    $session['captcha']['course_id'] = $model->course_code;
    //        foreach ($_SESSION as $name => $value)
    //           echo $session['captcha']['course_id'];

        if($userType == 3)
        {
        echo '<div class="form-group">
            <a class="btn btn-primary" href="/elearning/elearning/frontend/web/enroll/create">Enroll Now</a>
            </div>';
        } elseif ($userType = 2) {?>
            <p>* Enroll can serve for only students</p>
     <?php }
    }
    ?>


</div>
