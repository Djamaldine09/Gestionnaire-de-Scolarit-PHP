<?php
require_once("config.php");
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = trim($_POST["email"]);
    $mdp = trim($_POST["mdp"]);
    $types = $_POST["type"];

    if ($pseudo != "" && $mdp != "" && ($types == "etudiant" || $types == "prof")) {
        // Vérifier si le pseudo existe déjà
        $check = mysqli_query($conn, "SELECT * FROM login WHERE pseudo='$pseudo'");
        if (mysqli_num_rows($check) == 0) {
            // Insérer le nouvel utilisateur
            $sql = "INSERT INTO login (pseudo, passe, type) VALUES ('$pseudo', '$mdp', '$types')";
            if (mysqli_query($conn, $sql)) {
                $message = "Inscription réussie !";
            } else {
                $message = "Erreur lors de l'inscription.";
            }
        } else {
            $message = "Cette email existe déjà.";
        }
    } else {
        $message = "Veuillez remplir tous les champs.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="inscription_style.css">
</head>
<body>
    <div class="grid-container">
        <!-- Colonne d'illustration -->
        <div class="illustration-side">
            <div class="logo">PRONOTE UNIVERSITY</div>
            <div class="carousel-container">
                
                <div class="carousel-track">
                    <div class="carousel-slide">
                        <img src="./Mahes/urban.jpg" alt="Éducation moderne" class="carousel-img">
                    </div>
                    <div class="carousel-slide">
                        <img src="salle.jpg" alt="Salle de classe" class="carousel-img">
                    </div>
                    <div class="carousel-slide">
                        <img src="etud1.jpg" alt="Étudiants" class="carousel-img">
                    </div>
                    <!-- Dupliquez les images pour un défilement infini -->
                    <div class="carousel-slide">
                        <img src="./Mahes/urban.jpg" alt="Éducation moderne" class="carousel-img">
                    </div>
                    <div class="carousel-slide">
                        <img src="etud2.jpg" alt="Salle de classe" class="carousel-img">
                    </div>
                </div>
            </div>
            
            <div class="illustration-content">
                <div class="illustration-text">Rejoignez notre communauté éducative</div>
                <div class="illustration-subtext">Accédez à des ressources pédagogiques exceptionnelles</div>
            </div>
            <div class="wave"></div>
        </div>
        
        <!-- Colonne du formulaire -->
        <div class="form-side">
            <div class="form-container">
                <div class="logo">EduVision</div>
                
                <h1>S'inscrire</h1>
                <p class="subtitle">Commencez gratuitement, sans informations de paiement</p>
                
                <?php if ($message != ""): ?>
                    <div class="message <?php echo $message_class; ?>">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
                
                <button class="btn btn-google">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                    Continuer avec Google
                </button>
                <button class="btn btn-facebook">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" fill="white"/>
    </svg>
    </svg>Facebook
</button>
                
                <div class="divider">ou</div>
                
                <form method="post" action="">
                    <div class="form-group">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="votre@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="mdp" class="form-label">Mot de passe</label>
                        <input type="password" id="mdp" name="mdp" class="form-input" placeholder="••••••••" required>
                    </div>
                    
                    <div class="modern-select-wrapper">
                        <select class="modern-select" name="type">
                            <option value="" disabled selected hidden>Sélectionnez une option</option>
                            <option value="etudiant">Étudiant</option>
                            <option value="prof">Professeur</option>
                        </select>
                        <div class="select-arrow">
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1.5L6 6.5L11 1.5" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                                        
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
                
                <div class="footer">
                    Vous avez déjà un compte ? <a href="Sign_in.php">Se connecter</a>
                </div>
                
                <div class="legal">
                    En vous inscrivant à EduVision, vous acceptez les <a href="#">Conditions d'utilisation</a> 
                    et la <a href="#">Politique de confidentialité</a>.
                </div>
            </div>
        </div>
    </div>

    <script>
        // Animation simple au focus
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentNode.querySelector('.form-label').style.color = 'var(--primary)';
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentNode.querySelector('.form-label').style.color = 'var(--dark)';
                }
            });
        });
        

        // Animation plus fluide avec JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.carousel-track');
            const slides = document.querySelectorAll('.carousel-slide');
            const totalSlides = slides.length;
            
            // Clone les slides pour l'effet infini
            const firstSlide = slides[0].cloneNode(true);
            const secondSlide = slides[1].cloneNode(true);
            track.appendChild(firstSlide);
            track.appendChild(secondSlide);
            
            let currentIndex = 0;
            const slideWidth = slides[0].offsetWidth;
            const totalWidth = slideWidth * totalSlides;
            
            function autoScroll() {
                currentIndex++;
                track.style.transition = 'transform 0.5s ease';
                track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                
                // Réinitialisation invisible
                if (currentIndex >= totalSlides) {
                    setTimeout(() => {
                        track.style.transition = 'none';
                        currentIndex = 0;
                        track.style.transform = 'translateX(0)';
                    }, 500);
                }
            }
            
            // Défilement automatique
            setInterval(autoScroll, 3000);
            
            // Pause au survol
            track.addEventListener('mouseenter', () => {
                track.style.animationPlayState = 'paused';
            });
            
            track.addEventListener('mouseleave', () => {
                track.style.animationPlayState = 'running';
            });
        });

        // Effet sonore SFX (optionnel)
document.querySelector('.hologram').addEventListener('focus', () => {
  const sfx = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-sci-fi-click-901.mp3');
  sfx.volume = 0.3;
  sfx.play();
});

// Texte qui défile comme Matrix
const matrixText = () => {
  const chars = "01";
  const container = document.querySelector('.holographic-select');
  setInterval(() => {
    const randomChar = chars[Math.floor(Math.random() * chars.length)];
    const fallingChar = document.createElement('span');
    fallingChar.textContent = randomChar;
    fallingChar.style.left = `${Math.random() * 100}%`;
    fallingChar.style.animation = `matrixFall ${Math.random() * 2 + 1}s linear`;
    container.appendChild(fallingChar);
    setTimeout(() => fallingChar.remove(), 2000);
  }, 100);
};
matrixText();
    </script>
</body>
</html>