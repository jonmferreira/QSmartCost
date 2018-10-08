<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Load */

$this->title = 'Create Load';
$this->params['breadcrumbs'][] = ['label' => 'Loads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="load-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
