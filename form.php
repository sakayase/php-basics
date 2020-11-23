<?php

## http://localhost:8000/form.php?login=test&email=test%40domain.com 
echo '<pre>';
var_dump($_GET);   ## permet de retrouver toutes les données renvoyées par la methode GET (données dans l'url !!!!!)  /!\ PAS SECURISE POUR DONNES CONFIDENTIELLES /!\
echo '<pre>';

echo $_GET['login']; ## permet de trouver la valeur avec clé login dans les données renvoyées par la methode GET


echo '<pre>';
var_dump($_POST);   ## permet de retrouver toutes les données renvoyées par la methode POST (données envoyées par l'utilisateur)
echo '<pre>';

echo $_POST['login']; ## permet de trouver la valeur avec clé login dans les données renvoyées par la methode POST

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>method get</h2>
    <form action="" method="get">
        <input type="text" name="login">
        <input type="text" name="email">
        <button type="submit">ok</button>
    </form>
    <h2>method post</h2>
    <form action="" method="post">
        <input type="text" name="login">
        <input type="text" name="email">
        <button type="submit">ok</button>
    </form>
</body>
</html>