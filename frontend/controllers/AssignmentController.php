<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Assignment;

use yii\data\ActiveDataProvider;
use frontend\models\AssignmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

use yii\helpers\Url;

/**
 * AssignmentController implements the CRUD actions for Assignment model.
 */
class AssignmentController extends Controller
{
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

    /**
     * Lists all Assignment models.
     * @return mixed
     */
    public function actionIndex()
    { $type = \Yii::$app->user->identity->user_type_id;

        if ($type != 2){
            $user_id = \Yii::$app->user->identity->id;

            $dataProvider = new ActiveDataProvider([
                'query' => Assignment::find()->where(['assignment_student_id'=>$user_id]),

            ]);
            return $this->render('index', [
               'dataProvider' => $dataProvider,
            ]);
        } else{
                return $this->redirect(['/teacher/teacherhome']);
            }
        
    }

    /**
     * Displays a single Assignment model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $type = \Yii::$app->user->identity->user_type_id;

        if ($type != 2){
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }else{
                return $this->redirect(['/teacher/teacherhome']);
            }
    }

    /**
     * Creates a new Assignment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $type = \Yii::$app->user->identity->user_type_id;

            if ($type != 2){
            
            $model = new Assignment();
            if(count($_FILES)>0){
                extract($_FILES);
                $path = Yii::getAlias('@backend').'/upload/file/';
                $model->file = UploadedFile::getInstance($model, 'file');
                $random = substr(md5(rand(0,1000)),0,5);
                if($model->file){

                    $model->file->saveAs($path . $model->file->baseName .'_'.$random.'.' . $model->file->extension);

                    $model->assignment_file = $model->file->baseName.'_'.$random.'.'.$model->file->extension;

                }
                $model->assignment_uploaded_date = date("Y-m-d", time());
            }
            if((\Yii::$app->user->getId()) !== null){
                $user_id = \Yii::$app->user->getId();
                $model->assignment_student_id = $user_id;
            }

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->assignment_id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }else{
                return $this->redirect(['/teacher/teacherhome']);
            }

    }
    /**
     * Updates an existing Assignment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $type = \Yii::$app->user->identity->user_type_id;

            if ($type != 2){
            
            $model = $this->findModel($id);
            if(count($_FILES)>0){
                extract($_FILES);
                $path = Yii::getAlias('@backend').'/upload/file/';
                $model->file = UploadedFile::getInstance($model, 'file');
                $random = substr(md5(rand(0,1000)),0,5);
                if($model->file){
                    $model->file->saveAs($path . $model->file->baseName .'_'.$random.'.' . $model->file->extension);
                    $model->assignment_file = $model->file->baseName.'_'.$random.'.'.$model->file->extension;
                }
                $model->assignment_uploaded_date = date("Y-m-d", time());
            }
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->assignment_id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }else{
                return $this->redirect(['/teacher/teacherhome']);
            }
    }

    /**
     * Deletes an existing Assignment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $type = \Yii::$app->user->identity->user_type_id;

            if ($type != 2){
            
                $this->findModel($id)->delete();

                return $this->redirect(['index']);
            }else{
                return $this->redirect(['/teacher/teacherhome']);
            }
    }
    /**
     * Finds the Assignment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Assignment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Assignment::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
