

<style>

  :root {
    --primary-color: #a117f1;
    --secondary-color: #333;
    --background-color: #f4f4f4;
    --text-color: #333;
    --hover-color: #8d079c;
    --border-color: #e0e0e0;
    --comment-bg: #ffffff;
}

.error-message {
    color: red;
    background-color: #ffe6e6;
    padding: 10px;
    border: 1px solid red;
    border-radius: 5px;
    margin-bottom: 20px;
}
/* Sidebar Styles */
.sidebar {
    position: sticky;
    top: 20px;
    width: 350px; /* Largeur fixe */
    padding: 20px; /* Espace intérieur */
    background-color: var(--comment-bg); /* Couleur de fond */
    border-radius: 12px; /* Bordures arrondies */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); /* Ombre douce */
    margin-left: 20px; /* Marge à gauche */
    border: 1px solid rgba(0, 0, 0, 0.1); /* Contour léger */
    height: fit-content;
}

.sidebar h3 {
    color: var(--primary-color);
    margin-bottom: 15px;
    margin-top: 25px;
    font-size: 1.2em;
    text-decoration: underline;
    display: flex;
    align-items: center;
    gap: 8px; /* Espace entre l'icône et le texte */
}

.sidebar ul {
    padding: 0;
    list-style: none;
}

.sidebar ul li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px; /* Espace entre l'icône et le texte */
}

.sidebar ul li a {
    color: var(--secondary-color);
    text-decoration: none;
    transition: color 0.3s;
}

.sidebar ul li a:hover {
    color: var(--hover-color);
}


.stats {
    background-color: #f9f9f9; /* Fond léger */
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 0, 0, 0.1); /* Contour léger */
    max-width: 400px; /* Largeur maximale */
    margin: 20px auto; /* Centrage */
}

.stats h3 {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.stats p {
    font-size: 1.1em;
    color: #555;
    margin: 10px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.stats p i {
    color: #007bff; /* Couleur des icônes */
    font-size: 1.2em;
}

.stats p u {
    font-weight: bold;
    color: #333; /* Couleur des nombres soulignés */
    text-decoration: none;
    background-color: #e9ecef; /* Fond léger pour les nombres */
    padding: 3px 8px;
    border-radius: 4px;
}

.sidebar .stats p {
    margin: 5px 0;
    font-size: 0.9em;
    color: var(--secondary-color);
    display: flex;
    align-items: center;
    gap: 8px; /* Espace entre l'icône et le texte */
}

/* Icônes avec FontAwesome */
.sidebar h3 i,
.sidebar ul li i,
.sidebar .stats p i {
    font-size: 1em;
    color: var(--primary-color);
}

/* Responsive Design */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        margin-left: 0;
        margin-bottom: 20px;
    }
}


/* Conteneur principal */
.container {
    padding: 20px 100px;
    background-color: #fff;
    border-radius: 8px;
    margin-bottom: 20px;
    display: flex; /* Ajouté pour une mise en page flexible */
    justify-content: space-between; /* Espacement entre les colonnes */
}
/* Contenu principal */
.main-content {
    flex: 1; /* Permet au contenu principal de prendre l'espace restant */
    margin-right: 20px; /* Espace entre le contenu principal et la sidebar */
}
/* Responsive Design */
@media (max-width: 768px) {
    .container {
        flex-direction: column; /* Empile les éléments sur les petits écrans */
        padding: 20px;
    }

    .sidebar {
        width: 100%;
        float: none;
        margin-left: 0;
        margin-bottom: 20px;
    }

    .main-content {
        margin-right: 0;
    }
}
h1.article-title {
    color: var(--primary-color);
    font-size: 2.5em;
    margin-bottom: 10px;
}

p {
    line-height: 1.6;
}

.comment-heading {
    margin: 20px 0;
    font-size: 1.5em;
    color: var(--secondary-color);
}

.comment {
    border: 1px solid var(--border-color);
    border-radius: 8px;
    padding: 15px;
    margin: 10px 0;
    background-color: var(--comment-bg);
    transition: box-shadow 0.3s;
}

.comment:hover {
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

.comment-author {
    font-weight: bold;
    color: var(--primary-color);
}

.comment-date {
    color: #777;
    font-size: 0.9em;
}

.comment-content {
    margin: 10px 0;
}

.delete-comment-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: bold;
}

.delete-comment-link:hover {
    text-decoration: underline;
}

