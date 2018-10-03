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

$sql = "SELECT * FROM scheduled";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='0' cellspacing='10'>

<tr>
<th>Vaccine name</th>
<th>Date scheduled</th>
<th>Hospital</th>
</tr>";
    while($row = $result->fetch_assoc()) {

    	echo "<tr>";
echo "<td>" . $row['vaccinename'] . "</td>";
echo "<td>" . $row['thedate'] . "</td>";

echo "<td>" . $row['hospital'] . "</td>";
echo "</tr>";
    }

        echo "</table>";

} else {
    echo "0 results";
}
$conn->close();
?>