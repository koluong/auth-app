<?php 

session_start();
include '../dba/dbh.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $try = 0;

    $sql = "SELECT try FROM user WHERE uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $try = mysqli_fetch_assoc($result)['try'];

    $sql = "SELECT pwd FROM user WHERE uid='$uid'";
    $result = mysqli_query($conn, $sql);
    $hash = mysqli_fetch_assoc($result)['pwd'];

    $verify = password_verify($pwd, $hash);
    //var_dump($verify);

    if ($verify == 0) {
        if ($result) {
            // $sql = "SELECT try FROM user WHERE uid='$uid'";
            // $result = mysqli_query($conn, $sql);
            // $try = mysqli_fetch_assoc($result)['try'];
            $try ++;
            $sql = "UPDATE user SET try='$try' WHERE uid='$uid'";
            mysqli_query($conn, $sql);
            var_dump($try);
            var_dump($try > 3);
            if ($try > 3) {
                header("Location: ../too_many_fail.php");
            } else {
            header("Location: ../login_fail.php"); 
            }
        }
    } else if ($try > 3) {
        header("Location: ../too_many_fail.php");
    } else {
        $sql = "UPDATE user SET try=0 WHERE uid='$uid'";
        mysqli_query($conn, $sql);
        $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $_SESSION['id'] = $row['first'] . " " . $row['last'];
        header("Location: ../user.php");
    }
} else {
    echo "ERROR";
}