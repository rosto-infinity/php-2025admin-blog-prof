<!-- Ajouter Boxicons dans le head de votre fichier HTML -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>




<div class="admin">
   

    <?php if (isset($error)) : ?>
        <p style='color: #fff; padding: 10px; background: var(--primary-color); width: 400px;'><?= $error ?></p>
    <?php endif; ?>

    
    <form class="form" id="form" method="post" enctype="multipart/form-data" action="admin.php">
        <div class="form-control">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="form-control" hidden>
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug">
        </div>


        <div class="form-control">
            <label for="introduction">Introduction:</label>
            <textarea name="introduction" id="introduction"></textarea>
        </div>


        <div class="form-control">
            <label for="content">Content:</label>
            <textarea name="content" id="content"></textarea>
        </div>

        
        <div class="form-control">
            <label for="image">Image de l'article:</label>
            <input type="file" name="image" id="image" accept="image/*">
        </div>
        <div class="form-control">
            <button type="submit" name="add-article" value="add-article">Ajouter</button>
        </div>
    </form>
</div>

<h1>Nos articles</h1>
<p>Il y a <?= count($allArticles); ?> articles</p>

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
                <td><?= $article['title'] ?></td>
                <td><?= $article['introduction'] ?></td>
                <td><?= $article['created_at'] ?></td>
                <td style="display: flex; justify-content: center; align-items: center; text-decoration: none;">
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
