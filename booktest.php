<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_sale";
$id=$_SESSION['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['BookTestDrive']))
{
    $sql = "INSERT INTO vehicle 
    (vehicle_comp,vehicle_model,vehicle_fueltype,vehicle_price,vehicle_type,verified,vehicle_img_dir)
    VALUES ('".$_POST['brand']."',
    '".$_POST['model']."',
    '".$_POST['fuel']."',
    '".$_POST['price']."',
    '$new','$verified',
    '$file')";

//$image=$_POST['image'];
  //  $file = addslashes(file_get_contents($_FILES['$image']["tmp_name"]));  
    //$sql2 = "INSERT INTO seller(posted_img) VALUES ('$file')";  
      
   if ($conn->query($sql)  === TRUE) {
        echo '<script>alert("Added new car successfully..")</script>';  

        //header()
  } else {
      echo '<script>alert("ERROR")' . $sql .  $conn->error;
        //echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
}

?>
