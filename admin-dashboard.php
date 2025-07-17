<?php

session_start();
require_once 'database/database.php';

// Vérifiez les autorisations d'accès à la page
if ($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();

}

// Récupérer les statistiques depuis la base de données
$usersCount = $pdo->query('SELECT COUNT(*) AS count FROM users')->fetch(PDO::FETCH_ASSOC)['count'];
$commentsCount = $pdo->query('SELECT COUNT(*) AS count FROM comments')->fetch(PDO::FETCH_ASSOC)['count'];
$articlesCount = $pdo->query('SELECT COUNT(*) AS count FROM articles')->fetch(PDO::FETCH_ASSOC)['count'];
$categoriesCount = $pdo->query('SELECT COUNT(*) AS count FROM categories')->fetch(PDO::FETCH_ASSOC)['count'];

$pageTitle = 'Page  d\'accueil';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/admin/admin-dashboard_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/admin-layout/layout_html.php';
