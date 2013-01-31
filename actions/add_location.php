<?php session_start();?>
<?php
//validate that each piece of info was provided
if($_POST['date'] != '' && $_POST['time'] != '' && $_POST['location']!=''){
	//add this band to the csv file
	//1 open file for writing
	$f = fopen('../data/locations.csv','a');
	//2 write the new bands info to the file
	fwrite($f, "\n{$_POST['date']},{$_POST['time']},{$_POST['location']}");
	//3 close file
	fclose($f);
	//redirect to list of bands
	header('Location:../?p=list_locations');
}else {
	//store submitted data into session data
	$_SESSION['POST']=$_POST;
	//store error message in session data
	$SESSION['message']=array(
			'text'=>'Where\'s the stuff, man?',
			'type'=> 'success'
	);
	//redirect to form
	header('Location:../?p=form_add_location');
}
?>