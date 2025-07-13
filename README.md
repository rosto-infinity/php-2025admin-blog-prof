# Stage-blogphp-2025

![PHP](https://img.shields.io/badge/PHP-8.x-blue) ![MySQL](https://img.shields.io/badge/MySQL-8.x-blue) ![License](https://img.shields.io/badge/Licence-Pedagogique-green)

## Auteur

**Prof Waffo lele rostand**

---

## Description

Stage-blogphp-2025 est une application web de blog développée en PHP, permettant la gestion d’articles, de commentaires, et d’utilisateurs avec une interface d’administration et un tableau de bord utilisateur. Ce projet illustre les compétences en développement web fullstack acquises lors du stage professionnel en Génie Logiciel.

---

## Fonctionnalités

- 📄 **Gestion des articles** : création, modification, suppression, affichage paginé
- 💬 **Commentaires** : ajout, affichage, suppression par l’auteur
- 🔐 **Authentification** : inscription, connexion, déconnexion des utilisateurs
- 📊 **Tableaux de bord** :
  - **Admin** : statistiques, gestion des contenus
  - **Utilisateur** : suivi des activités et informations personnelles
- 🔢 **Pagination** : intégration du package [`jasongrimes/paginator`](https://github.com/jasongrimes/php-paginator)
- 🎨 **Interface moderne** : CSS personnalisé, images et icônes

---

## Structure du projet
index.php
 # Page d’accueil du blog, articles paginés article.php
# Affichage d’un article update-article.php
 # Modification d’un article delete-article.php 
 # Suppression d’un article login.php 
 # Connexion utilisateur register.php 
 # Inscription utilisateur logout.php 
 # Déconnexion utilisateur user-dashboard.php 
 # Tableau de bord utilisateur admin-dashboard.php 
 # Tableau de bord administrateur database.php 
 # Connexion à la base de données MySQL resources/views/ 
 # Templates HTML (blog, admin, utilisateurs) resources/css/ 
 # Styles CSS publicAll/images/ 
 # Images de l’interface storage/articles/ 
 # Images des articles vendor/ # Dépendances PHP (dont paginator)

Installer les dépendances

Configurer la base de données

Modifier les paramètres dans database/database.php selon votre environnement
Importer le schéma SQL dans votre serveur MySQL
Lancer le serveur

Accéder à http://localhost:8000

Technologies utilisées
Backend : PHP (PDO, sessions)
Frontend : HTML, CSS, JavaScript (pour l’interactivité)
Base de données : MySQL
Librairies : jasongrimes/paginator
Organisation des vues
Blog : blog
Admin : admin
Layouts : layouts
Utilisateurs : users
Sécurité
Protection des accès par session
Validation des formulaires côté serveur
Échappement des données affichées (XSS)
Personnalisation
Les styles sont modifiables dans css
Les images peuvent être remplacées dans images
Contribution
Les contributions sont les bienvenues ! Merci de proposer vos améliorations via des pull requests.

Licence
Ce projet est à usage pédagogique.

