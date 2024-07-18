<?php

include '../inc/database.php';
include 'functions.php';

$db = new Database();
$slide_id = $_REQUEST['slide_id'];
//$title = $_REQUEST['title'];
//$sub_title = $_REQUEST['sub_title'];

//$subtitle = $_REQUEST['subtitle'];
$slide = $_FILES['slide'];


$file_name=$slide['name'];

if($file_name!="")
{
    $file_path=$slide['tmp_name'];
    $dest='uploads/slides/'.$file_name;
    move_uploaded_file($file_path,"../".$dest);
    //$data['image']=$dest;
    $slides = $db->update("slides", ['image' => $dest],['slide_id'=>$slide_id]);
}
else{
$slide = $db->update("slides", ['title' => $title], ['slide_id' => $slide_id]);
}
if($slide) {
    echo alert('Successful', 'Slide Updated!', true);
     header('location:slides.php');
}
     else {
    echo alert('Oops!', 'Fail to Update slide !', false);
    header('location:slides.php');
    //echo $db->error();
}
?>