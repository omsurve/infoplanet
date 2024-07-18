<?php
include '../inc/database.php';
include 'functions.php';
$db = new database();
$id=$_REQUEST['achievement_id'];
$achievement=$db->delete('achievement',['achievement_id'=>$id]);
    if($achievement){
        echo alert('Successful', 'Achievement Deleted successfully', true);
        echo "<script>window.location='achievement.php';</script>";
    }else{
       // echo mysqli_error()
       echo"<script> alert(' Achievement is not deleted ');window.location='achievement.php';</script>";

    }
