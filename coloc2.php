<?php
/* Template Name: Profil Coloc 2 */
get_header();
?>

<div class="profil-container">
    <!-- Section Profil -->
    <div class="profil-header">
        <div class="profil-avatar">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/julie.jpg" alt="Photo de Julie">
        </div>
        <div class="profil-info">
            <h1 class="profil-name">JULIE</h1>
            <p class="profil-description">
                Voici une version adaptée pour une personne passionnée par l’art et cherchant un espace tranquille :
                Salut ! Je m'appelle Julie et je suis à la recherche d’un colocataire qui partage ma passion pour l’art et qui apprécie de vivre dans un espace calme et harmonieux.
                Si tu aimes dessiner, peindre, contempler des œuvres d’art, ou discuter de créativité et d’inspiration, je pense qu’on pourrait bien s’entendre.
                Je suis une personne posée et respectueuse, et j’aspire à une ambiance sereine où chacun peut s’épanouir à son rythme. L’appartement est spacieux et baigné de lumière, idéal pour des activités créatives ou simplement pour profiter de moments de détente dans un cadre paisible.
            </p>
            <p class="profil-message">
                Si tu cherches une colocation propice à la créativité et au bien-être, et que tu partages ma passion pour l’art et le calme, n’hésite pas à me contacter !
            </p>
        </div>
    </div>

    <!-- Formulaire Contact -->
    <div class="contact-section">
        <h2 class="section-title">Contacter</h2>
        <form action="#" method="POST" class="contact-form">
            <input type="text" name="prenom" placeholder="Prénom" required>
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="tel" name="telephone" placeholder="Téléphone" required>
            <button type="submit" class="contact-button">Envoyer ma demande</button>
        </form>
    </div>

    <!-- Détails -->
    <div class="details-section">
        <h2 class="section-title">Détails</h2>
        <table class="details-table">
            <tr>
                <th>Passion</th>
                <td>Musique</td>
            </tr>
            <tr>
                <th>Je recherche</th>
                <td>🐼 Espace Tranquille</td>
            </tr>
            <tr>
                <th>Type de bien</th>
                <td>Appartement</td>
            </tr>
            <tr>
                <th>Aperçu</th>
                <td>2 chambres, 67m², 1 salle de bain, 5ème étage</td>
            </tr>
            <tr>
                <th>Prix de location</th>
                <td>650€/mois</td>
            </tr>
            <tr>
                <th>Date de disponibilité</th>
                <td>03/07/2025</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>Evere</td>
            </tr>
        </table>
    </div>

    <!-- Galerie -->
    <div class="gallery-section">
        <h2 class="section-title">Galerie</h2>
        <div class="gallery-grid">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo1.jpg" alt="Image 1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo2.jpg" alt="Image 2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo3.jpg" alt="Image 3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo4.jpg" alt="Image 4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo5.jpg" alt="Image 5">
        </div>
    </div>
</div>

<?php
get_footer();
?>
