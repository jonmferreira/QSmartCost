<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\InspectionscontrolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspectionscontrol-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item') ?>

    <?= $form->field($model, 'item_name') ?>

    <?= $form->field($model, 'method') ?>

    <?= $form->field($model, 'count') ?>

    <?= $form->field($model, 'persist') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'fornecedor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
