<?php

namespace app\models;

use yii\base\Model;

/**
 * This is the model class for table product
 *
 * @property int $id
 * @property int $price
 * @property string $name
 * @property string $category
 * @property int $created_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */

    public function rules()
    {
        return [
            [['price', 'created_at'], 'integer'],
            [['name', 'category'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'name' => ' Name',
            'category' => 'Category',
            'created_at' => 'Created At',
        ];
    }
}
