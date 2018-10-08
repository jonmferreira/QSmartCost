<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CalcZConfig */

$this->title = 'Editar Parâmetro: ' . $model->modelo;
$this->params['breadcrumbs'][] = ['label' => 'Cálculo Z - Parâmetros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->modelo, 'url' => ['view', 'id' => $model->modelo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="calc-zconfig-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
