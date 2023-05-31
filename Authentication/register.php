<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1 class="h-forumium">Welcome To</h1>
    <h1 class="h-forumium">Forumium</h1>
    <div class="signUp-container">
        <p class="p-sign-in">Create An Account</p>
        <div class="user-input">
            <form action="registerAction.php" method="POST">
                <div class="user-input-rightcon">
                    <div class="profile-preview">
                        <a href=""><i class="fa fa-camera" title="Facebook"></i></a>
                    </div>
                    <span class="p-gender">Gender:</span>
                    <input type="radio" name="gender"
                        onchange="document.getElementsByName('r_selectedGender')[0].value = this.value" value="Male">
                    <span>Male</span>
                    <input type="radio" name="gender"
                        onchange="document.getElementsByName('r_selectedGender')[0].value = this.value" value="Female">
                    <span>Female</span>
                    <input type="hidden" name="r_selectedGender">
                    <p>Phone Number:</p>
                    <input type="text" name="r_phoneNumber" class="usrfield" style="width: 350px">
                </div>
                <p>Full Name:</p>
                <input type="text" class="usrfield" name="r_fullName">
                <p>Username:</p>
                <input type="text" class="usrfield" name="r_userName">
                <p>Email:</p>
                <input type="email" class="usrfield" name="r_email">
                <p>Date of Birth:</p>
                <input type="text" class="usrfield" name="r_dob">
                <p>Password: </p>
                <input type="password" class="usrfield" name="r_pass"> <br>
                <p>Confirm Password: </p>
                <input type="password" class="usrfield" name="r_conPass"> <br>

                <button type="submit" class="submit" name="submit">Register</button>
                <span>Already Have An Account?</span>
                <span><a class="span-register" href="login.php">Sign In</a></span>
            </form>

        </div>
    </div>
</body>

</html>