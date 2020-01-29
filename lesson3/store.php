<?php
$conn = new mysqli('localhost', 'root', '', 'projectx');

// if ($conn->connect_error) {
//     echo 'fail';
// } else {
//     echo 'success';
// }

$name = $_POST['name'];
$qty = $_POST['qty'];
$detail = $_POST['detail'];
$gender = $_POST['gender'];

$store = "INSERT INTO catalogs (title, qty, detail,gender) VALUES ('$name', '$qty', '$detail', '$gender')";
$query = mysqli_query($conn, $store);


if ($query) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    print 'error';
}
