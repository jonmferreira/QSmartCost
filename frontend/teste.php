<?php

$month = "10";
$year = "2018";

$start_date = "01-".$month."-".$year;
$start_time = strtotime($start_date);

$end_time = strtotime("+1 month", $start_time);

for($i=$start_time; $i<$end_time; $i+=86400)
{
   $list[] = date('Y-m-d-D', $i);
}
$htm= '<table class="table table-bordered" >
			<tr>';


foreach ($list as $data) {
	//print_r(substr($data,-3));
	if(!(substr($data,-3) == 'Sun' || substr($data,-3) == 'Sat')){
		$htm = $htm . '<th>'. substr($data, -6,-4);
		//print_r($data." ");
	}
	
}

$htm = $htm.'</tr></table>';

echo $htm;
