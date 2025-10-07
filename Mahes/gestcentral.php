<?php
$pageTitle = "Gestion centralisée";
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
        
        .management-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
            overflow: hidden;
        }
        
        .management-header {
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
        
        .management-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .management-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .management-content {
            padding: 40px;
        }
        
        .management-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .management-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .management-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        
        .management-icon {
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
        
        .management-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .management-description {
            color: #718096;
            line-height: 1.6;
        }
        
        .centralized-preview {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            margin-bottom: 40px;
        }
        
        .centralized-preview h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #2d3748;
        }
        
        .centralized-preview p {
            color: #718096;
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }
        
        .dashboard-image {
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
            margin: 0 auto;
            max-width: 800px;
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
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        .benefit-icon {
            width: 40px;
            height: 40px;
            background: #4361ee;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            flex-shrink: 0;
        }
        
        .benefit-text {
            color: #4a5568;
            font-weight: 500;
        }
        
        
        
        @media (max-width: 768px) {
            .management-header {
                padding: 30px 20px;
            }
            
            .management-header h1 {
                font-size: 2rem;
            }
            
            .management-content {
                padding: 30px 20px;
            }
            
            .management-grid {
                grid-template-columns: 1fr;
            }
            
            .centralized-preview {
                padding: 30px 20px;
            }
            
            .dashboard-image {
                height: 200px;
            }
            
            .benefits-grid {
                grid-template-columns: 1fr;
            }
        
        }
    </style>
</head>
<body>
    <div class="management-container">
        <div class="management-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Gestion centralisée</span>
            </div>
            <h1>Gestion centralisée</h1>
            <p>Administrez élèves, enseignants, classes et emplois du temps depuis une interface unique et cohérente.</p>
        </div>
        
        <div class="management-content">
            <div class="management-grid">
                <div class="management-card">
                    <div class="management-icon">👨‍🎓</div>
                    <h3 class="management-title">Gestion des élèves</h3>
                    <p class="management-description">Inscription, dossiers complets, historiques académiques et suivi personnalisé de chaque élève.</p>
                </div>
                
                <div class="management-card">
                    <div class="management-icon">👨‍🏫</div>
                    <h3 class="management-title">Gestion des enseignants</h3>
                    <p class="management-description">Planning, charges de travail, documents partagés et coordination de l'équipe pédagogique.</p>
                </div>
                
                <div class="management-card">
                    <div class="management-icon">🏫</div>
                    <h3 class="management-title">Gestion des classes</h3>
                    <p class="management-description">Création et organisation des classes, groupes de travail et espaces collaboratifs.</p>
                </div>
            </div>
            
            <div class="centralized-preview">
                <h2>Une interface unique pour tout gérer</h2>
                <p>Notre plateforme centralisée vous permet d'administrer l'ensemble de votre établissement depuis un seul endroit, sans avoir à jongler entre différents systèmes.</p>
                <div class="dashboard-image">
                  <div class="dashboard-image">
    <div class="admin-interface">
        <div class="interface-header">
            <div class="header-left">
                <span class="logo">EduManager</span>
                <span class="page-title">Tableau de bord administratif</span>
            </div>
            <div class="header-right">
                <div class="user-menu">
                    <span class="user-name">Admin</span>
                    <div class="user-avatar">A</div>
                </div>
            </div>
        </div>
        
        <div class="interface-content">
            <div class="sidebar">
                <div class="sidebar-item active">
                    <span class="sidebar-icon">📊</span>
                    <span class="sidebar-text">Tableau de bord</span>
                </div>
                <div class="sidebar-item">
                    <span class="sidebar-icon">👨‍🎓</span>
                    <span class="sidebar-text">Élèves</span>
                </div>
                <div class="sidebar-item">
                    <span class="sidebar-icon">👨‍🏫</span>
                    <span class="sidebar-text">Enseignants</span>
                </div>
                <div class="sidebar-item">
                    <span class="sidebar-icon">🏫</span>
                    <span class="sidebar-text">Classes</span>
                </div>
                <div class="sidebar-item">
                    <span class="sidebar-icon">📅</span>
                    <span class="sidebar-text">Emploi du temps</span>
                </div>
            </div>
            
            <div class="main-content">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">👨‍🎓</div>
                        <div class="stat-info">
                            <div class="stat-number">1,247</div>
                            <div class="stat-label">Élèves</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">👨‍🏫</div>
                        <div class="stat-info">
                            <div class="stat-number">84</div>
                            <div class="stat-label">Enseignants</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🏫</div>
                        <div class="stat-info">
                            <div class="stat-number">42</div>
                            <div class="stat-label">Classes</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">✅</div>
                        <div class="stat-info">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Présence</div>
                        </div>
                    </div>
                </div>
                
                <div class="recent-activity">
                    <h3>Activité récente</h3>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">➕</div>
                            <div class="activity-details">
                                <div class="activity-text">Nouvel élève inscrit: Marie Dupont</div>
                                <div class="activity-time">Il y a 5 minutes</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">📅</div>
                            <div class="activity-details">
                                <div class="activity-text">Emploi du temps mis à jour pour la classe 4ème A</div>
                                <div class="activity-time">Il y a 1 heure</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">📊</div>
                            <div class="activity-details">
                                <div class="activity-text">Rapport trimestriel généré</div>
                                <div class="activity-time">Il y a 2 heures</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.dashboard-image {
    width: 100%;
    height: 300px;
    background: white;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #4361ee;
    margin: 0 auto;
    max-width: 800px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.admin-interface {
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    flex-direction: column;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.interface-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    background: #4361ee;
    color: white;
}

.header-left {
    display: flex;
    align-items: center;
    gap: 15px;
}

.logo {
    font-weight: bold;
    font-size: 1.2rem;
}

.page-title {
    font-size: 0.9rem;
    opacity: 0.9;
}

.header-right {
    display: flex;
    align-items: center;
}

.user-menu {
    display: flex;
    align-items: center;
    gap: 10px;
}

.user-name {
    font-size: 0.9rem;
}

.user-avatar {
    width: 35px;
    height: 35px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}

.interface-content {
    display: flex;
    flex: 1;
}

.sidebar {
    width: 250px;
    background: #f8fafc;
    padding: 20px 0;
    border-right: 1px solid #e2e8f0;
}

.sidebar-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 20px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.sidebar-item:hover {
    background: #edf2f7;
}

.sidebar-item.active {
    background: #4361ee;
    color: white;
}

.sidebar-icon {
    font-size: 1.1rem;
}

.sidebar-text {
    font-size: 0.9rem;
}

.main-content {
    flex: 1;
    padding: 20px;
    background: #fafafa;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-bottom: 20px;
}

.stat-card {
    background: white;
    padding: 15px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.stat-icon {
    width: 40px;
    height: 40px;
    background: #4361ee;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2d3748;
}

.stat-label {
    font-size: 0.8rem;
    color: #718096;
}

.recent-activity {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.recent-activity h3 {
    margin-bottom: 15px;
    color: #2d3748;
    font-size: 1.1rem;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 12px 0;
    border-bottom: 1px solid #e2e8f0;
}

.activity-item:last-child {
    border-bottom: none;
}

.activity-icon {
    width: 30px;
    height: 30px;
    background: #edf2f7;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
}

.activity-text {
    font-size: 0.9rem;
    color: #4a5568;
}

.activity-time {
    font-size: 0.8rem;
    color: #a0aec0;
}

@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .sidebar {
        width: 200px;
    }
}
</style>
                </div>
            </div>
            
            <div class="benefits-section">
                <h2>Avantages de la gestion centralisée</h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">⏱️</div>
                        <div class="benefit-text">Gain de temps considérable</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">✅</div>
                        <div class="benefit-text">Réduction des erreurs</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">🔄</div>
                        <div class="benefit-text">Synchronisation en temps réel</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">📊</div>
                        <div class="benefit-text">Reporting automatisé</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">👥</div>
                        <div class="benefit-text">Collaboration simplifiée</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">🔍</div>
                        <div class="benefit-text">Recherche et filtres avancés</div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>