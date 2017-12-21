<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $event_id
 * @property string $event_date
 * @property string $event_title
 * @property string $event_short_desc
 * @property string $event_detail
 * @property string $event_hash_tag
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_date'], 'safe'],
            [['event_short_desc', 'event_detail', 'event_hash_tag'], 'string'],
            [['event_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_date' => 'Event Date',
            'event_title' => 'Event Title',
            'event_short_desc' => 'Event Short Desc',
            'event_detail' => 'Event Detail',
            'event_hash_tag' => 'Event Hash Tag',
        ];
    }
}
