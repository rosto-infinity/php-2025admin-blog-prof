<?php
session_start();
require_once "database/database.php";
// Initialisation du Paginator
require_once 'vendor/autoload.php';

use JasonGrimes\Paginator;

// Requête comptant le total d'articles
$totalQuery = $pdo->query("SELECT COUNT(*) FROM articles");
$totalItems = $totalQuery->fetchColumn();

$itemsPerPage = 12; // Nombre d'articles par page
$currentPage = $_GET['page'] ?? 1; // Page actuelle

// Requête paginée (optimisée pour MySQL)
$offset = ($currentPage - 1) * $itemsPerPage;

$sql = '
    SELECT 
        articles.id, 
        articles.title, 
        articles.introduction, 
        articles.created_at, 
        articles.image, 
        (SELECT COUNT(*) FROM comments WHERE comments.article_id = articles.id) AS comment_count
    FROM articles
    ORDER BY articles.created_at DESC
    LIMIT :limit OFFSET :offset
';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':limit', $itemsPerPage, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$articles = $stmt->fetchAll();

$paginator = new Paginator(
    $totalItems,
    $itemsPerPage,
    $currentPage,
    '?page=(:num)' // Format de l'URL
);





$pageTitle = 'Page  Dashboard';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/blog/index_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/blog-layout/blog-layout_html.php';
