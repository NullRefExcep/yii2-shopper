<?php

namespace common\models;

use wbraganca\behaviors\NestedSetBehavior;
use wbraganca\behaviors\NestedSetQuery;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $root
 * @property integer $left
 * @property integer $right
 * @property integer $level
 *
 * @method boolean saveNode(boolean $runValidation = true, array $attributes = null) see NestedSetBehavior::saveNode() for more info
 * @method boolean appendTo(ActiveRecord $target, boolean $runValidation = true, array $attributes = null) see NestedSetBehavior::appendTo() for more info
 */
class Category extends ActiveRecord
{
    public $parentId;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [
                ['parentId'],
                'compare',
                'compareAttribute' => 'id',
                'operator' => '!=',
                'when' => function () {
                    return !$this->isNewRecord;
                }
            ],
            [['parentId'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public function behaviors()
    {
        return [
            'nested' => [
                'class' => NestedSetBehavior::className(),
                'hasManyRoots' => true,
                'titleAttribute' => 'name',
                'idAttribute' => 'id',
                'rootAttribute' => 'root',
                'leftAttribute' => 'left',
                'rightAttribute' => 'right',
                'levelAttribute' => 'level',
            ],
        ];
    }

    public static function find()
    {
        return new NestedSetQuery(get_called_class());
    }


    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])
            ->viaTable('category_product', ['category_id' => 'id']);
    }

}
