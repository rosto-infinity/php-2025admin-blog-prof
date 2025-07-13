
    <div class="container-part">
        <!-- Colonne de gauche : Grande image avec superposition -->
        <div class="image-column">
            <div class="image-overlay"></div>
            <img src="/publicAll/images/img1.png" alt="Image d'arrière-plan">
        </div>

        <!-- Colonne de droite : Formulaire d'inscription -->
        <div class="form-container">
            <form action="#" method="POST">
                <div class="form-group">
                    <h2>Inscription</h2>
                    <div class="input-group">
                        <i class='bx bxs-user icon'></i>
                        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-envelope icon'></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt icon'></i>
                        <input type="password" name="password" placeholder="Mot de passe" required>
                    </div>
                    <button type="submit">S'inscrire</button>
                    
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
