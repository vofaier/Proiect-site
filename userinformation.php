<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"hgdf");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "Mesajul a fost trimis";

?>