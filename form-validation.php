<?php

use \DateTime;

require __DIR__.'/vendor/autoload.php';

dump($_POST);

$errors = [];

if ($_POST) {
    if (empty($_POST['login'])) {
        $errors['login'] = 'veuillez remplir le champ';
    }

    $date = new DateTime();
    $maxYear = (int) $date->format('Y');
    $minYear = $maxYear - 100;

    if (empty($_POST['year'])) {
        $errors['year'] = 'veuillez remplir le champ';
    } elseif (!is_numeric($_POST['year'])) {
        $errors['year'] = 'merci de remplir ce champ avec une année valide';
    } elseif ((float) $_POST['year'] - (int) $_POST['year'] != 0) {
        $errors['year'] = 'merci de remplir ce champ avec une année valide';
    } elseif ($_POST['year'] <= $minYear || $_POST['year'] >= $maxYear) {
        $errors['year'] = "merci de remplir une année comprise entre {$minYear} et {$maxYear} inclus";
    }

    if (empty($_POST['email'])){
        $errors['email'] = 'veuillez remplir le champ';
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Validation</title>
</head>
<body>
    <form action="" method="post" novalidate>  <!-- novalidate outrepasse required dans input -->
        <div>
            <?php if (isset($errors['login'])): ?>
                <?= $errors['login'] ?>
            <?php endif ?>
        </div>
        <div>
            <input type="text" name="login" placeholder="login" required>
        </div>
        <?php if (isset($errors['year'])): ?>
                <?= $errors['year'] ?>
            <?php endif ?>
        <div>
            <input type="number" name="year" placeholder="year" required>
        </div>
        <?php if (isset($errors['email'])): ?>
                <?= $errors['email'] ?>
            <?php endif ?>
        <div>
            <input type="email" name="email" placeholder="email" required>
        </div>
        <div>
            <button type="submit">valider</button>
        </div>
    </form>
</body>
</html>
