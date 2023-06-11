<?php

function generatePassword($passwordLength) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';

    for ($i = 0; $i < $passwordLength; $i++) {
        $randomIndex = random_int(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}