<?php
use app\models\Miembrocivil;
use app\models\Miembroclasificacion;
use app\models\Iglesia;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Miembro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miembro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true, 'autofocus' => true, 'placeholder' => 'Ej. Margarito Hernández Jiménez']) ?>

    <?= $form->field($model, 'sexo')->dropDownList(
            [1=>'Hombre', 2=>'Mujer']
            ) ?>

    <?= $form->field($model, 'fecha_nacimiento')->textInput(['placeholder' => 'AAAA-MM-DD']) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_estado_civil')->dropDownList(
            ArrayHelper::map(Miembrocivil::find()->all(), 'id', function($model){
                return $model->slug.' - '.$model->nombre;
            })
            ) ?>

    <?= $form->field($model, 'id_iglesia')->dropDownList(
            ArrayHelper::map(Iglesia::find()->orderBy('nombre')->all(), 'id', function($model){
                return $model->nombre.' - '.$model->localidad.', '.$model->estado->nombre;
            }, 'seccion.nombre')
            ) ?>

    <?= $form->field($model, 'id_clasificacion')->dropDownList(
            ArrayHelper::map(Miembroclasificacion::find()->all(), 'id', 'nombre')
            ) ?>

    <?= $form->field($model, 'es')->checkBox() ?>

    <?= $form->field($model, 'cargos_actuales')->textInput(['maxlength' => true, 'placeholder' => 'Separados por ; Ej. Presidente de Evangelismo; Maestro de ED']) ?>

    <?= $form->field($model, 'talentos')->textarea(['rows' => 6, 'placeholder' => 'T: Poner aquí todos los talentos y M:Poner aquí todos los ministerios separados por : (punto y coma). Ej. T:Pintar; Guitarra; Carpintería M:Predicación']) ?>

    <?= $form->field($model, 'evangelismo')->checkBox() ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 4, 'placeholder' => 'Si hay alguna inconveniencia o situación de tu persona, puedes dejarnos tu escrito aquí.']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
