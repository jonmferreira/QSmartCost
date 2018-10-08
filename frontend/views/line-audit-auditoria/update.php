<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LineAuditAuditoria */

$this->title = 'Update Line Audit Auditoria: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Line Audit Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="line-audit-auditoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
