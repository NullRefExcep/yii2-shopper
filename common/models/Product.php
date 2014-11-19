<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property double $price
 * @property string $short_description
 * @property string $long_description
 * @property string $image
 */
class Product extends ActiveRecord
{
    public $file;
    public $categories;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'price', 'short_description', 'long_description'], 'required'],
            [['price'], 'number'],
            [['short_description', 'long_description'], 'string'],
            [['name', 'image'], 'string', 'max' => 255],
            [['file'], 'file', 'extensions' => ['jpg', 'png']],
            [['categories'], 'safe'],
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
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['id' => 'category_id'])
            ->viaTable('category_product', ['product_id' => 'id']);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }


}
