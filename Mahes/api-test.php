<?php
$pageTitle = "Tester l'API";
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
        
        .tester-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
        }
        
        .tester-header {
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
        
        .tester-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .tester-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .tester-content {
            padding: 40px;
        }
        
        .tester-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .request-panel, .response-panel {
            background: #f8fafc;
            border-radius: 12px;
            padding: 25px;
        }
        
        .panel-header {
            margin-bottom: 20px;
        }
        
        .panel-header h2 {
            font-size: 1.4rem;
            color: #2d3748;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .panel-header h2::before {
            content: "";
            width: 20px;
            height: 20px;
            border-radius: 4px;
        }
        
        .request-panel .panel-header h2::before {
            background: #4361ee;
        }
        
        .response-panel .panel-header h2::before {
            background: #48bb78;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2d3748;
        }
        
        .form-group select,
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-group select:focus,
        .form-group input:focus {
            outline: none;
            border-color: #4361ee;
        }
        
        .endpoint-input {
            display: flex;
            align-items: center;
        }
        
        .method-select {
            width: 100px;
            margin-right: 10px;
            flex-shrink: 0;
        }
        
        .url-input {
            flex: 1;
        }
        
        .parameters {
            background: white;
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
        }
        
        .param-row {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
        }
        
        .param-name {
            width: 120px;
            flex-shrink: 0;
        }
        
        .param-value {
            flex: 1;
        }
        
        .remove-param {
            background: #f56565;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
        }
        
        .add-param {
            background: #48bb78;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 15px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .execute-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
        }
        
        .execute-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }
        
        .response-content {
            background: #2d3748;
            color: #e2e8f0;
            padding: 20px;
            border-radius: 8px;
            height: 300px;
            overflow-y: auto;
            font-family: 'Courier New', monospace;
        }
        
        .response-info {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }
        
        .status-code {
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 600;
        }
        
        .status-200 { background: #48bb78; color: white; }
        .status-400 { background: #ed8936; color: white; }
        .status-500 { background: #f56565; color: white; }
        
        .response-time {
            color: #718096;
        }
        
        .examples-section {
            margin-top: 40px;
        }
        
        .examples-section h2 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: #2d3748;
            text-align: center;
        }
        
        .examples-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .example-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .example-card:hover {
            transform: translateY(-3px);
            border-color: #4361ee;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .example-method {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: white;
        }
        
        .example-url {
            font-family: 'Courier New', monospace;
            color: #2d3748;
            margin-bottom: 10px;
            word-break: break-all;
        }
        
        .example-description {
            color: #718096;
            font-size: 0.9rem;
        }
        
        .tester-cta {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            padding: 40px;
            text-align: center;
            border-radius: 12px;
            margin-top: 40px;
        }
        
        .tester-cta h2 {
            margin-bottom: 20px;
        }
        
        .tester-cta p {
            opacity: 0.9;
            margin-bottom: 25px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-button {
            display: inline-block;
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
        
        @media (max-width: 968px) {
            .tester-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .tester-header {
                padding: 30px 20px;
            }
            
            .tester-header h1 {
                font-size: 2rem;
            }
            
            .tester-content {
                padding: 30px 20px;
            }
            
            .endpoint-input {
                flex-direction: column;
            }
            
            .method-select {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .param-row {
                flex-direction: column;
                align-items: stretch;
            }
            
            .param-name {
                width: 100%;
            }
            
            .examples-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="tester-container">
        <div class="tester-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <a href="integr.php">Intégrations</a>
                <span>/</span>
                <span>Tester l'API</span>
            </div>
            <h1>Tester l'API</h1>
            <p>Testez en direct les endpoints de notre API sans avoir à écrire de code</p>
        </div>
        
        <div class="tester-content">
            <div class="tester-grid">
                <div class="request-panel">
                    <div class="panel-header">
                        <h2>Requête API</h2>
                    </div>
                    
                    <div class="form-group">
                        <label>Méthode HTTP</label>
                        <div class="endpoint-input">
                            <select class="method-select" id="httpMethod">
                                <option value="GET">GET</option>
                                <option value="POST">POST</option>
                                <option value="PUT">PUT</option>
                                <option value="DELETE">DELETE</option>
                            </select>
                            <input type="text" class="url-input" id="apiUrl" 
                                   value="https://api.edumanager.fi/v1/students" 
                                   placeholder="Entrez l'URL de l'endpoint">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Clé API</label>
                        <input type="password" id="apiKey" placeholder="Entrez votre clé API">
                    </div>
                    
                    <div class="form-group">
                        <label>Paramètres de requête</label>
                        <div class="parameters" id="parametersContainer">
                            <div class="param-row">
                                <input type="text" class="param-name" placeholder="Paramètre">
                                <input type="text" class="param-value" placeholder="Valeur">
                                <button class="remove-param">×</button>
                            </div>
                        </div>
                        <button class="add-param" id="addParam">+ Ajouter un paramètre</button>
                    </div>
                    
                    <button class="execute-btn" id="executeBtn">Exécuter la requête</button>
                </div>
                
                <div class="response-panel">
                    <div class="panel-header">
                        <h2>Réponse</h2>
                    </div>
                    
                    <div class="response-content" id="responseOutput">
                        <span style="color: #a0aec0;">// La réponse de l'API s'affichera ici</span>
                    </div>
                    
                    <div class="response-info">
                        <div class="status-code" id="statusCode">-</div>
                        <div class="response-time" id="responseTime">Temps: - ms</div>
                    </div>
                </div>
            </div>
            
            <div class="examples-section">
                <h2>Exemples de requêtes</h2>
                <div class="examples-grid">
                    <div class="example-card" data-method="GET" data-url="https://api.edumanager.fi/v1/students">
                        <span class="example-method" style="background: #48bb78;">GET</span>
                        <div class="example-url">/v1/students</div>
                        <p class="example-description">Récupère la liste des étudiants avec pagination</p>
                    </div>
                    
                    <div class="example-card" data-method="GET" data-url="https://api.edumanager.fi/v1/students/std_123">
                        <span class="example-method" style="background: #48bb78;">GET</span>
                        <div class="example-url">/v1/students/{id}</div>
                        <p class="example-description">Récupère les détails d'un étudiant spécifique</p>
                    </div>
                    
                    <div class="example-card" data-method="POST" data-url="https://api.edumanager.fi/v1/students">
                        <span class="example-method" style="background: #4299e1;">POST</span>
                        <div class="example-url">/v1/students</div>
                        <p class="example-description">Crée un nouvel étudiant</p>
                    </div>
                    
                    <div class="example-card" data-method="GET" data-url="https://api.edumanager.fi/v1/courses">
                        <span class="example-method" style="background: #48bb78;">GET</span>
                        <div class="example-url">/v1/courses</div>
                        <p class="example-description">Récupère la liste des cours disponibles</p>
                    </div>
                </div>
            </div>
            
            <div class="tester-cta">
                <h2>Besoin d'aide ?</h2>
                <p>Notre équipe de support est là pour vous aider à intégrer l'API rapidement et efficacement.</p>
                <a href="contact.php" class="cta-button">Contactez le support</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion des paramètres
            document.getElementById('addParam').addEventListener('click', function() {
                const paramRow = document.createElement('div');
                paramRow.className = 'param-row';
                paramRow.innerHTML = `
                    <input type="text" class="param-name" placeholder="Paramètre">
                    <input type="text" class="param-value" placeholder="Valeur">
                    <button class="remove-param">×</button>
                `;
                document.getElementById('parametersContainer').appendChild(paramRow);
                
                // Ajouter l'événement de suppression
                paramRow.querySelector('.remove-param').addEventListener('click', function() {
                    paramRow.remove();
                });
            });
            
            // Suppression des paramètres existants
            document.querySelectorAll('.remove-param').forEach(btn => {
                btn.addEventListener('click', function() {
                    this.parentElement.remove();
                });
            });
            
            // Exemples de requêtes
            document.querySelectorAll('.example-card').forEach(card => {
                card.addEventListener('click', function() {
                    const method = this.getAttribute('data-method');
                    const url = this.getAttribute('data-url');
                    
                    document.getElementById('httpMethod').value = method;
                    document.getElementById('apiUrl').value = url;
                });
            });
            
            // Exécution de la requête
            document.getElementById('executeBtn').addEventListener('click', async function() {
                const method = document.getElementById('httpMethod').value;
                const url = document.getElementById('apiUrl').value;
                const apiKey = document.getElementById('apiKey').value;
                
                if (!apiKey) {
                    alert('Veuillez entrer votre clé API');
                    return;
                }
                
                const startTime = Date.now();
                this.textContent = 'En cours...';
                this.disabled = true;
                
                try {
                    // Simulation d'une requête API (en production, vous utiliseriez fetch)
                    await new Promise(resolve => setTimeout(resolve, 1000));
                    
                    // Réponse simulée
                    const statusCode = 200;
                    const responseData = {
                        data: [
                            {
                                id: "std_123",
                                firstName: "Marie",
                                lastName: "Dupont",
                                email: "marie.dupont@exemple.fr",
                                class: "4ème A"
                            },
                            {
                                id: "std_124",
                                firstName: "Pierre",
                                lastName: "Martin",
                                email: "pierre.martin@exemple.fr",
                                class: "4ème A"
                            }
                        ],
                        pagination: {
                            total: 2,
                            page: 1,
                            limit: 20
                        }
                    };
                    
                    const endTime = Date.now();
                    const responseTime = endTime - startTime;
                    
                    // Affichage des résultats
                    document.getElementById('responseOutput').textContent = 
                        JSON.stringify(responseData, null, 2);
                    document.getElementById('statusCode').textContent = statusCode;
                    document.getElementById('statusCode').className = 'status-code status-200';
                    document.getElementById('responseTime').textContent = `Temps: ${responseTime} ms`;
                    
                } catch (error) {
                    document.getElementById('responseOutput').textContent = 
                        `Erreur: ${error.message}`;
                    document.getElementById('statusCode').textContent = '500';
                    document.getElementById('statusCode').className = 'status-code status-500';
                } finally {
                    this.textContent = 'Exécuter la requête';
                    this.disabled = false;
                }
            });
        });
    </script>
</body>
</html>