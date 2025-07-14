
    <div class="container-part">
        <!-- Colonne de gauche : Grande image avec superposition -->
        <div class="image-column">
            <div class="image-overlay"></div>
            <img src="/publicAll/images/img1.png" alt="Image d'arrière-plan">
        </div>

        <!-- Colonne de droite : Formulaire d'inscription -->
        <div class="form-container">
            <form action="" method="POST">
                <div class="form-group">
                    <h2>Inscription</h2>
                    <?php if (isset($errors['username'])): ?>
                        <p style='color:#f86262;'><?= $errors['username'] ?></p>
                   <?php endif; ?>
                    <div class="input-group">
                        <i class='bx bxs-user icon'></i>
                        <input type="text" name="username" placeholder="pseudo" 
                        value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>"
                        >
                    </div>

                     <?php if (isset($errors['email'])): ?>
                        <p style='color:#f86262;'><?= $errors['email'] ?></p>
                   <?php endif; ?>
                    <div class="input-group">
                        <i class='bx bxs-envelope icon'></i>
                        <input type="email" name="email" placeholder="Email"
                         value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    </div>

                    <?php if (isset($errors['password'])): ?>
                        <p style='color:#f86262;'><?= $errors['password'] ?></p>
                   <?php endif; ?>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt icon'></i>
                        <input type="password" name="password" placeholder="Mot de passe" >
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt icon'></i>
                        <input type="password" name="confirm_password" placeholder="Confirm Mot de passe" >
                    </div>
                    <button type="submit" name="register">S'inscrire</button>
                    
                    <!-- Liens d'authentification -->
                    <div class="auth-links">
                        <span  class="auth-link" style="color:black">
                            <i class='bx bx-user-plus'></i>Inscrivez-vous ou
                        </span>
                        <a href="/login.php" class="auth-link">
                            <i class='bx bx-log-in'></i> 
                           <u>Connectez-vous</u>                           
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

 
  <script src="/resources/js/particul.js"></script>
