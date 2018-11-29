<html>
<head>
    <title>Server Time</title>
    <meta http-equiv="refresh" content="1">
</head>
<body>
<?php
date_default_timezone_set("Asia/Kolkata");
print ("Server Time : " . date("h:i:s a"));
print ("<br>");
print "Server Date : " . date("d-m-y");

?>
</body>
</html>
