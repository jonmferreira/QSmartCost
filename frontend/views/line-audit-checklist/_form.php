<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LineAuditChecklist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="line-audit-checklist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'secao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detalhes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'especificacao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'periodo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
