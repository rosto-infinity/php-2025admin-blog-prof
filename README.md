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

## 🏗️ **Structure du projet**

### 📂 **Fichiers principaux**
- `index.php` → **Page d’accueil** du blog (articles paginés)  
  ![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white)
- `article.php` → Affichage d’un **article complet**  
  ![HTML](https://img.shields.io/badge/-HTML-E34F26?logo=html5&logoColor=white)
- `update-article.php` → **Modification** d’un article  
  ![Edit](https://img.shields.io/badge/-Edit-0078D4?logo=pencil&logoColor=white)
- `delete-article.php` → **Suppression** d’un article  
  ![Delete](https://img.shields.io/badge/-Delete-FF0000?logo=trash&logoColor=white)
- `login.php` → **Connexion** utilisateur  
  ![Login](https://img.shields.io/badge/-Login-32CD32?logo=sign-in&logoColor=white)
- `register.php` → **Inscription** utilisateur  
  ![Register](https://img.shields.io/badge/-Register-FFA500?logo=user-plus&logoColor=white)
- `logout.php` → **Déconnexion** utilisateur  
  ![Logout](https://img.shields.io/badge/-Logout-8B0000?logo=sign-out&logoColor=white)

### 🖥️ **Tableaux de bord**
- `user-dashboard.php` → Tableau de bord **utilisateur**  
  ![Dashboard](https://img.shields.io/badge/-Dashboard-6A5ACD?logo=chart-bar&logoColor=white)
- `admin-dashboard.php` → Tableau de bord **administrateur**  
  ![Admin](https://img.shields.io/badge/-Admin-000000?logo=shield&logoColor=white)

### 🛠️ **Configuration et ressources**
- `database.php` → Connexion à la **base de données MySQL**  
  ![MySQL](https://img.shields.io/badge/-MySQL-4479A1?logo=mysql&logoColor=white)
- `resources/views/` → **Templates HTML** (blog, admin, utilisateurs)  
  ![Templates](https://img.shields.io/badge/-Templates-FFD700?logo=code&logoColor=black)
- `resources/css/` → **Styles CSS**  
  ![CSS](https://img.shields.io/badge/-CSS-1572B6?logo=css3&logoColor=white)
- `public/images/` → **Images de l’interface**  
  ![Images](https://img.shields.io/badge/-Images-FF69B4?logo=image&logoColor=white)
- `storage/articles/` → **Images des articles**  
  ![Storage](https://img.shields.io/badge/-Storage-808080?logo=save&logoColor=white)
- `vendor/` → **Dépendances PHP** (dont `jasongrimes/paginator`)  
  ![Composer](https://img.shields.io/badge/-Composer-885630?logo=composer&logoColor=white)


Installer les dépendances

Configurer la base de données

Modifier les paramètres dans database/database.php selon votre environnement
Importer le schéma SQL dans votre serveur MySQL
Lancer le serveur

# Projet : Blog PHP

Ce projet est un blog développé en PHP avec une architecture MVC, utilisant MySQL pour la base de données et des technologies modernes pour le frontend et le backend.

---

## 🌟 **Technologies utilisées**

### Backend
- ![PHP](https://img.shields.io/badge/PHP-%23777BB4.svg?style=flat&logo=php&logoColor=white) PHP (PDO, sessions)

### Frontend
- ![HTML](https://img.shields.io/badge/HTML-%23E34F26.svg?style=flat&logo=html5&logoColor=white) HTML
- ![CSS](https://img.shields.io/badge/CSS-%231572B6.svg?style=flat&logo=css3&logoColor=white) CSS
- ![JavaScript](https://img.shields.io/badge/JavaScript-%23F7DF1E.svg?style=flat&logo=javascript&logoColor=black) JavaScript (pour l’interactivité)

### Base de données
- ![MySQL](https://img.shields.io/badge/MySQL-%2300f.svg?style=flat&logo=mysql&logoColor=white) MySQL

### Librairies
- ![Paginator](https://img.shields.io/badge/Paginator-%23000000.svg?style=flat&logo=github&logoColor=white) jasongrimes/paginator

---

## 🗂️ **Organisation des vues**

- **Blog** : `blog`
- **Admin** : `admin`
- **Layouts** : `layouts`
- **Utilisateurs** : `users`

---

## 🔒 **Sécurité**

- Protection des accès par session
- Validation des formulaires côté serveur
- Échappement des données affichées (XSS)

---

## 🎨 **Personnalisation**

- Les styles sont modifiables dans `css`
- Les images peuvent être remplacées dans `images`

---

## 🤝 **Contribution**

Les contributions sont les bienvenues ! Merci de proposer vos améliorations via des **pull requests**.

---

## 📝 **Licence**

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.


Licence
Ce projet est à usage pédagogique.

