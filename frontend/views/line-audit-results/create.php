<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LineAuditResults */

$this->title = 'Create Line Audit Results';
$this->params['breadcrumbs'][] = ['label' => 'Line Audit Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="line-audit-results-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
