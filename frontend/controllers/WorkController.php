<?php

namespace frontend\controllers;

use Yii;
use common\models\Work;
use frontend\models\WorkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\WorkSearchMap;
use yii\web\UploadedFile;
use common\models\Hangout;
use common\models\Joinhangout;
use common\models\Chat;
use yii\bootstrap\Html;
use common\models\Comment;
use common\models\User;

/**
 * WorkController implements the CRUD actions for Work model.
 */
class WorkController extends Controller
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
     * Lists all Work models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WorkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Work model.
     * @param integer $id
     * @return mixed
     */
    public function  actionInsert(){
        
        if ($_POST){
            $msg = $_POST['txt'];
            $user_id = $_POST['user_id'];
            $work_id = $_POST['work_id'];
            $fb = $_POST['fb'];
            $model = new Comment();
            $model->user_id = $user_id;
            $model->work_id = $work_id;
            $model->messen = $msg;
            $model->fb_id = $fb;
            $model->save();
        }
    }
    public function actionList(){
        $id = $_POST['work_id'];
        $model = Comment::find()->where(['work_id'=>$id])->all();
        foreach($model as $rs){
            //echo '<p>',Html::img('https://graph.facebook.com/'.$rs->fb_id.'/picture?type=large',['width'=>'10%']),'<span  style="color:blue;font-weight:bold" class="col-md-5">'.$rs->messen.'</span></p>';
            echo '<p>',html::img('https://graph.facebook.com/'.$rs->fb_id.'/picture?type=large',['width'=>'10%']),'<span  style="color:blue;font-weight:bold" class="pull-right">'. $rs->messen.'</span></p>','<p>'.$rs->time.'</p>';
            // echo '<p>'.$rs->messen.'<span class="pull-right">',Html::img('https://graph.facebook.com/'.$rs->fb_id.'/picture?type=large',['width'=>'10%']);'</span></p><p>'.$rs->time.'<span class="pull-right">'.$rs->user->username.'</span></p>';
        }
    }
    
    public function actionGoogleDirections(){
        return $this->render('google-directions',[
            'lat' =>$_GET['lat'],
            'long' => $_GET['long'],
            'name_office' => $_GET['name_office'],
        ]);
    }
    public function actionView($id)
    {
        $room = Work::find()->where(['id'=>$id])->all();
        //var_dump($room);die();
        return $this->render('view', [
            'room' => $room,
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Work model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout ="main2";
        $model = new Work();

        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                $model->createdby_id = Yii::$app->user->id;
            $file = UploadedFile::getInstance($model, 'img');
                if($file->size!=0){
                    $model->img = $file->name;
                    $file->saveAs('images/work/'.$file->name);
                }
                $model->createdby_id = Yii::$app->user->id;
                $model->save();
            }
    
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
       
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Work model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Work model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionWorkSearchMap(){
        $searchModel = new WorkSearchMap();
     
        if (\Yii::$app->user->isGuest) $this->layout = 'main3';
        $dataProvider = $searchModel->search(Yii::$app->request->post());
        //var_dump($searchModel);die();
        $count = $dataProvider->count;
        //var_dump($count);die();
        //  $model = WorkSearchMap::find()->all();
        return $this->render('work-search-map',[
            'searchModel' => $searchModel,
            'dataProvider'=>$dataProvider,
            'count' => $count
        ]);
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Work model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Work the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Work::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
