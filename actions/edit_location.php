<?php 
session_start();
//read file into array
if($_POST['date'] != '' && $_POST['time'] != '' && $_POST['location']!=''){
$lines = file('../data/locations.csv', FILE_IGNORE_NEW_LINES);
//replace line with new values
$lines[$_POST['linenum']]="{$_POST['date']},{$_POST['time']},{$_POST['location']}";
//CREATE string to write to the file
$data_string = implode("\n", $lines);
//write the string to the file, overwriting current contents
$f = fopen('../data/locations.csv','w');
fwrite($f, $data_string);
fclose($f);
//redirect to list of bands
$_SESSION['message']=array(
		'text'=>'Chris\'s Location has been altered forevermore.',
		'type'=> 'info'
		);
header('Location:../?p=list_locations');
}
else {
	//store submitted data into session data
	$_SESSION['POST']=$_POST;
	//store error message in session data
	$_SESSION['message']=array(
			'text'=>'Where\'s the stuff, man?',
			'type'=> 'alert'
	);
	//redirect to form
	header('Location:../?p=list_locations');
}
?>