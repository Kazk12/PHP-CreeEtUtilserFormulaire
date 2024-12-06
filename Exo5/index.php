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





?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="./index.php" method="post">
        <label for="Civilite"> Votre Genre :</label>
        <select name="Genre" id="Genre">
            <option value="">--Choisi.e ton genre</option>
            <option value="Mme">Mme</option>
            <option value="Mr">Mr</option>
        </select>


        <label for="firstName"> Prenom :</label>
        <input type="text" name="firstName" id="firstName" required maxlength="10">

        <label for="lastName"> Nom de famille :</label>
        <input type="text" name="lastName" id="lastName">

        <input type="submit" value="Envoyer">

    </form>

<?php 
if (isset($_POST['lastName'], $_POST['firstName'] , $_POST['Genre'])) {
    echo "<p>bienvenue  {$_POST['Genre']} {$_POST['firstName']}  {$_POST['lastName']}   </p>";
} 

?>

    
</body>
</html>