
    <div class="container-part">
        <!-- Colonne de gauche : Grande image avec superposition -->
        <div class="image-column">
            <div class="image-overlay"></div>
            <img src="/publicAll/images/log.png" alt="Image d'arrière-plan">
        </div>

        <!-- Colonne de droite : Formulaire d'inscription -->
        <div class="form-container">
            <form action="" method="POST">
                 
                <?php
                if (! empty($success)) {
                    echo '<div style=" background:green; text-align:center; color:white; padding:2px 8px; font-size:25px;">'
                        .reset($success).
                        '</div>';
                }
                if (! empty($errors)) {

                    echo '<div style=" background:red; text-align:center; color:white; padding:2px 8px; font-size:25px;">'
                        .reset($errors).
                        '</div>';
                }
                ?>
                
                <div class="form-group">
                    <h2>Connection</h2>
                    <?php if (isset($errors['email'])) { ?>
                        <p style='color:#f86262;'><?= $errors['email'] ?></p>
                   <?php } ?>
                    <div class="input-group">
                        <i class='bx bxs-envelope icon'></i>
                        <input type="text" name="email" placeholder="Email ou pseudo" >
                    </div>

                    
                    <div class="input-group">
                        <i class='bx bxs-lock-alt icon'></i>
                        <input type="password" name="password" placeholder="Mot de passe" >
                    </div>
                    <button type="submit" name="login">Se connecter</button>
                    
                    <!-- Liens d'authentification -->
                    <div class="auth-links">
                        <span  class="auth-link" style="color:black">
                            <i class='bx bx-log-in'></i>Connectez-vous ou
                        </span>
                        <a href="/register.php" class="auth-link">
                            <i class='bx bx-user-plus '></i> 
                           <u>Inscrivez-vous</u>                           
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>


   
    <script src="/resources/js/particul.js"></script>

