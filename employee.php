<?php
   include_once('db.php'); 
   
   $name = $_POST['firstname'];
  
   $email = $_POST['email'];
   

    $mysqli -> query("INSERT INTO employee (name, email) VALUES ('$name', '$email')");
   
    $mysqli -> close();

    header("Location: employeeform.php");
    exit();

?>