<?php
include '../config.php';

$id = $_GET['id'];
$deleteQuery = "DELETE FROM `topicpost` WHERE id = '$id'";
try {
    mysqli_query($conn, $deleteQuery);
    header("location:index.php");

} catch (\throwable $th) {
    echo $th;
}
?>