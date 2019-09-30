<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Miembro]].
 *
 * @see Miembro
 */
class MiembroQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Miembro[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Miembro|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
