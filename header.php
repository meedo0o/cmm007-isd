
<?php
session_start();
?>

<?php

include 'connect.php';

if(isset($_POST['uid'])){
    $uid =  $_POST['uid'];
    $pwd =  $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE user_uid='".$uid."' AND user_pwd='".$pwd."'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count==1) {
        $_SESSION['username'] = $uid;
        header("Location: finally.php");
    } else {
        echo 'somethin is wrong ... with you';
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>

</header>
<nav>
    <div class="main_wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
        <div class="nav-login">
            <form method="POST" action="login.inc.php">
                <input type="text" name="uid" placeholder="Username/e-mail">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="submit">Login</button>

            </form>
            <a href="signup.php">Sign Up</a>

        </div>
    </div>
</nav>