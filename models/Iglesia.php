<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iglesia".
 *
 * @property int $id
 * @property string $nombre
 * @property int $id_seccion
 * @property string $geolocalizacion
 * @property int $id_estado
 * @property string $localidad
 * @property string $poblacion
 * @property string $codigo_postal
 * @property string $direccion
 * @property string $referencias
 * @property string $pastor1
 * @property string $pastor2
 * @property string $telefono
 * @property string $email
 * @property string $timecreated
 *
 * @property Seccion $seccion
 * @property Estados $estado
 * @property Miembro[] $miembros
 */
class Iglesia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'iglesia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'id_seccion', 'id_estado', 'localidad', 'poblacion'], 'required'],
            [['id_seccion', 'id_estado'], 'integer'],
            [['timecreated'], 'safe'],
            [['nombre', 'codigo_postal', 'direccion', 'referencias'], 'string', 'max' => 200],
            [['geolocalizacion', 'telefono'], 'string', 'max' => 1500],
            [['localidad', 'poblacion', 'pastor1', 'pastor2'], 'string', 'max' => 500],
            [['email'], 'string', 'max' => 300],
            [['id_seccion'], 'exist', 'skipOnError' => true, 'targetClass' => Seccion::className(), 'targetAttribute' => ['id_seccion' => 'id']],
            [['id_estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estados::className(), 'targetAttribute' => ['id_estado' => 'id']],
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
            'id_seccion' => Yii::t('app', 'Id Seccion'),
            'geolocalizacion' => Yii::t('app', 'Geolocalizacion'),
            'id_estado' => Yii::t('app', 'Id Estado'),
            'localidad' => Yii::t('app', 'Localidad'),
            'poblacion' => Yii::t('app', 'Poblacion'),
            'codigo_postal' => Yii::t('app', 'Codigo Postal'),
            'direccion' => Yii::t('app', 'Direccion'),
            'referencias' => Yii::t('app', 'Referencias'),
            'pastor1' => Yii::t('app', 'Pastor1'),
            'pastor2' => Yii::t('app', 'Pastor2'),
            'telefono' => Yii::t('app', 'Telefono'),
            'email' => Yii::t('app', 'Email'),
            'timecreated' => Yii::t('app', 'Timecreated'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeccion()
    {
        return $this->hasOne(Seccion::className(), ['id' => 'id_seccion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estados::className(), ['id' => 'id_estado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiembros()
    {
        return $this->hasMany(Miembro::className(), ['id_iglesia' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return IglesiaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IglesiaQuery(get_called_class());
    }
}
