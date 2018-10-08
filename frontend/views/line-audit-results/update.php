<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LineAuditResults */

$this->title = 'Update Line Audit Results: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Line Audit Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="line-audit-results-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
