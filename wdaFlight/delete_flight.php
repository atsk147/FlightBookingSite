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
	 $person = mysql_fetch_array($result);
}
?>

<?php
if(empty($_POST) === false) {
	$required_fields = array('ticket_id', 'first_name', 'last_name', 'departing_from', 'depart_date', 'depart_time');
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
	echo 'flight has been deleted successfully!';
}
else {
if (empty($_POST['delete']) === false && empty($errors) === true) {
	mysql_query("DELETE FROM `flight_ticket` WHERE `ticket_id` = '$_POST[ticket_id]'"); //or die(mysql_error());
	header('Location: delete_flight.php?success');
	exit();
	
}else if (empty($errors) === false) {
	echo output_errors($errors);
}

 ?>
 
<form action="" method="post">
		<ul>

		<li>
		Enter the Flight ID to be deleted*:<br>
		<input type="text" name="ticket_id" required placeholder="Enter the Flight ID">
		</li>
		<li>
		<input type="submit" name="search" value="Search">
		</li>
		</ul>
</form>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<ul>
<li>
<h2>Delete flight</h2>
</li>
<li>
Ticket ID*:<br>
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
<li>
Departure date*:<br>
<input type="text" name="depart_date" value="<?php echo $person['depart_date']; ?>">
</li>
<li>
Departure time*:<br>
<input type="text" name="depart_time" value="<?php echo $person['depart_time']; ?>">
</li>

<li>
<input type="submit" name="delete" value="Delete flight">
</li>
</ul>
</form>
<?php
}
include 'includes/overall/footer.php'; ?>