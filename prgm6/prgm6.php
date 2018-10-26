<?php 
	
$count = file_get_contents('c.txt');

file_put_contents('c.txt', $count + 1);

echo('No. of visitors : '.$count);
?>
