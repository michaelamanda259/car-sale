<?php

require_once 'config.php';
session_start();


$id=$_POST['save'];
$sql2="DELETE FROM vehicle 
		WHERE vehicle_idno=$id";
        $r=$conn->query($sql2);
        if($r)
    		echo "<a href='verify_admin.php'>go back</a>";
?>