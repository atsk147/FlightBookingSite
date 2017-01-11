<head>
    <title>WDA Flights</title>
    <link rel="stylesheet" href="css/screen.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	
		<script language="javascript" type="text/javascript">
	$(document).ready(function(){
    $("#datepicker").datepicker({
        numberOfMonths: 1,
        onSelect: function(selected) {
          $("#datepicker1").datepicker("option","minDate", selected)
        }
    });
    $("#datepicker1").datepicker({ 
        numberOfMonths: 1,
        onSelect: function(selected) {
           $("#datepicker").datepicker("option","maxDate", selected)
        }
    });  
});
</script>
</head>