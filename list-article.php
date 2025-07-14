<?php
session_start();
require_once 'database/database.php';

// Vérifiez les autorisations d'accès à la page
if ($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}
function clean_input($data)
{
  return htmlspecialchars(stripslashes(trim($data)));
}
// Gestion de la recherche
$searchTerm = '';
if (isset($_POST['search'])) {
    $searchTerm = clean_input($_POST['search']);
}

// Récupération de tous les articles avec gestion des images
$query = "SELECT * FROM articles";
if (!empty($searchTerm)) {
    $query .= " WHERE title LIKE :searchTerm OR introduction LIKE :searchTerm";
}
$query .= " ORDER BY created_at DESC";

$resultats = $pdo->prepare($query);
if (!empty($searchTerm)) {
    $resultats->bindValue(':searchTerm', '%' . $searchTerm . '%');
}
$resultats->execute();
$allArticles = $resultats->fetchAll(PDO::FETCH_ASSOC);

$pageTitle = 'Page Add articles';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/admin/articles/list-article_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/admin-layout/layout_html.php'; 