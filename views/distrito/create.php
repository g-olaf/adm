<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Distrito */

$this->title = Yii::t('app', 'Create Distrito');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Distritos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distrito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
