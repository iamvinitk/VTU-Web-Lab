<?php
$state_string = "Mississippi Alabama Texas Massachusetts Kansas";
$state_array = explode(' ', $state_string);
$state_list = [];

print("Original String <br>");
foreach ($state_array as $item => $value) {
    print($item . "-->" . $value . "<br>");
}

foreach ($state_array as $item => $value) {
    if (preg_match("/xas$/", $value)) {
        $state_list[0] = $value;
    }
}
foreach ($state_array as $item => $value) {
    if (preg_match("/k.*s$/i", $value)) {
        $state_list[1] = $value;
    }
}
foreach ($state_array as $item => $value) {
    if (preg_match("/^M.*s$/", $value)) {
        $state_list[2] = $value;
    }
}
foreach ($state_array as $item => $value) {
    if (preg_match("/a$/i", $value)) {
        $state_list[3] = $value;
    }
}
print("<br><br>");
foreach ($state_list as $item => $value) {
    print($item . "-->" . $value . "<br>");
}
?>