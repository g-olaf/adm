<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Iglesia]].
 *
 * @see Iglesia
 */
class IglesiaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Iglesia[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Iglesia|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
