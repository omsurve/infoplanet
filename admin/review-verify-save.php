<?php
session_start();

include '../inc/database.php';
include './functions.php';

$db = new Database();
$id = $_POST['review_id'];
$name = ucwords($_POST['review_name']);
$email = $_POST['review_email'];
$details = $_POST['review_details'];
$verify = $_POST['is_verified'];


$review = $db->update("reviews", ['is_verified' => 1], ['review_id' => $id]);

 if ($review) {
    alert('success', 'Review Verified', 1);
    header("location:review-verified.php");    
} 

else {
    alert('Error', 'Fail to verify, Please try again.', 0);
    header("location:review-unverified.php");
}
