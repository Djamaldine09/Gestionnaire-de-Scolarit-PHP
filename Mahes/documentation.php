<?php
$pageTitle = "Documentation";
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
        
        .docs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .doc-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid var(--light-gray);
        }
        
        .doc-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }
        
        .doc-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: white;
            font-size: 28px;
        }
        
        .doc-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .doc-card p {
            color: var(--gray);
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .doc-link {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .doc-link:hover {
            color: var(--secondary);
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
            
            .docs-grid {
                grid-template-columns: 1fr;
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
                <span>Documentation</span>
            </nav>
            <h1>Documentation Complète</h1>
            <p>Toutes les ressources dont vous avez besoin pour maîtriser EduManager</p>
        </div>
    </header>

    <main class="resources-content">
        <div class="container">
            <section class="docs-grid">
                <div class="doc-card">
                    <div class="doc-icon">📚</div>
                    <h3>Guide de démarrage</h3>
                    <p>Configuration initiale, création de compte et prise en main de la plateforme.</p>
                    <a href="#guide-demarrage" class="doc-link">Voir le guide</a>
                </div>
                
                <div class="doc-card">
                    <div class="doc-icon">🔧</div>
                    <h3>Guide d'administration</h3>
                    <p>Gestion des utilisateurs, permissions et paramètres système avancés.</p>
                    <a href="#guide-administration" class="doc-link">Voir le guide</a>
                </div>
                
                <div class="doc-card">
                    <div class="doc-icon">📱</div>
                    <h3>Application mobile</h3>
                    <p>Utilisation de l'app mobile pour parents, élèves et enseignants.</p>
                    <a href="#guide-mobile" class="doc-link">Voir le guide</a>
                </div>
            </section>


            <section id="guide-demarrage" class="doc-card" style="margin: 40px 0;">
                <h2>🎯 Guide de Démarrage Rapide</h2>
                <div style="margin: 20px 0;">
                    <h3>1. Création de compte</h3>
                    <p>Rendez-vous sur la page d'inscription et remplissez le formulaire avec les informations de votre établissement.</p>
                    
                    <h3>2. Configuration initiale</h3>
                    <p>Ajoutez vos classes, enseignants et élèves via l'interface d'administration.</p>
                    
                    <h3>3. Personnalisation</h3>
                    <p>Configurez vos préférences et paramètres institutionnels.</p>
                </div>
            </section>


            <section id="guide-administration" class="doc-card" style="margin: 40px 0;">
                <h2>⚙️ Guide d'Administration</h2>
                <div style="margin: 20px 0;">
                    <h3>Gestion des utilisateurs</h3>
                    <p>Créez et gérez les comptes des enseignants, élèves et personnel administratif.</p>
                    
                    <h3>Permissions et rôles</h3>
                    <p>Définissez des niveaux d'accès personnalisés pour chaque type d'utilisateur.</p>
                    
                    <h3>Paramètres système</h3>
                    <p>Configurez les paramètres avancés de votre instance EduManager.</p>
                </div>
            </section>


            <section id="guide-mobile" class="doc-card" style="margin: 40px 0;">
                <h2>📱 Guide de l'Application Mobile</h2>
                <div style="margin: 20px 0;">
                    <h3>Pour les enseignants</h3>
                    <p>Gérez les présences, consultez les emplois du temps et communiquez avec les élèves.</p>
                    
                    <h3>Pour les parents</h3>
                    <p>Suivez la scolarité de vos enfants, consultez les notes et recevez les annonces.</p>
                    
                    <h3>Pour les élèves</h3>
                    <p>Accédez à votre emploi du temps, devoirs et ressources pédagogiques.</p>
                </div>
            </section>
        </div>
    </main>

</body>
</html>