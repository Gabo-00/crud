<?php 

include_once("connections/connection.php");

$con = con();
$id = $_GET['id_number'];

    $sql2 ="DELETE FROM info WHERE id='$id' " ;
    $con->query($sql2) or die($con->error);
    
    echo header("Location:index.php");
