<?php
$pageTitle = "Intégrations";
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
        
        .integrations-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
            overflow: hidden;
        }
        
        .integrations-header {
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
        
        .integrations-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .integrations-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .integrations-content {
            padding: 40px;
        }
        
        .platforms-section {
            margin-bottom: 50px;
        }
        
        .platforms-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .platforms-header h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .platforms-header p {
            color: #718096;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .platforms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }
        
        .platform-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .platform-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            border-color: #4361ee;
        }
        
        .platform-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .platform-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .platform-description {
            color: #718096;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .platform-features {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
        
        .platform-features li {
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
            color: #4a5568;
            font-size: 0.9rem;
            text-align: left;
        }
        
        .platform-features li:before {
            content: "•";
            color: #4361ee;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .integration-types {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .integration-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border-left: 4px solid #4361ee;
        }
        
        .integration-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: white;
            font-size: 24px;
        }
        
        .integration-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .integration-description {
            color: #718096;
            line-height: 1.6;
        }
        
        .api-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 12px;
            padding: 40px;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .api-content {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .api-content h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #2d3748;
        }
        
        .api-content p {
            color: #718096;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        
        .code-snippet {
            background: #2d3748;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 8px;
            text-align: left;
            font-family: 'Courier New', monospace;
            margin: 20px 0;
            overflow-x: auto;
        }
        
        .code-comment {
            color: #a0aec0;
        }
        
        .code-keyword {
            color: #ff6b6b;
        }
        
        .code-string {
            color: #51cf66;
        }
        
        .api-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .api-btn {
            padding: 12px 25px;
            background: #4361ee;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .api-btn:hover {
            background: #3a0ca3;
            transform: translateY(-2px);
        }
        
        .api-btn.secondary {
            background: transparent;
            color: #4361ee;
            border: 2px solid #4361ee;
        }
        
        .api-btn.secondary:hover {
            background: #4361ee;
            color: white;
        }
        
        .benefits-section {
            margin-bottom: 40px;
        }
        
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .benefit-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        .benefit-icon {
            width: 50px;
            height: 50px;
            background: #4361ee;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        
        .benefit-text {
            color: #4a5568;
            font-weight: 500;
        }
        
        
        @media (max-width: 768px) {
            .integrations-header {
                padding: 30px 20px;
            }
            
            .integrations-header h1 {
                font-size: 2rem;
            }
            
            .integrations-content {
                padding: 30px 20px;
            }
            
            .platforms-grid {
                grid-template-columns: 1fr;
            }
            
            .integration-types {
                grid-template-columns: 1fr;
            }
            
            .api-section {
                padding: 30px 20px;
            }
            
            .api-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 480px) {
            .platform-card {
                padding: 20px;
            }
            
            .platform-icon {
                width: 60px;
                height: 60px;
                font-size: 2rem;
            }
            
            .integration-card {
                padding: 20px;
            }
            
            .api-btn {
                padding: 10px 20px;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="integrations-container">
        <div class="integrations-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Intégrations</span>
            </div>
            <h1>Intégrations</h1>
            <p>Connectez-vous facilement aux outils que vous utilisez déjà (Google Workspace, Microsoft 365, etc.).</p>
        </div>
        
        <div class="integrations-content">
            <div class="platforms-section">
                <div class="platforms-header">
                    <h2>Plateformes compatibles</h2>
                    <p>Notre solution s'intègre parfaitement avec les écosystèmes les plus populaires</p>
                </div>
                
                <div class="platforms-grid">
                    <div class="platform-card">
                        <div class="platform-icon">📧</div>
                        <h3 class="platform-title">Google Workspace</h3>
                        <p class="platform-description">Synchronisation complète avec l'écosystème Google</p>
                        <ul class="platform-features">
                            <li>Google Classroom intégré</li>
                            <li>Google Drive synchronisé</li>
                            <li>Gmail et Calendar connectés</li>
                            <li>Authentification Google SSO</li>
                        </ul>
                    </div>
                    
                    <div class="platform-card">
                        <div class="platform-icon">💼</div>
                        <h3 class="platform-title">Microsoft 365</h3>
                        <p class="platform-description">Intégration totale avec la suite Microsoft</p>
                        <ul class="platform-features">
                            <li>Teams pour l'enseignement</li>
                            <li>OneDrive synchronisé</li>
                            <li>Outlook intégré</li>
                            <li>Azure AD authentication</li>
                        </ul>
                    </div>
                    
                    <div class="platform-card">
                        <div class="platform-icon">📊</div>
                        <h3 class="platform-title">Outils spécialisés</h3>
                        <p class="platform-description">Connecteurs pour les outils éducatifs</p>
                        <ul class="platform-features">
                            <li>Moodle et LMS</li>
                            <li>Outils de visioconférence</li>
                            <li>Applications éducatives</li>
                            <li>Systèmes de bibliothèque</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="integration-types">
                <div class="integration-card">
                    <div class="integration-icon">🔄</div>
                    <h3 class="integration-title">Synchronisation automatique</h3>
                    <p class="integration-description">Données synchronisées en temps réel entre toutes les plateformes connectées, sans intervention manuelle.</p>
                </div>
                
                <div class="integration-card">
                    <div class="integration-icon">🔐</div>
                    <h3 class="integration-title">Authentification unique</h3>
                    <p class="integration-description">Connectez-vous une seule fois pour accéder à tous vos outils, avec une sécurité renforcée.</p>
                </div>
                
                <div class="integration-card">
                    <div class="integration-icon">⚡</div>
                    <h3 class="integration-title">API complète</h3>
                    <p class="integration-description">Intégrez vos outils personnalisés grâce à notre API RESTful moderne et documentée.</p>
                </div>
            </div>
            
            <div class="api-section">
                <div class="api-content">
                    <h2>API Developer-Friendly</h2>
                    <p>Notre API RESTful vous permet d'intégrer facilement vos applications personnalisées avec des endpoints bien documentés et une authentification sécurisée.</p>
                    
                    <div class="code-snippet">
                        <span class="code-comment"># Exemple d'appel API pour récupérer les étudiants</span><br>
                        <span class="code-keyword">import</span> requests<br><br>
                        
                        <span class="code-comment"># Configuration</span><br>
                        api_key = <span class="code-string">"votre_api_key"</span><br>
                        base_url = <span class="code-string">"https://api.edumanager.fi/v1"</span><br><br>
                        
                        <span class="code-comment"># Requête pour récupérer les étudiants</span><br>
                        headers = {<br>
                        &nbsp;&nbsp;<span class="code-string">"Authorization"</span>: <span class="code-string">f"Bearer {api_key}"</span>,<br>
                        &nbsp;&nbsp;<span class="code-string">"Content-Type"</span>: <span class="code-string">"application/json"</span><br>
                        }<br><br>
                        
                        response = requests.get(<br>
                        &nbsp;&nbsp;<span class="code-string">f"{base_url}/students"</span>,<br>
                        &nbsp;&nbsp;headers=headers<br>
                        )<br><br>
                        
                        <span class="code-keyword">if</span> response.status_code == 200:<br>
                        &nbsp;&nbsp;students = response.json()<br>
                        &nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">"Étudiants récupérés avec succès"</span>)<br>
                        <span class="code-keyword">else</span>:<br>
                        &nbsp;&nbsp;<span class="code-keyword">print</span>(<span class="code-string">f"Erreur: {response.status_code}"</span>)
                    </div>
                    
                    <div class="api-buttons">
                        <a href="api-doc.php" class="api-btn">Documentation API</a>
                        <a href="api-test.php" class="api-btn secondary">Tester l'API</a>
                    </div>
                </div>
            </div>
            
            <div class="benefits-section">
                <h2 style="text-align: center; margin-bottom: 30px; color: #2d3748;">Avantages des intégrations</h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">⏱️</div>
                        <div class="benefit-text">Gain de temps considérable</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">🔄</div>
                        <div class="benefit-text">Données synchronisées</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">🔒</div>
                        <div class="benefit-text">Sécurité renforcée</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">💡</div>
                        <div class="benefit-text">Expérience utilisateur unifiée</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>