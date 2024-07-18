<?php

require_once '../inc/database.php';

$database = new Database();

function alert($title, $text, $success = true) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['msg']['title'] = $title;
    $_SESSION['msg']['text'] = $text;
    $_SESSION['msg']['type'] = $success == true ? 'success' : 'error';
}

function show_date($date) {
    if ($date) {
        return date('d-m-Y', strtotime($date));
    } else {
        return '-';
    }
}

