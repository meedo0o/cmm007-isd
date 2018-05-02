<?php
include_once 'header.php';
require 'connect.php';

if (isset($_POST['uid']) && isset($_POST['password'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
                      VALUES ('$first', '$last', '$email', '$username', '$password')";
    $result = mysqli_query($conn, $query);
    if($result){
        $msg = "User created successfully.";
    }else{
        $msg ="User registration failed";
    }
}
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Signup</h2>
            <form class="signup-form" method="post" action="includes/signup.inc.php">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="Lastname">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="password" placeholder="Password">
                <button type="submit" name="submit">Sign up</button>
            </form>
<?php if(isset($msg)){
    echo "<p>".$msg."</p>";
}
?>
        </div>

    </section>
<?php
include_once 'footer.php';
?>