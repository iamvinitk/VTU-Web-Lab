<html lang="en">
<body>
<style>
    table, td, th {
        border: 1px dotted black;
        width: 33%;
        text-align: center;
        border-collapse: separate;
        background-color: lightblue;
    }

    table {
        margin: auto;
    }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "student_db";
$a = [];
$b = [];
$c = [];

$conn = mysqli_connect($servername, $username, $password, $db_name);
if ($conn) {
    print("SUCCESS");
} else {
    die("Connection failed" . $conn->connect_error);
}

$sql = "SELECT * from student_table";
$result = $conn->query($sql);
print "<br>";
print "<div style=\"text-align: center;\">Before Sorting</div>";
print "<table border = 2>";
print "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        print "<tr>";
        print "<td>" . $row["usn"] . "</td>";
        print "<td>" . $row["name"] . "</td>";
        print "<td>" . $row["address"] . "</td>";
        array_push($a, $row["usn"]);
        array_push($b, $row["name"]);
        array_push($c, $row["address"]);
    }
} else {
    print "Table is empty";
}
print "</table><br><br>";
$n = count($a);
for ($i = 0; $i < $n; $i++) {
    for ($j = $i+1; $j < $n; $j++) {
        if ($a[$i] > $a[$j]) {
            $temp = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $temp;
            $temp = $b[$i];
            $b[$i] = $b[$j];
            $b[$j] = $temp;
            $temp = $c[$i];
            $c[$i] = $c[$j];
            $c[$j] = $temp;
        }
    }
}
print "<div style=\"text-align: center;\">After Sorting</div>";
print "<table border = 2>";
print "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
for ($i = 0; $i < $n; $i++) {
    print "<tr>";
    print "<td>" . $a[$i] . "</td>";
    print "<td>" . $b[$i] . "</td>";
    print "<td>" . $c[$i] . "</td></tr>";
}
print "</table>";
?>
</body>
</html>

