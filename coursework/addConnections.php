<?php
include("db.php");
$hashtag = $_POST['hashtag'];
$field = $_POST['field'];
$query = mysqli_query($db, "SELECT * FROM `connections` WHERE `id_field`='{$field}' AND `id_hastags`='{$hashtag}'");
if (mysqli_num_rows($query) == 0) {
    mysqli_query($db, "INSERT INTO `connections` (`id_field`, `id_hastags`) VALUES ('{$field}', '{$hashtag}')");
    header("Location: user.php");
} else {
    echo("Такая связь уже существует");
}
?>