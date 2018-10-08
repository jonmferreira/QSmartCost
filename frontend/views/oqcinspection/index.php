<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OcqinspectionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'OQC Inspection';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="oqcinspection-index">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h1 align="center"><?= Html::encode($this->title) ?></h1>
        </div>
        <br>
        <h2>Modelos Cadastrados</h2>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'model',
                'sufix',
                'name',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
        <p align="center">
            <?= Html::a('Cadastrar Modelo', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
        </p><br>

    </div>
</div>
