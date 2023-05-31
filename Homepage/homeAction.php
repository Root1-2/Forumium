<?php
session_start();

if(isset($_SESSION['userName'])) {
    include 'index.php';
}

else {
    echo "<script>alert('You Have to Login First')</script>";
    echo "<script>location.href='../Authentication/login.php'</script>";
}

?>