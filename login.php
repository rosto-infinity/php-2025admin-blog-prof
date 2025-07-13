<?php
session_start();
require_once "database/database.php";


$errors =[]; 


if (isset($_POST['login'])) {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {

      // -Vérification des informations de connexion
      $query = "SELECT * FROM users
      WHERE (email = :email OR username =:email)";
      $query = $pdo->prepare($query);
      $query->execute([
          'email' => $_POST['email'], 
          'password' => $_POST['password']
      ]);
      $user = $query->fetch();
      // --Si les informations de connexion sont correctes, on crée une session et on redirige vers la page d'accueil de l'admin ou l'utilisateur

      if ($user && password_verify($_POST['password'], $user['password'])) {
          $_SESSION['auth'] = $user;
          $_SESSION['role'] = $user['role'];
         

          // -Redirection en fonction du rôle
          switch ($user['role']) {
              case 'admin':
                  header("Location: admin-dashboard.php");
                  break;

              default:
                  header("Location: user-dashboard.php");
                  break;
          }
      } else {
          $errors['email'] = "Email ou mot de passe incorrect.";
      }
  }else{
      $errors['login'] = "Tous les champs doivent être remplis.";
  }
}



$pageTitle = 'Page  login';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/users/login_html.php';


// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/blog-layout/blog-layout_html.php';
