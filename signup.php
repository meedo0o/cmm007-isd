<?php
include_once 'header.php';
include_once('connect.php');

global $conn;

if (isset($_REQUEST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    $query = "INSERT INTO users (user_name, user_pass, user_email) VALUES ('$username', '$password', '$email')";

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
            <form class="signup-form" method="post" action="signup.php">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
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