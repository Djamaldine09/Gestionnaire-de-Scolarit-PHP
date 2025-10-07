<?php
$pageTitle = "Suivi financier";
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
        
        .finance-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
            overflow: hidden;
        }
        
        .finance-header {
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
        
        .finance-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .finance-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .finance-content {
            padding: 40px;
        }
        
        .finance-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .feature-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 4px solid #4361ee;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: white;
            font-size: 28px;
        }
        
        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .feature-description {
            color: #718096;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
        }
        
        .feature-list li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
            color: #4a5568;
        }
        
        .feature-list li:before {
            content: "✓";
            color: #4361ee;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .finance-dashboard {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 12px;
            padding: 40px;
            margin-bottom: 40px;
        }
        
        .dashboard-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .dashboard-header h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .dashboard-header p {
            color: #718096;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .dashboard-preview {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .dashboard-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 15px;
        }
        
        .tab {
            padding: 10px 20px;
            background: #f8fafc;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .tab.active {
            background: #4361ee;
            color: white;
        }
        
        .dashboard-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .stat-card {
            background: #f8fafc;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        
        .stat-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4361ee;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.8rem;
            color: #718096;
        }
        
        .chart-container {
            height: 200px;
            background: linear-gradient(180deg, #e6eeff 0%, #d6e2ff 100%);
            border-radius: 8px;
            display: flex;
            align-items: end;
            justify-content: space-around;
            padding: 20px;
        }
        
        .chart-bar {
            width: 40px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            border-radius: 4px 4px 0 0;
            position: relative;
        }
        
        .chart-label {
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.7rem;
            color: #718096;
            white-space: nowrap;
        }
        
        .benefits-section {
            margin-bottom: 40px;
        }
        
        .benefits-section h2 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: #2d3748;
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
            .finance-header {
                padding: 30px 20px;
            }
            
            .finance-header h1 {
                font-size: 2rem;
            }
            
            .finance-content {
                padding: 30px 20px;
            }
            
            .finance-features {
                grid-template-columns: 1fr;
            }
            
            .finance-dashboard {
                padding: 30px 20px;
            }
            
            .dashboard-tabs {
                flex-wrap: wrap;
            }
            
            .dashboard-stats {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .chart-container {
                height: 150px;
            }
            
            .chart-bar {
                width: 30px;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
            }
            
        }
        
        @media (max-width: 480px) {
            .dashboard-stats {
                grid-template-columns: 1fr;
            }
            
            .chart-container {
                height: 120px;
                padding: 10px;
            }
            
            .chart-bar {
                width: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="finance-container">
        <div class="finance-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Suivi financier</span>
            </div>
            <h1>Suivi financier</h1>
            <p>Automatisez la gestion des frais de scolarité, des bourses et des paiements avec des rapports détaillés et des alertes.</p>
        </div>
        
        <div class="finance-content">
            <div class="finance-features">
                <div class="feature-card">
                    <div class="feature-icon">💳</div>
                    <h3 class="feature-title">Gestion des paiements</h3>
                    <p class="feature-description">Automatisez le suivi des frais de scolarité et des différents paiements.</p>
                    <ul class="feature-list">
                        <li>Paiements en ligne sécurisés</li>
                        <li>Suivi des échéances automatique</li>
                        <li>Rappels de paiement automatiques</li>
                        <li>Historique complet des transactions</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3 class="feature-title">Rapports détaillés</h3>
                    <p class="feature-description">Générez des rapports financiers complets et personnalisables.</p>
                    <ul class="feature-list">
                        <li>Bilans financiers mensuels/trimestriels</li>
                        <li>Analyse des recettes et dépenses</li>
                        <li>Export en PDF, Excel et CSV</li>
                        <li>Tableaux de bord personnalisables</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🔔</div>
                    <h3 class="feature-title">Alertes automatiques</h3>
                    <p class="feature-description">Restez informé des événements importants grâce aux notifications.</p>
                    <ul class="feature-list">
                        <li>Alertes de paiements en retard</li>
                        <li>Notifications de solde insuffisant</li>
                        <li>Rapports d'anomalies automatiques</li>
                        <li>Notifications personnalisables</li>
                    </ul>
                </div>
            </div>
            
            <div class="finance-dashboard">
                <div class="dashboard-header">
                    <h2>Tableau de bord financier</h2>
                    <p>Visualisez en un clin d'œil l'état financier de votre établissement</p>
                </div>
                
                <div class="dashboard-preview">
                    <div class="dashboard-tabs">
                        <button class="tab active">Aperçu</button>
                        <button class="tab">Paiements</button>
                        <button class="tab">Rapports</button>
                        <button class="tab">Analytique</button>
                    </div>
                    
                    <div class="dashboard-stats">
                        <div class="stat-card">
                            <div class="stat-value">€156,789</div>
                            <div class="stat-label">Recettes mensuelles</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">97%</div>
                            <div class="stat-label">Taux de recouvrement</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">€12,450</div>
                            <div class="stat-label">En attente</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value">€3,210</div>
                            <div class="stat-label">En retard</div>
                        </div>
                    </div>
                    
                    <div class="chart-container">
                        <div class="chart-bar" style="height: 70%">
                            <span class="chart-label">Lun</span>
                        </div>
                        <div class="chart-bar" style="height: 85%">
                            <span class="chart-label">Mar</span>
                        </div>
                        <div class="chart-bar" style="height: 60%">
                            <span class="chart-label">Mer</span>
                        </div>
                        <div class="chart-bar" style="height: 90%">
                            <span class="chart-label">Jeu</span>
                        </div>
                        <div class="chart-bar" style="height: 75%">
                            <span class="chart-label">Ven</span>
                        </div>
                        <div class="chart-bar" style="height: 50%">
                            <span class="chart-label">Sam</span>
                        </div>
                        <div class="chart-bar" style="height: 40%">
                            <span class="chart-label">Dim</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="benefits-section">
                <h2>Avantages du suivi financier automatisé</h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">⏱️</div>
                        <div class="benefit-text">Réduction de 70% du temps administratif</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">✅</div>
                        <div class="benefit-text">Diminution des erreurs de saisie</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">💰</div>
                        <div class="benefit-text">Amélioration du taux de recouvrement</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">📈</div>
                        <div class="benefit-text">Meilleure visibilité financière</div>
                    </div>
                </div>
            </div>
        </div>

    <script>
        // Script simple pour les onglets
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    </script>
</body>
</html>