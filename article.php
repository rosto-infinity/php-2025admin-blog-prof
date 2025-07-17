<?php

session_start();
require_once 'database/database.php';

$error = [];

$article_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($article_id === null || $article_id === false) {
    $error['article_id'] = 'Le parametre id  est invalide.';
}
$sql = 'SELECT * FROM articles WHERE id =:article_id';
$query = $pdo->prepare($sql);
$query->execute(compact('article_id'));
$article = $query->fetch();

$sql = 'SELECT comments.*, users.username 
FROM comments
JOIN users ON comments.user_id = users.id
WHERE article_id = :article_id';
$query = $pdo->prepare($sql);
$query->execute(compact('article_id'));
$commentaires = $query->fetchAll();

// Récupérer les catégories
$categories = $pdo->query('SELECT * FROM categories')->fetchAll(PDO::FETCH_ASSOC);


// Récupérer les statistiques
$usersCount = $pdo->query('SELECT COUNT(*) AS count FROM users')->fetch(PDO::FETCH_ASSOC)['count'];
$commentsCount = $pdo->query('SELECT COUNT(*) AS count FROM comments')->fetch(PDO::FETCH_ASSOC)['count'];
$articlesCount = $pdo->query('SELECT COUNT(*) AS count FROM articles')->fetch(PDO::FETCH_ASSOC)['count'];
$categoriesCount = $pdo->query('SELECT COUNT(*) AS count FROM categories')->fetch(PDO::FETCH_ASSOC)['count'];

// Récupérer les 5 derniers articles
$latestArticles = $pdo->query('SELECT * FROM articles ORDER BY created_at DESC LIMIT 5')->fetchAll(PDO::FETCH_ASSOC);

// / 1--On affiche le titre autre

$pageTitle = 'Accueil des articles';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/blog/show_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/blog-layout/blog-layout_html.php';
