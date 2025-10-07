<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduManage Pro - Gestionnaire de Scolarité</title>
    <link rel="stylesheet" href="acceuil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <header>
        <div class="container">
            <nav>
            
            <div class="logo">
            <img src="logo.png" alt="LOGO PRONOTE UNIVERSITY">
            </div>

                <div class="logo2">Edu<span>Manage</span>Pro</div>
                <ul class="nav-links">
                    <li><a href="Mahes/index.php"><i class="fas fa-home nav-icon"></i>Accueil</a></li>
                    <li><a href="cadre.php/"><i class="fas fa-concierge-bell nav-icon"></i>Nos Services</a></li>
                    <li><a href="apropos.php"><i class="fas fa-info-circle nav-icon"></i>À propos</a></li>
                </ul>
                <a href="Sign_in.php">
                <?php 
                if(!(isset($_SESSION['admin'])) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
                    echo '<a href="Sign_in.php"><button><i class="fas fa-sign-in-alt nav-icon"></i>Se connecter</button></a>';
                } else {
                    echo '<a href="index.php?sortir=1"><button><i class="fas fa-sign-out-alt nav-icon"></i>Déconnexion</button></a>';
                }
                ?>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Révolutionnez la gestion de votre établissement scolaire</h1>
                <p>La solution tout-en-un pour administrer efficacement votre école, collège ou lycée. Simplifiez les inscriptions, le suivi des élèves, les notes et bien plus encore.</p>
                <div class="btn-container">
                    <a href="#" class="btn"><i class="fas fa-play nav-icon"></i>Démarrer maintenant</a>
                    <a href="#" class="btn btn-outline"><i class="fas fa-eye nav-icon"></i>Voir la démo</a>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Pourquoi choisir EduManage Pro ?</h2>
                <p>Découvrez comment notre plateforme transforme la gestion scolaire en une expérience fluide et intuitive pour les administrateurs, enseignants, élèves et parents.</p>
            </div>

            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Tableaux de bord intelligents</h3>
                    <p>Visualisez en un clin d'œil les indicateurs clés de votre établissement avec nos tableaux de bord personnalisables et interactifs.</p>
                    <a href="dash.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Gestion centralisée</h3>
                    <p>Administrez élèves, enseignants, classes et emplois du temps depuis une interface unique et cohérente.</p>
                    <a href="gestcentral.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3>Suivi financier</h3>
                    <p>Automatisez la gestion des frais de scolarité, des bourses et des paiements avec des rapports détaillés et des alertes.</p>
                    <a href="suivif.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Accès mobile</h3>
                    <p>Notre application mobile permet aux parents et élèves de rester connectés où qu'ils soient, avec notifications en temps réel.</p>
                    <a href="accesmob.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Sécurité renforcée</h3>
                    <p>Protégez les données sensibles avec notre infrastructure sécurisée, chiffrée et conforme au RGPD.</p>
                    <a href="securt.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-random"></i>
                    </div>
                    <h3>Intégrations</h3>
                    <p>Connectez-vous facilement aux outils que vous utilisez déjà (Google Workspace, Microsoft 365, etc.).</p>
                    <a href="integr.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
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

    <section class="app-download">
        <div class="container">
            <div class="app-content">
                <h2>Téléchargez notre application mobile</h2>
                <p>Accédez à toutes les fonctionnalités d'EduManage Pro directement depuis votre smartphone. Recevez des notifications en temps réel, consultez les notes, le calendrier scolaire et bien plus encore, où que vous soyez.</p>
                <p><strong>Disponible dès maintenant sur iOS et Android.</strong></p>

                <div class="app-badges">
                    <a href="https://play.google.com/store" class="app-badge" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1200px-Google_Play_Store_badge_EN.svg.png" alt="Disponible sur Google Play">
                    </a>
                    <a href="https://www.apple.com/app-store/" class="app-badge" target="_blank">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1200px-Download_on_the_App_Store_Badge.svg.png" alt="Disponible sur l'App Store">
                    </a>
                </div>

                <div class="app-screenshot">
                    <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Capture d'écran de l'application mobile">
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>EduManage Pro</h3>
                    <p>La solution ultime pour la gestion scolaire moderne, conçue pour simplifier la vie des administrateurs, enseignants, élèves et parents.</p>
                </div>

                <div class="footer-column">
                    <h3>Liens rapides</h3>
                    <ul>
                        <li><a href="index.php"><i class="fas fa-home nav-icon"></i>Accueil</a></li>
                        <li><a href="#"><i class="fas fa-concierge-bell nav-icon"></i>Nos Services</a></li>
                        <li><a href="apropos.php"><i class="fas fa-info-circle nav-icon"></i>À propos</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Ressources</h3>
                    <ul>
                        <li><a href="documentation.php">Documentation</a></li>
                        <li><a href="centre_aide.php">Centre d'aide</a></li>
                        <li><a href="webi.php">Webinaires</a></li>
                        <li><a href="statservice.php">Statut du service</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Rue de l'Éducation, Paris</li>
                        <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                        <li><i class="fas fa-envelope"></i> contact@edumanagepro.fr</li>
                    </ul>
                </div>
            </div>
             <div class="social-section">
                <h3>Suivez-nous</h3>
                <div class="social-links">
                    <a href="https://www.facebook.com" id="facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com" id="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com" id="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com" id="linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 EduManage Pro.Tous droits réservés. | <a href="politique.php">Politique de confidentialité</a> | <a href="utilisation.php">Conditions d'utilisation</a> |<a href="contact.php"> Contact Support</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Animation pour les cartes de fonctionnalités
        document.addEventListener('DOMContentLoaded', function() {
            const featureCards = document.querySelectorAll('.feature-card');

            function checkVisibility() {
                featureCards.forEach((card, index) => {
                    const cardTop = card.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;

                    if (cardTop < windowHeight - 100) {
                        // Ajoute un délai progressif pour chaque carte
                        setTimeout(() => {
                            card.classList.add('visible');
                        }, index * 150);
                    }
                });
            }

            // Vérifie la visibilité au chargement
            checkVisibility();

            // Vérifie la visibilité lors du défilement
            window.addEventListener('scroll', checkVisibility);

            // Animation pour le texte du hero
            const heroTitle = document.querySelector('.hero h1');
            const heroText = document.querySelector('.hero p');
            const heroButtons = document.querySelector('.btn-container');

            setTimeout(() => {
                heroTitle.style.animation = 'fadeInUp 1s ease forwards';
            }, 300);

            setTimeout(() => {
                heroText.style.animation = 'fadeInUp 1s ease forwards';
            }, 600);

            setTimeout(() => {
                heroButtons.style.animation = 'fadeInUp 1s ease forwards';
            }, 900);
        });
    </script>
</body>
</html>
