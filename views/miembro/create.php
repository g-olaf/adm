<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Miembro */

$this->title = Yii::t('app', 'Create Miembro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Miembros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
