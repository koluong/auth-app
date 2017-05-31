<?php 

session_start();

include '../dba/dbh.php';
require('../validation/validation_functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!($_POST['first'])) {
        header("Location: ../signup_fail.php");
    } elseif (!($_POST['last'])) {
        header("Location: ../signup_fail.php");
    } elseif (!($_POST['uid'])) {
        header("Location: ../signup_fail.php");
    } else {

        $first = $_POST['first'];
        $last = $_POST['last'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $c_pwd = $_POST['c_pwd'];

        $sql = "SELECT * FROM user WHERE uid='$uid'";
        $result = mysqli_query($conn, $sql);
        $exists = mysqli_fetch_assoc($result);
        
        if ($exists) {
            header("Location: ../login_exists.php");
        } else {

            if ($pwd !== $c_pwd) {
                header("Location: ../error.php");
            } elseif (!has_length($pwd, ['min' => 8])) {
                header("Location: ../error.php");
            } elseif (!has_format_matching($pwd, '/[^A-Za-z0-9]/')) {
                header("Location: ../error.php");
            } else {
                $hash_pwd = password_hash($pwd, PASSWORD_BCRYPT);
                $sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$hash_pwd')";
                $result = mysqli_query($conn, $sql);
                header("Location: ../cred.php");
            }   
        } 
    }
} else {
    echo "ERROR";

}