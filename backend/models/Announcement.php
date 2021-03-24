<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%announcement}}".
 *
 * @property int $announcementId
 * @property string $title
 * @property string $message
 * @property string $createdAt
 * @property string $updatedAt
 * @property int $status
 */
class Announcement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%announcement}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'message'], 'required'],
            [['message'], 'string'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'announcementId' => 'Announcement ID',
            'title' => 'Title',
            'message' => 'Message',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AnnouncementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AnnouncementQuery(get_called_class());
    }
}
