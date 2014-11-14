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
        $categories = Category::find()->orderBy(['parent_id' => SORT_ASC, 'id' => SORT_ASC])->all();
        $tree = $this->buildTree($categories, null);

        return $tree;
    }

    protected function buildTree(array $elements, $parentId = 0)
    {
        $branch = [];

        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }

        return $branch;
    }

} 