<?php
include '../inc/database.php';

include 'functions.php';
// Initialize Medoo
$db = new Database();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Sanitize and validate form data
    $course_name = filter_input(INPUT_POST, 'course_name', FILTER_SANITIZE_STRING);
    $details = filter_input(INPUT_POST, 'details', FILTER_SANITIZE_STRING);
    $duration = filter_input(INPUT_POST, 'duration', FILTER_SANITIZE_STRING);
    $fees = filter_input(INPUT_POST, 'fees', FILTER_VALIDATE_FLOAT);
    $curriculam = filter_input(INPUT_POST, 'curriculam', FILTER_SANITIZE_STRING);
    $objective = filter_input(INPUT_POST, 'objective', FILTER_SANITIZE_STRING);
    $prerequisites = filter_input(INPUT_POST, 'prerequisites', FILTER_SANITIZE_STRING);

    // Insert form data into the database
   
        // Get the image data
        
        
        // Get the image data

    // Move the uploaded file to the desired location
    $uploadDir = 'uploads/';
    $fileName = $_FILES['image']['name'];
    $targetPath = $uploadDir . $fileName;
    move_uploaded_file($_FILES['image']['tmp_name'],"../".$targetPath);
   

    // Insert the form data into the database
   $res = $database->insert('courses', [
        'course_name' => $course_name,
        'details' => $details,
        'duration' => $duration,
        'fees' => $fees,
        'image' => $targetPath,
        'curriculam' => $curriculam,
        'objective' => $objective,
        'prerequisites' => $prerequisites
    ]);


   if ($res) {
        echo alert('Successful', 'Course Created successfully!', true);
        echo "<script>window.location='courses.php';</script>";
    } else {
        echo alert('Oops', 'Failed to create course!', true);
        echo "<script>window.location='course-add.php';</script>";
    }
}
?>
