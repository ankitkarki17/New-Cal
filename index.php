<html>
<head>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php echo "<b><u><h4>Today's Date is : </b></u><h4>" . date("Y/m/d") . "<br>";?>
		<?php echo "<b><u><h4>The Exact Regular Time is : </b></u><h4>" . date("h:i:sa");?>
	<br>
	<br>
<?php
include 'calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
</body>
</html> 