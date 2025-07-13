<!-- Ajouter Boxicons dans le head de votre fichier HTML -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    /* Thème de couleurs */
    :root {
        --primary-color: #a117f1; /* bleu-violet */
        --secondary-color: #333; /* Noir */
        --background-color: #f4f4f4; /* Gris clair */
        --text-color: #333; /* Noir */
        --hover-color: #8d079c; /* bleu-violet foncé */
    }

    /* Style général */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: var(--background-color);
        color: var(--text-color);
        margin: 0;
        padding: 0;
    }

    h1, h2, h3 {
        color: var(--primary-color);
    }

    h1 {
        text-align: center;
        margin-bottom: 2rem;
    }

    u {
        text-decoration: none;
        border-bottom: 3px solid var(--primary-color);
    }

    /* Section Admin */
    .admin {
        padding: 2rem;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }

    .admin h3 {
        color: var(--secondary-color);
        margin-bottom: 1rem;
    }

    .article.adm {
        text-align: center;
        margin-bottom: 2rem;
    }

    /* Formulaire */
    .form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .form-control {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .form-control label {
        font-weight: bold;
        color: #555;
    }

    .form-control input,
    .form-control textarea {
        padding: 0.8rem;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
    }

    .form-control textarea {
        resize: vertical;
        min-height: 150px;
    }

    .form-control button {
        padding: 0.8rem 1.5rem;
        background-color: var(--primary-color);
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .form-control button:hover {
        background-color: var(--hover-color);
    }

    /* Tableau des articles */
    .article-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 2rem;
    }

    .article-table th,
    .article-table td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .article-table th {
        background-color: var(--primary-color);
        color: #fff;
    }

    .article-table tr:hover {
        background-color: #f9f9f9;
    }

    .article-table img {
        width: 100px;
        height: auto;
        border-radius: 5px;
    }

    .article-table a {
        color: var(--primary-color);
        text-decoration: none;
        margin-right: 0.5rem;
        transition: color 0.3s ease;
    }

    .article-table a:hover {
        color: var(--hover-color);
    }

    /* Icônes Boxicons */
    .article-table i {
        margin-right: 0.3rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .article-table {
            display: block;
            overflow-x: auto;
        }
    }
</style>

<h1><u>Gestion des articles</u></h1>
<!-- Contenu spécifique à l'admin -->
<h3>Hello <?= isset($_SESSION["auth"]['username']) ? $_SESSION["auth"]['username'] : "" ?></h3>

<div class="admin">
    <div class="article adm">
        <span style='color: var(--primary-color); font-size: 4rem; text-align: center; font-weight: 700;'>Administrateur : </span>
    </div>

    <?php if (isset($error)) : ?>
        <p style='color: #fff; padding: 10px; background: var(--primary-color); width: 400px;'><?= $error ?></p>
    <?php endif; ?>

    <h1>Ajouter un nouvel article</h1>
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
                        <i class='bx bx-show'></i>
                    </a>
                    <a href="edit-article.php?id=<?= urlencode($article['id']); ?>">
                        <i class='bx bx-edit'></i>
                    </a>
                    <a href="delete-article.php?id=<?= urlencode($article['id']); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?!')">
                        <i class='bx bx-trash'></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
