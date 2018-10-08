<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Qcost */

$this->title = 'Cadastrar Custo';
$this->params['breadcrumbs'][] = ['label' => 'Q-cost', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qcost-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
