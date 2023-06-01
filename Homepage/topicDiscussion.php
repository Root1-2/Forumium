<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/58ecfd313b.js" crossorigin="anonymous"></script>
    <title>Discussion</title>
</head>

<body>
    <?php

    include '../config.php';
    $topicID = $_GET['id'];
    $query = "SELECT * FROM `topicpost` WHERE id = $topicID";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    echo "
    <p class='discussion-topicName'>" . $row['topicName'] . "</p>
        <p class='discussion-topicCategory'>" . $row['topicCategory'] . "</p><br>
    <div class='container-discussion'>
        <p class='discussion-po'>Posted On " . $row['postedTime'] . "</p>
        <p>Author: " . $row['topicAuthor'] . "</p>
        <br>
        <p>" . $row['topicDescription'] . "</p>

        <img class='discussionphoto' width='250' src='" . $row['topicImage'] . "' alt=''>
        <div class='discussion-iconContainer'>
        <a href='editTopic.php?id=" . $row['id'] . "'><i class='fa fa-pencil' title='Edit'></i></a>
        <a href='deleteTopicAction.php?id=" . $row['id'] . "'><i class='fa fa-trash' title='Delete'></i></a>
    </div>

    </div>
    ";
    ?>
</body>

</html>