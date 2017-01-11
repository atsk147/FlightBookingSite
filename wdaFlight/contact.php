<?php
include 'core/init.php';
include 'includes/overall/header.php';?>
<?php
if(isset($_POST)){
if (empty($_POST) === false) {
	
	
	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$text	= $_POST['text'];

	mysql_query("INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$text')");
	}
}
else{
	echo "something wrong!";
}

?>
<h2>Contacts us</h2>
<div id="maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3983.895966023482!2d101.7276531!3d3.1222092!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc3612b114c60b%3A0x97249ba0854218dc!2sMenara+Pgrm%2C+8%2C+Jalan+Pudu+Hulu%2C+Taman+Pertama%2C+55300+Kuala+Lumpur%2C+Wilayah+Persekutuan+Kuala+Lumpur%2C+Malaysia!5e0!3m2!1sen!2s!4v1476905822113" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php include 'includes/overall/footer.php';?>