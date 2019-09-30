<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "geo_estado".
 *
 * @property int $id
 * @property string $slug
 * @property string $nombre
 *
 * @property Iglesia[] $iglesias
 */
class Estados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'geo_estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'nombre'], 'required'],
            [['slug'], 'string', 'max' => 100],
            [['nombre'], 'string', 'max' => 200],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIglesias()
    {
        return $this->hasMany(Iglesia::className(), ['id_estado' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return EstadosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EstadosQuery(get_called_class());
    }
}
