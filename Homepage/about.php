<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div>
            <h1><a href="homeAction.php">Forumium</a></h1>
            <p class="forumparagraph">A Forum Website</p>
        </div>
        <nav>
            <ul class="nav-content">
                <li><a href="homeAction.php">Home</a></li>
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
                <li><a href="#">Create Topic</a></li>
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
                <p class="userName"><?php echo $_SESSION['userName']?></p>
                <p class="userID">#User ID</p> <br>
                <table>
                    <tr>
                        <td>Forum Posted</td>
                        <td>:112</td>
                    </tr>
                    <tr>
                        <td>Forum Commented</td>
                        <td>:121</td>
                    </tr>
                    <tr>
                        <td>Upvote Points</td>
                        <td>:121</td>
                    </tr>
                </table> <br>
                <hr size="1">
                <div class="icon-container">
                    <a href=""><i class="fa fa-bookmark" title="Bookmark"></i></a>
                    <a href=""><i class="fa fa-bell"title="Notification"></i></a>
                    <a href=""><i class="fa fa-user"title="Profile"></i></a>
                    <a href=""><i class="fa fa-cog"title="Accout Setting"></i></a>
                    <a href="../Authentication/logIn.php"><i class="fa fa-sign-out"title="Sign-Out"></i></a>
                </div>
            </div>
            <div class="followed-forums">
                <h3>Followed Forum</h3>
                <hr size="1">
            </div>
        </div>
        <div class="about-container">
            <h2>About Forumium</h2>
            <p>Forumium is an online forum website designed to bring people together and provide a platform for sharing knowledge, opinions, and experiences. With a wide range of topics, including gaming, movies, songs, daily life, memes, sports, there's something for everyone.</p>
        
            <p>Whether you're looking for advice, seeking to share your expertise, or simply wanting to engage with like-minded individuals, Forumium is the place to be.</p> <br> <br>
        
            <p>This is my project for my course Web Technologies Sessional. It's currently in developing process.</p>
        </div>
    </div>
</body>

</html>