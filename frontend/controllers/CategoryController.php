<?php

namespace frontend\controllers;

use common\models\Product;
use yii\data\ActiveDataProvider;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id)
    {
        $dataProvider = new ActiveDataProvider(['query' => Product::find()]);

        return $this->render('view', ['dataProvider' => $dataProvider]);
    }

}
