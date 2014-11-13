<?php

namespace common\components;


use yii\db\ActiveQuery;

class CategoryQuery extends ActiveQuery
{
    public function behaviors()
    {
        return [
            /*'nested' => [
                'class' => NestedSetQuery::className(),
                'hasManyRoots' => true,
            ]*/
        ];
    }

} 