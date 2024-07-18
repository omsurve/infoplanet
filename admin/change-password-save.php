<?php
session_start();
include '../inc/database.php';
include 'functions.php';
$db = new Database();
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
$admin = $db->select("admin", "*", ['AND' => [ 'id' => $_SESSION['admin']['id']]])[0];
// print_r($admin);
// echo md5($old_password);
// echo $admin['password'];
if (strcmp(md5($old_password), $admin['password']) != 0 or strcmp($new_password, $confirm_password) != 0) {
    echo alert("Oops", 'Password unmatched ', true);
    echo "<script> window.history.back();</script>";
} else {
    $confirm_password = md5($confirm_password);
    $admin = $db->update("admin", ['password' => $confirm_password], ['AND' => ['id' => $_SESSION['admin']['id']]]);
    //echo "success";
    if ($admin) {
        alert("Successful", 'Password is updated!', true);
        echo "<script>window.location='login.php';</script>";
    } else {
         alert("Oops", 'Failed to update Password!', true);
        echo "<script>window.location='login.php';</script>";
    }
}
