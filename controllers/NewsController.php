<?php

namespace app\controllers;

use \yii\web\Controller;
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
            ])
        }
    }

}
