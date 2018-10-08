<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Loadtest */

$this->title = 'Create Loadtest';
$this->params['breadcrumbs'][] = ['label' => 'Loadtests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loadtest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
