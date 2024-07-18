<?php
include '../inc/database.php';
include 'functions.php';
$db=new database();
$id=$_REQUEST['id'];
$gallery=$db->delete('gallery',['gallery_id'=>$id]);
    if($gallery){
        echo alert('Successful', 'Gallery Deleted successfully', true);
        echo "<script>window.location='gallery.php';</script>";
    }else{
       // echo mysqli_error()
       echo"<script> alert(' Gallery is not deleted ');window.location='gallery.php';</script>";

    }
