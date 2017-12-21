<?php

namespace frontend\controllers;

use Yii;

use frontend\models\Student;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


use frontend\models\Enroll;
use frontend\models\Course;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use yii\helpers\Url;

/**
 * StudentController implements the CRUD actions for Student model.
 */
class StudentController extends Controller
{
    public $connection;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    /* login check*/
    public function beforeAction($action)
    {
        if (\Yii::$app->getUser()->isGuest &&
            \Yii::$app->getRequest()->url !== Url::to(\Yii::$app->getUser()->loginUrl)
        ) {
            \Yii::$app->getResponse()->redirect(\Yii::$app->getUser()->loginUrl);
        }
        return parent::beforeAction($action);
    }
    /**
     * Displays student dashboard.
     *
     * @return mixed
     */
    public function actionStudentdashboard()
    {
        return $this->render('studentdashboard');
    }
    /**
     *
     * Displays Enroll_detail
     * @param integer $id
     * @return mixed
     */
    public function actionEnroll_detail($id)
    {
        $model = \Yii::$app->db->createCommand("SELECT e_reference_file FROM e_reference WHERE e_reference_course_code= $id")->queryAll();

        return $this->render('enroll_detail', [
                'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Student::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function actionDownload($id)
    {

        $path = Yii::getAlias('@backend').'/upload/ereference/';

        $file = $path.$id;

        if(file_exists($file)){
            echo $file;
            Yii::$app->response->xSendFile($file);

        }else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

    }

}
