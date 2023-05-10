<?php
include("db.php");
$id = $_POST['button'];
$query = "DELETE FROM `connections` WHERE `id`='{$id}' ";
if (mysqli_query($db, $query)) {
  header("Location: user.php");
} else {
  echo "Ошибка удаления записи: " . mysqli_error($db);
}

?>