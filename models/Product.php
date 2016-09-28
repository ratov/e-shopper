<?php
/**
 * Created by PhpStorm.
 * User: otshelnik
 * Date: 05.09.2016
 * Time: 15:43
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product'; //если таблица называется как-то по другому, то создаем такой метод
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}