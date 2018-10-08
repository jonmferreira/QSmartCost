<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Alert */

$this->title = 'Alerta da Qualidade - IQC F6';
$this->params['breadcrumbs'][] = ['label' => 'Alerts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="../../vendor/jquery/dist/jquery.min.js"></script>
<script src="../../vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="../../vendor/select2-3.5.2/select2.min.js"></script>
<script src="../../vendor/chartjs/Chart.min.js"></script>
<link rel="stylesheet" href="../../vendor/select2-3.5.2/select2.css" />
<link rel="stylesheet" href="../../vendor/select2-bootstrap/select2-bootstrap.css" />

<div class="alert-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>