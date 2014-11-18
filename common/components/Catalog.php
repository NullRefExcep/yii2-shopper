<?php

namespace common\components;


use common\models\Category;
use yii\base\Component;

class Catalog extends Component
{
    /**
     * @return Category[]
     */
    public function getCategories()
    {
        return Category::find()->dataFancytree();
    }

} 