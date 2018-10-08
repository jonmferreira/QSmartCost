<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Qualidade */

$this->title = 'Cadastrar Peça';
$this->params['breadcrumbs'][] = ['label' => 'Digital History Card', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qualidade-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
