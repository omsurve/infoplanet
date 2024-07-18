<?php
//$id = $_REQUEST['id'];
$course_id = $_REQUEST['course_id'];
include '../inc/database.php';
include 'functions.php';
$db = new Database();



//print_r($_POST);
$delete = $db->delete("courses", ['course_id' => $course_id]);
$delete2 = $db->delete("batches", ['course_id' => $course_id]);
$delete3 = $db->delete("lectures", ['course_id' => $course_id]);
if ($delete) {
   echo alert('Successful', 'course Deleted!', true);
   echo "<script>window.location='courses.php';</script>";
} else {
   echo alert('Oops!', 'Fail to Delete course!', false);
   echo "<script>window.location='courses.php';</script>";
   //echo $db->error();
}

?>