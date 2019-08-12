<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "internshipdb";

$type = $_POST['type'];
$title = $_POST['title'];
$company = $_POST['company'];
$location = $_POST['location'];
$duration = $_POST['duration'];
$stipend = $_POST['stipend'];
$skills = $_POST['skills'];

$success = "Added Internship!";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO internship (type, title, company, location, duration, stipend, skills)
VALUES ('$type', '$title', '$company', '$location', $duration, $stipend, '$skills')";

if ($conn->query($sql) === TRUE) {
    header('Location: ../student-view/index.php');
}
    // echo "New record created successfully";
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

