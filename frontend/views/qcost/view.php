<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Qcost */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Q-Cost', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qcost-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'custo',
			'modelo',
            'data',
            'valor',
        ],
    ]) ?>

</div>