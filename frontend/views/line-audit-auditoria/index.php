<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LineAuditAuditoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Line Audit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="line-audit-auditoria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nova Auditoria', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Gerenciar Checklist', ['line-audit-checklist/index'], ['class' => 'btn btn-warning']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data',
            'line',
            'auditor',

			['class' => 'yii\grid\ActionColumn',                        
						'template' => '{view} {start} {stop} {edit}',                        
                        'buttons' => [
							'view' => function($url,$model) {
									return Html::a(
										'<span class="fa fa-check-square-o"></span>',
										['line-audit-results/index', 'id_auditoria' => $model->id], [
											'class' => 'btn btn-default',
											'title' => 'Iniciar Auditoria',
											'data-pjax' => '0',
										]
									);
							},
                            
                        ],
            ],
        ],
    ]); ?>
</div>
