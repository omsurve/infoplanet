<?php
include '../inc/database.php';
include 'functions.php';
$db=new database();
$course_id=$_REQUEST['course_id'];
$lecture=$db->delete('lectures',['course_id'=>$course_id]);
    if($lecture){
        echo alert('Successful', 'Lecture Deleted successfully', true);
        echo "<script>window.location='lectures.php';</script>";
    }else{
       echo alert('Error', 'Lecture Not Deleted ', false);
        echo "<script>window.location='lectures.php';</script>";
    }
?>