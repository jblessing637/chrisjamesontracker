<?php
session_start();
//read file into array
$lines = file('../data/locations.csv', FILE_IGNORE_NEW_LINES);
unset($lines[$_GET['linenum']]);
$data_string = implode("\n", $lines);
$f = fopen('../data/locations.csv','w');
fwrite($f, $data_string);
fclose($f);
//redirect to list of bands
$SESSION['message'] = array(
		'text'=>'He was never there',
		'type'=> 'success'
		);
header('Location:../?p=list_locations');
?>