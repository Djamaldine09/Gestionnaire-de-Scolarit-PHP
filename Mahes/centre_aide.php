<?php
$pageTitle = "Centre d'aide";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - EduManager</title>
    <style>
        :root {
            --primary: #667eea;
            --primary-dark: #5a67d8;
            --secondary: #764ba2;
            --accent: #f093fb;
            --light: #f8fafc;
            --dark: #2d3748;
            --gray: #718096;
            --light-gray: #e2e8f0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #edf2f7 100%);
            color: var(--dark);
            min-height: 100vh;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        .resources-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        
        .breadcrumb a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .breadcrumb a:hover {
            color: white;
        }
        
        .breadcrumb span {
            margin: 0 12px;
            color: rgba(255, 255, 255, 0.6);
        }
        
        .resources-header h1 {
            font-size: 2.8rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .resources-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Main Content */
        .resources-content {
            padding: 60px 0;
        }
        
        .doc-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            border: 1px solid var(--light-gray);
        }
        
        .doc-card h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .doc-card p {
            color: var(--gray);
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .faq-section {
            margin: 40px 0;
        }
        
        .faq-item {
            background: var(--light);
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .faq-question {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .faq-answer {
            color: var(--gray);
            line-height: 1.6;
        }
        
        
        /* Responsive */
        @media (max-width: 768px) {
            .resources-header {
                padding: 40px 0;
            }
            
            .resources-header h1 {
                font-size: 2.2rem;
            }
            
            .resources-content {
                padding: 40px 0;
            }
            
            .doc-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header class="resources-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Centre d'aide</span>
            </nav>
            <h1>Centre d'Aide</h1>
            <p>Trouvez des réponses à vos questions et résolvez vos problèmes rapidement</p>
        </div>
    </header>

    <main class="resources-content">
        <div class="container">
            <div class="doc-card">
                <h2>🔍 Questions Fréquentes</h2>
                
                <div class="faq-section">
                    <div class="faq-item">
                        <div class="faq-question">Comment réinitialiser mon mot de passe ?</div>
                        <div class="faq-answer">
                            <p>Cliquez sur "Mot de passe oublié" sur la page de connexion. Vous recevrez un email avec un lien de réinitialisation valable 24 heures.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">Comment ajouter de nouveaux utilisateurs ?</div>
                        <div class="faq-answer">
                            <p>Allez dans Administration → Utilisateurs → Ajouter un utilisateur. Vous pouvez ajouter des utilisateurs individuellement ou importer une liste.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">Comment configurer les notifications ?</div>
                        <div class="faq-answer">
                            <p>Dans Paramètres → Notifications, vous pouvez personnaliser les alertes par email et push notification pour différents événements.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="doc-card">
                <h2>📞 Support Direct</h2>
                <p>Notre équipe de support est disponible pour vous aider :</p>
                <ul style="margin: 20px 0; padding-left: 20px; color: var(--gray);">
                    <li><strong>Email:</strong> support@edumanager.fi (réponse sous 24h)</li>
                    <li><strong>Téléphone:</strong> +358 50 123 4567 (9h-18h)</li>
                    <li><strong>Chat en direct:</strong> Disponible sur votre tableau de bord</li>
                </ul>
            </div>
        </div>
    </main>


</body>
</html>