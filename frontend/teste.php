<?php

$input = $_POST['month'];
$month = substr($input, 0,-3);
$year = substr($input, 4);

$array = [
	"JAN" => "01","FEV" => "02","MAR"=>"03","ABR" => "04","MAI" => "05","JUN"=>"06","JUL"=>"07","AGO"=>"08","SET"=>"09","OUT"=>"10",
	"NOV" => "11","DEZ"=>"12"
];


$start_date = "01-".$array[$month]."-20".$year;
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
		$htm = $htm . '<th>'. substr($data, -6,-4) .'</th>';
		//print_r($data." ");
	}
	
}

$htm = $htm.'</tr></table>';

echo $htm;

//echo (substr($input, 0,-3));
//echo (substr($input, 4));


