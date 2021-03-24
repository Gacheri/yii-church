<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%district}}".
 *
 * @property int $districtId
 * @property string $districtName
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%district}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['districtName'], 'required'],
            [['districtName'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'districtId' => 'District ID',
            'districtName' => 'District Name',
        ];
    }

    /**
     * {@inheritdoc}
     * @return DistrictQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DistrictQuery(get_called_class());
    }
}
