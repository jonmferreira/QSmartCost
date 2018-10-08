<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Loadtest */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Loadtests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loadtest-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'item',
            'departure_date',
            'receipt_date',
            //'id',
            'inicio_inspecao',
            'fim_inspecao',
            'status',
        ],
    ]) ?>

<?php
if ($model->inicio_inspecao == NULL){
?>
<?= Html::a('Iniciar Inspecao', ['start', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
<?php
}else if ($model->fim_inspecao == NULL){
?>
<?= Html::a('Finalizar Inspecao', ['stop', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>
<?php
}else{

$data1 = new DateTime($model->fim_inspecao);
$data2 = new DateTime($model->inicio_inspecao);

$intervalo = $data1->diff( $data2 );
echo "<br>";
echo "Inspecao feita em {$intervalo->h} horas {$intervalo->i} minutos e {$intervalo->s} segundos"; 
}
?>

</div>
