
<?php
session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include '../inc/database.php';
include 'functions.php';
//include '../sms.php';
$size1=$_FILES['gallery_photo']['size'];

$db = new Database();
$id = $_REQUEST['gallery_id'];
$title=ucwords($_POST['gallery_title']);

$data=['gallery_title' => $title];

$gallery_photo1= $_FILES['gallery_photo'];

$file_name1=$gallery_photo1['name'];


    $file_path1=$gallery_photo1['tmp_name'];
    $dest1='images/'.$file_name1;
    move_uploaded_file($file_path1, $dest1);
    $data['gallery_photo']=$dest1;

$gallery = $db->update("gallery",$data ,['gallery_id' => $id]);
if ($gallery) {
    echo alert('Successful', 'Gallery Updated!', true);
    echo "<script>window.location='gallery.php';</script>";
}
else {
    echo alert('Oops', 'Error While Updating Gallery!', false);
    echo "<script>window.location='gallery-update.php';</script>";
//    print_r($db->error());
}


?>