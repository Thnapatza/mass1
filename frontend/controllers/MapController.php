<?php

namespace frontend\controllers;



use frontend\models\WorkSearch;
use Yii;

class MapController extends \yii\web\Controller
{
    public $address;
    public $longitude;
    public $latitude;
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionMap(){
        $searchModel = new WorkSearch();
        if (\Yii::$app->user->isGuest) $this->layout = 'main3';
        $dataProvider = $searchModel->search(Yii::$app->request->post());
        $count = $dataProvider->count;
        
        //  $model = WorkSearchMap::find()->all();
        return $this->render('map',[
            'searchModel' => $searchModel,
            'dataProvider'=>$dataProvider,
            'count' => $count
        ]);
    }
    public function actionMapsreach()
    {
        return $this->render('mapsreach');
    }
    public function actionWorkSearch(){
        $searchModel = new WorkSearch();
        if (\Yii::$app->user->isGuest) $this->layout = 'main3';
        $dataProvider = $searchModel->search(Yii::$app->request->post());
        $count = $dataProvider->count;
        
        //  $model = WorkSearchMap::find()->all();
        return $this->render('work-search-map',[
            'searchModel' => $searchModel,
            'dataProvider'=>$dataProvider,
            'count' => $count
        ]);
    }
}