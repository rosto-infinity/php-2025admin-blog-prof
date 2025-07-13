<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='/resources/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="/resources/css/style.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<title>Stage Admin-blog PHP 2025 - <?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
  <?php include('sidebar_html.php') ?>
  
	<!-- SECTION -->
	<section id="content">
    <?php include('header_html.php') ?>
   
    <main>
     <?= $pageContent ?>
   </main>

  	</section>
	<!-- End -SECTION -->

		<?php include('footer_html.php') ?>

</body>
</html>
