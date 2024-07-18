<?php
session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include '../inc/database.php';
include 'functions.php';
//include '../sms.php';
$db = new Database();

$title=ucwords($_POST['gallery_title']);

$size1=$_FILES['gallery_photo']['size'];

$photo1= $_FILES['gallery_photo'];

$file_name1=$photo1['name'];

$file_path1=$photo1['tmp_name'];

$dest1='images/'.$file_name1;
move_uploaded_file($file_path1,  $dest1."/");


//print_r($security_key);
$g = $db->insert("gallery", ['gallery_title' => $title,'gallery_photo' => $dest1]);
if ($g) {
    echo alert('Successful', 'Gallery Added!', true);
    echo "<script>window.location='gallery.php';</script>";
} else {
    echo alert('Oops', 'Error While Adding Gallery!', false);
    echo "<script>window.location='gallery-add.php';</script>";
//    print_r($db->error());
}
