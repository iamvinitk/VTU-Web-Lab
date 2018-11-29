<?php

$count = file_get_contents('c.txt');

file_put_contents('c.txt', $count + 1);

print('No. of visitors : ' . $count);
?>
