<?php
session_start();
require_once "database/database.php";





$pageTitle = 'Page  d\'accueil user';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/users/user-dashboard_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/user-layout/layout-user_html.php';
