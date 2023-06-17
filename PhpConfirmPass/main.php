<?php

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmedPassword = $_POST['confirmed_password'];

    if ($password === $confirmedPassword) {
        echo "Password matches the confirmed password!";
    } else {
        echo "Password does not match the confirmed password.";
    }

?>