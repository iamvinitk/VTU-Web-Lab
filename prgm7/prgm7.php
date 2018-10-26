<html>
<head>
<title>Server Time</title>
<meta http-equiv="refresh" content="1">
</head>
<body>
<?php 	
	date_default_timezone_set("Asia/Kolkata");
	echo ("Server Time : ".date("h:i:s a"));
	echo ("<br>");
	echo "Server Date : ".date("d-m-y");

?>
</body>
</html>
