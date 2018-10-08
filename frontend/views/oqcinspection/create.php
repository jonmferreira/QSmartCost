<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Oqcinspection */

$this->title = 'Cadastrar Modelo';
$this->params['breadcrumbs'][] = ['label' => 'OQC Inspection', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oqcinspection-create">
    <br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
