<?php

session_start();
require_once 'database/database.php';

session_unset(); // -Détruire toutes les variables de session
session_destroy(); // Détruire la session

header('Location: index.php');
