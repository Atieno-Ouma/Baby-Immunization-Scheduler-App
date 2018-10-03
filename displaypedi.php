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

$sql = "SELECT * FROM pediatrician";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
     echo "<table border='0' cellspacing='10'>

<tr>
<th>pediatrician name</th>
<th>Hospital</th>
<th>Date visited</th>
</tr>";
    while($row = $result->fetch_assoc()) {

	echo "<tr>";
echo "<td>" . $row['pediname'] . "</td>";
echo "<td>" . $row['hospital'] . "</td>";

echo "<td>" . $row['datevisited'] . "</td>";
echo "</tr>";
    }

        echo "</table>";

        
} else {
    echo "0 results";
}
$conn->close();
?>

