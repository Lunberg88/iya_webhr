<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use \yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\News;

class NewsController extends Controller
{
    public function behaviors()
    {
        return [
          'access' => [
              'class' => AccessControl::className(),
              'only' => ['index', 'create', 'view'],
              'rules' => [
                  [
                  'actions' => ['index', 'create', 'view'],
                  'allow' => true,
                  'roles' => ['@'],
                  ],
              ],
          ],
        ];
    }

    public function actions()
    {
        return [
          'error' => 'yii\web\ErrorAction',
        ];
    }

    public function actionIndex()
    {
        $allnews = News::find()
            ->joinWith('user')
            ->all();

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
