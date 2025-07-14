<style>
	.chart {
    width: 50%;
   
    margin: 0 auto;
    height: auto !important;

}

canvas {
    width: 50% !important;
    height: auto !important;
}

</style>

<h1 class="title">Dashboard--</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
    <!-- Nombre d'utilisateurs -->
    <div class="card">
        <div class="head">
            <div>
                <h2><?= $usersCount ?></h2>
                <p>Utilisateurs</p>
            </div>
            <i class='bx bx-user icon'></i>
        </div>
        <span class="progress" data-value="<?= min(100, ($usersCount / 1000) * 100) ?>%"></span>
        <span class="label"><?= min(100, ($usersCount / 1000) * 100) ?>%</span>
    </div>

    <!-- Nombre de commentaires -->
    <div class="card">
        <div class="head">
            <div>
                <h2><?= $commentsCount ?></h2>
                <p>Commentaires</p>
            </div>
            <i class='bx bx-message icon'></i>
        </div>
        <span class="progress" data-value="<?= min(100, ($commentsCount / 1000) * 100) ?>%"></span>
        <span class="label"><?= min(100, ($commentsCount / 1000) * 100) ?>%</span>
    </div>

    <!-- Nombre d'articles -->
    <div class="card">
        <div class="head">
            <div>
                <h2><?= $articlesCount ?></h2>
                <p>Articles</p>
            </div>
            <i class='bx bx-file icon'></i>
        </div>
        <span class="progress" data-value="<?= min(100, ($articlesCount / 1000) * 100) ?>%"></span>
        <span class="label"><?= min(100, ($articlesCount / 1000) * 100) ?>%</span>
    </div>

    <!-- Nombre de catégories -->
    <div class="card">
        <div class="head">
            <div>
                <h2><?= $categoriesCount ?></h2>
                <p>Catégories</p>
            </div>
            <i class='bx bx-category icon'></i>
        </div>
        <span class="progress" data-value="<?= min(100, ($categoriesCount / 100) * 100) ?>%"></span>
        <span class="label"><?= min(100, ($categoriesCount / 100) * 100) ?>%</span>
    </div>
</div>

		<div class="data">
    <div class="content-data">
        <div class="head">
            <h3>Sales Report</h3>
            <div class="menu">
                <i class='bx bx-dots-horizontal-rounded icon'></i>
                <ul class="menu-link">
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Save</a></li>
                    <li><a href="#">Remove</a></li>
                </ul>
            </div>
        </div>
        <div class="chart">
            <canvas id="salesChart"></canvas>
        </div>
    </div>
    <div class="content-data">
        <div class="head">
            <h3>Répartition des données</h3>
            <div class="menu">
                <i class='bx bx-dots-horizontal-rounded icon'></i>
                <ul class="menu-link">
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Save</a></li>
                    <li><a href="#">Remove</a></li>
                </ul>
            </div>
        </div>
        <div class="chart">
            <canvas id="pieChart"></canvas>
        </div>
    </div>
</div>
<script>
    // Données pour les graphiques
    const data = {
        labels: ['Utilisateurs', 'Commentaires', 'Articles', 'Catégories'],
        datasets: [{
            label: 'Statistiques du site',
            data: [<?= $usersCount ?>, <?= $commentsCount ?>, <?= $articlesCount ?>, <?= $categoriesCount ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    };

    // Configuration du graphique à barres
    const barConfig = {
        type: 'bar', // Type de graphique
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Configuration du graphique en camembert
    const pieConfig = {
        type: 'pie', // Type de graphique
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Répartition des données'
                }
            }
        }
    };

    // Créer le graphique à barres
    const salesChart = new Chart(
        document.getElementById('salesChart'),
        barConfig
    );

    // Créer le graphique en camembert
    const pieChart = new Chart(
        document.getElementById('pieChart'),
        pieConfig
    );
</script>
