<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Miembroclasificacion]].
 *
 * @see Miembroclasificacion
 */
class MiembroclasificacionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Miembroclasificacion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Miembroclasificacion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
