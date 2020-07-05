<?php

require_once 'config.php';
session_start();


$id=$_POST['save'];

$sql1 = "UPDATE vehicle
    	SET verified='yes'
    	WHERE vehicle_idno=$id ";
    	$result1 = $conn->query($sql1);
    	if($result1)
    		echo "<a href='verify_admin.php'>go back</a>";
    	?>