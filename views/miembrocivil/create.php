<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Miembrocivil */

$this->title = Yii::t('app', 'Create Miembrocivil');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Miembrocivils'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembrocivil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
