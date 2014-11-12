<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property double $price
 * @property string $short_description
 * @property string $long_description
 * @property string $image
 * @property integer $quantity
 */
class Product extends \yii\db\ActiveRecord
{
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
            [['price'], 'number'],
            [['short_description', 'long_description'], 'string'],
            [['quantity'], 'integer'],
            [['name', 'image'], 'string', 'max' => 255]
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
            'quantity' => 'Quantity',
        ];
    }

    public function getImage($cover = false)
    {
        return '//lorempixel.com/' . ($cover ? '800/300' : '320/150') . '/technics/' . $this->id;
    }
}
