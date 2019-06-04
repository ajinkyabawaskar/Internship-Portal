<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Internship Portal</title>
    <link href="../faculty-view/images/student.png" rel="icon">
    <!-- Main css -->
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
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
?>

<div class="navbar fixed-top "> 
  <ul class="nav navbar-nav justify-content-start flex-row d-flex">
   
    <li> <p href="#" class= "nav-link nav-text"><img src = "../faculty-view/images/student.png" class = "nav-text nav-img">Internship Portal</p></li>
  </ul>
  <a href = "../login/login.php" class="nav-link">Login</a>
</div>
</div>


<div class= "container">
    <!-- <div class="card-container"> -->
        <?php
        $sql = "SELECT * FROM internship";
        $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    //card-id
                    //  echo '<div class="card-id">';
                    //     echo "id: ". $row["id"];
                    //  echo '</div>'; 
                     //card-type
                     echo '<div class="card-type">';
                        if($row["type"] === "ino"){
                          echo  "In Office";
                        }
                        if($row["type"] === "wfh"){
                          echo  "Work From Home";
                        }
                      echo '</div>';

                      //card-title1
                      echo '<div class="card-title1">';
                        echo $row["title"];
                      echo '</div>';


                      echo '<div class="card-title2 card-title3">';
                          //card-company
                          echo '<div class="card-company">';
                            echo $row["company"];
                          echo '</div>';

                          //card-duration
                          echo '<div class="card-duration">';
                            echo $row["duration"];
                            if($row["duration"] == 1) {
                            echo " month";
                            }
                            if($row["duration"] > 1) {
                              echo " months";
                            }
                          echo '</div>';
                          
                      echo '</div>';  
                      echo '<div class="card-title4">';
                            echo '<div class="card-title2 align-row">';
                            //card-location
                                echo '<div class="card-location">';
                                  echo $row["location"];
                                echo '</div>';
                             //card-skills
                              echo '<div class="card-skills">';
                                echo $row["skills"];
                              echo '</div>';
                            echo '</div>';


                            echo '<div class="card-title2">';
                                if($row["stipend"]>1){
                                  //card-stipend
                                  echo '<div class="card-stipend">';
                                    echo "₹". $row["stipend"];
                                    echo '<span class="card-stipend-small">';
                                    echo " /Month";
                                    echo '</span>';
                                  echo '</div>';
                                }
                            echo '</div>';
                      echo '</div>';

                    echo '</div>';
            }
            }else {
                echo '<div class="card">';
                echo "No Internships";  
                echo '</div>';
            }
        mysqli_close($conn);
        ?>
    <!-- </div> -->
</div>
</html>
