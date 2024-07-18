<?php
session_start();
include '../inc/database.php';
include 'functions.php';

$db = new Database();

//$title=$_REQUEST['title'];
//$sub_title=$_REQUEST['sub_title'];

//$subtitle=$_REQUEST['subtitle'];


$slide = $_FILES['slide']['name'];
if ($_FILES['slide']['name'] != '') {
    $uploads = "uploads/slides/" . $slide;
    move_uploaded_file($_FILES['slide']['tmp_name'], "../".$uploads);
}




$slide_data = $db->insert("slides", ['image' => $uploads]);

if ($slide_data) {
    echo alert('Successful', 'Slide Added!', true);
    echo "<script>window.location='slides.php';</script>";
} else {
    echo alert('Oops', 'Error While Adding Slide!', false);
    echo "window.location='slides.php';</script>";
}
