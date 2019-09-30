<?php

use app\models\Seccion;
use app\models\Estados;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Iglesia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iglesia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(
            [
                'maxlength' => true, 
//                'style' => 'text-transform:uppercase;', 
                'autofocus' => true,
                ]) ?>

    <?= $form->field($model, 'id_seccion')->dropDownList(
            ArrayHelper::map(Seccion::find()->all(), 'id', 'nombre')
            ) ?>

    <?= $form->field($model, 'geolocalizacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_estado')->dropDownList(
            ArrayHelper::map(Estados::find()->all(), 'id', 'nombre')
            ) ?>

    <?= $form->field($model, 'localidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poblacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_postal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pastor1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pastor2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
