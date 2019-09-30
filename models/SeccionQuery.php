<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Seccion]].
 *
 * @see Seccion
 */
class SeccionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Seccion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Seccion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
