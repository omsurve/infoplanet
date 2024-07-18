<?php
include '../inc/database.php';
include 'functions.php';
$db = new Database();
$admin_id = $_REQUEST['admin_id'];
$user = $db->select("admin", "*", ['id' => $admin_id])[0];
//print_r($user);
if ($user['deleted'] == 0) {
   $user_block = $db->update("admin", ['deleted' => 1], ['id' => $admin_id]);
   echo alert('Successful', 'User is blocked!', true);
   header("location:users.php");
} else {
   $user_block = $db->update("admin", ['deleted' => 0], ['id' => $admin_id]);
   // echo "<a  href='#' class='btn btn-sm btn-primary remove-item-btn'>Block</a>";
   echo alert('Successful', 'User is Unblocked!', true);
   header("location:users.php");
}
