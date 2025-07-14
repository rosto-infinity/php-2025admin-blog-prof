<!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Stage Professionnel en Génie Logiciel et Développement Web/Mobile</h1>
            <p>L'objectif est de pérenniser le parcours d'un développeur fullstack en mettant en lumière les projets, les compétences et les réalisations des étudiants dans les domaines du développement web et mobile. Découvrez comment ils maîtrisent les technologies clés et construisent des solutions innovantes pour l'avenir.</p>
            <div class="technologies">
                <span>HTML</span>
                <span>CSS</span>
                <span>TailwindCSS</span>
                <span>JavaScript</span>
                <span>Dart</span>
                <span>Flutter</span>
                <span>Laravel</span>
                <span>NodeJS</span>
                <span>ReactJS</span>
            </div>
            <a href="#projects" class="cta-button">Voir les Projets</a>
        </div>
    </section>
         <!-- Section Articles -->
    <section class="articles-section">
        <h2>Derniers Articles</h2>
        <div class="articles-grid">
           
         <?php foreach ($articles as $article): ?>
                <div class="article-card">
                <?php if (!empty($article['image'])): ?>  
                   <a href="article.php?id=<?= urlencode($article['id']); ?>">
                    <img src="<?= htmlspecialchars($article['image']) ?>"
                     alt="<?= htmlspecialchars($article['title']) ?>" 
                     class="article-image">
                   </a>
                 <?php endif; ?>
                    <div class="article-content">
                        <h3 class="article-title"><?= htmlspecialchars($article['title']) ?></h3>
                        <div class="article-meta">
                            <span class="article-category">
                                <i class='bx bx-category-alt'></i> Catégorie#
                            </span>
                            <span class="article-date">
                                <i class='bx bx-calendar'></i> <?= date('d/m/Y', strtotime($article['created_at'])) ?>
                            </span>
                        </div>
                        <p class="article-excerpt"><?= htmlspecialchars($article['introduction']) ?></p>
                        <div class="article-footer">
                            <span class="article-comments">
                                <i class='bx bx-comment-dots'></i> <?= $article['comment_count'] ?>  commentaire(s)
                            </span>
                            <a href="article.php?id=<?= urlencode($article['id']); ?>" class="read-more">
                                Lire<i class='bx bx-chevron-right'></i>
                            </a>
                        </div>
                    </div>
                </div>
          <?php endforeach; ?>   
    </div>
    <!-- Pagination -->
 <div class="pagination-wrapper">
     <?= $paginator ?>
 </div>
    </section>

