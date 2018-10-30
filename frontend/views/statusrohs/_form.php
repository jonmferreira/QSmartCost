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

$script = <<< JS

  $(document).ready(function(){

         $('button').click(function(){
              $.ajax({
                 url: 'http://localhost:85/QSmartCost/frontend/Teste.php',
                 type: 'post',
                 data:{month:$('#myInput').val()},
                 success: function (data) {
                    $('#days-header').html(data);
                 }
            });
        });
    });

JS;
$position = \yii\web\View::POS_READY;
$this->registerJs($script, $position);
?>
 

<div class="statusrohs-form">

    <!-- <?php $form = ActiveForm::begin(); ?> -->

    <!-- <?=$form->field($model, 'month')->textInput(['maxlength' => true,'id'=>'myInput']);
		$form->field($model, 'status')->textInput(['maxlength' => true]);
	?> -->

    <div class="form-group field-myInput required">
      <label class="control-label" for="myInput">Month</label>
      <input type="text" id="myInput" class="form-control" name="statusrohs[month]" maxlength="10" aria-required="true">

      <div class="help-block"></div>
    </div>
    <div class="form-group">

        <?= 
		        Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <div style="overflow: overlay;">
        <table class="table table-bordered" >
            <tr id = "days-header">
                  <button>Click</button>  
            </tr>
            <tr>
               <td>Item1_MWO_IQ6</td> 
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
            </tr>

            <tr>
               <td>Item 1 MWO IQ6</td> 
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="01" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="02" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
               <td>
                   <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="03" >
                      </label>
                    </div>
               </td>
            </tr>
        </table>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
    
?>