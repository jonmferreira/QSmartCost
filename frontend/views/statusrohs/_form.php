<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\statusrohs */
/* @var $form yii\widgets\ActiveForm */

/*$this->registerJs("
    $(document).ready(function(){

         $('button').click(function(){
             $.ajax({
               url: 'http://localhost:85/QSmartCost/frontend/controllers/GetDias',
               type: 'get',
               success: function (data) {
                  alert('jh');
               }
          });
        });
    });"


, \yii\web\View::POS_READY);*/

$link = 'http://localhost/QSmartCost/frontend/web/index.php?r=statusrohs/create2';

$script = <<< JS

  $(document).ready(function(){

         $('#gerar_dias').click(function(){
              if($('#myInput').val() != ''){
                $(this).hide();
                $.ajax({
                     url: '?r=statusrohs/datas',
                     type: 'post',
                     data:{'month':$('#myInput').val()},
                     success: function (data) {
                        $('#days-header').html(data);
                     }
                });
              }              
        });
        $('#btn-salvar').click(function(){
              if($('#myInput').val() != ''){
                
                $.ajax({
                     url: '?r=statusrohs/create2',
                     type: 'post',
                     data:{month:$('#myInput').val()},
                     success: function (data) {
                     }
                });
              }              
        });
    });

JS;
$position = \yii\web\View::POS_READY;
$this->registerJs($script, $position);
?>
 

<div class="statusrohs-form">

     <!-- <?php $form = ActiveForm::begin(); ?>  -->

    <!-- <?=$form->field($model, 'month')->textInput(['maxlength' => true,'id'=>'myInput']);
		$form->field($model, 'status')->textInput(['maxlength' => true]);
	?> -->

    <div class="form-group field-myInput required">
      <label class="control-label" for="myInput">Month</label>
      <input type="text" id="myInput" class="form-control" style = "width: 90%" name="statusrohs[month]" maxlength="10" aria-required="true">

      <div class="help-block"></div>
    </div>

    <div class="table-responsive">
        <input type="button" id = "gerar_dias" value="Click"></input> 
        <br>
        <table id = "days-header" class="table  table-striped table-hover " style="width: 90%">
            
        </table>
    </div>

    <div class="form-group">

        <!-- <?= 
            Html::submitButton('Save', ['class' => 'btn btn-success']) ?> -->
        <button class="btn btn-success" id = "btn-salvar">Save</button>
    </div>
    <?php ActiveForm::end();  ?>

    

</div>

<?php
    
?>