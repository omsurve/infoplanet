<?php

session_start();
include '../inc/database.php';
include 'functions.php';
$db = new Database();
$mobile_no = $_REQUEST['mobile_number'];
$password = md5($_REQUEST['password']);
//echo md5(123456);
$admin = $db->select("admin", "*", ["AND" => ['mobile' => $mobile_no, 'password' => $password]]);
//print_r($admin);
if (sizeof($admin)>0) {
    $admin = $admin[0];
    if ($admin['can_login'] == 1 and $admin['deleted'] == 0 ) {
        $_SESSION['admin'] = $admin;
        header("location:index.php");
    } else {

        echo '<script>alert("Invalid User"); window.history.back(); </script>';
    }
} else {

    echo '<script>alert("incorrect user name/password ,please try again."); window.history.back();</script>';
}
