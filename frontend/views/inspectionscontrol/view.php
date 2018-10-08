<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Inspectionscontrol */

$this->title = $model->item;
$this->params['breadcrumbs'][] = ['label' => 'Inspections Control', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspectionscontrol-view">

    <h1><?= Html::encode($this->title) ?></h1>

	<!--
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->item], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->item], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	-->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'item',
            'item_name',
            'method',
            'count',
			'count_date',
            'persist',
            'reason',
            'fornecedor',
        ],
    ]) ?>

</div>
