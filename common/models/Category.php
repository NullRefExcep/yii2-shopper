<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 */
class Category extends ActiveRecord
{
    /**
     * @var Category[]
     */
    public $children;
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
            [['name'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'targetClass' => self::className(), 'targetAttribute' => 'id'],
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

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])
            ->viaTable('category_product', ['category_id' => 'id']);
    }

    public function getParentCategory()
    {
        return self::find()->where(['id' => $this->parent_id]);
    }

    public function getChildCategories()
    {
        return self::find()->where(['parent_id' => $this->id]);
    }

}
