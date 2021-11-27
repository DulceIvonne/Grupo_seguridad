<?php
include("base.php");
$con=conectar();

$id =$_POST['id'];
$fecharegistro =$_POST['fecharegistro'];
$cursos=$_POST['cursos'];
$areatematica=$_POST['areatematica'];
$duracionhrs=$_POST['duracionhrs'];


$sql="UPDATE cursosa SET  id='$id',fecharegistro='$fecharegistro',cursos='$cursos','areatematica'=$areatematica,'duracionhrs'=$duracionhrs WHERE id='$id'";
$query= mysqli_query($con,$sql);

if($query) 
    {
    Header("Location: ../admin.php");
    }  
    else
    {   
        
    }
?>