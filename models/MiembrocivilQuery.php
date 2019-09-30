<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Miembrocivil]].
 *
 * @see Miembrocivil
 */
class MiembrocivilQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Miembrocivil[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Miembrocivil|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
