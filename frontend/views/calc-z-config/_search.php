<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CalcZConfigSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calc-zconfig-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'modelo') ?>

    <?= $form->field($model, 'valor_capacidade') ?>

    <?= $form->field($model, 'valor_eer') ?>

    <?= $form->field($model, 'valor_power') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
