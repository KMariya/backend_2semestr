<?php 
session_start();
include("db.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($db, "SELECT * FROM `table users` WHERE `name`='{$name}'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['user'] = ['name' => $name];
    mysqli_query($db, "INSERT INTO `table users` (`name`, `email`, `password`) VALUES ('{$name}', '{$email}', '{$password}')");
    header("Location: user.php");
} else {
    echo("Имя пользователя занято");
}

?>
