<?php
$pageTitle = "Fonctionnalités des Tableaux de bord";
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
        
        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .features-header {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            padding: 60px 40px;
            text-align: center;
        }
        
        .features-header h1 {
            font-size: 2.8rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .features-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
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
        
        .features-content {
            padding: 60px 40px;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .feature-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            color: white;
            font-size: 28px;
        }
        
        .feature-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 16px;
            color: #2d3748;
        }
        
        .feature-description {
            color: #718096;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        
        .feature-list {
            list-style-type: none;
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
        
        .demo-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 12px;
            padding: 40px;
            margin-bottom: 60px;
            text-align: center;
        }
        
        .demo-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #2d3748;
        }
        
        .demo-section p {
            color: #718096;
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }
        
        .demo-image {
            width: 100%;
            height: 300px;
            background: linear-gradient(45deg, #e0e7ff, #c7d2fe);
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #4361ee;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 30px;
        }
        
        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .btn-primary {
            display: inline-block;
            padding: 16px 32px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }
        
        .btn-secondary {
            display: inline-block;
            padding: 15px 30px;
            background: white;
            color: #4361ee;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            border: 2px solid #4361ee;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: #4361ee;
            color: white;
            transform: translateY(-2px);
        }
        
        .testimonials {
            margin-bottom: 60px;
        }
        
        .testimonials h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 40px;
            color: #2d3748;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border-left: 4px solid #4361ee;
        }
        
        .testimonial-text {
            color: #4a5568;
            font-style: italic;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #4361ee;
            font-weight: bold;
        }
        
        .author-info h4 {
            color: #2d3748;
            margin-bottom: 5px;
        }
        
        .author-info p {
            color: #718096;
            font-size: 0.9rem;
        }
        
        .features-cta {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            padding: 60px 40px;
            text-align: center;
            border-radius: 12px;
        }
        
        .features-cta h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
        }
        
        .features-cta p {
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
            line-height: 1.6;
        }
        
        @media (max-width: 768px) {
            .features-header {
                padding: 40px 20px;
            }
            
            .features-header h1 {
                font-size: 2.2rem;
            }
            
            .features-content {
                padding: 40px 20px;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .demo-section {
                padding: 30px 20px;
            }
            
            .button-group {
                flex-direction: column;
                align-items: center;
            }
            
            .testimonial-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="features-container">
        <div class="features-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Tableaux de bord intelligents</span>
            </div>
            <h1>Dashboard</h1>
            <p>Découvrez comment nos tableaux de bord personnalisables transforment la façon dont vous gérez votre établissement</p>
        </div>
        
        <div class="features-content">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3 class="feature-title">Analyses en temps réel</h3>
                    <p class="feature-description">Surveillez les performances académiques, la fréquentation et bien plus encore avec des données mises à jour en temps réel.</p>
                    <ul class="feature-list">
                        <li>Données mises à jour toutes les 15 minutes</li>
                        <li>Indicateurs de performance clés personnalisables</li>
                        <li>Alertes automatiques pour les tendances importantes</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🎨</div>
                    <h3 class="feature-title">Personnalisation avancée</h3>
                    <p class="feature-description">Adaptez vos tableaux de bord pour afficher les métriques les plus importantes pour votre établissement.</p>
                    <ul class="feature-list">
                        <li>Glissez-déposez les widgets pour personnaliser la disposition</li>
                        <li>Choix parmi 50+ indicateurs différents</li>
                        <li>Tableaux de bord spécifiques par rôle (directeur, enseignant, etc.)</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">📈</div>
                    <h3 class="feature-title">Prédictions intelligentes</h3>
                    <p class="feature-description">Notre IA analyse les données historiques pour prédire les tendances futures et vous aider à prendre de meilleures décisions.</p>
                    <ul class="feature-list">
                        <li>Prévisions des taux de réussite aux examens</li>
                        <li>Détection précoce des élèves à risque</li>
                        <li>Recommandations personnalisées pour améliorer les performances</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3 class="feature-title">Sécurité des données</h3>
                    <p class="feature-description">Toutes vos données sont chiffrées et stockées en toute sécurité, conformément aux réglementations RGPD.</p>
                    <ul class="feature-list">
                        <li>Chiffrement de bout en bout des données sensibles</li>
                        <li>Contrôles d'accès granulaires</li>
                        <li>Sauvegardes automatiques quotidiennes</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3 class="feature-title">Accessibilité mobile</h3>
                    <p class="feature-description">Accédez à vos tableaux de bord depuis n'importe quel appareil, à tout moment, même hors ligne.</p>
                    <ul class="feature-list">
                        <li>Application mobile iOS et Android</li>
                        <li>Interface responsive adaptée à toutes les tailles d'écran</li>
                        <li>Mode hors ligne avec synchronisation automatique</li>
                    </ul>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🔄</div>
                    <h3 class="feature-title">Intégrations</h3>
                    <p class="feature-description">Connectez-vous facilement aux outils que vous utilisez déjà (Google Workspace, Microsoft 365, etc.).</p>
                    <ul class="feature-list">
                        <li>API complète pour développeurs</li>
                        <li>Intégrations pré-construites avec 20+ services populaires</li>
                        <li>Synchronisation bidirectionnelle des données</li>
                    </ul>
                </div>
            </div>
            
            <div class="demo-section">
                <h2>Voyez par vous-même</h2>
                <p>Découvrez comment nos tableaux de bord intelligents peuvent transformer la gestion de votre établissement</p>
                <div class="demo-image"><div class="demo-image">
    <div class="interactive-dashboard">
        <div class="dashboard-header">
            <div class="header-title">
                <h3>Tableau de bord interactif</h3>
                <div class="header-actions">
                    <div class="time-filter">
                        <select>
                            <option>Aujourd'hui</option>
                            <option>Cette semaine</option>
                            <option>Ce mois</option>
                            <option>Ce trimestre</option>
                        </select>
                    </div>
                    <button class="refresh-btn">🔄</button>
                </div>
            </div>
        </div>
        
        <div class="dashboard-widgets">
            <div class="widget main-widget">
                <div class="widget-header">
                    <h4>Performance académique</h4>
                    <span class="widget-menu">⋯</span>
                </div>
                <div class="widget-content">
                    <div class="chart-container">
                        <div class="chart-bar" style="height: 80%">
                            <span class="chart-label">Lundi</span>
                            <span class="chart-value">80%</span>
                        </div>
                        <div class="chart-bar" style="height: 65%">
                            <span class="chart-label">Mardi</span>
                            <span class="chart-value">65%</span>
                        </div>
                        <div class="chart-bar" style="height: 90%">
                            <span class="chart-label">Mercredi</span>
                            <span class="chart-value">90%</span>
                        </div>
                        <div class="chart-bar" style="height: 75%">
                            <span class="chart-label">Jeudi</span>
                            <span class="chart-value">75%</span>
                        </div>
                        <div class="chart-bar" style="height: 85%">
                            <span class="chart-label">Vendredi</span>
                            <span class="chart-value">85%</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="widget-sidebar">
                <div class="widget small-widget">
                    <div class="widget-header">
                        <h4>Statistiques rapides</h4>
                    </div>
                    <div class="widget-content">
                        <div class="stat-item">
                            <span class="stat-icon">👨‍🎓</span>
                            <div class="stat-info">
                                <div class="stat-number">1,247</div>
                                <div class="stat-label">Élèves actifs</div>
                            </div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-icon">✅</span>
                            <div class="stat-info">
                                <div class="stat-number">94%</div>
                                <div class="stat-label">Taux de présence</div>
                            </div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-icon">📚</span>
                            <div class="stat-info">
                                <div class="stat-number">42</div>
                                <div class="stat-label">Cours aujourd'hui</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="widget small-widget">
                    <div class="widget-header">
                        <h4>Alertes récentes</h4>
                    </div>
                    <div class="widget-content">
                        <div class="alert-item">
                            <span class="alert-icon">⚠️</span>
                            <div class="alert-text">3 absences non justifiées</div>
                        </div>
                        <div class="alert-item">
                            <span class="alert-icon">📋</span>
                            <div class="alert-text">Devoirs à corriger</div>
                        </div>
                        <div class="alert-item">
                            <span class="alert-icon">🔔</span>
                            <div class="alert-text">Réunion pédagogique</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="dashboard-footer">
            <div class="view-options">
                <button class="view-btn active">Résumé</button>
                <button class="view-btn">Détail</button>
                <button class="view-btn">Analytique</button>
            </div>
            <div class="export-options">
                <button class="export-btn">📊 Exporter</button>
            </div>
        </div>
    </div>
</div>

<style>
.interactive-dashboard {
    width: 100%;
    height: 100%;
    background: white;
    border-radius: 8px;
    padding: 15px;
    display: flex;
    flex-direction: column;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.dashboard-header {
    margin-bottom: 15px;
}

.header-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-title h3 {
    margin: 0;
    color: #2d3748;
    font-size: 1.1rem;
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 10px;
}

.time-filter select {
    padding: 5px 10px;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
    font-size: 0.8rem;
}

.refresh-btn {
    background: #f7fafc;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
    padding: 5px 10px;
    cursor: pointer;
}

.dashboard-widgets {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 15px;
    flex: 1;
}

.widget {
    background: #f8fafc;
    border-radius: 8px;
    padding: 15px;
    border: 1px solid #e2e8f0;
}

.widget-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.widget-header h4 {
    margin: 0;
    color: #2d3748;
    font-size: 0.9rem;
}

.widget-menu {
    cursor: pointer;
    font-size: 1.2rem;
}

.chart-container {
    display: flex;
    align-items: end;
    gap: 15px;
    height: 150px;
    justify-content: center;
}

.chart-bar {
    width: 50px;
    background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
    border-radius: 4px 4px 0 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: end;
    position: relative;
}

.chart-label {
    position: absolute;
    bottom: -25px;
    font-size: 0.7rem;
    color: #718096;
}

.chart-value {
    color: white;
    font-size: 0.8rem;
    margin-bottom: 5px;
    font-weight: bold;
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 0;
    border-bottom: 1px solid #e2e8f0;
}

.stat-item:last-child {
    border-bottom: none;
}

.stat-icon {
    width: 30px;
    height: 30px;
    background: #4361ee;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.9rem;
}

.stat-number {
    font-weight: bold;
    color: #2d3748;
    font-size: 1.1rem;
}

.stat-label {
    font-size: 0.8rem;
    color: #718096;
}

.alert-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 0;
    border-bottom: 1px solid #e2e8f0;
}

.alert-item:last-child {
    border-bottom: none;
}

.alert-icon {
    font-size: 0.9rem;
}

.alert-text {
    font-size: 0.8rem;
    color: #4a5568;
}

.dashboard-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #e2e8f0;
}

.view-options {
    display: flex;
    gap: 5px;
}

.view-btn {
    padding: 5px 15px;
    border: 1px solid #e2e8f0;
    background: white;
    border-radius: 20px;
    font-size: 0.8rem;
    cursor: pointer;
}

.view-btn.active {
    background: #4361ee;
    color: white;
    border-color: #4361ee;
}

.export-btn {
    padding: 5px 15px;
    border: 1px solid #e2e8f0;
    background: white;
    border-radius: 20px;
    font-size: 0.8rem;
    cursor: pointer;
}

@media (max-width: 768px) {
    .dashboard-widgets {
        grid-template-columns: 1fr;
    }
    
    .chart-container {
        height: 120px;
    }
    
    .chart-bar {
        width: 40px;
    }
}
</style>
</div>
                <div class="button-group">
                    <a href="demo.php" class="btn-primary">Demander une démo</a>
                    <a href="brochure.php" class="btn-secondary">Télécharger la brochure</a>
                </div>
            </div>
            
            <div class="testimonials">
                <h2>Ce que disent nos clients</h2>
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Les tableaux de bord nous ont fait gagner un temps précieux. Nous pouvons maintenant prendre des décisions éclairées basées sur des données en temps réel."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">ML</div>
                            <div class="author-info">
                                <h4>Marie Leclerc</h4>
                                <p>Directrice, Lycée International</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <p class="testimonial-text">"La personnalisation des tableaux de bord nous permet d'avoir exactement les informations dont nous avons besoin, sans superflu. Un outil indispensable !"</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">PD</div>
                            <div class="author-info">
                                <h4>Pierre Dubois</h4>
                                <p>Responsable pédagogique</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Les prédictions intelligentes nous ont aidés à identifier les élèves en difficulté plus tôt et à mettre en place un accompagnement personnalisé."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">SC</div>
                            <div class="author-info">
                                <h4>Sophie Chen</h4>
                                <p>Enseignante, Collège Descartes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="features-cta">
            <h2>Prêt à transformer votre établissement ?</h2>
            <p>Rejoignez les centaines d'établissements qui utilisent déjà nos tableaux de bord intelligents pour améliorer leur gestion et leurs résultats.</p>
            <a href="#" class="btn-primary">Commencer gratuitement</a>
        </div>
    </div>
</body>
</html>