<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Blog</title>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/resources/css/footer.css"> <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" href="/resources/css/forms.css"> <!-- Lien vers votre fichier CSS -->
    <link rel="stylesheet" href="/resources/css/blog.css"> <!-- Lien vers votre fichier CSS -->
</head>
<body>
    <!-- Navbar -->
   

    <?php include('blog-navbar_html.php') ?>
   
    <main>
   
     <?= $pageContent ?>
   </main>
    <?php include('blog-footer_html.php') ?>

  
</body>
</html>
