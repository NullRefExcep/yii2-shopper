<?php

namespace frontend\widgets;


use common\models\Category;
use Yii;
use yii\bootstrap\Widget;

class CategoriesList extends Widget
{
    public function run()
    {
        $categories = Yii::$app->catalog->getCategories();
        $list = [];
        foreach ($categories as $category) {
            $list[] = $this->getMenuItem($category);
        }
        return $this->render('categories-list', ['categories' => $list]);
    }

    protected function getMenuItem(Category $category)
    {
        $item = ['label' => $category->name, 'url' => ['/category/view', 'id' => $category->id]];
        if (!empty($category->children)) {
            $item['items'] = [];
            foreach ($category->children as $child)
                $item['items'][] = $this->getMenuItem($child);
        }
        return $item;
    }

} 