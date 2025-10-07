<?php
$pageTitle = "Documentation API";
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
            padding: 20px;
        }
        
        .api-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
        }
        
        .api-header {
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
        
        .api-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .api-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .api-content {
            padding: 40px;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 40px;
        }
        
        .api-sidebar {
            background: #f8fafc;
            border-radius: 12px;
            padding: 25px;
            height: fit-content;
            position: sticky;
            top: 20px;
        }
        
        .sidebar-section {
            margin-bottom: 25px;
        }
        
        .sidebar-section h3 {
            font-size: 1.1rem;
            margin-bottom: 15px;
            color: #2d3748;
            padding-bottom: 10px;
            border-bottom: 2px solid #e2e8f0;
        }
        
        .sidebar-links {
            list-style: none;
        }
        
        .sidebar-links li {
            margin-bottom: 10px;
        }
        
        .sidebar-links a {
            color: #4a5568;
            text-decoration: none;
            display: block;
            padding: 8px 12px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .sidebar-links a:hover,
        .sidebar-links a.active {
            background: #4361ee;
            color: white;
        }
        
        .api-main {
            flex: 1;
        }
        
        .api-section {
            margin-bottom: 40px;
            scroll-margin-top: 20px;
        }
        
        .api-section h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #2d3748;
            padding-bottom: 10px;
            border-bottom: 2px solid #e2e8f0;
        }
        
        .api-section h3 {
            font-size: 1.4rem;
            margin: 25px 0 15px;
            color: #2d3748;
        }
        
        .api-section p {
            color: #718096;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .endpoint-card {
            background: #f8fafc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid #4361ee;
        }
        
        .endpoint-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .endpoint-method {
            padding: 6px 12px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .method-get { background: #48bb78; color: white; }
        .method-post { background: #4299e1; color: white; }
        .method-put { background: #ed8936; color: white; }
        .method-delete { background: #f56565; color: white; }
        
        .endpoint-url {
            font-family: 'Courier New', monospace;
            color: #2d3748;
        }
        
        .endpoint-description {
            color: #718096;
            margin-bottom: 15px;
        }
        
        .parameter-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        
        .parameter-table th,
        .parameter-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .parameter-table th {
            background: #edf2f7;
            font-weight: 600;
            color: #2d3748;
        }
        
        .code-block {
            background: #2d3748;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            overflow-x: auto;
            font-family: 'Courier New', monospace;
        }
        
        .code-comment { color: #a0aec0; }
        .code-keyword { color: #ff6b6b; }
        .code-string { color: #51cf66; }
        .code-function { color: #f6ad55; }
        .code-number { color: #d6bcfa; }
        
        .response-example {
            background: #f8fafc;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        
        .response-example h4 {
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .quick-start {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 12px;
            padding: 30px;
            margin: 40px 0;
        }
        
        .quick-start h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .step {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .step-number {
            width: 40px;
            height: 40px;
            background: #4361ee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            flex-shrink: 0;
        }
        
        .step-content {
            flex: 1;
        }
        
        .step-content h4 {
            margin-bottom: 10px;
            color: #2d3748;
        }
        
        .api-cta {
            background: #4361ee;
            color: white;
            padding: 40px;
            text-align: center;
            border-radius: 12px;
            margin-top: 40px;
        }
        
        .api-cta h2 {
            margin-bottom: 20px;
        }
        
        .api-cta p {
            opacity: 0.9;
            margin-bottom: 25px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .cta-button {
            padding: 12px 25px;
            background: white;
            color: #4361ee;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        
        .cta-button.secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .cta-button.secondary:hover {
            background: white;
            color: #4361ee;
        }
        
        @media (max-width: 968px) {
            .api-content {
                grid-template-columns: 1fr;
            }
            
            .api-sidebar {
                position: static;
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .api-header {
                padding: 30px 20px;
            }
            
            .api-header h1 {
                font-size: 2rem;
            }
            
            .api-content {
                padding: 30px 20px;
            }
            
            .endpoint-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .cta-button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="api-container">
        <div class="api-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <a href="integr.php">Intégrations</a>
                <span>/</span>
                <span>Documentation API</span>
            </div>
            <h1>Documentation API</h1>
            <p>Documentation complète pour intégrer votre application avec notre API RESTful</p>
        </div>
        
        <div class="api-content">
            <div class="api-sidebar">
                <div class="sidebar-section">
                    <h3>Introduction</h3>
                    <ul class="sidebar-links">
                        <li><a href="#overview" class="active">Vue d'ensemble</a></li>
                        <li><a href="#authentication">Authentification</a></li>
                        <li><a href="#quick-start">Démarrage rapide</a></li>
                    </ul>
                </div>
                
                <div class="sidebar-section">
                    <h3>Endpoints</h3>
                    <ul class="sidebar-links">
                        <li><a href="#students">Étudiants</a></li>
                        <li><a href="#teachers">Enseignants</a></li>
                        <li><a href="#courses">Cours</a></li>
                        <li><a href="#grades">Notes</a></li>
                        <li><a href="#attendance">Présences</a></li>
                    </ul>
                </div>
                
                <div class="sidebar-section">
                    <h3>Ressources</h3>
                    <ul class="sidebar-links">
                        <li><a href="#error-codes">Codes d'erreur</a></li>
                        <li><a href="#rate-limiting">Limites de taux</a></li>
                        <li><a href="#changelog">Journal des modifications</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="api-main">
                <section id="overview" class="api-section">
                    <h2>Vue d'ensemble</h2>
                    <p>L'API EduManager permet aux développeurs d'intégrer des fonctionnalités de gestion scolaire dans leurs applications. Notre API RESTful utilise JSON pour les requêtes et réponses.</p>
                    
                    <div class="endpoint-card">
                        <div class="endpoint-header">
                            <span class="endpoint-method method-get">GET</span>
                            <span class="endpoint-url">https://api.edumanager.fi/v1/{resource}</span>
                        </div>
                        <p class="endpoint-description">Base URL pour toutes les requêtes API. Remplacez {resource} par l'endpoint souhaité.</p>
                    </div>
                </section>
                
                <section id="authentication" class="api-section">
                    <h2>Authentification</h2>
                    <p>Toutes les requêtes API doivent être authentifiées avec un token Bearer dans l'en-tête Authorization.</p>
                    
                    <div class="code-block">
                        <span class="code-comment"># Exemple d'en-tête d'authentification</span><br>
                        Authorization: Bearer votre_token_api_ici
                    </div>
                </section>
                
                <section id="quick-start" class="api-section">
                    <h2>Démarrage rapide</h2>
                    
                    <div class="quick-start">
                        <div class="step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>Obtenez votre clé API</h4>
                                <p>Connectez-vous à votre tableau de bord et générez une clé API dans la section Développeurs.</p>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>Faites votre première requête</h4>
                                <p>Utilisez curl ou votre langage préféré pour tester l'API :</p>
                                <div class="code-block">
                                    curl -H "Authorization: Bearer VOTRE_CLE_API" \<br>
                                    &nbsp;&nbsp;"https://api.edumanager.fi/v1/students"
                                </div>
                            </div>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>Explorez les endpoints</h4>
                                <p>Consultez la documentation complète pour découvrir toutes les fonctionnalités disponibles.</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section id="students" class="api-section">
                    <h2>Endpoints Étudiants</h2>
                    
                    <div class="endpoint-card">
                        <div class="endpoint-header">
                            <span class="endpoint-method method-get">GET</span>
                            <span class="endpoint-url">/v1/students</span>
                        </div>
                        <p class="endpoint-description">Récupère la liste des étudiants avec pagination et filtres optionnels.</p>
                        
                        <h4>Paramètres de requête</h4>
                        <table class="parameter-table">
                            <tr>
                                <th>Paramètre</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>integer</td>
                                <td>Numéro de page (défaut: 1)</td>
                            </tr>
                            <tr>
                                <td>limit</td>
                                <td>integer</td>
                                <td>Nombre d'éléments par page (défaut: 20, max: 100)</td>
                            </tr>
                        </table>
                        
                        <h4>Exemple de réponse</h4>
                        <div class="code-block">
                            {<br>
                            &nbsp;&nbsp;"data": [<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"id": "std_123",<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"firstName": "Marie",<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"lastName": "Dupont",<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"email": "marie.dupont@exemple.fr"<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                            &nbsp;&nbsp;],<br>
                            &nbsp;&nbsp;"pagination": {<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;"total": 150,<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;"page": 1,<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;"limit": 20<br>
                            &nbsp;&nbsp;}<br>
                            }
                        </div>
                    </div>
                </section>
                
                <div class="api-cta">
                    <h2>Prêt à commencer ?</h2>
                    <p>Rejoignez les milliers de développeurs qui utilisent déjà notre API pour créer des applications innovantes.</p>
                    <div class="cta-buttons">
                        <a href="api-test.php" class="cta-button">Tester l'API</a>
                        <a href="contact.php" class="cta-button secondary">Support technique</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Smooth scrolling for sidebar links
        document.querySelectorAll('.sidebar-links a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Update active class
                    document.querySelectorAll('.sidebar-links a').forEach(a => a.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>