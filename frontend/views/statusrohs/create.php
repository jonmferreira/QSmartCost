<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\statusrohs */

$this->title = 'Create Statusrohs';
$this->params['breadcrumbs'][] = ['label' => 'Statusrohs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statusrohs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
