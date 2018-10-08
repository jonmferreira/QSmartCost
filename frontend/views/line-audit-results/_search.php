<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LineAuditResultsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="line-audit-results-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_auditoria') ?>

    <?= $form->field($model, 'id_checklist') ?>

    <?= $form->field($model, 'result') ?>

    <?= $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'obs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
