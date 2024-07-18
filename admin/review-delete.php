<?php
include '../inc/database.php';
include 'functions.php';
$db=new database();
$id=$_REQUEST['id'];
$reviews=$db->delete('reviews',['review_id'=>$id]);
    if($reviews){
        echo alert('Successful', 'Review Deleted successfully', true);
        echo "<script>window.history.back();</script>";
    }else{
       // echo mysqli_error()
       echo"<script>window.history.back();</script>";

    }
