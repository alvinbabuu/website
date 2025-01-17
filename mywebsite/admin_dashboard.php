<?php
// Admin login check
$admin_password = "admin123"; // Simple password for the example


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, dob FROM users";
$result = $conn->query($sql);

echo "<h1>Admin Dashboard - User Data</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Date of Birth</th>
        </tr>";

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["dob"] . "</td> <!-- Display Date of Birth -->
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
