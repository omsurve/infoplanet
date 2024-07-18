<?php
include '../inc/database.php';
include 'functions.php';
$db = new database();
$id=$_REQUEST['id'];
$enq=$db->delete('enquiry',['enquiry_id'=>$id]);
    if($enq){
        echo alert('Successful', 'Record Deleted successfully', true);
        echo "<script>window.history.back();</script>";
    }else{
       // echo mysqli_error()
       echo"<script>window.history.back();</script>";

    }
