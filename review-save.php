<html>
    <head>
        <!-- Sweet Alert -->
        <script src="./sweet.js"></script>
        
    </head>

<?php
//session_start();
//echo $user_id=$_SESSION['user']['user_id'];
include 'inc/database.php';
//include '../infoplanet/admin/functions.php';

$db = new Database();

$name=$_REQUEST['review_name'];
$email=$_REQUEST['review_email'];
$details=$_REQUEST['review_details'];

$review = $db->insert("reviews", ['review_name' => $name, 'review_email' => $email, 'review_details' => $details]);

if ($review) {
    echo "<script>alert('Review Submiited Successfully');</script>";
    echo "<script>window.location='reviews.php';</script>";
} else {
    echo "<script>alert('Error .... Review Not Submiited !');</script>";
    echo "<script>window.location='reviews.php';</script>";

    //echo alert('Successful', 'User Added!', true);
}

?>

</html>
