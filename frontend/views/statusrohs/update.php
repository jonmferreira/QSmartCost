<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\statusrohs */

$this->title = 'Update Statusrohs: ' . $model->month;
$this->params['breadcrumbs'][] = ['label' => 'StatusRoHS', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->month, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statusrohs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form-update', [
        'model' => $model,
    ]) ?>

</div>
