
<?php
//$id = $_REQUEST['id'];
$slide_id = $_REQUEST['slide_id'];
include '../inc/database.php';
include 'functions.php';
$db = new Database();



//print_r($_POST);
$delete = $db->delete("slides", ['slide_id' => $slide_id]);
if ($delete) {
   echo alert('Successful', 'Slide Deleted!', true);
   echo "<script>window.location='slides.php';</script>";
} else {
   echo alert('Oops!', 'Fail to Delete Slide!', false);
   echo "<script>window.location='slides.php';</script>";
   echo $db->error();
}

?>




