<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    die();
}

if (
    !isset(
        $_POST['firstName'],
        $_POST['lastName'],
    )
) {
    header('location: ./index.php');
    return;
}

if (
    empty($_POST['firstName']) ||
    empty($_POST['lastName'])
) {
    header('location: ./index.php');
    return;
}

// input sanitization
$firstName = htmlspecialchars(trim($_POST['firstName']));
$lastName = htmlspecialchars(trim($_POST['lastName']));


// a remplir en fonction de vos prerequis
if(
    strlen($firstName) > 50 ||
    strlen($lastName) > 50
) {
    header('location: ./index.php');
    return;
}



//  Mon code

var_dump($firstName, $lastName);