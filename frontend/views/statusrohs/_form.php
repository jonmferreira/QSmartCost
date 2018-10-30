<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\statusrohs */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs(' 
    $(document).ready(function(){
         alert("jkhkj");

         $("button").click(function(){
            $(this).hide();
        });
    });'


, \yii\web\View::POS_READY);

?>
 

<div class="statusrohs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'month')->textInput(['maxlength' => true]);
		//$form->field($model, 'status')->textInput(['maxlength' => true]);
	?>

    <div class="form-group">

        <?= 
		Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <div style="overflow: overlay;">
        <table class="table table-bordered" >
            <tr id = "days-header">
                  <button>Click me to hide paragraphs</button>  
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