<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Qualidade */
/* @var $form yii\widgets\ActiveForm */
?>
<br>
<div class="qualidade-form">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h1 align="center">Digital History Card</h1>
        </div>
        <h2><?= Html::encode($this->title) ?></h2>
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'partNumber')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'partName')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
