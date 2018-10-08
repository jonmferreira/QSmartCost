<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'LAR';
$this->params['breadcrumbs'][] = $this->title;


?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	text-align: center;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:hover{background-color:#f5f5f5}
</style>
<div class="lar-index">
<br>
	<div class="box box-danger">
<h2>Grade</h2>
<?php
$connection = Yii::$app->getDb();
$command = $connection->createCommand("
    SELECT
(SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-01-01' AND '2017-01-31') AS JAN,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-02-01' AND '2017-02-28') AS FEV,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-03-01' AND '2017-03-31') AS MAR,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-04-01' AND '2017-04-30') AS ABR,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-05-01' AND '2017-05-31') AS MAI,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-06-01' AND '2017-06-30') AS JUN,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-07-01' AND '2017-07-31') AS JUL,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-08-01' AND '2017-08-31') AS AGO,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-09-01' AND '2017-09-30') AS 'SET',
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-10-01' AND '2017-10-31') AS 'OUT',
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-11-01' AND '2017-11-30') AS NOV,
    (SELECT COUNT(*) FROM lar 
    WHERE receipt_date BETWEEN '2017-12-01' AND '2017-12-31') AS DEZ");

$result = $command->queryAll();
?>
<table>
  <tr>
    <th>Supplier Name</th>
    <th colspan>JAN</th>
    <th colspan>FEB</th>
    <th colspan>MAR</th>
    <th colspan>APR</th>
    <th colspan>MAY</th>
    <th colspan>JUN</th>
    <th colspan>JUL</th>
    <th colspan>AUG</th>
    <th colspan>SET</th>
    <th colspan>OUT</th>
    <th colspan>NOV</th>
    <th colspan>DEC</th>
  </tr>

	<tr> 
		<td>Klabin</td>
		<td>Klabin</td>
	</tr>
	<tr> 
		<td>RS Industria</td>
	</tr>
	<tr> 
		<td>VM Etiquetas</td>
	</tr>
	<tr> 
		<td>Gráfica Zilo</td>
	</tr>
	<tr> 
		<td>Prestige</td>
	</tr>
	<tr> 
		<td>Knauf</td>
	</tr>
	<tr> 
		<td>Tomatec</td>
	</tr>
	<tr> 
		<td>I-Sheng</td>
	</tr>
	<tr> 
		<td>I. Paper</td>
	</tr>
	<tr> 
		<td>Colorgraf</td>
	</tr>
	<tr> 
		<td>Weg</td>
	</tr>
	<tr> 
		<td>TSE</td>
	</tr>
	<tr> 
		<td>DP Industria</td>
	</tr>
	<tr> 
		<td>Tutiplast</td>
	</tr>
	<tr> 
		<td>Label Press</td>
	</tr>
	<tr> 
		<td>Sato</td>
	</tr>
	<tr> 
		<td>PAM</td>
	</tr>
  
</table>
	</div>
</div>
