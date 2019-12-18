<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "table_yii".
 *
 * @property int $id_book
 * @property string $name_book
 * @property string $name_author
 * @property int $price
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table_yii';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_book', 'name_author', 'price'], 'required'],
            [['name_book', 'name_author'], 'string'],
            [['price'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_book' => 'Id Book',
            'name_book' => 'Name Book',
            'name_author' => 'Name Author',
            'price' => 'Price',
        ];
    }
}
