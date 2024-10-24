<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $number = $_POST["number"];
    $tollPlaza = $_POST["tollPlaza"];
    $numberPlate = $_POST["numberPlate"];
    $vehicleType = $_POST["vehicleType"];

    // Validate and sanitize input data if needed
    $dbHost = "localhost";
    $dbUser = "webdev";
    $dbPass = "oyshee0024!";
    $dbName = "tollinfo";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database (replace with your table and column names)
    $sql = "INSERT INTO Informations (name, number, toll_plaza, number_plate, vehicle_type) 
            VALUES ('$name', '$number', '$tollPlaza', '$numberPlate', '$vehicleType')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


    // Close the database connection
    $conn->close();
}
?>