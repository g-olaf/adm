<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MiembroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miembro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'sexo') ?>

    <?= $form->field($model, 'fecha_nacimiento') ?>

    <?= $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'id_estado_civil') ?>

    <?php // echo $form->field($model, 'id_iglesia') ?>

    <?php // echo $form->field($model, 'id_clasificacion') ?>

    <?php // echo $form->field($model, 'es') ?>

    <?php // echo $form->field($model, 'cargos_actuales') ?>

    <?php // echo $form->field($model, 'talentos') ?>

    <?php // echo $form->field($model, 'evangelismo') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
