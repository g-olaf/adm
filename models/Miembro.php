<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "miembro".
 *
 * @property string $id
 * @property string $nombre
 * @property int $sexo 0=No definido, 1=Hombre, 2=Mujer
 * @property string $fecha_nacimiento
 * @property string $direccion
 * @property string $telefono
 * @property int $id_estado_civil
 * @property int $id_iglesia
 * @property int $id_clasificacion
 * @property int $es Bautizado en el Espíritu Santo(es), 0=NO
 * @property string $cargos_actuales
 * @property string $talentos
 * @property int $evangelismo
 * @property string $observaciones
 *
 * @property Miembrocivil $estadoCivil
 * @property Iglesia $iglesia
 * @property Miembroclasificacion $clasificacion
 */
class Miembro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'miembro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'fecha_nacimiento', 'id_estado_civil', 'id_iglesia', 'id_clasificacion'], 'required'],
            [['sexo', 'id_estado_civil', 'id_iglesia', 'id_clasificacion', 'es', 'evangelismo'], 'integer'],
            [['fecha_nacimiento'], 'safe'],
            [['talentos'], 'string'],
            [['nombre', 'direccion'], 'string', 'max' => 500],
            [['telefono', 'cargos_actuales'], 'string', 'max' => 1500],
            [['observaciones'], 'string', 'max' => 100],
            [['id_estado_civil'], 'exist', 'skipOnError' => true, 'targetClass' => Miembrocivil::className(), 'targetAttribute' => ['id_estado_civil' => 'id']],
            [['id_iglesia'], 'exist', 'skipOnError' => true, 'targetClass' => Iglesia::className(), 'targetAttribute' => ['id_iglesia' => 'id']],
            [['id_clasificacion'], 'exist', 'skipOnError' => true, 'targetClass' => Miembroclasificacion::className(), 'targetAttribute' => ['id_clasificacion' => 'id']],
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
            'sexo' => Yii::t('app', 'Sexo'),
            'fecha_nacimiento' => Yii::t('app', 'Fecha Nacimiento'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'id_estado_civil' => Yii::t('app', 'Id Estado Civil'),
            'id_iglesia' => Yii::t('app', 'Id Iglesia'),
            'id_clasificacion' => Yii::t('app', 'Id Clasificacion'),
            'es' => Yii::t('app', 'Es'),
            'cargos_actuales' => Yii::t('app', 'Cargos Actuales'),
            'talentos' => Yii::t('app', 'Talentos'),
            'evangelismo' => Yii::t('app', 'Evangelismo'),
            'observaciones' => Yii::t('app', 'Observaciones'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadocivil()
    {
        return $this->hasOne(Miembrocivil::className(), ['id' => 'id_estado_civil']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIglesia()
    {
        return $this->hasOne(Iglesia::className(), ['id' => 'id_iglesia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasificacion()
    {
        return $this->hasOne(Miembroclasificacion::className(), ['id' => 'id_clasificacion']);
    }

    /**
     * {@inheritdoc}
     * @return MiembroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MiembroQuery(get_called_class());
    }
}
