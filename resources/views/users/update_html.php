<!-- Colonne de droite : Formulaire d'édition -->

<style>
    :root {
        --primary-color: #a117f1;
        --secondary-color: #333;
        --secondary-color-dark: #240237;
        --background-color: #f4f4f4;
        --text-color: #333;
        --hover-color: #8d079c;
    }

    /* Style des alertes */
    .alert {
        padding: 1rem 1.5rem;
        margin: 1.5rem 0;

        border-radius: 8px;
        font-family: 'Segoe UI', Roboto, sans-serif;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        border-left: 5px solid transparent;
        transition: all 0.3s ease;
    }

    /* Style spécifique pour les erreurs */
    .alert-danger {
        width: 100%;
        max-width: 75%;
        background-color: #FFF0F0;
        color: #D32F2F;
        border-left-color: #F44336;
    }

    /* Style spécifique pour les succès */
    .alert-success {
        width: 100%;
        max-width: 75%;
        background-color: #F0FFF4;
        color: #2E7D32;
        border-left-color: #4CAF50;
    }

    /* Icônes (optionnel - nécessite une librairie d'icônes) */
    .alert:before {
        font-family: 'Material Icons';
        margin-right: 12px;
        font-size: 1.5rem;
    }

    .alert-danger:before {
        content: "error";
    }

    .alert-success:before {
        content: "check_circle";
    }

    /* Animation d'apparition */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .alert {
        animation: fadeIn 0.4s ease-out forwards;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .alert {
            padding: 0.8rem 1rem;
            font-size: 0.9rem;
        }

        .alert:before {
            font-size: 1.2rem;
        }
    }

    #formUpd {
        display: grid;
        justify-content: center;
        align-items: center;
        background-color: #2E7D32;

    }


    .form-group-update {

        width: 100%;
        max-width: 75%;
        padding: 30px;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(161, 23, 241, 0.1);
        transition: all 0.3s ease;
        z-index: 10;
    }

    .form-group-update:hover {
        box-shadow: 0 10px 30px rgba(161, 23, 241, 0.15);
    }

    /* Styles pour le formulaire */
    .form-update h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 1.8rem;
        color: var(--primary-color);
        position: relative;
    }

    .form-update h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background: var(--primary-color);
        border-radius: 3px;
    }

    .input-group-update {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        border: 2px solid #eee;
        border-radius: 8px;
        padding: 12px 15px;
        background-color: #fafafa;
        transition: all 0.3s ease;
    }

    .input-group-update:focus-within {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(161, 23, 241, 0.1);
    }

    .input-group-update .icon {
        font-size: 1.2rem;
        color: var(--primary-color);
        margin-right: 12px;
        transition: transform 0.3s ease;
    }

    .input-group-update:focus-within .icon {
        transform: scale(1.1);
    }

    .input-group-update input {
        flex: 1;
        border: none;
        outline: none;
        background-color: transparent;
        font-size: 1rem;
        color: var(--text-color);
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
        box-shadow: 0 4px 15px rgba(161, 23, 241, 0.2);
    }

    button:hover {
        background-color: var(--hover-color);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(161, 23, 241, 0.3);
    }
</style>


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
<form action="" method="POST" class="form-group-update">
    <h2>Profil de  :  <?= isset($_POST['username']) ? $_POST['username'] : $user['username'] ?></h2>
    <?php if (isset($errors['username'])): ?>
        <p style='color:#f86262;'><?= $errors['username'] ?></p>
    <?php endif; ?>
    <div class="input-group-update">
        <i class='bx /publicAll/images/img1.pngbxs-user icon'></i>
        <input type="text" name="username" placeholder="Nom d'utilisateur"
            value="<?= isset($_POST['username']) ? $_POST['username'] : $user['username'] ?>">
    </div>

    <?php if (isset($errors['email'])): ?>
        <p style='color:#f86262;'><?= $errors['email'] ?></p>
    <?php endif; ?>
    <div class="input-group-update">
        <i class='bx bxs-envelope icon'></i>
        <input type="email" name="email" placeholder="Email"
            value="<?= isset($_POST['email']) ? $_POST['email'] : $user['email'] ?>">
    </div>

    <?php if (isset($errors['password'])): ?>
        <p style='color:#f86262;'><?= $errors['password'] ?></p>
    <?php endif; ?>
    <div class="input-group-update">
        <i class='bx bxs-lock-alt icon'></i>
        <input type="password" name="password" placeholder="Mot de passe">
    </div>

    <div class="input-group-update">
        <i class='bx bxs-lock-alt icon'></i>
        <input type="password" name="confirm_password" placeholder="Confirm Mot de passe">
    </div>

    <!-- Bouton de mise à jour -->
    <button type="submit" name="update">Mettre à jour</button>


</form>

</div>