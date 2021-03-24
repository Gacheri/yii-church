<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "prayer".
 *
 * @property int $prId
 * @property int $id
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $title
 * @property string $description
 *
 * @property User $id0
 */
class Prayer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prayer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title', 'description'], 'required'],
            [['id'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prId' => 'Pr ID',
            'id' => 'ID',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id' => 'id']);
    }
   
}
