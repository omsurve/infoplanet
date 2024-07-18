<?php
include '../inc/database.php';
include 'functions.php';
$db = new database();
$batch_id = $_REQUEST['id'];
$batch = $db->delete("batches", ['batch_id' => $batch_id]);
if ($batch) {
    echo alert('Successful', 'Batch is deleted!', true);
    echo "<script>window.location='batches.php';</script>";
} else {
    
    echo alert('Oops', 'Fail to delete batch !', false);
    echo "<script>window.location='batches.php';</script>";
}
