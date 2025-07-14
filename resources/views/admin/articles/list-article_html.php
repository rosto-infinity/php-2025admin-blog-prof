
<style>
    /* Style pour le formulaire de recherche */
form {
    display: flex; /* Utilisation de flexbox pour aligner les éléments */
    justify-content: center; /* Centrer le formulaire */
    margin: 20px 0; /* Espacement vertical */
}

input[type="text"] {
    padding: 10px; /* Espacement interne */
    font-size: 16px; /* Taille de police */
    border: 1px solid #ccc; /* Bordure grise */
    border-radius: 4px; /* Coins arrondis */
    width: 300px; /* Largeur du champ de recherche */
    transition: border-color 0.3s; /* Transition pour l'effet au focus */
}

input[type="text"]:focus {
    border-color: #007bff; /* Couleur de la bordure au focus */
    outline: none; /* Suppression de l'outline par défaut */
}

button, .button {
    padding: 10px 15px; /* Espacement interne */
    font-size: 16px; /* Taille de police */
    border: none; /* Pas de bordure */
    border-radius: 4px; /* Coins arrondis */
    background-color: #a117f1; /* Couleur de fond */
    color: white; /* Couleur du texte */
    cursor: pointer; /* Curseur de main au survol */
    margin-left: 10px; /* Espacement entre le champ et le bouton */
    transition: background-color 0.3s; /* Transition pour l'effet au survol */
}

button:hover {
    background-color: #a117f1; /* Couleur de fond au survol */
}

</style>
<h1>Nos articles</h1>
<p>Il y a <?= count($allArticles); ?> articles</p>

<!-- Affichage des erreurs et succès -->
<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if (isset($success['update'])): ?>
    <div class="alert alert-success">
        <p><?= $success['update'] ?></p>
    </div>
<?php endif; ?>
<form method="POST" action="">
    <input type="text" name="search" placeholder="Rechercher un article..." value="<?= htmlspecialchars($searchTerm) ?>">
    <button type="submit">Rechercher</button>
   
     <a class="button" href="/list-article.php">Réinitialiser</a>
     <a class="button" href="/admin.php">Add Article</a>
</form>


<table class="article-table">
    <thead>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Introduction</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allArticles as $article) : ?>
            <tr>
                <td>
                    <?php if (!empty($article['image'])) : ?>
                        <img src="<?= $article['image'] ?>" alt="<?= htmlspecialchars($article['title']) ?>">
                    <?php endif; ?>
                </td>
                <td><?= htmlspecialchars($article['title']) ?></td>
                <td><?= htmlspecialchars($article['introduction']) ?></td>
                <td><?= htmlspecialchars($article['created_at']) ?></td>
                <td style="display: flex; justify-content: center; align-items: center;">
                    <a href="article.php?id=<?= urlencode($article['id']); ?>">
                        <i class='bx bx-show'></i>Show
                    </a>
                    <a href="update-article.php?id=<?= urlencode($article['id']); ?>">
                        <i class='bx bx-edit'></i>Edit
                    </a>
                    <a href="delete-article.php?id=<?= urlencode($article['id']); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?!')">
                        <i class='bx bx-trash'></i>Del
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>