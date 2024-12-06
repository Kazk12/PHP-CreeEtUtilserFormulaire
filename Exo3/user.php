<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ./index.php');
    die();
}

if (
    !isset(
        $_GET['firstName'],
        $_GET['lastName'],
    )
) {
    header('location: ./index.php');
    return;
}

if (
    empty($_GET['firstName']) ||
    empty($_GET['lastName'])
) {
    header('location: ./index.php');
    return;
}

// input sanitization
$firstName = htmlspecialchars(trim($_GET['firstName']));
$lastName = htmlspecialchars(trim($_GET['lastName']));


// a remplir en fonction de vos prerequis
if(
    strlen($firstName) > 50 ||
    strlen($lastName) > 50
) {
    header('location: ./index.php');
    return;
}



//  Mon code

echo $firstName . ' ' .  $lastName;