<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%eventimages}}".
 *
 * @property int $imageId
 * @property string $imagePath
 * @property int $eventId
 */
class Eventimages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%eventimages}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imagePath', 'eventId'], 'required'],
            [['eventId'], 'integer'],
            [['imagePath'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'imageId' => 'Image ID',
            'imagePath' => 'Image Path',
            'eventId' => 'Event ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return EventimagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventimagesQuery(get_called_class());
    }
}
