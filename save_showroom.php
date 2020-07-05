<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_sale";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['showroom_regno']))
{
    $sql = "INSERT INTO showroom(showroom_regno,
    showroom_nm,
    showroom_mobno,
    showroom_email)
    VALUES('".$_POST['showroom_regno']."',
    '".$_POST['showroom_nm']."',
    '".$_POST['showroom_mobno']."',
    '".$_POST['showroom_email']."')";


        if ($conn->query($sql)  === TRUE) {
        echo '<script>alert("Posted showroom successfully..")</script>';  

        //header()
  } else {
      echo '<script>alert("ERROR")' . $sql .  $conn->error;
        //echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
}

?>






