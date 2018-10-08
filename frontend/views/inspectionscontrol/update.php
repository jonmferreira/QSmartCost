<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Inspectionscontrol */

$this->title = 'Update Inspectionscontrol: ' . $model->item;
$this->params['breadcrumbs'][] = ['label' => 'Inspectionscontrols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item, 'url' => ['view', 'id' => $model->item]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inspectionscontrol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
