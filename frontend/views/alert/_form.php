<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Oqcinspection;
use common\models\Fornecedores;

/* @var $this yii\web\View */
/* @var $model common\models\Alert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alert-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <!-- <?= $form->field($model, 'divisao')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'qty_defeito')->textInput() ?>

    <!-- <?= $form->field($model, 'total_qty')->textInput() ?> -->

    <!-- <?= $form->field($model, 'amostra')->textInput() ?> -->

    <?=$form->field($model, 'modelo')->dropdownList([
        Oqcinspection::find()
        ->select(['model'])
		->indexBy('model')
        ->column()
    ],
    ['prompt'=>'','class'=>'js-source-modelo', 'style'=>'width: 100%']
	); ?>

	<?= $form->field($model, 'forncedor')->textInput() ?>

    <!-- <?= $form->field($model, 'part_number')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'part_name')->textInput(['maxlength' => true]) ?> -->

	
    <?= $form->field($model, 'comentario')->textarea(['rows' => 6]) ?>
	
	<?= $form->field($model, 'imageFiles')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="application/javascript">

      modelo();

      function modelo()
      {
          $(".js-source-modelo").select2();
      }
</script>
