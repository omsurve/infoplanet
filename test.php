<?php
$email = 'aygadsgsjdhgfjha@gmail.com'; // Replace with the email address you want to validate

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'The email address is valid.';
} else {
    echo 'The email address is not valid.';
}
?>