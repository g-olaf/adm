<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distrito".
 *
 * @property int $id
 * @property string $nombre
 * @property string $timecreated
 *
 * @property Region[] $regions
 */
class Distrito extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'distrito';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['timecreated'], 'safe'],
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
            'nombre' => Yii::t('app', 'Nombre'),
            'timecreated' => Yii::t('app', 'Timecreated'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasMany(Region::className(), ['id_distrito' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return DistritoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DistritoQuery(get_called_class());
    }
}
