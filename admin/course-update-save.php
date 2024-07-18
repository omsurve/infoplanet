<?php 
include '../inc/database.php';
include 'functions.php';

// Initialize Medoo
$db = new Database();
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Sanitize and validate form data
    $id = filter_input(INPUT_POST, 'course_id', FILTER_SANITIZE_NUMBER_INT);
    $course_name = filter_input(INPUT_POST, 'course_name', FILTER_SANITIZE_STRING);
    $details = filter_input(INPUT_POST, 'details', FILTER_SANITIZE_STRING);
    $duration = filter_input(INPUT_POST, 'duration', FILTER_SANITIZE_STRING);
    $fees = filter_input(INPUT_POST, 'fees', FILTER_VALIDATE_FLOAT);
    $curriculam = filter_input(INPUT_POST, 'curriculam', FILTER_SANITIZE_STRING);
    $objective = filter_input(INPUT_POST, 'objective', FILTER_SANITIZE_STRING);
    $prerequisites = filter_input(INPUT_POST, 'prerequisites', FILTER_SANITIZE_STRING);

    // Check if the image has been uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // Get the image data
        $uploadDir = 'uploads/';
    $fileName = $_FILES['image']['name'];
    $targetPath = $uploadDir . $fileName;
    move_uploaded_file($_FILES['image']['tmp_name'],"../".$targetPath);
   

        // Update the course data with the new image
        $res = $db->update('courses', [
            'course_name' => $course_name,
            'details' => $details,
            'duration' => $duration,
            'fees' => $fees,
            'image' => $targetPath,
            'curriculam' => $curriculam,
            'objective' => $objective,
            'prerequisites' => $prerequisites,
        ], [
            'course_id' => $id,
        ]);

    } else {
        // Update the course data without changing the image
        $res = $db->update('courses', [
            'course_name' => $course_name,
            'details' => $details,
            'duration' => $duration,
            'fees' => $fees,
            'curriculam' => $curriculam,
            'objective' => $objective,
            'prerequisites' => $prerequisites,
        ], [
            'course_id' => $id,
        ]);
    }

    // Check if the update was successful
    if ($res) {
        echo alert('Successful', 'Course updated successfully!', true);
        echo "<script>window.location='courses.php';</script>";
    } else {
        echo alert('Oops', 'Failed to update course!', false);
        echo "<script>window.location='course-update.php?course_id=$id';</script>";
    }
}

?>