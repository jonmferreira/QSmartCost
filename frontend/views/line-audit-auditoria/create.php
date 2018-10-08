<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LineAuditAuditoria */

$this->title = 'Line Audit - Criar Auditoria';
$this->params['breadcrumbs'][] = ['label' => 'Line Audit Auditorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="line-audit-auditoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
