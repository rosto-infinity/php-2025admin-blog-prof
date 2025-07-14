
<style>
  .comment-container {
    font-family: Arial, sans-serif;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.user-section {
    border-bottom: 1px solid #ddd;
    padding: 20px 0;
}

.username {
    color: #333;
    font-size: 1.5em;
    margin-bottom: 10px;
}

.comment-list {
    list-style: none;
    padding: 0;
}

.comment-item {
    background: #f9f9f9;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.comment-content {
    margin: 0;
    color: #555;
}

.comment-date, .comment-article {
    font-size: 0.9em;
    color: #777;
}
.badge {
    font-size: 0.6em;
    vertical-align: middle;
    margin-left: 8px;
}

.article-link {
    color: #1e88e5;
    text-decoration: none;
    margin-left: 15px;
    font-size: 0.9em;
}

.article-link:hover {
    text-decoration: underline;
}

.comment-meta {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.8em;
}

</style>
<div class="comment-container">
    <h1>Commentaires par utilisateur</h1>
    
    <?php if (empty($users)): ?>
        <p class="alert alert-info">Aucun utilisateur trouvé.</p>
    <?php else: ?>
        <?php foreach ($users as $user): ?>
            <div class="user-section mb-4">
                <!-- Affiche le nom + nombre de commentaires -->
                <h2 class="username">
                    <?= htmlspecialchars($user['username']) ?>
                    <span class="badge bg-secondary"><?= $user['comment_count'] ?> commentaire(s)</span>
                </h2>
                
                <?php if (empty($user['comments'])): ?>
                    <p class="alert alert-warning">Aucun commentaire.</p>
                <?php else: ?>
                    <ul class="comment-list">
                        <?php foreach ($user['comments'] as $comment): ?>
                            <li class="comment-item">
                                <p class="comment-content"><?= htmlspecialchars($comment['content']) ?></p>
                                <div class="comment-meta">
                                    <span class="comment-date">Posté le : <?= $comment['created_at'] ?></span>
                                    <!-- Lien vers l'article -->
                                    <?php if (!empty($comment['article_id'])): ?>
                                        <a href="article.php?id=<?= urlencode($comment['article_id']) ?>" class="article-link">
                                            → Voir l'article : <?= htmlspecialchars($comment['article_title']) ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>



