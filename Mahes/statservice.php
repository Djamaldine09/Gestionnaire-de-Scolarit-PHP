<?php
$pageTitle = "Statut du service";
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
            --success: #48bb78;
            --warning: #ed8936;
            --danger: #f56565;
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
        
        .status-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .status-card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--light-gray);
        }
        
        .status-card h3 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .status-indicator {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 10px;
        }
        
        .status-operational { background: var(--success); }
        .status-maintenance { background: var(--warning); }
        .status-outage { background: var(--danger); }
        
        .incident-list {
            margin-top: 40px;
        }
        
        .incident-item {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--light-gray);
        }
        
        .incident-item h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .incident-item p {
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
            
            .status-grid {
                grid-template-columns: 1fr;
            }
            
            .status-card, .incident-item {
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
                <span>Statut du service</span>
            </nav>
            <h1>Statut du Service</h1>
            <p>Informations en temps réel sur l'état de nos services et incidents</p>
        </div>
    </header>

    <main class="resources-content">
        <div class="container">
            <div class="status-grid">
                <div class="status-card">
                    <h3>🌐 Application Web</h3>
                    <p><span class="status-indicator status-operational"></span> Opérationnel</p>
                </div>
                
                <div class="status-card">
                    <h3>📱 Application Mobile</h3>
                    <p><span class="status-indicator status-operational"></span> Opérationnel</p>
                </div>
                
                <div class="status-card">
                    <h3>📊 API</h3>
                    <p><span class="status-indicator status-operational"></span> Opérationnel</p>
                </div>
                
                <div class="status-card">
                    <h3>📧 Notifications</h3>
                    <p><span class="status-indicator status-operational"></span> Opérationnel</p>
                </div>
            </div>

            <div class="incident-list">
                <h2>📝 Incidents Récents</h2>
                <div class="incident-item">
                    <h3>Aucun incident en cours</h3>
                    <p>Tous les systèmes fonctionnent normalement. Dernière vérification: aujourd'hui à 09:45</p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>