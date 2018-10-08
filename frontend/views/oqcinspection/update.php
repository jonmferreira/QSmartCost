<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Oqcinspection */

$this->title = 'Update Oqcinspection: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Oqcinspections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->model]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oqcinspection-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
