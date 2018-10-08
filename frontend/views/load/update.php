<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Load */

$this->title = $model->item;
$this->params['breadcrumbs'][] = ['label' => 'Loads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->asn, 'url' => ['view', 'id' => $model->asn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<br>

<div class="load-update">
	<div class="box box-danger">
        <div class="box-header with-border">
			<h1><?= Html::encode($this->title) ?></h1>
		</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
