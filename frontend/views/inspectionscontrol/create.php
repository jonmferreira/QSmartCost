<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Inspectionscontrol */

$this->title = 'Create Inspectionscontrol';
$this->params['breadcrumbs'][] = ['label' => 'Inspectionscontrols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inspectionscontrol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
