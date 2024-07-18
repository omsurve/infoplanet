<?php
include '../inc/database.php';
include 'functions.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     if (isset($_REQUEST['titles'])) {

    $courseId = $_POST['course_id'];
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
    }
    if($lecture){
    header('Location: lectures.php');
    }
    }
    else {
    alert('Oops!', 'No Items ', 0);
    header('location:lecture-add.php');
}

    // Redirect or display a success message
    // Redirect example:
    
    exit();
}
?>
