<?php
/* Template Name: Recherche de Colocataires */
get_header(); // Inclut le header global
?>

<div class="container-colocataires mt-5 mb-5">
    <!-- Titre de la page -->
    <h1 class="title-colocataires text-center mb-4">Recherche de Colocataires</h1>

    <!-- Filtres -->
    <div class="filters-container mb-5">
        <!-- Boutons des filtres -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-3">
            <button class="btn-choice" data-value="peu-dinteraction">🐺 Peu d’interaction</button>
            <button class="btn-choice" data-value="contrat-court-terme">🐭 Contrat Court Terme</button>
            <button class="btn-choice" data-value="ambiance-familiale">🐶 Ambiance Familiale</button>
            <button class="btn-choice" data-value="espace-tranquille">🐼 Espace Tranquille</button>
        </div>

        <!-- Champs de recherche -->
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <input type="text" class="filter-input" placeholder="Saisissez une commune">
            <input type="text" class="filter-input" placeholder="Budget">
            <input type="text" class="filter-input" placeholder="Type">
            <input type="text" class="filter-input" placeholder="Nombre de colocataire(s)">
        </div>
    </div>

    <!-- Cartes des utilisateurs -->
    <div class="users-container d-flex flex-wrap gap-4 justify-content-center">
        <!-- Ligne 1 -->
        <div class="user-card">
            <a href="path/to/henri.php" class="user-link">
                <img src="path/to/henri.jpg" alt="Henri">
                <h4 class="user-name">Henri</h4>
            </a>
        </div>
        <div class="user-card">
            <img src="path/to/julien.jpg" alt="Julien">
            <h4 class="user-name">Julien</h4>
        </div>
        <div class="user-card">
            <img src="path/to/theo.jpg" alt="Théo">
            <h4 class="user-name">Théo</h4>
        </div>
        <div class="user-card">
            <a href="path/to/julie.php" class="user-link">
                <img src="path/to/julie.jpg" alt="Julie">
                <h4 class="user-name">Julie</h4>
            </a>
        </div>

        <!-- Ligne 2 -->
        <div class="user-card">
            <img src="path/to/debora.jpg" alt="Débora">
            <h4 class="user-name">Débora</h4>
        </div>
        <div class="user-card">
            <img src="path/to/cedric.jpg" alt="Cédric">
            <h4 class="user-name">Cédric</h4>
        </div>
        <div class="user-card">
            <img src="path/to/sarah.jpg" alt="Sarah">
            <h4 class="user-name">Sarah</h4>
        </div>
        <div class="user-card">
            <img src="path/to/tim.jpg" alt="Tim">
            <h4 class="user-name">Tim</h4>
        </div>

        <!-- Ligne 3 -->
        <div class="user-card">
            <img src="path/to/sophie.jpg" alt="Sophie">
            <h4 class="user-name">Sophie</h4>
        </div>
        <div class="user-card">
            <img src="path/to/matheo.jpg" alt="Mathéo">
            <h4 class="user-name">Mathéo</h4>
        </div>
        <div class="user-card">
            <img src="path/to/ava.jpg" alt="Ava">
            <h4 class="user-name">Ava</h4>
        </div>
        <div class="user-card">
            <img src="path/to/vivienne.jpg" alt="Vivienne">
            <h4 class="user-name">Vivienne</h4>
        </div>
    </div>

     <!-- Pagination -->
    <div class="pagination-container mt-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<script>
// Interaction pour les boutons des catégories avec emojis
document.querySelectorAll('.btn-choice').forEach(button => {
    button.addEventListener('click', function () {
        // Supprimer la classe "active" des autres boutons
        document.querySelectorAll('.btn-choice').forEach(btn => btn.classList.remove('active'));

        // Ajouter la classe "active" au bouton sélectionné
        this.classList.add('active');
    });
});
</script>

<?php
get_footer();
?>
