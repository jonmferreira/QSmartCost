<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CalcZTestes */

$this->title = 'Input Test';
$this->params['breadcrumbs'][] = ['label' => '> Energy Test Input', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-ztestes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
