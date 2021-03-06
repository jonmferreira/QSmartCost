<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CalcZConfig */

$this->title = $model->modelo;
$this->params['breadcrumbs'][] = ['label' => 'Cálculo Z - Parâmetros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-zconfig-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->modelo], ['class' => 'btn btn-primary']) ?>
        <!--<?= Html::a('Apagar', ['delete', 'id' => $model->modelo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'modelo',
            'valor_capacidade',
            'valor_eer',
            'valor_power',
        ],
    ]) ?>

</div>
