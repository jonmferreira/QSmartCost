<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\QcostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Q-Cost';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qcost-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Custo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'custo',
			'modelo',
            'data',
            'valor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
