<?php
session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include '../inc/database.php';
include 'functions.php';
//include '../sms.php';
$db = new Database();
$name = $_POST['name'];
$mobile = $_POST['mobile_number'];
$address = $_POST['address'];
$username = $_POST['mobile_number'];
$password = md5($_POST['mobile_number']);
$security_key = $_POST['mobile_number'];
$type = $_POST['type'];
$can_login = $_POST['can_login'];
$gender = $_POST['gender'];
$birth_date = $_POST['birth_date'];
$other = $_POST['other'];
$salary = $_POST['salary'];


//print_r($security_key);
$admin = $db->insert("admin", ['name' => $name, 'mobile' => $mobile, 'address' => $address, 'password' => $password, 'salary' => $salary, 'username' => $username, 'security_key' => $security_key, 'type' => $type, 'can_login' => $can_login, 'gender' => $gender, 'birth_date' => $birth_date, 'other_details' => $other]);
if ($admin) {
    echo alert('Successful', 'User Added!', true);
    echo "<script>window.location='users.php';</script>";
} else {
    echo alert('Oops', 'Error While Adding User!', false);
    echo "<script>window.location='user-add.php';</script>";
//    print_r($db->error());
}
