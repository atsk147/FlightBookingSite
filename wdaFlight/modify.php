<?php
include 'core/init.php';
//logged_in_redirect();
protect_page();
admin_protect();

include 'includes/overall/header.php';
?>
		<br>
		
<?php
 if(isset($_POST['search'])) {
	 $query = "SELECT * FROM flight_ticket WHERE ticket_id = $_POST[ticket_id]";
	 $result = mysql_query($query);
	 $person = mysql_fetch_array($result);
}
?>		

<?php
if(empty($_POST) === false) {
	$required_fields = array('ticket_id', 'first_name', 'last_name', 'departing_from', 'depart_date', 'arrival_date', 'depart_time', 'arrival_time');
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
	echo 'flight has been updated successfully!';
}
else {
if (empty($_POST['modify']) === false && empty($errors) === true) {
	mysql_query("UPDATE flight_ticket 
	SET `ticket_id` = '$_POST[ticket_id]', 
	`first_name` = '$_POST[first_name]', 
	`last_name` = '$_POST[last_name]', 
	`departing_from` = '$_POST[departing_from]', 
	`depart_date` = '$_POST[depart_date]', 
	`arrival_date` = '$_POST[arrival_date]', 
	`depart_time` = '$_POST[depart_time]',
	`arrival_time` = '$_POST[arrival_time]' 
	WHERE `ticket_id` = '$_POST[ticket_id]'"); //or die(mysql_error());
	
	
	header('Location: modify.php?success');
	exit();
	
}else if (empty($errors) === false) {
	echo output_errors($errors);
}

 ?>
<form action="" method="post">
		<ul>

		<li>
		Enter the Ticket ID to be modified*:<br>
		<input type="text" name="ticket_id" required placeholder="Enter the Ticket ID">
		</li>
		<li>
		<input type="submit" name="search" value="Search">
		</li>
		</ul>
</form>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<ul>
<li>
<h2>Modify flight</h2>
</li>
<li>
Flight ID*:<br>
<input type="text" name="ticket_id" value="<?php echo $person['ticket_id']; ?>">
</li>
<li>
First name*:<br>
<input type="text" name="first_name" value="<?php echo $person['first_name']; ?>">
</li>
<li>
Last name*:<br>
<input type="text" name="last_name" value="<?php echo $person['last_name']; ?>">
</li>
<li>
Departing from*:<br>
<input type="text" name="departing_from" value="<?php echo $person['departing_from']; ?>"></li>
</li>
<li>
Departure date*:<br>
<input type="text" name="depart_date" value="<?php echo $person['depart_date']; ?>">
</li>

<li>
Arrival date*:<br>
<input type="text" name="arrival_date" value="<?php echo $person['arrival_date']; ?>">
</li>
<li>
Departure time*:<br>
<input type="text" name="depart_time" value="<?php echo $person['depart_time']; ?>">
</li>
<li>
Arrival time*:<br>
<input type="text" name="arrival_time" value="<?php echo $person['arrival_time']; ?>">
</li>

<li>
<input type="submit" name="modify" value="Update flight">
</li>
</ul>
</form>
<?php
}
include 'includes/overall/footer.php'; ?>