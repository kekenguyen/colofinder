<?php get_header(); ?>
<main>
  
<section class="hero-section">
    <div class="hero-content">
        <!-- Grille d'images -->
        <div class="hero-images">
    <?php
    // Liste des ID des articles contenant les images
    $article_ids = [1, 2, 3, 4, 5, 6, 7, 8, 9]; // Remplacez par les ID réels

    // Requête personnalisée pour récupérer les articles par ID
    $args = [
        'post_type' => 'post', // Type de contenu (modifier si nécessaire)
        'post__in' => $article_ids, // Cherche uniquement ces ID
        'posts_per_page' => -1, // Tous les articles correspondants
        'name'=> 'image-personne-1, image-personne-2, image-personne-3, image-personne-4, image-personne-5, image-personne-6, image-personne-7, image-personne-8, image-personne-9',
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Récupère l'image mise en avant de chaque article
            if (has_post_thumbnail()) {
                $thumbnail_url = get_the_post_thumbnail_url();
                ?>
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
                <?php
            }
        endwhile;
    else :
        echo '<p>Aucune image trouvée.</p>';
    endif;

    // Réinitialise les données de la requête
    wp_reset_postdata();
    ?>
</div>


        <!-- Texte -->
        <div class="hero-text">
            <h1>“UN TOIT, <br> UNE VIBE, <br> UN MATCH”</h1>
            <a href="<?php echo site_url('/inscription/'); ?>" class="cta-button">Créer un compte</a>
        </div>
    </div>
</section>

    <section class="concept-section">
    <h2 class="concept-title">LE CONCEPT</h2>

    <!-- Étapes numérotées -->
    <div class="steps-container">
        <div class="step">
            <div class="step-number">1</div>
            <div class="step-content">
                <h3>Créez votre profil</h3>
                <p>Décrivez vos habitudes de vie, vos passions, et ce que vous recherchez chez un colocataire.</p>
            </div>
        </div>
        <div class="step">
            <div class="step-number">2</div>
            <div class="step-content">
                <h3>Explorez les profils</h3>
                <p>Parcourez les profils de ceux qui cherchent aussi une colocation et découvrez leurs personnalités, préférences et besoins.</p>
            </div>
        </div>
        <div class="step">
            <div class="step-number">3</div>
            <div class="step-content">
                <h3>Faites le tri avec nos "animaux"</h3>
                <p>Chaque profil est associé à un animal symbolisant une personnalité.</p>
            </div>
        </div>
        <div class="step">
            <div class="step-number">4</div>
            <div class="step-content">
                <h3>Trouvez votre match et discutez</h3>
                <p>Vous avez trouvé un profil qui vous plaît ? Discutez avec votre futur colocataire.</p>
            </div>
        </div>
    </div>

    <!-- Section Animaux -->
    <div class="animals-container">
        <div class="animal">
            <img src="path/to/wolf.png" alt="Loup" class="animal-icon">
            <h4>LOUP</h4>
            <p>Pour trouver un colocataire avec peu d’interactions.</p>
        </div>
        <div class="animal">
            <img src="path/to/mouse.png" alt="Souris" class="animal-icon">
            <h4>SOURIS</h4>
            <p>Pour trouver un contrat de colocation à court terme.</p>
        </div>
        <div class="animal">
            <img src="path/to/dog.png" alt="Chien" class="animal-icon">
            <h4>CHIEN</h4>
            <p>Pour trouver une ambiance familiale et se faire des amis.</p>
        </div>
        <div class="animal">
            <img src="path/to/panda.png" alt="Panda" class="animal-icon">
            <h4>PANDA</h4>
            <p>Pour trouver un espace tranquille, environnement calme.</p>
        </div>
    </div>
</section>


    <!-- Section Témoignages -->
    <section class="testimonials-section">
    <h2>Témoignages</h2>
    <div class="testimonials-container">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Lisa</div>
            <div class="card-body">
                <p class="card-text">J'ai trouvé mon colocataire idéal grâce à ce site ! Je cherchais quelqu'un avec qui partager un appartement tout en ayant des espaces privés. On se croise de temps en temps dans le salon, mais c'est exactement ce que je voulais : une ambiance tranquille sans trop d'interactions. Je me sens vraiment chez moi !</p>
            </div>
        </div>
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Jim</div>
            <div class="card-body">
                <p class="card-text">Je recherchais une colocation avec une vraie ambiance familiale, où tout le monde se soutient. Ce site m'a permis de trouver un appartement avec des colocataires chaleureux et bienveillants. On mange ensemble, on discute de tout et de rien, et je me sens vraiment bien entouré. C'est comme une deuxième famille</p>
            </div>
        </div>
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Jennie</div>
            <div class="card-body">
                <p class="card-text">Je venais d'emménager dans une nouvelle ville et je cherchais une colocation où je pourrais aussi me faire des amis. Ce site m'a permis de trouver une super colocataire, avec qui je m'entends très bien ! On passe du temps ensemble, on se soutient dans nos projets et ça m'a vraiment aidée à me sentir chez moi rapidement.</p>
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>