<?php
include_once('connect.php');

global $conn;

/**
 * Created by PhpStorm.
 * User: meedo
 * Date: 02/05/2018
 * Time: 06:44
 */

if(isset($_REQUEST['submit'])){


    $uid = $_REQUEST['uid'];
    $pwd = $_REQUEST['pwd'];


    $sql = "SELECT * FROM users WHERE (user_name='$uid' AND user_pass='$pwd')";
    $ExecuteSQL = mysqli_query($conn, $sql);
    $Row = mysqli_fetch_assoc($ExecuteSQL);

    if($Row !=0){
        echo "Login is successful.";

    }
    else{
        echo "Login is unsuccessful.";
    }


}