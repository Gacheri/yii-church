<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mailing".
 *
 * @property int $mailId
 * @property int $userId
 * @property string $name
 * @property string $email
 *
 * @property User $user
 */
class Mailing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mailing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'name', 'email'], 'required'],
            [['userId'], 'integer'],
            [['name', 'email'], 'string', 'max' => 512],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mailId' => 'Mail ID',
            'userId' => 'User ID',
            'name' => 'Name',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
