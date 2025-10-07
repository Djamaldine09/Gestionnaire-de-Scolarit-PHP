<?php
$pageTitle = "Webinaires";
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
        
        .webinar-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .webinar-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--light-gray);
        }
        
        .webinar-date {
            background: var(--primary);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 15px;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .webinar-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .webinar-card p {
            color: var(--gray);
            line-height: 1.6;
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
            
            .webinar-grid {
                grid-template-columns: 1fr;
            }
            
            .webinar-card, .doc-card {
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
                <span>Webinaires</span>
            </nav>
            <h1>Webinaires et Formations</h1>
            <p>Apprenez à maîtriser EduManager grâce à nos sessions de formation en direct</p>
        </div>
    </header>

    <main class="resources-content">
        <div class="container">
            <div class="webinar-grid">
                <div class="webinar-card">
                    <span class="webinar-date">15 Janvier 2024 - 14h00</span>
                    <h3>🚀 Démarrage avec EduManager</h3>
                    <p>Session d'introduction pour nouveaux utilisateurs. Configuration de base et premières étapes.</p>
                </div>
                
                <div class="webinar-card">
                    <span class="webinar-date">22 Janvier 2024 - 16h00</span>
                    <h3>📊 Tableaux de Bord Avancés</h3>
                    <p>Apprenez à créer des dashboards personnalisés et à analyser vos données efficacement.</p>
                </div>
                
                <div class="webinar-card">
                    <span class="webinar-date">29 Janvier 2024 - 15h00</span>
                    <h3>📱 Application Mobile</h3>
                    <p>Découvrez toutes les fonctionnalités de notre application mobile pour enseignants et parents.</p>
                </div>
            </div>

            <div class="doc-card">
                <h2>📝 Comment s'inscrire</h2>
                <p>Pour participer à nos webinaires :</p>
                <ol style="margin: 20px 0; padding-left: 20px; color: var(--gray);">
                    <li>Connectez-vous à votre compte EduManager</li>
                    <li>Allez dans la section "Formation → Webinaires"</li>
                    <li>Choisissez la session qui vous intéresse</li>
                    <li>Cliquez sur "S'inscrire"</li>
                </ol>
            </div>
        </div>
    </main>

</body>
</html>