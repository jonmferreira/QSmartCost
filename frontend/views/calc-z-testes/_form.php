<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CalcZConfig;

/* @var $this yii\web\View */
/* @var $model common\models\CalcZTestes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calc-ztestes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'modelo')->dropdownList([
        Calczconfig::find()
        ->select(['modelo'])
		->indexBy('modelo')
        ->column()
    ],
    ['prompt'=>'', 'style'=>'width: 100%']
	); ?>

    <?= $form->field($model, 'valor_capacidade')->textInput() ?>

    <?= $form->field($model, 'valor_eer')->textInput() ?>

    <?= $form->field($model, 'valor_power')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
