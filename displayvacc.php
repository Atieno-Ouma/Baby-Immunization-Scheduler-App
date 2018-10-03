<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babyimmunization";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM administered  ";
$result = $conn->query($sql);

echo "<table border='0' cellspacing='10'>



<tr>
<th>Vaccine name</th>
<th>Vaccine price</th>
<th>Date scheduled</th>
<th>Date administered</th>
<th>Age</th>
<th>Hospital</th>
<th>Pediatrician</th>
</tr>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


echo "<tr>";
echo "<td>" . $row['vaccinename'] . "</td>";
echo "<td>" . $row['vaccineprice'] . "</td>";
echo "<td>" . $row['datescheduled'] . "</td>";
echo "<td>" . $row['dateadministered'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['hospital'] . "</td>";
echo "<td>" . $row['pediatrician'] . "</td>";
echo "</tr>";

        


    }


    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>