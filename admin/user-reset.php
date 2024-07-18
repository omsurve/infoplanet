<?php
session_start();
include '../inc/database.php';
include "../sms.php";
$db=new Database();
$admin_id = $_GET['admin_id'];



$mobile = $db->query("select mobile from admin where id=" . $admin_id)->fetchAll()[0][0];
$mobile_md5 = md5($mobile);
$data = $db->query("update admin set password='" . $mobile_md5 . "',security_key='" . $mobile . "' where id=" . $admin_id . " and mess_id=" . $_SESSION['admin']['mess_id']);


// var_dump($data);

if ($data) 
{
    $uname=$db->query("select name from admin where id=" . $admin_id . " and mess_id=" . $_SESSION['admin']['mess_id'])->fetchAll()[0][0];
    $msg="Dear ".$uname." your admin password is reset";
    //echo $mobile;
     sendBulkSMS($mobile,$msg);
    // alert("Success ", "Password reset successfully", true);
    // echo "<script>window.location='users.php';</script>";
} else {
    alert("Oops", "Reset Unsuccessful", false);
    // echo "<script>window.location='users.php';</script>";
}



?>