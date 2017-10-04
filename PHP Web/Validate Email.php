<?php
$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail ($email_a) указан верно.\n";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail ($email_b) указан верно.\n";
} else {
    echo "E-mail ($email_b) указан неверно.\n";
}
?>