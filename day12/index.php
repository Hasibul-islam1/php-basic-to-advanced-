<?php
session_start();
$name=$_SESSION["user_name"];
$email=$_SESSION["email"];
echo "name is $name email is $email";

?>