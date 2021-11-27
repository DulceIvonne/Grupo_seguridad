<?php

include("base.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM cursosa  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../admin.php");
    }
?>