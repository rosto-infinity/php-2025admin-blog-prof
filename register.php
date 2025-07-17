<?php

session_start();
require_once 'database/database.php';

$errors = [];
$success = [];

if (isset($_POST['register'])) {
    // echo 'ok';
    // die;

    // Pseudo--------------------------------
    if (empty($_POST['username']) || ! preg_match('#^[a-zA-Z0-9_]+$#', $_POST['username'])) {

        $errors['username'] = 'Pseudo non valide';
    } else {

        $query = 'SELECT * FROM users WHERE username = ?';
        $req = $pdo->prepare($query);
        $req->execute([$_POST['username']]);

        if ($req->fetch()) {
            $errors['username'] = "Ce pseudo n'est plus disponible";
        }
    }

    // Email---------------------------------------
    if (empty($_POST['email']) || ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email non valide';
    } else {
        // SELECT * FROM users WHERE email = post
        $query = 'SELECT * FROM users WHERE email = ?';
        $req = $pdo->prepare($query);
        $req->execute([$_POST['email']]);
        if ($req->fetch()) {
            $errors['email'] = 'Cet email est déjà pris';
        }
    }

    // Password-----------------------------------------
    if (empty($_POST['password'])) {
        $errors['password'] = 'Vous devez entrer un mot de passe ';
    } elseif ($_POST['password'] !== $_POST['confirm_password']) {
        $errors['password'] = 'Votre mot de passe ne correspond pas !';
    }

    // INSERT INTO------------------------------------------
    if (empty($errors)) {
        $query = 'INSERT INTO users (username,email,password) VALUES(?,?,?)';
        $req = $pdo->prepare($query);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $req->execute([$_POST['username'], $_POST['email'], $password]);

        // On redirige vers la page de login

        header('Location: login.php');
        exit();
    }
    $success['register'] = 'Compte creer avec succcès !';
}

$pageTitle = 'Page  Register';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/users/register_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/blog-layout/blog-layout_html.php';
