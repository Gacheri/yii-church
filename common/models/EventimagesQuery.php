<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Eventimages]].
 *
 * @see Eventimages
 */
class EventimagesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Eventimages[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Eventimages|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
