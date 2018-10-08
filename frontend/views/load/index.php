<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LoadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inspections';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="load-index">
	<div class="box box-danger">
        <div class="box-header with-border">
		<br>
			<h1><?= Html::encode($this->title) ?></h1>
		</div>

	<!--
    <p>
        <?= Html::a('Create Load', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	-->
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'asn',
            'item',
            'item_name',
            'receipt_qty',
            //'departure_date',
            // 'receipt_date',
            // 'judgement_date',
            //'iqc_received',
            'inicio_inspecao',
            'fim_inspecao',
            //'status',
			[
				'attribute' => 'status',
				'contentOptions' => function ($model, $key, $index, $column) {
					return ['style' => 'color:' 
						. ($model->status == "DONE"  
							? 'green' : ($model->status == "DOING"  
							? 'orange' : 'red'))];
				},
			],
            'inspetor_iqc',

            ['class' => 'yii\grid\ActionColumn',                        
						'template' => '{view} {start} {stop} {edit}',                        
                        'buttons' => [
							'view' => function($url,$model) {
									if($model->status == "DONE" && $model->iqc_received != NULL){
									return Html::a(
										'<span class="fa fa-eye"></span>',
										['view', 'id' => $model->asn], [
											'class' => 'btn btn-default',
											'title' => 'Visualizar Detalhes',
											'data-pjax' => '0',
										]
									);
									}
							},
                            'start' => function($url,$model) {
								if($model->status == "TO DO" && $model->iqc_received != NULL){
                                return Html::a(
                                    '<span class="fa fa-play"></span>',
                                    ['start', 'id' => $model->asn], [
                                        'class' => 'btn btn-default',
                                        'title' => 'Iniciar Inspeção',
                                        'data-pjax' => '0',
                                        'data' => [
                                            'confirm' => 'Tem certeza que deseja INICIAR a inspeção do item '. $model->item . '?',
                                            'method' => 'post',
                                        ],
                                    ]
                                );
								}
                            },
                            'stop' => function($url,$model) {
								if($model->status == "DOING" && $model->iqc_received != NULL){
                                return Html::a(
                                    '<span class="fa fa-pause"></span>',
                                    ['stop', 'id' => $model->asn], [
                                        'class' => 'btn btn-default',
                                        'title' => 'Finalizar Inspeção',
                                        'data-pjax' => '0',
                                        'data' => [
                                             'confirm' => 'Tem certeza que deseja FINALIZAR a inspeção do item '. $model->item . '?',
                                            'method' => 'post',
                                        ],
                                    ]
                                );
								}
                            },
							
							'edit' => function($url,$model) {
								if($model->iqc_received == NULL){
                                return Html::a(
                                    '<span class="fa fa-edit"></span>',
                                    ['update', 'id' => $model->asn], [
                                        'class' => 'btn btn-default',
                                        'title' => 'Informe quando o lote chegou no IQC',
                                        'data-pjax' => '0',
                                    ]
                                );
								}
                            },
                        ],
                    ],
        ],
    ]); ?>
	</div>
</div>
