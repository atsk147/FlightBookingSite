<?php
include 'core/init.php';
//logged_in_redirect();
protect_page();

include 'includes/overall/header.php';
?>

		<br>
		
<?php
	if(isset($_POST['search'])) {
	 $query = "SELECT * FROM flight_ticket WHERE ticket_id = $_POST[ticket_id]";
	 $result = mysql_query($query);
	 
	while ($row = mysql_fetch_array($result)) {
	$ticket_id = $row["ticket_id"];
	$first_name = $row["first_name"];
	$last_name = $row["last_name"];
	$passport = $row["passport"];
	$visa = $row["visa"];
	$country = $row["country"];
	$address = $row["address"];
	$email = $row["email"];
	$departing_from = $row["departing_from"];
	$departing_to = $row["departing_to"];
	$depart_date = $row["depart_date"];
	$depart_time = $row["depart_time"];
	$arrival_date = $row["arrival_date"];
	$arrival_time = $row["arrival_time"];
	$price = $row["price"];
	
	echo "Booking Summary for Flight Ticket ID : " . "$_POST[ticket_id]" . "<br>";
	echo "Ticket ID: " . "$_POST[ticket_id]" . "<br>";
	echo "First Name: " . $first_name . "<br>";
	echo "Last Name: " . $last_name . "<br>";
	echo "Passport: " . $passport . "<br>";
	echo "Visa: " . $visa . "<br>";
	echo "Country: " . $country . "<br>";
	echo "Address: " . $address . "<br>";
	echo "Email: " . $email . "<br>";
	echo "Departing from: " . $departing_from . "<br>";
	echo "Departing to: " . $departing_to . "<br>";
	echo "Departure date: " . $depart_date . "<br>";
	echo "Departure time: " . $depart_time . "<br>";
	echo "Arrival date: " . $arrival_date . "<br>";
	echo "Arrival time: " . $arrival_time . "<br>";
	echo "Price: " . $price . "<br>";
	}
	 
}
?>
 
<form action="" method="post">
		<ul>

		<li>
		Enter the Booking ID*:<br>
		<input type="text" name="ticket_id" required placeholder="Enter the Booking ID">
		</li>
		<li>
		<input type="submit" name="search" value="Check Booking">
		</li>
		</ul>
</form>


<?php

include 'includes/overall/footer.php'; ?>