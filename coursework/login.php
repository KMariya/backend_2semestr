<?php 
session_start();
include("db.php");
$name = $_POST['name'];
$password = $_POST['password'];

$query = mysqli_query($db, "SELECT * FROM `table users` WHERE  `name`='{$name}' AND `password`='{$password}'");
if (mysqli_num_rows($query) == 1) {
    $_SESSION['user'] = ['name' => $name];
    header("Location: user.php");
} else {
    echo("Неверное имя или пароль");
}

?>