<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
include 'connect.php';
?>

<div>
					<img src="searchplane.jpg">
					</div>

<?php //include 'search_panel.php'; ?>				

<?php

	
	if($_POST['depart'] == '1') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Penang'");
	} elseif  ($_POST['depart'] == '2') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Langkawi'");
	} elseif  ($_POST['depart'] == '3') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Kuala Lumpur'");
	} elseif  ($_POST['depart'] == '4') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Kuantan'");
	} elseif  ($_POST['depart'] == '5') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Johor Bahru'");
	} elseif  ($_POST['depart'] == '6') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Pangkor'");
	} elseif  ($_POST['depart'] == '7') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Kota Kinabalu'");
	} elseif  ($_POST['depart'] == '8') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Miri'");
	} elseif  ($_POST['depart'] == '9') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Sibu'");
	} elseif  ($_POST['depart'] == '10') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Melacca'");
	} elseif  ($_POST['depart'] == '11') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Redang'");
	} elseif  ($_POST['depart'] == '12') {
		$query = mysql_query("SELECT * FROM flight_info WHERE depart_from='Kuching'");
	} else {
		echo 'Please select a location.';
	}
	
	while ($row = mysql_fetch_array($query)) {
	$flight_id = $row["flight_id"];
	$plane = $row["plane"];
	$depart_from = $row["depart_from"];
	$depart_to = $row["depart_to"];
	$depart_date = $row["depart_date"];
	$depart_time = $row["depart_time"];
	$arrival_date = $row["arrival_date"];
	$arrival_time = $row["arrival_time"];
	$price = $row["price"];
	
	echo "Available flights for " . $depart_from . ":". "<br>";
	echo "Flight ID: " . $flight_id . " (Note: Please remember in order to book flight.)" . "<br>";
	echo "To: " . $depart_to . "<br>";
	echo "Depart Date " . $depart_date . "<br>";
	echo "Depart Time " . $depart_time. "<br>";
	echo "Arrival Time " . $arrival_time. "<br>";
	echo "price: RM " . $price. "<br>";
	echo "<br>";
}

?>

	
	
	




	
	
	


