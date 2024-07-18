<?php
session_start();

include '../inc/database.php';
include './functions.php';

$db = new Database();
$id = $_POST['enquiry_id'];
$name = ucwords($_POST['enquiry_name']);
$phone_no = $_POST['enquiry_phone_no'];
$subject = $_POST['subject'];
$email = $_POST['enquiry_email'];
$address = $_POST['enquiry_address'];
$details = $_POST['enquiry_details'];
//$verify = $_POST['is_verified'];


$enquiry = $db->update("enquiry", ['is_verified' => 1], ['enquiry_id' => $id]);

 if ($enquiry) {
    alert('success', 'Enquiry Verified', 1);
    header("location:enquiry-verified.php");    
} 

else {
    alert('Error', 'Fail to verify, Please try again.', 0);
    header("location:enquiry-unverified.php");
}
