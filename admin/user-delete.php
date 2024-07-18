<?php
include './inc/database.php';
$db=new database();
$admin_id=$_REQUEST['admin_id'];
$user=$db->update("admin",['deleted'=>1],['id'=>$admin_id]);
    if($user){
        echo"<script> alert(' Record is removed successfully');window.location='review.php';</script>";
    }else{
       // echo mysqli_error()
       echo"<script> alert(' Record is not removed ');window.location='review.php';</script>";

    }
