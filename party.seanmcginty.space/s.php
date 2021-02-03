<?php
include_once("config.php");
include_once(GLOBAL_URL."/connect.php");
error_reporting(E_ALL ^ E_NOTICE);  

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //echo "Connected successfully";

$sub_0 = mysqli_real_escape_string($conn, $_POST['auth']);
$sub_1 = mysqli_real_escape_string($conn, $_POST['uname']);
$sub_2 = mysqli_real_escape_string($conn, $_POST['email']);
$sub_3 = mysqli_real_escape_string($conn, $_POST['notes']);
$reg_date = time();


//Check if auth already exists
$sql = "SELECT user FROM invite WHERE auth = '".$sub_0."'";

$result = $conn->query($sql);
if(mysqli_num_rows($result)>=1) {
    $nrows = array();
        if ($result->num_rows > 0) {

            while($r = mysqli_fetch_assoc($result)) {
                $nrows[] = $r;
            }
            if ($nrows[0]['user'] != '') {
                $_SESSION["usedAuth"] = 1;
                header('location: '.SITE_URL);
                exit;
            }
        }
}
//Add into database
$sql = "INSERT INTO users (username, email, question, registered)
VALUES ('$sub_1', '$sub_2', '$sub_3', '$reg_date'); UPDATE invite SET user='$sub_1' WHERE auth='$sub_0'";

if ($conn->multi_query($sql) === TRUE) {
  echo "New record created successfully";
  $_SESSION["createdAccount"] = 1;
  header('location: '.SITE_URL);
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $_SESSION["serverError"] = 1;
  header('location: '.SITE_URL.'?auth='.$sub_0);
  exit;
}

$conn->close();

?>