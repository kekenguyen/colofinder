<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="header-container">
        <!-- Dropdown Annonces -->
        <div class="dropdown header-left">
            <a class="dropdown-toggle header-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Annonces
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo site_url('/publier/'); ?>">Publier</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('/recherche/'); ?>">Recherche</a></li>
            </ul>
        </div>

        <!-- Logo -->
        <div class="logo header-center">
            <a href="<?php echo home_url(); ?>">COLOFINDER</a>
        </div>

        <!-- Dropdown Profil et Aide -->
        <div class="header-right">
            <!-- Profil Dropdown -->
            <div class="dropdown">
                <a class="dropdown-toggle header-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profil
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo site_url('/inscription/'); ?>">Inscription</a></li>
                    <li><a class="dropdown-item" href="<?php echo wp_login_url(); ?>">Connexion</a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('/informations-personnelles/'); ?>">Informations Personnelles</a></li>
                </ul>
            </div>

            <!-- Aide -->
            <a href="<?php echo site_url('/aide/'); ?>" class="header-link">Aide</a>
        </div>
    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
