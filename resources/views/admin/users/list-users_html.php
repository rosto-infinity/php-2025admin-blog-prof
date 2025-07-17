<style>
  /* Style général du conteneur admin */
.admin-container {
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Style du titre */
.admin-container h1 {
    font-size: 24px;
    font-weight: bold;
    color: #343a40;
    margin-bottom: 20px;
}

/* Style des alertes */
.alert {
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 20px;
}

.alert-info {
    background-color: #e2f3fd;
    border: 1px solid #b8e2fb;
    color: #0c5460;
}

/* Style du tableau */
.table {
    width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
}

.table thead th {
    background-color:rgb(255, 255, 255);
    color:rgb(0, 0, 0);
    padding: 12px;
    text-align: left;
    border: 1px solid blueviolet;
}

.table tbody td {
    padding: 12px;
    border-bottom: 1px solid #dee2e6;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Style des badges */
.badge {
    padding: 6px 12px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 500;
}

.bg-primary {
    background-color: #007bff !important;
}

.bg-secondary {
    background-color: #6c757d !important;
}

/* Style des boutons */
.btn {
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.btn-sm {
    padding: 4px 8px;
    font-size: 12px;
}

.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #000;
}

.btn-warning:hover {
    background-color: #e0a800;
    border-color: #d39e00;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

/* Style des icônes */
.fas {
    margin-right: 4px;
}

</style>


<div class="admin-container">
    <h1>Liste des utilisateurs</h1>
    
    <?php if (empty($users)) { ?>
        <div class="alert alert-info">Aucun utilisateur trouvé</div>
    <?php } else { ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Créé le</th>
                        <th>Mis à jour le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
               <tbody>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td>
                <span class="badge <?= $user['role'] === 'admin' ? 'bg-primary' : 'bg-secondary' ?>">
                    <?= htmlspecialchars($user['role']) ?>
                </span>
            </td>
            <td><?= date('d/m/Y H:i', strtotime($user['created_at'])) ?></td>
            <td>
                <?= isset($user['updated_at']) && $user['updated_at'] ? date('d/m/Y H:i', strtotime($user['updated_at'])) : 'Jamais' ?>
            </td>
            <td>
                <a href="edit-user.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit"></i> Modifier
                </a>
                <a href="delete-user.php?id=<?= $user['id'] ?>" 
                   class="btn btn-sm btn-danger" 
                   onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                    <i class="fas fa-trash"></i> Supprimer
                </a>
            </td>
        </tr>
    <?php } ?>
</tbody>

            </table>
        </div>
    <?php } ?>
</div>
