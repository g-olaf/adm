<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "miembro_clasificacion".
 *
 * @property int $id
 * @property string $slug
 * @property string $nombre
 * @property string $descripcion
 *
 * @property Miembro[] $miembros
 */
class Miembroclasificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'miembro_clasificacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['slug', 'nombre'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'slug' => Yii::t('app', 'Slug'),
            'nombre' => Yii::t('app', 'Nombre'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiembros()
    {
        return $this->hasMany(Miembro::className(), ['id_clasificacion' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return MiembroclasificacionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MiembroclasificacionQuery(get_called_class());
    }
}
