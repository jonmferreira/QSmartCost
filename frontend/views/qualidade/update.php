<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Qualidade */

$this->title = 'Editar Peça: ' . $model->partNumber;
$this->params['breadcrumbs'][] = ['label' => 'Peças', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->partNumber, 'url' => ['view', 'id' => $model->partNumber]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="qualidade-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
