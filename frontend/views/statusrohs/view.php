<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\statusrohs */

$this->title = $model->month;
$this->params['breadcrumbs'][] = ['label' => 'StatusRoHS', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

function cor(){
	if($model->status == 'PENDING'){
		return 'yellow';
	}elseif($model->status == 'APPROVED'){
		return 'green';
	}
	return 'red';
}
?>
</br>
<div class="statusrohs-view">

    <div class="box box-danger">
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
	</div>

</div>
