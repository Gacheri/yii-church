<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "devotion".
 *
 * @property int $devId
 * @property string $day
 * @property string $title
 * @property string $script
 * @property string $verse
 * @property string $description
 * @property string $lesson
 * @property int $createdBy
 * @property string $createdAt
 *
 * @property User $createdBy0
 */
class Devotion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'devotion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['day', 'title', 'script', 'verse', 'description', 'lesson', 'createdBy'], 'required'],
            [['title', 'script', 'description', 'lesson'], 'string'],
            [['createdBy'], 'integer'],
            [['createdAt'], 'safe'],
            [['day', 'verse'], 'string', 'max' => 512],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['createdBy' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'devId' => 'Dev ID',
            'day' => 'Day',
            'title' => 'Title',
            'script' => 'Script',
            'verse' => 'Verse',
            'description' => 'Description',
            'lesson' => 'Lesson',
            'createdBy' => 'Created By',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[CreatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(User::className(), ['id' => 'createdBy']);
    }
}
