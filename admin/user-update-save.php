
<?php
$id = $_REQUEST['id'];
include '../inc/database.php';
include 'functions.php';
$db = new Database();
$name = $_POST['name'];
$mobile = $_POST['mobile_number'];
$type = $_POST['type'];
$address = $_POST['address'];
$can_login = $_POST['can_login'];
$gender = $_POST['gender'];
$birth_date = $_POST['birth_date'];
$other = $_POST['other'];
$salary = $_POST['salary'];


//print_r($_POST);
$user = $db->update("admin", ['name' => $name, 'mobile' => $mobile, 'address' => $address, 'type' => $type, 'salary' => $salary, 'gender' => $gender, 'birth_date' => $birth_date, 'can_login' => $can_login, 'other_details' => $type], ['id' => $id]);
if ($user){
   echo alert('Successful', 'User Information Updated!', true);
   header("location:users.php");
//   echo "<script>window.location='users.php';</script>";
} else {
   echo alert('Oops!', 'Fail to Update User Information!', false);
     header("location:user-update.php?id=".$id);
//   echo "<script>window.location='user-update.php?id='.$id;</script>";
   // echo $db->error();
}

?>


