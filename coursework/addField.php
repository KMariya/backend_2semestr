<?php
include("db.php");
$field = $_POST['field'];
$query = mysqli_query($db, "SELECT * FROM `field` WHERE `name`='{$field}'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['user'] = ['name' => $name];
    mysqli_query($db, "INSERT INTO `field` (`name`) VALUES ('{$field}')");
    header("Location: user.php");
} else {
    echo("Такая область знаний уже существует");
}
?>