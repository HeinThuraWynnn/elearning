<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "record".
 *
 * @property integer $record_id
 * @property string $production_name
 * @property string $album_name
 * @property string $singer
 * @property double $price
 * @property integer $cd_qty
 * @property integer $onorder
 * @property string $submitDate
 * @property string $modifiedDate
 * @property integer $show
 */
class Record extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'production_name', 'album_name', 'singer', 'price', 'cd_qty', 'onorder', 'submitDate', 'modifiedDate', 'show'], 'required'],
            [['record_id', 'cd_qty', 'onorder', 'show'], 'integer'],
            [['price'], 'number'],
            [['submitDate', 'modifiedDate'], 'safe'],
            [['production_name', 'album_name', 'singer'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'record_id' => 'Record ID',
            'production_name' => 'Production Name',
            'album_name' => 'Album Name',
            'singer' => 'Singer',
            'price' => 'Price',
            'cd_qty' => 'Cd Qty',
            'onorder' => 'On order',
            'submitDate' => 'Submit Date',
            'modifiedDate' => 'Modified Date',
            'show' => 'Show',
        ];
    }
}
