<?php 
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Topic</title>
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/58ecfd313b.js" crossorigin="anonymous"></script>
</head>

<body>
    <form action="editTopicAction.php" method="POST" enctype='multipart/form-data'>
        <div class="container-createTopic">
            <input class="topicInputs" name="topicName" type="text" placeholder="Topic Name" Required>
            <input class="topicInputs" name="topicCategory" type="text" placeholder="Topic Categories" Required>
            <textarea class="topicInputs resize" name="topicDescription" placeholder="Topic Description"
                rows="30" Required></textarea> <br>

            <input class="imageInput" type="file" name="topicImage">
            <input type="text" name='id' value="<?php echo $id?>">
            <!-- <i class="fas fa-paperclip fa-2x" title="Image Attachment"></i> -->
            <button type="submit" class="submit" name="submit">Post</button>
        </div>
    </form>

</body>

</html>