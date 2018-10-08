<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LineAuditAuditoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="line-audit-auditoria-form">

    <?php $form = ActiveForm::begin();?>

    <!-- <?= $form->field($model, 'data')->textInput() ?> -->
	
	<?=$form->field($model, 'line')->dropdownList(['AA1' => 'AA1', 'AC1' => 'AC1', 'MWO' => 'MWO', 'HEAT' => 'HEAT', 'C.BOX' => 'C.BOX'],
    ['prompt'=>'','style'=>'width: 100%']
	); ?>

    <!-- <?= $form->field($model, 'auditor')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Confirmar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
