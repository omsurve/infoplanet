<?php

include '../inc/database.php';


$db = new Database();
$mobile_number = $_REQUEST['mobile_number'];
$users = $db->select("admin", "*", ['mobile' => $mobile_number]);

if ( sizeof($users) > 0) {
    echo 'false';   
} else {
    echo 'true';
}
