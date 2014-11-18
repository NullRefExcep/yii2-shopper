<?php

namespace frontend\widgets;


use Yii;
use yii\bootstrap\Widget;

class CategoriesList extends Widget
{
    public function run()
    {
        $categories = Yii::$app->catalog->getCategories();
        return $this->render('categories-list', ['categories' => $categories]);
    }

} 