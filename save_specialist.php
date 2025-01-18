<?php
include("conection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $E_mail = $_POST['E_mail'];
    $Phone_number = $_POST['Phone_number'];

    $sql = "INSERT INTO specialist (name, age, gender,E_mail,Phone_number) VALUES ('$name', '$age', '$gender','$E_mail','$Phone_number')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
