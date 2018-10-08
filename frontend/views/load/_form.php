<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\Load */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="load-form">

    <?php $form = ActiveForm::begin(); ?>
<!--
    <?= $form->field($model, 'asn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_qty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departure_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judgement')->textInput(['maxlength' => true]) ?>
-->

	 <?= $form->field($model, 'iqc_received')->textInput(['maxlength' => true])
                ->hint('Insira horas e minutos. Ex.: 18:35')
                ->widget(MaskedInput::className(), [
                    'mask' => '99:99',
                ])
            ?>
<!--
    <?= $form->field($model, 'inicio_inspecao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fim_inspecao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inspetor_iqc')->textInput(['maxlength' => true]) ?>
-->	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
