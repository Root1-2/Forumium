<?php
session_start();

include '../config.php';

$id = $_POST['id'];
$topic_name = $_POST['topicName'];
$topic_category = $_POST['topicCategory'];
$topic_desc = $_POST['topicDescription'];
$topic_image = $_FILES['topicImage'];
$topicAuthor = $_SESSION['userName'];


$imageLoc = $_FILES['topicImage']['tmp_name'];
$imageName = $_FILES['topicImage']['name'];

$image_dest = "../postPhotos/" . $imageName;

move_uploaded_file($imageLoc, $image_dest);

$updateQuery = "UPDATE `topicpost` SET `topicAuthor`='$topicAuthor',`topicName`='$topic_name',`topicCategory`='$topic_category',`topicDescription`='$topic_desc',
    `topicImage`='$image_dest' WHERE id = '$id'";

if (mysqli_query($conn, $updateQuery)) {
    echo "<script>alert('Updated Successfully!')</script>";
    echo "<script>location.href='index.php'</script>";
} else {
    echo "<script>alert('Failed. Please Try Again!')</script>";
    echo "<script>location.href='editTopic.php'</script>";
}

?>