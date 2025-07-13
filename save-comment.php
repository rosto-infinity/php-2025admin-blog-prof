<?php
session_start();
require_once 'database/database.php';

if (!isset($_SESSION['auth']['id'])) {
  header("Location: login.php");
  exit;
}


$user_auth = $_SESSION['auth']['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  $content = htmlspecialchars($_POST['content'] ?? null);
  $article_id = $_POST['article_id'] ?? null;

  // Vérification de l'existence de l'article
  $query = $pdo->prepare('SELECT COUNT(*) FROM articles WHERE id = :article_id');
  $query->execute(['article_id' => $article_id]);
  $articleExists = $query->fetchColumn();


  //Insertion du commentaire

  $query = $pdo->prepare("INSERT INTO
   comments (content, article_id, user_id, created_at)
   VALUES(:content, :article_id, :user_auth , NOW())
   ");
  $query->execute(compact('content', 'article_id', 'user_auth'));


  //Rediriger vers la pages des articles apre l'ajout du commentaire
  header("Location: article.php?id=" . $article_id);
   exit;
 
}
