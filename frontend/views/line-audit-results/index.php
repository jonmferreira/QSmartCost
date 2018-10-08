<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LineAuditResultsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$auditoria = $_GET["id_auditoria"];
$this->title = 'Line Audit - Checklist';
$this->params['breadcrumbs'][] = $this->title;

$connection = Yii::$app->getDb();

	//FORNECEDORES LOCAIS
	$command = $connection->createCommand("SELECT COUNT(id) FROM lg.line_audit_results WHERE result is NULL AND id_auditoria = $auditoria");

	$result = $command->queryAll();
	foreach ($result as $perk) {
		$itensRestantes = $perk['COUNT(id)'];
		break;
	}

	$command = $connection->createCommand("SELECT COUNT(id) FROM lg.line_audit_results WHERE result LIKE 'OK' AND id_auditoria = $auditoria");

	$result = $command->queryAll();
	foreach ($result as $perk) {
		$ok = $perk['COUNT(id)'];
		break;
	}

	$command = $connection->createCommand("SELECT COUNT(id) FROM lg.line_audit_results WHERE result LIKE 'NG' AND id_auditoria = $auditoria");

	$result = $command->queryAll();
	foreach ($result as $perk) {
		$ng = $perk['COUNT(id)'];
		break;
	}
	
	$total = $ok + $ng;
	
	if($ok == 0){
		$resultOK = 0;
	}else{
		$resultOK = number_format(($ok*100)/$total, 1, '.' , ',');
	}
	
	if($ng == 0){
		$resultNG = 0;
	}else{
		$resultNG = number_format(($ng*100)/$total, 1, '.' , ',');
	}
	
?>

<div class="line-audit-results-index">
 
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?php 
		if($itensRestantes == 0){
	?>
		<p> 
			<?= Html::a('Finalizar Auditoria', ['index', 'id_auditoria' => $auditoria], ['class' => 'btn btn-lg btn-default']) ?>
		</p>
	<?php 
		}else{
	?>
		 <p> 
			<?= Html::a('Finalizar Auditoria', [''], ['class' => 'btn btn-success invisible']) ?>
		</p>
	<?php 
		}
	?>
	
	<div class="col-md-4">
		<div class="callout callout-warning">
			<h4>ITENS RESTANTES</h4>
			<h3><?php echo $itensRestantes?> Itens</h3>
	</div>
	</div>
	
	<div class="col-md-4">
		<div class="callout callout-success">
			<h4>OK</h4>
			<h3><?php echo $ok?> Itens - <?php echo $resultOK?>%</h3>
	</div>
	</div>
	
	<div class="col-md-4">
		<div class="callout callout-danger">
			<h4>NG</h4>
			<h3><?php echo $ng?> Itens - <?php echo $resultNG?>% </h3>
	</div>
	</div>
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'id_auditoria',
            'id_checklist',
            //'result',
            //'foto',
            // 'obs',

            ['class' => 'yii\grid\ActionColumn',                        
						'template' => '{ok} {ng} {na} {foto} {detalhes}',                        
                        'buttons' => [
							
							'ok' => function($url,$model,$auditoria) {
								if($model->result == "OK"){
									return Html::a(
										'<span class="fa fa-thumbs-o-up"></span>',
										['ok','id' => $model->id], [
											'class' => 'btn btn-success',
											'title' => 'OK',
											'data-pjax' => '0',
											'data' => [
												'confirm' => 'Tem certeza que deseja APROVAR o item?',
												'method' => 'post',
											],
										]
									);
								}else{
									return Html::a(
										'<span class="fa fa-thumbs-o-up"></span>',
										['ok', 'id' => $model->id], [
											'class' => 'btn btn-default',
											'title' => 'OK',
											'data-pjax' => '0',
											'data' => [
												'confirm' => 'Tem certeza que deseja APROVAR o item?',
												'method' => 'post',
											],
										]
									);
								}
							},
							
							'ng' => function($url,$model) {
								if($model->result == "NG"){
									return Html::a(
										'<span class="fa fa-thumbs-o-down"></span>',
										['ng', 'id' => $model->id], [
											'class' => 'btn btn-danger',
											'title' => 'NG',
											'data-pjax' => '0',
											'data' => [
												'confirm' => 'Tem certeza que deseja REPROVAR o item?',
												'method' => 'post',
											],
										]
									);
								}else{
									return Html::a(
										'<span class="fa fa-thumbs-o-down"></span>',
										['ng', 'id' => $model->id], [
											'class' => 'btn btn-default',
											'title' => 'NG',
											'data-pjax' => '0',
											'data' => [
												'confirm' => 'Tem certeza que deseja REPROVAR o item?',
												'method' => 'post',
											],
										]
									);
								}
							},
							
							'na' => function($url,$model) {
								if($model->result == "Ñ/A"){
									return Html::a(
										'<span class="fa fa-times"></span>',
										['na', 'id' => $model->id], [
											'class' => 'btn btn-warning',
											'title' => 'Ñ/A',
											'data-pjax' => '0',
											'data' => [
												'confirm' => 'Tem certeza que este item NÃO SE APLICA?',
												'method' => 'post',
											],
										]
									);
								}else{
									return Html::a(
										'<span class="fa fa-times"></span>',
										['na', 'id' => $model->id], [
											'class' => 'btn btn-default',
											'title' => 'Ñ/A',
											'data-pjax' => '0',
											'data' => [
												'confirm' => 'Tem certeza que este item NÃO SE APLICA?',
												'method' => 'post',
											],
										]
									);
								}
							},
							
							'foto' => function($url,$model) {
									return Html::a(
										'<span class="fa fa-camera"></span>',
										['line-audit-results/index', 'id_auditoria' => $model->id], [
											'class' => 'btn btn-default',
											'title' => 'Anexar Foto',
											'data-pjax' => '0',
										]
									);
							},
							
							'detalhes' => function($url,$model) {
									return Html::a(
										'<span class="fa fa-info"></span>',
										['view', 'id' => $model->id], [
											'class' => 'btn btn-default',
											'title' => 'Detalhes',
											'data-pjax' => '0',
										]
									);
							},
                            
                        ],
            ],
        ],
    ]); ?>
</div>
