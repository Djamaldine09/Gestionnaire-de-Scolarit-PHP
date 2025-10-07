<?php
$pageTitle = "Accès mobile";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            color: #2d3748;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .mobile-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
            overflow: hidden;
        }
        
        .mobile-header {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        
        .breadcrumb a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }
        
        .breadcrumb span {
            margin: 0 10px;
            color: rgba(255, 255, 255, 0.6);
        }
        
        .mobile-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .mobile-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .mobile-content {
            padding: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .mobile-features {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            flex-shrink: 0;
        }
        
        .feature-text h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #2d3748;
        }
        
        .feature-text p {
            color: #718096;
            line-height: 1.6;
        }
        
        .mobile-preview {
            display: flex;
            justify-content: center;
            position: relative;
        }
        
        .phone-mockup {
            width: 280px;
            height: 560px;
            background: #1a202c;
            border-radius: 40px;
            padding: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        
        .phone-screen {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .app-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: #4361ee;
        }
        
        .app-text {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }
        
        .app-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .app-store-btn {
            width: 120px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            backdrop-filter: blur(10px);
        }
        
       
        
        @media (max-width: 768px) {
            .mobile-header {
                padding: 30px 20px;
            }
            
            .mobile-header h1 {
                font-size: 2rem;
            }
            
            .mobile-content {
                padding: 30px 20px;
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .phone-mockup {
                width: 250px;
                height: 500px;
            }
            
        }
        
        @media (max-width: 480px) {
            .phone-mockup {
                width: 220px;
                height: 440px;
            }
            
            .app-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }
            
            .app-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="mobile-container">
        <div class="mobile-header">
            <div class="breadcrumb">
                <a href="acceuil.php">Accueil</a>
                <span>/</span>
                <span>Accès mobile</span>
            </div>
            <h1>Accès mobile</h1>
            <p>Notre application mobile permet aux parents et élèves de rester connectés où qu'ils soient, avec notifications en temps réel.</p>
        </div>
        
        <div class="mobile-content">
            <div class="mobile-features">
                <div class="feature-item">
                    <div class="feature-icon">📱</div>
                    <div class="feature-text">
                        <h3>Application native</h3>
                        <p>Applications dédiées pour iOS et Android offrant une expérience utilisateur optimale et fluide.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">🔔</div>
                    <div class="feature-text">
                        <h3>Notifications en temps réel</h3>
                        <p>Recevez instantanément les alertes importantes, les annonces et les mises à jour de l'établissement.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">👨‍👩‍👧‍👦</div>
                    <div class="feature-text">
                        <h3>Espace parent dédié</h3>
                        <p>Suivez la scolarité de vos enfants, consultez les notes, absences et communiquez avec les enseignants.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">📚</div>
                    <div class="feature-text">
                        <h3>Espace élève complet</h3>
                        <p>Accédez à son emploi du temps, devoirs, ressources pédagogiques et résultats où que vous soyez.</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <div class="feature-text">
                        <h3>Performance optimisée</h3>
                        <p>Interface rapide et réactive, même avec une connexion internet limitée ou en mode hors ligne.</p>
                    </div>
                </div>
            </div>
            
            <div class="mobile-preview">
                <div class="phone-mockup">
                    <div class="phone-screen">
                        <div class="app-icon">E</div>
                        <div class="app-text">EduManager Mobile</div>
                        <div class="app-text">Restez connecté avec votre établissement</div>
                        <div class="app-buttons">
                            <div class="app-store-btn">App Store</div>
                            <div class="app-store-btn">Play Store</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>