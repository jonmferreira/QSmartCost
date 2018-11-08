<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Item */


$this->title = 'Update: ' . $model->nome;
//$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<br>
<div class="item-update">

    <div class="box box-danger container">
        <div class="box-header with-border">
        <br>
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

	    <?= $this->render('_form_update', [
	        'model' => $model,
	    ]) ?>
	</div>

</div>
