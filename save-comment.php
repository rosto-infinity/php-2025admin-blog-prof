<?php

session_start();
require_once 'database/database.php';

// Vérifier si l'utilisateur est connecté
if (! isset($_SESSION['auth']['id'])) {
    header('Location: login.php');
    exit;
}

$user_auth = $_SESSION['auth']['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $content = htmlspecialchars($_POST['content'] ?? null);
    $article_id = $_POST['article_id'] ?? null;

    // Validation : Vérifier si le champ "content" est vide
    if (empty($content)) {
        $_SESSION['error'] = 'Le champ commentaire est obligatoire.';
        header('Location: article.php?id='.$article_id);
        exit;
    }

    // Vérification de l'existence de l'article
    $query = $pdo->prepare('SELECT COUNT(*) FROM articles WHERE id = :article_id');
    $query->execute(['article_id' => $article_id]);
    $articleExists = $query->fetchColumn();

    if (! $articleExists) {
        $_SESSION['error'] = "L'article spécifié n'existe pas.";
        header('Location: article.php?id='.$article_id);
        exit;
    }

    // Insertion du commentaire
    $query = $pdo->prepare('INSERT INTO comments (content, article_id, user_id, created_at) VALUES (:content, :article_id, :user_auth, NOW())');
    $query->execute(compact('content', 'article_id', 'user_auth'));

    // Rediriger vers la page de l'article après l'ajout du commentaire
    header('Location: article.php?id='.$article_id);
    exit;
}
