<?php
if(isset($_POST['login'])) {
    include '../config.php';
    $log_userName = $_POST['l_userName'];
    $log_password = $_POST['l_password'];

    // $authCheck_query
    $result = mysqli_query($conn, "SELECT * FROM `reg` WHERE userName = '$log_userName' And pass = '$log_password'");

    if(mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['userName'] = $log_userName;
        echo "<script>location.href='../Homepage/homeAction.php'</script>";
    } else {
        echo "<script>alert('Invalid Username & Password')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}

?>