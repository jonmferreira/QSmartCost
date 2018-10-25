<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\statusrohs */
/* @var $form yii\widgets\ActiveForm */

/*<?= $form->field($model, 'status')->textInput(['maxlength' => true]);?>*/
?>

<div class="statusrohs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'month')->textInput(['maxlength' => true]);?>
	
	
	
	<?= ($model->status === 'APPROVED')? ($form->field($model, 'status')->dropdownList(['PENDING'=>'PENDING','DISAPPROVED'=>'DISAPPROVED'], ['prompt' => $model->status])):
		($model->status == 'PENDING'? ($form->field($model, 'status')->dropdownList(['APPROVED'=>'APPROVED','DISAPPROVED'=>'DISAPPROVED'], ['prompt' => $model->status])):
		($form->field($model, 'status')->dropdownList(['APPROVED'=>'APPROVED','PENDING'=>'PENDING'], ['prompt' => $model->status])))?>
	
	<?= ($model->status === '')?($form->field($model, 'status')->dropdownList(['APPROVED'=>'APPROVED','PENDING'=>'PENDING','DISAPPROVED'=>'DISAPPROVED'], ['prompt' => $model->status])):''?>
	

    <div class="form-group">
        <?= 
		
		Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
