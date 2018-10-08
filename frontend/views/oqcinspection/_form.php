<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Oqcinspection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oqcinspection-form">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h1 align="center">OQC Inspection</h1>
        </div>

        <h2><?= Html::encode($this->title) ?></h2>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'sufix')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
