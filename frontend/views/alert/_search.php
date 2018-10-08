<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AlertSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alert-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_data') ?>

    <?= $form->field($model, 'asn') ?>

    <?= $form->field($model, 'divisao') ?>

    <?= $form->field($model, 'qty_defeito') ?>

    <?php // echo $form->field($model, 'total_qty') ?>

    <?php // echo $form->field($model, 'amostra') ?>

    <?php // echo $form->field($model, 'modelo') ?>

    <?php // echo $form->field($model, 'part_number') ?>

    <?php // echo $form->field($model, 'part_name') ?>

    <?php // echo $form->field($model, 'forncedor') ?>

    <?php // echo $form->field($model, 'comentario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
