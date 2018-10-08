<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\QualidadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Digital History Card';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="qualidade-index">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h1 align="center"><?= Html::encode($this->title) ?></h1>
        </div>
        <br>
        <h2>Peças Cadastradas</h2>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'partNumber',
                    'partName',
                    // 'status',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        <p align="center">
            <?= Html::a('Cadastrar Peça', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
        </p><br>

    </div>
</div>
