<?php
session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include '../inc/database.php';
include 'functions.php';
//include '../sms.php';
$db = new Database();

$name=ucwords($_POST['achievement_name']);
$subject=$_POST['achievement_subject'];
$marks=$_POST['achievement_marks'];
$details=$_POST['achievement_details'];

$achievement = $_FILES['achievement_photo']['name'];
if ($_FILES['achievement_photo']['name'] != '') {
    $uploads = "uploads/achievement/" . $achievement;
    move_uploaded_file($_FILES['achievement_photo']['tmp_name'], "../".$uploads);
}
    

// Insert the form data into the database
$res = $database->insert('achievement', [
    'achievement_name' => $name,
    'achievement_subject' => $subject,
    'achievement_marks' => $marks,
    'achievement_photo' => $uploads,
    'achievement_details' =>$details 
]);


if ($res) {
    echo alert('Successful', ' Achievement Added successfully!', true);
    echo "<script>window.location='achievement.php';</script>";
} else {
    echo alert('Oops', 'Failed to create course!', true);
    echo "<script>window.location='achievement-add.php';</script>";
}
