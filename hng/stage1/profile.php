<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title>Profile | Olaitan </title>
	<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
 
	<header>
		<h1>HNG 4.0</h1>
	</header>
	
	<p class="welcome"> Welcome </p>

	<?php
		date_default_timezone_set("Africa/Lagos");
		$date= getdate();
		$time = date("g.iA", time());
		$time .= ', '.$date["weekday"];
	?>

	<p class="time">Time: <?php echo $time; ?></p>

</body>
</html>