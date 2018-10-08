<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Loadtest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loadtest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departure_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inicio_inspecao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fim_inspecao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
