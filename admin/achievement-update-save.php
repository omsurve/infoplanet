<?php

include '../inc/database.php';
include 'functions.php';

$db = new Database();
$id = $_REQUEST['achievement_id'];
$name = ucwords($_REQUEST['achievement_name']);
$subject = $_REQUEST['achievement_subject'];
$marks = $_REQUEST['achievement_marks'];
$details = $_REQUEST['achievement_details'];

//$subtitle = $_REQUEST['subtitle'];
$achievement_photo = $_FILES['achievement_photo'];

$file_name=$achievement_photo['name'];

if($file_name!="")
{
    $file_path=$achievement_photo['tmp_name'];
    $dest='uploads/achievement/'.$file_name;
    move_uploaded_file($file_path,"../".$dest);
    //$data['image']=$dest;
    $achievement = $db->update("achievement", ['achievement_name' => $name,'achievement_subject'=>$subject,'achievement_marks' => $marks,'achievement_photo' => $dest,'achievement_details' => $details],['achievement_id'=>$id]);
}
else{
    $achievement = $db->update("achievement",['achievement_name' => $name,'achievement_subject'=>$subject,'achievement_marks' => $marks,'achievement_details' => $details],['achievement_id'=>$id]);
}
if($achievement) {
    echo alert('Successful', 'Achievement Updated!', true);
     header('location:achievement.php');
}
     else {
    echo alert('Oops!', 'Fail to Update Achievement !', false);
    header('location:achievement.php');
    //echo $db->error();
}
?>