<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\statusrohs */

$this->title = $model->month;
$this->params['breadcrumbs'][] = ['label' => 'StatusRoHS', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$script = <<< JS

  $(document).ready(function(){

         $('.example-popover').popover({
		    container: 'body'
		  })
  });

JS;
$position = \yii\web\View::POS_READY;
$this->registerJs($script, $position);

?>
</br>
<div class="statusrohs-view">

    <div class="box box-danger container">
        <div class="box-header with-border">
		<br>
			<h1><?= Html::encode($this->title) ?></h1>
		</div>

		<p>
			<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
			<!--<?= Html::a('Delete', ['delete', 'id' => $model->id], [
				'class' => 'btn btn-danger',
				'data' => [
					'confirm' => 'Are you sure you want to delete this item?',
					'method' => 'post',
				],
			]) ?>
			-->
		</p>



		<?= DetailView::widget([
			'model' => $model,
			'attributes' => [
				//'month',
			    [
					'attribute' => 'status',
					'contentOptions' => ['style' => 'color:' . 
						($model->status == 'PENDING'?'#e6b800': ($model->status == 'APPROVED'?'green':'red'))],
				]
			],
		]) ?>

		<div class="table-responsive">
	        <input type="button" id="gerar_dias" value="Click" style="display: none;"> 
	        <br>
	        <table id="days-header" class="table  table-striped table-hover "><thead style="background-color:#b71c1c;color:#fff">
	                    <tr>
	                        <th></th>
	            <th>03</th><th>04</th><th>05</th><th>06</th><th>07</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>17</th><th>18</th><th>19</th><th>20</th><th>21</th><th>24</th><th>25</th><th>26</th><th>27</th><th>28</th></tr></thead><tbody>
	            	<tr><td>Item1 MWO IQC6</td>
	            		<td></td>
	            		<td></td>
	            		<td><button type="button" class="btn btn-success example-popover" styledata-container="body" style = "border-radius: 45%;"data-toggle="popover" data-placement="top" data-content="">
						  
						</button></td>
	            	</tr>
	            	<tr><td>Item2 RAC IQC6</td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td><button type="button" class="btn btn-light example-popover" styledata-container="body" style = "border-radius: 45%;"data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
						  
						</button></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            	</tr>
	            	<tr><td>Item3 MWO IQC6</td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>

	            		<td><button type="button" class="btn btn-success example-popover" styledata-container="body" style = "border-radius: 45%;"data-toggle="popover" data-placement="top" data-content="">
						  
						</button>
						</td>
	            	</tr>
	            	<tr><td>Item4 RAC IQC6</td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td><button type="button" class="btn btn-light example-popover" styledata-container="body" style = "border-radius: 45%;"data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
						  
						</button></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            		<td></td>
	            	</tr>
	            </tbody>
	        </table>
	    </div>

		
	</div>

</div>
