<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

require_once('../models/connect.php');

$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `pass`) VALUES ($firstname,$lastname,$email,$password)";

$query = mysqli_query($connect, $sql);



if ($query) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo 'fail';
}
