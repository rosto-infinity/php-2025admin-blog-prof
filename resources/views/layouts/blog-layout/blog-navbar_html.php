<!-- resources/views/layouts/blog-layout/blog-navbar_html.php -->
<nav>
    <div class="brand">
        <a href="index.php">
            <i class='bx bxs-home icon'></i> Blog PHP-Stage
        </a>
    </div>
    <div class="toggle-menu"><i class='bx bx-menu'></i></div>
    <ul class="nav-menu">
        <li><a href="index.php" class="active"><i class='bx bxs-home icon'></i> Accueil</a></li>
        <li>
            <a href="#"><i class='bx bxs-book-alt icon'></i> Articles</a>
            <ul class="nav-dropdown">
                <li><a href="#"><i class='bx bxs-category icon'></i> Catégorie 1</a></li>
                <li><a href="#"><i class='bx bxs-category icon'></i> Catégorie 2</a></li>
            </ul>
        </li>
        <li><a href="#"><i class='bx bxs-info-circle icon'></i> À propos</a></li>
        <li><a href="#"><i class='bx bxs-envelope icon'></i> Contact</a></li>
    </ul>
    
<?php
        switch (true) {
          case isset($_SESSION['auth']) && ($_SESSION['role'] == 'admin'):
 ?>  
    <div class="auth-container">
       
       <div class="profile" >
                <img src="/publicAll/images/profil.png" alt="Photo de profil">
                <div class="profile-link">
                    <a href="/admin-dashboard.php"><i class='bx bxs-user-circle icon'></i> Dashboard</a>
                    <a href="/logout.php"><i class='bx bxs-log-out-circle icon'></i> Déconnexion</a>
                </div>
       </div>
        <?php
            break;

          case isset($_SESSION['auth']):
          ?>

      <div class="profile" >
                <img src="/publicAll/images/profil.png" alt="Photo de profil">
                <div class="profile-link">
                    <a href="/user-dashboard.php"><i class='bx bxs-user-circle icon'></i> Dashboard</a>
                    <a href="/logout.php"><i class='bx bxs-log-out-circle icon'></i> Déconnexion</a>
                </div>
       </div>

           <?php
            break;
          default:
          ?>
    <!-- Menu d'authentification -->
        <ul class="auth-menu">
            <li class="auth-item">
                <a href="/login.php" class="auth-link">
                    <i class='bx bxs-user-circle icon'></i>
                    <span>Se connecter</span>
                </a>
            </li>

            <li class="auth-item">
                <a href="/register.php" class="auth-link">
                    <i class='bx bxs-user-plus icon'></i>
                    <span>S'enregistrer</span>
                </a>
            </li>
        </ul>
    </div>
    
<?php
 break;
} 
?>
</nav>
