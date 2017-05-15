<?php

namespace app\controllers;

use Yii;
use \yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\News;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $allnews = News::find()->all();

        return $this->render('index', [
            'allnews' => $allnews,
        ]);
    }

    public function actionCreate()
    {
        $model = new News();

        if($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function findModel($id)
    {
        if(($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
