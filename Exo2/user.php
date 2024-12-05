<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

if (isset($_POST['lastName'], $_POST['firstName'])) {
    echo "<p>bienvenue {$_POST['firstName']}  {$_POST['lastName']} </p>";
}

?>

</body>
</html>