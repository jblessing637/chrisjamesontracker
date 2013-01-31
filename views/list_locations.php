<h2>Chris Jameson's Locations</h2>
<table class="table table-striped">
<thead>
<tr>
<th>Subject</th>
<th>Date</th>
<th>Time</th>
<th>Locations</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php 
//read all lines of csv file into an array
$lines=file('data/locations.csv', FILE_IGNORE_NEW_LINES);
//counter variable for line number
$i=0;
//iterate over the array of lines
foreach($lines as $line) {
	$parts=explode(',',$line);
	$date = $parts[0];
	$time=$parts[1];
	$location=$parts[2];
	echo '<tr>';
	echo "<td>Chris Jameson</td>";
	echo "<td>$date</td>";
	echo "<td>$time</td>";
	echo "<td>$location</td>";
	echo "<td><a href=\"./?p=form_edit_location&location=$i\" class=\"btn btn-warning\"><i class=\"icon-wrench icon-white\"></a></td><td><a href=\"actions/delete_location.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></a></td>";
	echo'</tr>';
	$i++; //increment line number
}
?>
</tbody>
</table>