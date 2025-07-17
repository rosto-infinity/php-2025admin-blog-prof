
<div class="admin">
    <!-- Affichage des erreurs et succès -->
    <?php if (! empty($error)) { ?>
        <div class="alert alert-danger">
            <p><?= $error ?></p>
        </div>
    <?php } ?>

    <link rel="stylesheet" href="/resources/css/cheditor.css">
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
            <textarea name="content" id="content" class="ckeditor"></textarea>
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
<script>
    var content = CHEDITOR.instances.content.getData();
</script>

