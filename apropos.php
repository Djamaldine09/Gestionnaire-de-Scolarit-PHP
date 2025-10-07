<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - PRONOTE UNIVERSITY</title>

    <link rel="stylesheet" href="apropo_style.css">
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
                <li><a href="home.php">Accueil</a></li>
                <li><a href="cadre.php">Nos services</a></li>
                <li><a href="apropos.php" class="active">A propos</a></li>
            </ul>
            <a href="Sign_in.php">
                <button class="btn-connexion">
                    <?php 
                    if(!(isset($_SESSION['admin'])) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {?>
                    Connexion<?php
                    } else
                        echo '<a href="index.php?sortir=1">Déconnexion</a>';
                    ?>
                </button>
            </a>
        </nav>
    </header>

    <main class="apropos-main">
        <!-- Hero Section -->
        <section class="apropos-hero">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1>Notre Vision Pédagogique</h1>
                <p>Révolutionner la gestion académique grâce à l'innovation technologique</p>
            </div>
        </section>

        <!-- Section Notre Histoire -->
        <section class="histoire-section">
            <div class="container">
                <div class="histoire-content">
                    <h2>Notre Histoire</h2>
                    <div class="histoire-timeline">
                        <div class="timeline-item">
                            <div class="timeline-year">2015</div>
                            <div class="timeline-content">
                                <h3>Fondation</h3>
                                <p>Création de la plateforme avec une équipe de 5 passionnés de l'éducation et de la technologie.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">2018</div>
                            <div class="timeline-content">
                                <h3>Premier Partenariat Universitaire</h3>
                                <p>Collaboration avec l'Université de Paris pour déployer notre solution à grande échelle.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-year">2023</div>
                            <div class="timeline-content">
                                <h3>Reconnaissance Internationale</h3>
                                <p>Prix de l'innovation éducative décerné par l'UNESCO pour notre impact sur l'éducation numérique.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="histoire-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Équipe PRONOTE UNIVERSITY">
                </div>
            </div>
        </section>

        <!-- Section Valeurs -->
        <section class="valeurs-section">
            <h2>Nos Valeurs</h2>
            <div class="valeurs-grid">
                <div class="valeur-card">
                    <div class="valeur-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>Nous repoussons constamment les limites de la technologie éducative pour offrir des solutions avant-gardistes.</p>
                </div>
                <div class="valeur-card">
                    <div class="valeur-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>Nous croyons en la force du travail d'équipe et des partenariats stratégiques.</p>
                </div>
                <div class="valeur-card">
                    <div class="valeur-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Intégrité</h3>
                    <p>Transparence et éthique guident chacune de nos décisions et interactions.</p>
                </div>
            </div>
        </section>

        <!-- Section Équipe -->
        <!-- Section Équipe - Version finale -->
<section class="equipe-section">
    <div class="section-header">
        <h2>Notre Équipe d'Experts</h2>
        <p class="section-subtitle">Les esprits créatifs derrière PRONOTE UNIVERSITY</p>
    </div>
    
    <div class="equipe-grid">
        <!-- Membre 1 -->
        <div class="membre-card">
            <div class="membre-image-container">
                <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Directrice Générale" class="membre-image">
                <div class="social-overlay">
                    <div class="social-links">
                        <a href="#" class="social-btn linkedin" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-btn twitter" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-btn email" aria-label="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="membre-info">
                <h3>Sophie Martin</h3>
                <p class="position">Directrice Générale</p>
                <div class="separator"></div>
                <p class="bio">15 ans d'expérience dans l'innovation éducative et la gestion de projets technologiques.</p>
            </div>
        </div>
        
        <!-- Membre 2 -->
        <div class="membre-card">
            <div class="membre-image-container">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Directeur Technique" class="membre-image">
                <div class="social-overlay">
                    <div class="social-links">
                        <a href="#" class="social-btn linkedin" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-btn github" aria-label="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-btn medium" aria-label="Medium">
                            <i class="fab fa-medium-m"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="membre-info">
                <h3>Thomas Lefèvre</h3>
                <p class="position">Directeur Technique</p>
                <div class="separator"></div>
                <p class="bio">Expert en architecture logicielle et passionné par les solutions éducatives disruptives.</p>
            </div>
        </div>
        
        <!-- Membre 3 -->
        <div class="membre-card">
            <div class="membre-image-container">
                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Responsable Pédagogique" class="membre-image">
                <div class="social-overlay">
                    <div class="social-links">
                        <a href="#" class="social-btn linkedin" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-btn researchgate" aria-label="ResearchGate">
                            <i class="fab fa-researchgate"></i>
                        </a>
                        <a href="#" class="social-btn book" aria-label="Publications">
                            <i class="fas fa-book"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="membre-info">
                <h3>Amélie Dubois</h3>
                <p class="position">Responsable Pédagogique</p>
                <div class="separator"></div>
                <p class="bio">Docteure en sciences de l'éducation avec une spécialisation en technologies éducatives.</p>
            </div>
        </div>
    </div>
</section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="cta-content">
                <h2>Prêt à transformer votre expérience académique ?</h2>
                <a href="Sign_in.php" class="cta-button">Démarrer maintenant</a>
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

    <script src="apropos_script.js"></script>
</body>
</html>