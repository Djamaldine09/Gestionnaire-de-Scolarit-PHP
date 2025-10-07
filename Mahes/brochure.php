<?php
$pageTitle = "Télécharger la brochure";
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
        
        .brochure-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            overflow: hidden;
        }
        
        .brochure-header {
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
        
        .brochure-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .brochure-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .brochure-content {
            padding: 40px;
            text-align: center;
        }
        
        .brochure-preview {
            width: 300px;
            height: 400px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            margin: 0 auto 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .brochure-preview::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><text x="50%" y="50%" font-family="Arial" font-size="12" fill="rgba(255,255,255,0.1)" text-anchor="middle" dominant-baseline="middle">EduManager</text></svg>');
            background-size: 200px;
            opacity: 0.3;
        }
        
        .preview-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
            z-index: 1;
        }
        
        .preview-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            z-index: 1;
        }
        
        .download-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .download-card {
            background: #f8fafc;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            border: 2px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .download-card:hover {
            transform: translateY(-5px);
            border-color: #4361ee;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .download-icon {
            width: 60px;
            height: 60px;
            background: #4361ee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.5rem;
        }
        
        .download-card h3 {
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .download-card p {
            color: #718096;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .download-btn {
            display: inline-block;
            padding: 12px 25px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
        }
        
        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }
        
        .brochure-features {
            background: #f8fafc;
            padding: 40px;
            border-radius: 12px;
            margin-top: 40px;
        }
        
        .brochure-features h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2d3748;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .feature-item {
            text-align: center;
            padding: 20px;
        }
        
        .feature-icon {
            width: 50px;
            height: 50px;
            background: #4361ee;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: white;
            font-size: 1.2rem;
        }
        
        .feature-item h4 {
            margin-bottom: 10px;
            color: #2d3748;
        }
        
        .feature-item p {
            color: #718096;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        @media (max-width: 768px) {
            .brochure-header {
                padding: 30px 20px;
            }
            
            .brochure-header h1 {
                font-size: 2rem;
            }
            
            .brochure-content {
                padding: 30px 20px;
            }
            
            .brochure-preview {
                width: 250px;
                height: 350px;
            }
            
            .download-options {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="brochure-container">
        <div class="brochure-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Brochure</span>
            </div>
            <h1>Télécharger la brochure</h1>
            <p>Découvrez toutes les fonctionnalités de notre solution de gestion scolaire</p>
        </div>
        
        <div class="brochure-content">
            <div class="brochure-preview">
                <div class="preview-title">EduManager</div>
                <div class="preview-subtitle">Solution Complète</div>
            </div>
            
            <div class="download-options">
                <div class="download-card">
                    <div class="download-icon">📄</div>
                    <h3>Brochure Complète</h3>
                    <p>Document PDF détaillé avec toutes les fonctionnalités, tarifs et études de cas</p>
                    <a href="download.php?file=brochure_complete" class="download-btn">Télécharger (PDF - 2.3MB)</a>
                </div>
                
                <div class="download-card">
                    <div class="download-icon">🎥</div>
                    <h3>Présentation</h3>
                    <p>Version visuelle avec captures d'écran et démonstrations des principales fonctionnalités</p>
                    <a href="download.php?file=presentation" class="download-btn">Télécharger (PPTX - 5.1MB)</a>
                </div>
            </div>
            
            <div class="brochure-features">
                <h2>Ce que vous découvrirez dans notre brochure :</h2>
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">📊</div>
                        <h4>Tableaux de bord</h4>
                        <p>Visualisation en temps réel des indicateurs clés</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">📱</div>
                        <h4>Mobile First</h4>
                        <p>Application native pour iOS et Android</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🔒</div>
                        <h4>Sécurité</h4>
                        <p>Protection des données et conformité RGPD</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🔄</div>
                        <h4>Intégrations</h4>
                        <p>Connexion avec vos outils existants</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>