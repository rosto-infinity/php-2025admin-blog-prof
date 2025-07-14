<?php
session_start();
require_once "database/database.php";

// Vérification des autorisations admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}

try {
    // Requête pour récupérer tous les utilisateurs (sans updated_at)
    $query = "SELECT id, username, email, role, created_at 
              FROM `users` 
              ORDER BY created_at DESC";
    
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pageTitle = 'Gestion des utilisateurs';

    ob_start();
    include 'resources/views/admin/users/list-users_html.php';
    $pageContent = ob_get_clean();

    include 'resources/views/layouts/admin-layout/layout_html.php';

} catch (PDOException $e) {
    die("Erreur de base de données : " . $e->getMessage());
}
