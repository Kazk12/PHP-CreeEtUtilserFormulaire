<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['lastName'],$_POST['firstName'], $_POST['genre'] , ))
{
    echo $_POST['genre' ]. "<br>";
    echo $_POST['lastName' ]. "<br>";
    echo $_POST['firstName' ] . "<br>";

    if(str_ends_with($_POST['Fichier'], ".pdf")){
        echo $_POST['Fichier' ] . "<br>";
    }
    


}else{


?>
<form action="./index.php" method="post">

<label for="select-genre">Choose you genre:</label>
<select name="genre" id="genre-select">
  <option value="">--Please choose you genre--</option>
  <option value="mme">Mme</option>
  <option value="mr">Mr</option>
</select>
        <label for="firstName"> Prenom :</label>
        <input type="text" name="firstName" id="firstName">

        <label for="lastName"> Nom de famille :</label>
        <input type="text" name="lastName" id="lastName">

        <input type="file" name="Fichier" id="Fichier">

        <input type="submit" value="Envoyer">

    </form>
    <?php }

?>
</body>
</html>