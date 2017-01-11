<?php
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';
?>

	
		<h1> 
<img src="bookplane.jpg">
</h1>

<?php
	if(isset($_POST['search'])) {
	 $query = "SELECT * FROM flight_info WHERE flight_id = $_POST[flight_id]";
	 $result = mysql_query($query);
	 $person = mysql_fetch_array($result);
}
?>

<?php
if(empty($_POST) === false) {
	$required_fields = array('ticket_id', 'first_name', 'last_name', 'passport', 'visa', 'country', 'address', 'email', 'departing_from', 'departing_to','depart_date','depart_time', 'arrival_date', 'arrival_time', 'price');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
		
	}
}
?>	
				

		
<?php
if (isset($_GET['success']) && empty($_GET['success'])) {
	
	echo 'Flight has been booked successfully!' ."<br>"; 
	$booking_id = mysql_query("SELECT * FROM flight_ticket WHERE ticket_id =  ticket_id");
	while ($row = mysql_fetch_array($booking_id)) {
	$ticket_id = $row["ticket_id"];
	
	echo ' Your booking ID is: ' . $ticket_id . "<br>";
	}
} else {
if (empty($_POST['book']) === false && empty($errors) === true) {
	
	mysql_query("INSERT INTO flight_ticket (ticket_id, first_name, 
	last_name, passport, visa, country, 
	address, email, departing_from, departing_to, 
	depart_date, depart_time, arrival_date, arrival_time, price) 
	VALUES (NULL, '$_POST[first_name]', 
	'$_POST[last_name]', '$_POST[passport]', '$_POST[visa]', '$_POST[country]', 
	'$_POST[address]', '$_POST[email]', '$_POST[departing_from]', '$_POST[departing_to]', 
	'$_POST[depart_date]', '$_POST[depart_time]', '$_POST[arrival_date]', '$_POST[arrival_time]', '$_POST[price]')");
	
	
	header('Location: booking.php?success');
	exit();
	
}else if (empty($errors) === false) {
	echo output_errors($errors);
}

 ?>
 
<form action="" method="post">
		<ul>

		<li>
		Enter the Flight ID (Flight Search) to book*:<br>
		<input type="text" name="flight_id" required placeholder="Enter the Flight ID">
		</li>
		<li>
		<input type="submit" name="search" value="Search">
		</li>
		</ul>
</form>

<form action="" method="post">
<ul>
<li>
<h2>Book flight</h2>
</li>
<li>
Flight ID*:<br>
<input type="text" name="flight_id" value="<?php echo $person['flight_id']; ?>">
</li>
<li>
First name*:<br>
<input type="text" name="first_name" placeholder="Enter first name">
</li>
<li>
Last name*:<br>
<input type="text" name="last_name" placeholder="Enter last name">
</li>
<li>
Passport*:<br>
<input type="text" name="passport" placeholder="Enter passport">
</li>
<li>
visa*:<br>
<input type="text" name="visa" placeholder="Enter visa no">
</li>
<li>
Country*:<br>
<input type="text" name="country" placeholder="Enter country">
</li>
<li>
Address*:<br>
<input type="text" name="address" placeholder="Enter address">
</li>
<li>
Email*:<br>
<input type="text" name="email" placeholder="Enter email">
</li>
<li>
Departing from*:<br>
<input type="text" name="departing_from" value="<?php echo $person['depart_from']; ?>"></li>
</li>
<li>
Departing to*:<br>
<input type="text" name="departing_to" value="<?php echo $person['depart_to']; ?>"></li>
<li>
Departure date*:<br>
<input type="text" name="depart_date" value="<?php echo $person['depart_date']; ?>">
</li>
<li>
Departure time*:<br>
<input type="text" name="depart_time" value="<?php echo $person['depart_time']; ?>">
</li>
<li>
Arrival date*:<br>
<input type="text" name="arrival_date" value="<?php echo $person['arrival_date']; ?>">
</li>
<li>
Arrival time*:<br>
<input type="text" name="arrival_time" value="<?php echo $person['arrival_time']; ?>">
</li>
<li>
Price*:<br>
<input type="text" name="price" value="<?php echo $person['price']; ?>">
</li>



<li>
<input type="submit" name="book" value="Book flight">
</li>
</ul>
</form>
<?php
}


include 'includes/overall/footer.php'; ?>