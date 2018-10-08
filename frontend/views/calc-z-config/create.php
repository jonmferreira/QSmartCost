<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CalcZConfig */

$this->title = 'Model Register';
$this->params['breadcrumbs'][] = ['label' => 'Energy Test Register', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-zconfig-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
