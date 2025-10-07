<?php
$pageTitle = "Sécurité renforcée";
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
        
        .security-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
            overflow: hidden;
        }
        
        .security-header {
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
        
        .security-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .security-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .security-content {
            padding: 40px;
        }
        
        .security-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .security-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 4px solid #4361ee;
        }
        
        .security-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        
        .security-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 30px;
        }
        
        .security-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .security-description {
            color: #718096;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .security-features {
            text-align: left;
            margin-top: 20px;
        }
        
        .security-features ul {
            list-style: none;
            padding: 0;
        }
        
        .security-features li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
            color: #4a5568;
        }
        
        .security-features li:before {
            content: "✓";
            color: #4361ee;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .compliance-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 12px;
            padding: 40px;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .compliance-section h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #2d3748;
        }
        
        .compliance-section p {
            color: #718096;
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }
        
        .compliance-badges {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        
        .compliance-badge {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }
        
        .badge-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        
        .badge-text {
            font-size: 0.8rem;
            font-weight: 600;
            color: #2d3748;
            text-align: center;
        }
        
        .security-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #4361ee;
            margin-bottom: 10px;
        }
        
        .stat-label {
            color: #718096;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .security-header {
                padding: 30px 20px;
            }
            
            .security-header h1 {
                font-size: 2rem;
            }
            
            .security-content {
                padding: 30px 20px;
            }
            
            .security-grid {
                grid-template-columns: 1fr;
            }
            
            .compliance-section {
                padding: 30px 20px;
            }
            
            .compliance-badges {
                gap: 15px;
            }
            
            .compliance-badge {
                width: 80px;
                height: 80px;
            }
            
            .security-stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 480px) {
            .security-stats {
                grid-template-columns: 1fr;
            }
            
            .compliance-badge {
                width: 70px;
                height: 70px;
            }
            
            .badge-icon {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="security-container">
        <div class="security-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Sécurité renforcée</span>
            </div>
            <h1>Sécurité renforcée</h1>
            <p>Protégez les données sensibles avec notre infrastructure sécurisée, chiffrée et conforme au RGPD.</p>
        </div>
        
        <div class="security-content">
            <div class="security-grid">
                <div class="security-card">
                    <div class="security-icon">🔒</div>
                    <h3 class="security-title">Chiffrement de bout en bout</h3>
                    <p class="security-description">Toutes vos données sont chiffrées tant en transit qu'au repos.</p>
                    <div class="security-features">
                        <ul>
                            <li>Chiffrement AES-256</li>
                            <li>SSL/TLS pour les données en transit</li>
                            <li>Clés de chiffrement gérées séparément</li>
                        </ul>
                    </div>
                </div>
                
                <div class="security-card">
                    <div class="security-icon">👮‍♂️</div>
                    <h3 class="security-title">Contrôle d'accès granulaire</h3>
                    <p class="security-description">Définissez des permissions précises pour chaque utilisateur.</p>
                    <div class="security-features">
                        <ul>
                            <li>Rôles et permissions personnalisables</li>
                            <li>Authentification à deux facteurs</li>
                            <li>Audit des connexions et activités</li>
                        </ul>
                    </div>
                </div>
                
                <div class="security-card">
                    <div class="security-icon">📊</div>
                    <h3 class="security-title">Sauvegardes automatiques</h3>
                    <p class="security-description">Vos données sont sauvegardées automatiquement et sécurisées.</p>
                    <div class="security-features">
                        <ul>
                            <li>Sauvegardes quotidiennes incrémentielles</li>
                            <li>Rétention des données pendant 365 jours</li>
                            <li>Récupération rapide en cas d'incident</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="compliance-section">
                <h2>Conformité et certifications</h2>
                <p>Notre infrastructure respecte les normes les plus strictes en matière de protection des données.</p>
                <div class="compliance-badges">
                    <div class="compliance-badge">
                        <div class="badge-icon">📝</div>
                        <div class="badge-text">RGPD</div>
                    </div>
                    <div class="compliance-badge">
                        <div class="badge-icon">🛡️</div>
                        <div class="badge-text">ISO 27001</div>
                    </div>
                    <div class="compliance-badge">
                        <div class="badge-icon">🔐</div>
                        <div class="badge-text">HDS</div>
                    </div>
                    <div class="compliance-badge">
                        <div class="badge-icon">🌐</div>
                        <div class="badge-text">Cloud Act</div>
                    </div>
                </div>
            </div>
            
            <div class="security-stats">
                <div class="stat-item">
                    <div class="stat-number">99.99%</div>
                    <div class="stat-label">Disponibilité</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">0</div>
                    <div class="stat-label">Incidents de sécurité</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Surveillance</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">256-bit</div>
                    <div class="stat-label">Chiffrement</div>
                </div>
            </div>
        </div>
        
</body>
</html>