.comment-form {
    margin-top: 20px;
    border-top: 1px solid var(--border-color);
    padding-top: 20px;
}

.comment-form-heading {
    font-size: 1.5em;
    color: var(--primary-color);
}

.comment-form-content {
    width: 100%;
    padding: 10px;
    border: 1px solid var(--border-color);
    border-radius: 4px;
    resize: vertical; /* Permet de redimensionner verticalement */
}

.comment-form-content:focus {
    border-color: var(--primary-color);
}

.comment-form-submit {
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.comment-form-submit:hover {
    background-color: var(--hover-color);
}

a {
    color: var(--primary-color);
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 600px) {
    .container {
        padding: 10px;
    }

    h1.article-title {
        font-size: 2em;
    }
}

</style>
    
<div class="container">
    <div class="main-content">
        <h1 class="article-title"><?= htmlspecialchars($article['title']) ?></h1>
        
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error-message"><?= $_SESSION['error'] ?></div>
        <?php endif; ?>
         
        <p><?= nl2br(htmlspecialchars($article['content'])) ?></p>
        <em>Posté le <?= htmlspecialchars($article['created_at']) ?></em><br>

        <?php if (count($commentaires) === 0) : ?>
            <h2 class="comment-heading">
                Il n'y a pas encore de commentaires pour cet article... <strong>SOYEZ LE PREMIER ! :D</strong>
            </h2>
        <?php else : ?>
            <h2 class="comment-heading">
                Il y a déjà <?= count($commentaires) ?> réaction<?= count($commentaires) > 1 ? 's' : '' ?> :
            </h2>

            <?php foreach ($commentaires as $commentaire) : ?>
                <div class="comment">
                    <h3 class="comment-author">Commentaire de : <?= htmlspecialchars($commentaire['username']) ?></h3>
                    <small class="comment-date"><?= htmlspecialchars($commentaire['created_at']) ?></small>
                    <blockquote class="comment-content">
                        <em><?= nl2br(htmlspecialchars($commentaire['content'])) ?></em>
                    </blockquote>

                    <?php if (isset($_SESSION['auth']) && $_SESSION['auth']['id'] === $commentaire['user_id']) : ?>
                        <a 
                            href="delete-comment.php?id=<?= $commentaire['id'] ?>&article_id=<?= $article_id ?>" 
                            class="delete-comment-link"
                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?')"
                        >
                            Supprimer
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['auth'])) : ?>
            <!-- Formulaire de commentaire -->
            <form action="save-comment.php" method="POST" class="comment-form">
                <h3 class="comment-form-heading">Vous voulez réagir ? N'hésitez pas !</h3>
               
                <textarea name="content" cols="30" rows="10" placeholder="Votre commentaire..." class="comment-form-content"></textarea><br>
                <input type="hidden" name="article_id" value="<?= $article_id ?>">
                <input type="hidden" name="user_id" value="<?= $_SESSION['auth']['id'] ?>">
                <button style="width: 250px; margin-bottom: 11px;" type="submit" class="comment-form-submit">COMMENTER !</button>
            </form>
        <?php else : ?>
            <p>Veuillez vous connecter ou vous inscrire pour commenter.</p>
            <a href="register.php">S'inscrire</a> | <a href="login.php">Se connecter</a>
        <?php endif; ?>

        <p><a href="index.php">← Retour à l'accueil</a></p>
    </div>

   <div class="sidebar">
    <h3><i class="fas fa-folder"></i> Catégories</h3>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><i class="fas fa-tag"></i><a href="category.php?id=<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></a></li>
        <?php endforeach; ?>
    </ul>

   <div class="stats">
    <h3><i class="fas fa-chart-bar"></i> Statistiques</h3>
    <p><i class="fas fa-users"></i> Nombre d'utilisateurs : <u><?= $usersCount ?></u></p>
    <p><i class="fas fa-comments"></i> Nombre de commentaires : <u><?= $commentsCount ?></u></p>
    <p><i class="fas fa-file-alt"></i> Nombre d'articles : <u><?= $articlesCount ?></u></p>
    <p><i class="fas fa-tags"></i> Nombre de catégories : <u><?= $categoriesCount ?></u></p>
</div>

    <h3><i class="fas fa-newspaper"></i> Derniers articles</h3>
    <ul>
        <?php foreach ($latestArticles as $article) : ?>
            <li><i class="fas fa-file"></i><a href="article.php?id=<?= $article['id'] ?>"><?= htmlspecialchars($article['title']) ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

</div>
