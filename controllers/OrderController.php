<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Item;
use app\models\Item2Order;
use app\models\Order;
use app\models\User;

use yii\data\ActiveDataProvider;


class OrderController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionView($id)
    {
        $model = Order::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException;
        }
		
	$dataProvider = new ActiveDataProvider([
	    'query' => $model->getItems(),
	    'pagination' => [
		'pageSize' => 2,
	    ],
	]);

        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
    
}
