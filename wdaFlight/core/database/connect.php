<?php 
$connect_error = 'Server is currently down, sorry for the inconveniences caused.';
mysql_connect('localhost', 'root', '') or die($connect_error);
mysql_select_db('wda') or die($connect_error);


?>