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



.container {
    padding: 20px 100px;
    background-color: #fff;
    border-radius: 8px;
    margin-bottom: 20px;
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
    <h1 class="article-title"><?= htmlspecialchars($article['title']) ?></h1>

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
            <button type="submit" class="comment-form-submit">COMMENTER !</button>
        </form>
    <?php else : ?>
        <p>Veuillez vous connecter ou vous inscrire pour commenter.</p>
        <a href="register.php">S'inscrire</a> | <a href="login.php">Se connecter</a>
    <?php endif; ?>

    <p><a href="index.php">← Retour à l'accueil</a></p>
</div>
