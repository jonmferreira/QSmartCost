<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LoadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="load-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'asn') ?>

    <?= $form->field($model, 'item') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'receipt_qty') ?>

    <?= $form->field($model, 'departure_date') ?>

    <?php // echo $form->field($model, 'receipt_date') ?>

    <?php // echo $form->field($model, 'judgement_date') ?>

    <?php // echo $form->field($model, 'iqc_received') ?>

    <?php // echo $form->field($model, 'inicio_inspecao') ?>

    <?php // echo $form->field($model, 'fim_inspecao') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'inspetor_iqc') ?>

    <?php // echo $form->field($model, 'tempo_inspecao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
