<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CalcZTestesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calc-ztestes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'modelo') ?>

    <?= $form->field($model, 'valor_capacidade') ?>

    <?= $form->field($model, 'valor_eer') ?>

    <?= $form->field($model, 'valor_power') ?>

    <?php // echo $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'inspetor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
