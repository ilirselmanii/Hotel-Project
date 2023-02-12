<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hotel ADMIN</title>
  
  
     
      <link rel="stylesheet" href="css/style.css">

  
</head>