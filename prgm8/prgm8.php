<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Calculator</title>
</head>
<body>
<form method="post" action="prgm8.php">
    <h2>8a. Simple Calculator</h2>
    <label>Enter a : </label>
    <label>
        <input type="text" name="v1" value="0"/>
    </label>
    <br>
    <label>Enter b : </label>
    <label>
        <input type="text" name="v2" value="0"/>
    </label>
    <br>
    <input type="submit" value="CALCULATE"/><br>
    <?php
    if (isset($_POST["v1"]))
        $a = $_POST["v1"];
    if (isset($_POST["v2"]))
        $b = $_POST["v2"];


    if (isset($_POST["v1"]) and isset($_POST["v2"])) {
        print "Addition : " . ($a) . " + " . ($b) . " = " . ($a + $b) . "<br>";
        print "Subtraction : " . ($a) . " - " . ($b) . " = " . ($a - $b) . "<br>";
        print "Multiplication : " . ($a) . " * " . ($b) . " = " . ($a * $b) . "<br>";
        print "Division : " . ($a) . " / " . ($b) . " = " . ($a / $b) . "<br>";
    }
    ?>

    <h2>Matrix Operations</h2>
</form>
</body>
</html>

<?php
$a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
$b = array(array(9, 8, 7), array(6, 5, 4), array(3, 2, 1));

$row = count($a);
$col = count($a[0]);
print "<h4>The two matrices are:</h4>";
print "<pre>A          B<br>";
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        print ($a[$i][$j]) . " ";
    }
    print "     ";
    for ($j = 0; $j < $col; $j++) {
        print ($b[$i][$j]) . " ";
    }

    print "<br>";
}
print "</pre>";

print "<h2>8b. Transpose of a Matrix</h2>";
print "<pre>A<sup>t</sup>         B<sup>t</sup><br>";
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        print ($a[$j][$i]) . " ";
    }
    print "     ";
    for ($j = 0; $j < $col; $j++) {
        print ($b[$j][$i]) . " ";
    }

    print "<br>";
}
print "</pre><br>";

print "<h2>8c. Multiplication of two Matrices</h2>";
print "<pre>(AxB)<br>";
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $sum = 0;
        for ($k = 0; $k < $col; $k++) {
            $sum = $sum + ($a[$i][$k] * $b[$k][$j]);
        }
        print $sum . " ";
    }
    print "<br>";
}
print "</pre><br>";

print "<h2>8d. Addition of two Matrices</h2>";
print "<pre>(A+B)<br>";
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        print ($a[$i][$j] + $b[$i][$j]) . " ";
    }
    print "<br>";
}
print "</pre><br>";
?>
