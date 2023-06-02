<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/58ecfd313b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <div>
            <h1><a href="index.php">Forumium</a></h1>
            <p class="forumparagraph">A Forum Website</p>
        </div>
        <nav>
            <ul class="nav-content">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#">Forum Topic</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Gaming</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Songs</a></li>
                        <li><a href="#">Daily Life</a></li>
                        <li><a href="#">Memes</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Miscellaneous</a></li>
                    </ul>
                </li>
                <li><a href="createTopic.php">Create Topic</a></li>
                <li class="dropdown"><a href="#">Help</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Forum Rules</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <div class="containers">
        <div class="left-containers">
            <div class="sidebar">
                <img class="userPhoto" src="../images/photo_2023-04-21_02-49-52.jpg" alt="User Photo">
                <p class="userName">
                    <?php echo $_SESSION['userName'] ?>
                </p>
                <p class="userID">#User ID</p> <br>
                <table>
                    <tr>
                        <td>Forum Posted</td>
                        <td>:From Database</td>
                    </tr>
                    <tr>
                        <td>Forum Commented</td>
                        <td>:From Database</td>
                    </tr>
                    <tr>
                        <td>Upvote Points</td>
                        <td>:From Database</td>
                    </tr>
                </table> <br>
                <hr size="1">
                <div class="icon-container">
                    <a href=""><i class="fa fa-bookmark" title="Bookmark"></i></a>
                    <a href=""><i class="fa fa-bell" title="Notification"></i></a>
                    <a href=""><i class="fa fa-user" title="Profile"></i></a>
                    <a href=""><i class="fa fa-cog" title="Account Setting"></i></a>
                    <a href="logout.php"><i class="fa fa-sign-out" title="Sign-Out"></i></a>
                </div>
            </div>
            <div class="followed-forums">
                <h3>Followed Forum</h3>
                <hr size="1">
            </div>
        </div>
        <div class="Main-body">
            <h2>Discussion</h2>
            <hr size="1">
            <span class="s-topicName">Topic Name</span>
            <span class="s-topicAuthor">Topic Author</span>
            <!-- Topics From Database -->
            <?php
            include '../config.php';
            $alltopicdata = mysqli_query($conn, "SELECT * FROM `topicpost`");
            while ($row = mysqli_fetch_array($alltopicdata)) {
                echo "
                    <div class='container-Alltopics'>
                    <a href='topicDiscussion.php?id=" . $row['id'] . "'><span class='topicname'>" . $row['topicName'] . "</span></a>
                    <span class='topicauthor'>" . $row['topicAuthor'] . "</span>
                    </div>
                    ";
            }
            ?>
            <a href="createTopic.php"><i class="fa-solid fa-circle-plus fa-2xl" title="Create Post"></i></a>
        </div>
    </div>
    <footer>
        <span class="footer-tag">@Forumium | by Root1-2</span>
        <div class="social-containers">
            <a href=""><i class="fa fa-facebook" title="Facebook"></i></a>
            <a href=""><i class="fa fa-twitter" title="Twitter"></i></a>
            <a href=""><i class="fa fa-linkedin" title="LinkedIn"></i></a>
            <a href=""><i class="fa fa-reddit" title="reddit"></i></a>
            <a href=""><i class="fa fa-github" title="GitHub"></i></a>
        </div>

    </footer>
</body>

</html>