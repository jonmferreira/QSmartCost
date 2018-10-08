<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Loadtest;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LoadtestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Load';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loadtest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<div class="col-md-12">
<div id ="barra2">
<div class="progress" id="myProgress2">
  <div id="myBar2" class="progress-bar progress-bar-info  progress-bar-striped active" role="progressbar" style="width:100%">
    <p id="time2">Amostra 2</p>
  </div>
</div>
</div>
</div>

        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'item',
            'departure_date',
            'receipt_date',
            //'id',
            //'inicio_inspecao',
            // 'fim_inspecao',
             'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php
$result = Yii::$app->db->createCommand('SELECT COUNT(*) FROM loadtest')->queryOne();

?>
