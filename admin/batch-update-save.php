<?php
session_start();
include '../inc/database.php';
include 'functions.php';

$db = new Database();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve the form data
    $batch_id = $_POST['batch_id'];
    $course_id = $_POST['course_id'];
    $date = $_POST['date'];
    $stime = $_POST['start_time'];
    $etime = $_POST['end_time'];

    // Update the form data in the database
    $result = $db->update('batches', [
        'course_id' => $course_id,
        'date' => $date,
        'start_time' => $stime,
        'end_time' => $etime
    ], ['batch_id' => $batch_id]);

    // Check if the update was successful
    if ($result) {
        echo alert('Successful', 'Batch Updated!', true);
        echo "<script>window.location='batches.php';</script>";
    } else {
        echo alert('Oops', 'Error While Updating Batch!', false);
        echo "<script>window.location='batch-update.php?batch_id=$batch_id';</script>";
        echo $db->error();
    } 
}
