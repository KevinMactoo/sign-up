<?php
//connects to the database and inserts a name
session_start();
$mysqli = new mysqli('localhost', 'root',"", 'login') or die(mysqli_error($mysqli));


if(isset($_POST['send'])){

  $name = $_POST['name'];

  $email = $_POST['email'];

  $phone = $_POST['phone'];


header("location: signup.php");

  $mysqli->query("INSERT INTO signup (name,email,phone)VALUES ('$name','$email','$phone')") or die($mysqli->error);

  header("location: signup.php");
}


 ?>
