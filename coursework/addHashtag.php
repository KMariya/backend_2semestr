<?php
include("db.php");
$hashtag = $_POST['hashtag'];
$query = mysqli_query($db, "SELECT * FROM `hashtags` WHERE `name` = '{$hashtag}'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['user'] = ['name' => $name];
    mysqli_query($db, "INSERT INTO `hashtags` (`name`) VALUES ('{$hashtag}')");
    header("Location: user.php");
} else {
    echo("Такой хэштэг уже существует");
}
?>