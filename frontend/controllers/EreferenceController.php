<?php

namespace frontend\controllers;

use Yii;
use frontend\models\EReference;
use frontend\models\Course;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\web\UploadedFile;
use yii\helpers\Url;


/**
 * EreferenceController implements the CRUD actions for EReference model.
 */
class EreferenceController extends Controller
{  public $file;
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
     * Lists all EReference models.
     * @return mixed
     */
    public function actionIndex()
    {
        $type = \Yii::$app->user->identity->user_type_id;

        if ($type != 3){
//        $connection = \Yii::$app->db;
//
        $user_id = Yii::$app->user->identity->id;
//
//        $query = EReference::find()
//        -> leftJoin('enroll', 'enroll.enroll_course_code=e_reference.e_reference_course_code')
//        ->leftJoin('course', 'course.course_code=e_reference.e_reference_course_code')
//        ->where(['=', 'enroll.enroll_student_reg_no', $user_id])
////                    ->andWhere(['=', 'meta_data.published_state', 1])
//        ->all();
//        if(count($query)>0){
//            foreach ($query as $name){
////                echo $query;
////                extract($name);
//                echo"<pre>";
//                print_r($query);
//                echo "</pre>";
//                exit;
//            }
//        }

        $dataProvider = new ActiveDataProvider([
            'query' => EReference::find()->where(['e_reference_user_id'=>$user_id]),

        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);


        $yii_sql1 = "SELECT enroll_course_code FROM enroll WHERE enroll_student_reg_no = $user_id";

        $enroll_course_code = $connection->createCommand($yii_sql1);

        $yii_query1 = $enroll_course_code->queryAll();

//        if(count($yii_query1)>0){
//
//            foreach ($yii_query1 as $key=>$val){
//                extract($val);
//                echo"<pre>";
//                print_r($yii_query1);AND e_reference_user_id = $user_id
//                echo"</pre>";
//                echo count($yii_query1);

//
//
//exit;
//                $query = Product::find()
//                    -> leftJoin('availability', 'availability.productID=product.ID  AND a.start>=DATE_ADD(DATE(now()), INTERVAL 7 DAY)')
//                    ->leftJoin('meta_data', 'meta_data.ID=product.meta_dataID')
//                    ->where(['is', 'availability.ID', NULL])
//                    ->andWhere(['=', 'meta_data.published_state', 1])
//                    ->all();
//
//                $query = new \yii\db\Query;
//                $command = $query->innerJoin(
//                    'Product_has_ProductFeature',
//                    `Product`.`id` = t.`productId`)
//                    ->andWhere('t.`productFeatureValueId` = 1')
//                    ->createCommand();
//                $queryResult = $command->query();
//
//            }
//
//        }


//        $dataProvider = new \yii\data\ActiveDataProvider([
//            'query' =>  Propertylist::find()->
//            where(['userId' => Yii::$app->user->identity->id ]),

//        ]);

    }else{
                return $this->redirect(['/student/studentdashboard']);
            }
    }

    /**
     * Displays a single EReference model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $type = \Yii::$app->user->identity->user_type_id;

        if ($type != 3){

            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }else{
                return $this->redirect(['/student/studentdashboard']);
            }
    }

    /**
     * Creates a new EReference model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    { $type = \Yii::$app->user->identity->user_type_id;

        if ($type != 3){
        $model = new EReference();
        if((\Yii::$app->user->getId()) !== null){
            $user_id = \Yii::$app->user->getId();
            $model->e_reference_user_id = $user_id;
        }
//
//    echo "<pre>";
//    print_r($_FILES);
//    echo "</pre>";
        if(count($_FILES)>0){

            $path = Yii::getAlias('@backend').'/upload/ereference/';

            $model->file = UploadedFile::getInstance($model, 'file');

            $random = substr(md5(rand(0,1000)),0,5);

            if($model->file) {

                $model->file->saveAs($path . $model->file->baseName . '_' . $random . '.' . $model->file->extension);

                $model->e_reference_file = $model->file->baseName . '_' . $random . '.' . $model->file->extension;

            }
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->e_reference_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }else{
                return $this->redirect(['/student/studentdashboard']);
            }
    }


    /**
     * Updates an existing EReference model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $type = \Yii::$app->user->identity->user_type_id;

        if ($type != 3){
        $model = $this->findModel($id);
        if(count($_FILES)>0){

            $path = Yii::getAlias('@backend').'/upload/ereference/';

            $model->file = UploadedFile::getInstance($model, 'file');

            $random = substr(md5(rand(0,1000)),0,5);

            if($model->file) {

                $model->file->saveAs($path . $model->file->baseName . '_' . $random . '.' . $model->file->extension);

                $model->e_reference_file = $model->file->baseName . '_' . $random . '.' . $model->file->extension;

            }
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->e_reference_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }else{
                return $this->redirect(['/student/studentdashboard']);
            }
    }

    /**
     * Deletes an existing EReference model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $type = \Yii::$app->user->identity->user_type_id;

        if ($type != 3){
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }else{
                return $this->redirect(['/student/studentdashboard']);
            }
    }

    /**
     * Finds the EReference model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return EReference the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EReference::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionDownload()
    {
//        $model = this->$this->findModel($id);

        $path = Yii::getAlias('@backend').'/upload/ereference/';

        $a = $path .'sample_book_53e3a.pdf';

        if(file_exists($a)){
            echo $a;
            Yii::$app->response->xSendFile($a);

        }else {
            exit;
            $this->render('/site/error');
        }

    }

}
