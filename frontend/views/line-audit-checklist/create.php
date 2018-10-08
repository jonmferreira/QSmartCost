<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LineAuditChecklist */

$this->title = 'Create Line Audit Checklist';
$this->params['breadcrumbs'][] = ['label' => 'Line Audit Checklists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="line-audit-checklist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
