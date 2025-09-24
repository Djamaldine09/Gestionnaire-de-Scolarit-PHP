<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRONOTE UNIVERSITY - Plateforme de gestion scolaire</title>
    <link rel="stylesheet" href="home_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="tete1">
            <div class="logo">
                <img src="logo.png" alt="LOGO PRONOTE UNIVERSITY">
                <h1>PRONOTE<br>UNIVERSITY</h1>
            </div>
            <ul>
                <li><a href="home.php" class="men active">Accueil</a></li>
                <li><a href="cadre.php" class="men">Nos services</a></li>
                <li><a href="apropos.php" class="men">A propos</a></li>
            </ul>
            <a href="Sign_in.php">
                <button class="btn-connexion">
                    <?php 
                    if(!(isset($_SESSION['admin'])) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
                        echo 'Connexion';
                    } else {
                        echo '<a href="index.php?sortir=1">Déconnexion</a>';
                    }
                    ?>
                </button>
            </a>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h2>Gestion Scolaire Intelligente</h2>
                <p>Une plateforme moderne pour simplifier la vie académique des étudiants, enseignants et administrateurs.</p>
                <a href="Sign_in.php" class="btn-primary">Commencer maintenant</a>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Étudiants en cours">
            </div>
        </section>

        <!-- Features Section - Version Horizontale -->
<section class="features-horizontal">
    <h2>Nos Services Clés</h2>
    <div class="features-container">
        <!-- Feature 1 -->
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <div class="feature-content">
                <h3>Gestion Étudiante</h3>
                <p>Inscriptions, dossiers et suivis académiques centralisés</p>
            </div>
        </div>
        
        <!-- Feature 2 -->
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="feature-content">
                <h3>Espace Enseignants</h3>
                <p>Gestion des cours, notation et communication</p>
            </div>
        </div>
        
        <!-- Feature 3 -->
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="feature-content">
                <h3>Emploi du Temps</h3>
                <p>Planning dynamique et personnalisable</p>
            </div>
        </div>
        
        <!-- Feature 4 -->
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-chart-bar"></i>
            </div>
            <div class="feature-content">
                <h3>Rapports & Statistiques</h3>
                <p>Analyses détaillées des performances</p>
            </div>
        </div>
    </div>
</section>

        <!-- Testimonials -->
        <section class="testimonials">
            <h3>Ce que disent nos utilisateurs</h3>
            <div class="testimonial-card">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Étudiante">
                <p>"Cette plateforme a révolutionné ma façon de gérer mes études. Tout est si simple et accessible!"</p>
                <span>- Marie K., Étudiante</span>
            </div>
        </section>
    </main>

    <footer>
    <div class="footer-content">
        <!-- Colonne 1 -->
        <div class="footer-column">
            <h3>PRONOTE UNIVERSITY</h3>
            <p>Une plateforme moderne de gestion scolaire pour les établissements d'enseignement supérieur.</p>
        </div>
        
        <!-- Colonne 2 -->
        <div class="footer-column">
            <h3>Liens Rapides</h3>
            <ul>
                <li><a href="home.php">Accueil</a></li>
                <li><a href="cadre.php">Nos services</a></li>
                <li><a href="apropos.php">À propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        
        <!-- Colonne 3 -->
        <div class="footer-column">
            <h3>Services</h3>
            <ul>
                <li><a href="#">Gestion des notes</a></li>
                <li><a href="#">Emploi du temps</a></li>
                <li><a href="#">Ressources pédagogiques</a></li>
                <li><a href="#">Portail administratif</a></li>
            </ul>
        </div>
        
        <!-- Colonne 4 -->
        <div class="footer-column">
            <h3>Contact</h3>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> 123 Rue de l'Éducation, Ville</li>
                <li><i class="fas fa-phone"></i> +123 456 7890</li>
                <li><i class="fas fa-envelope"></i> contact@pronote-univ.edu</li>
            </ul>
        </div>
    </div>
    
    <!-- Section Réseaux Sociaux -->
    <div class="social-section">
        <h3>Suivez-nous</h3>
        <div class="social-links">
            <a href="#" id="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" id="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" id="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" id="linkedin"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
    
    <!-- Copyright -->
    <div class="copyright">
        <p>&copy; 2025 PRONOTE UNIVERSITY. Tous droits réservés.</p>
    </div>
</footer>
</body>
</html>