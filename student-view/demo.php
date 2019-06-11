<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internshipdb";
$count = 0;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
        $sql = "SELECT * FROM internship WHERE skills LIKE '%hot%' ";
        $result = mysqli_query($conn, $sql);

        echo "works";

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo '<br/>';
                echo $row["id"];
                echo '<br/>';
                echo $row["type"];
                echo '<br/>';
                echo $row["title"];
                echo '<br/>';
                echo $row["company"];
                echo '<br/>';
                echo $row["location"];
                echo '<br/>';
                echo $row["duration"];
                echo '<br/>';
                echo $row["stipend"];
                echo '<br/>';
                echo $row["skills"];
                echo '<br/>';
                echo '<br/>';
            }
        }
?>