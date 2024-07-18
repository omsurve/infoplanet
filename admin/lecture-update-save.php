<?php
include '../inc/database.php';
include 'functions.php';
$db = new Database();
print_r($_REQUEST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseId = $_POST['course_id'];
    $db->delete('lectures',['course_id'=>$courseId]);
    if (isset($_REQUEST['titles'])) {

    
    $titles = $_POST['titles'];
    $links = $_POST['links'];

    // Iterate over the submitted lecture information
    for ($i = 0; $i < count($titles); $i++) {
        $title = $titles[$i];
        $link = $links[$i];

        // Insert the lecture into the database
        $lecture=$db->insert('lectures', [
            'course_id' => $courseId,
            'lecture_title' => $title,
            'lecture_link' => $link,
        ]);
         if($lecture){
            alert('Successful!', 'Lecture Updated ', 1);
    header('Location: lectures.php');
    }
    }
    }else{
        alert('Oops!', 'Atleast Add 1 Item . Or Delete Lecture', 0);
    header('location:lecture-update.php?course_id='.$courseId);
    }
}
?>