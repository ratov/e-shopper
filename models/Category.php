<?php
/**
 * Created by PhpStorm.
 * User: otshelnik
 * Date: 05.09.2016
 * Time: 15:38
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category'; //если таблица называется как-то по другому, то создаем такой метод
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}