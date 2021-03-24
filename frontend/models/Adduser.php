<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adduser".
 *
 * @property int $aId
 * @property string $name
 */
class Adduser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adduser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aId' => 'A ID',
            'name' => 'Name',
        ];
    }
}
