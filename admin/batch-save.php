<?php
session_start();
include '../inc/database.php';
include 'functions.php';

$db = new Database();


// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Include the Medoo library

    // Initialize the database connection
  

    // Retrieve the form data
    $course_id = $_POST['course_id'];
    $date = $_POST['date'];
    $stime = $_POST['start_time'];
    $etime= $_POST['end_time'];

    // Insert the form data into the database
   $batch= $db->insert('batches', [
        'course_id' => $course_id,
        'date' => $date,
        'start_time' => $stime,
       'end_time'=>$etime
    ]);

if ($batch) {
   echo alert('Successful', 'Batch  Added!', true);
 echo "<script>window.location='batches.php';</script>";
} else {
   echo alert('Oops', 'Error While Adding Batch!', false);
 echo "<script>window.location='batches.php';</script>";
   echo $db->error();
} 
}




