<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CalcZTestesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Energy Tests';
$this->params['breadcrumbs'][] = ['label' => 'Energy Test Monitoring', 'url' => ['zcalc']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="box">
<div class="calc-ztestes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Teste', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
			'data',
            'modelo',
            'valor_capacidade',
            'valor_eer',
            'valor_power',
            'inspetor',
        ],
    ]); ?>
</div>
</div>
