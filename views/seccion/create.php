<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seccion */

$this->title = Yii::t('app', 'Create Seccion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seccions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seccion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
