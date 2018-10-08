<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lar */

$this->title = 'Create Lar';
$this->params['breadcrumbs'][] = ['label' => 'Lars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
