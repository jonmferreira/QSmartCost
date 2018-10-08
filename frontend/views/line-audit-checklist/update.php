<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LineAuditChecklist */

$this->title = 'Update Line Audit Checklist: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Line Audit Checklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="line-audit-checklist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
