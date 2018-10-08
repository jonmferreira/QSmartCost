<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LoadtestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loadtest-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item') ?>

    <?= $form->field($model, 'departure_date') ?>

    <?= $form->field($model, 'receipt_date') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inicio_inspecao') ?>

    <?php // echo $form->field($model, 'fim_inspecao') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
