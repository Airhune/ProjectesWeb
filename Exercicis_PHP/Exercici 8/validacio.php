<?php
if (!empty($_POST)) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $f_age = floatval($age);
    $i_age = intval($f_age);

    if ( (strlen($username) > 20) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || (!is_numeric($age)) || ($f_age - $i_age) || ($i_age < 1 || $i_age > 120) ) {
        include("formulari.php");
    } else {
        echo 'The username is: ' . $username . '<br/>';
        echo 'The email is: ' . $email . '<br/>';
        echo 'The age is: ' . $age . '<br/>';
    }
}
