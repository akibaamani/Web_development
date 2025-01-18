<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_management_system";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    if ($result->num_rows > 0) {
        echo "<specialist>";
        echo "<tr><th>name</th><th>age</th><th>gender</th><th>E_mail</th><th>phone_number</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['E_mail'] . "</td>";
            echo "<td>" . $row['phone_number'] . "</td>";  

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No records found.</p>";
    }

    $conn->close();
    ?>