<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%member}}".
 *
 * @property int $memberId
 * @property string $fName
 * @property string $lname
 * @property string $District
 * @property int $contact
 * @property string $createdAt
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%member}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fName', 'lname', 'District', 'contact'], 'required'],
            [['contact'], 'integer'],
            [['createdAt'], 'safe'],
            [['fName', 'lname', 'District'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'memberId' => 'Member ID',
            'fName' => 'First Name',
            'lname' => 'Last name',
            'District' => 'District',
            'contact' => 'Contact',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return MemberQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MemberQuery(get_called_class());
    }
}
