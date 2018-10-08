<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Alert */

$this->title = 'Alerta da Qualidade - IQC F6';
$this->params['breadcrumbs'][] = $this->title;
?>

<script src="../../frontend/web/js/Chart.min.js"></script>

<input type="text" id="txtHint" onclick="cambio()">
<p id="txtHint2">teste</p>
<canvas id="myChart" height="40vh" width="80vw"></canvas>

<script>
	
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["JAN", "FEV", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OUT", "NOV", "DEZ"],
        datasets: [{
            label: ['Inspetor A', 'Inspetor B', 'Inspetor C'],
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

function cambio(){
	var dados = jQuery(this).serialize();
		$.ajax({
			type: "POST",
			url: "http://localhost:85/QSmart/advanced/frontend/web/json/teste.php",
			data: dados,
			dataType: "json",
			success: function(result){
				var resultado = JSON.parse(result);
				alert(resultado);
			}
		});		
}

function showHint() {
  var xhttp;
  
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint2").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost\QSmart\advanced\frontend\web\json", true);
  xhttp.send();   
}
</script>