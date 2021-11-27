<?php
include("base.php");
$con=conectar();

$id =$_POST['id'];
$fecharegistro =$_POST['fecharegistro'];
$cursos=$_POST['cursos'];
$areatematica=$_POST['areatematica'];
$duracionhrs=$_POST['duracionhrs'];


$sql="INSERT INTO cursosa VALUES('$id','$fecharegistro','$cursos','$areatematica','$duracionhrs')";
$query= mysqli_query($con,$sql);

if($query) 
    {
    Header("Location: ../admin.php");
    }  
    else
    {   
        
    }
?>
