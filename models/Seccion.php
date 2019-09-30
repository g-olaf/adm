<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seccion".
 *
 * @property int $id
 * @property string $nombre
 * @property int $id_region
 * @property string $timecreated
 *
 * @property Iglesia[] $iglesias
 * @property Region $region
 */
class Seccion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seccion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'id_region'], 'required'],
            [['id_region'], 'integer'],
            [['timecreated'], 'safe'],
            [['nombre'], 'string', 'max' => 200],
            [['id_region'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['id_region' => 'id']],
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
            'id_region' => Yii::t('app', 'Id Region'),
            'timecreated' => Yii::t('app', 'Timecreated'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIglesias()
    {
        return $this->hasMany(Iglesia::className(), ['id_seccion' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'id_region']);
    }

    /**
     * {@inheritdoc}
     * @return SeccionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SeccionQuery(get_called_class());
    }
}
