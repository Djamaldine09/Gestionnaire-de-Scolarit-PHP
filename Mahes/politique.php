<?php
$pageTitle = "Politique de confidentialité";
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
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        .legal-header {
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
        
        .legal-header h1 {
            font-size: 2.8rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .legal-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Main Content */
        .legal-content {
            padding: 60px 0;
            background: white;
        }
        
        .last-updated {
            text-align: center;
            color: var(--gray);
            margin-bottom: 40px;
            font-style: italic;
        }
        
        .policy-section {
            margin-bottom: 40px;
        }
        
        .policy-section h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary);
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
        }
        
        .policy-section h3 {
            font-size: 1.4rem;
            margin: 25px 0 15px;
            color: var(--dark);
        }
        
        .policy-section p {
            color: var(--gray);
            margin-bottom: 15px;
            line-height: 1.7;
        }
        
        .policy-section ul {
            color: var(--gray);
            margin-bottom: 20px;
            padding-left: 25px;
        }
        
        .policy-section li {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        
        .highlight-box {
            background: var(--light);
            border-left: 4px solid var(--primary);
            padding: 20px;
            margin: 25px 0;
            border-radius: 8px;
        }
        
        .contact-info {
            background: linear-gradient(135deg, var(--light) 0%, #edf2f7 100%);
            border-radius: 12px;
            padding: 30px;
            margin: 40px 0;
            text-align: center;
        }
        
        .contact-info h3 {
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        
        /* Responsive */
        @media (max-width: 768px) {
            .legal-header {
                padding: 40px 0;
            }
            
            .legal-header h1 {
                font-size: 2.2rem;
            }
            
            .legal-content {
                padding: 40px 0;
            }
            
            .policy-section h2 {
                font-size: 1.5rem;
            }
            
            .policy-section h3 {
                font-size: 1.2rem;
            }
            
            .contact-info {
                padding: 20px;
            }
        }
        
        @media (max-width: 480px) {
            .legal-header h1 {
                font-size: 1.8rem;
            }
            
            .policy-section {
                padding: 0 10px;
            }
        }
    </style>
</head>
<body>
    <header class="legal-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Politique de confidentialité</span>
            </nav>
            <h1>Politique de Confidentialité</h1>
            <p>Comment nous protégeons et utilisons vos données</p>
        </div>
    </header>

    <main class="legal-content">
        <div class="container">
            <div class="last-updated">
                Dernière mise à jour: 15 juillet 2025
            </div>

            <section class="policy-section">
                <h2>1. Introduction</h2>
                <p>Chez EduManager, nous prenons la protection de vos données personnelles très au sérieux. Cette politique de confidentialité explique comment nous collectons, utilisons et protégeons vos informations lorsque vous utilisez nos services.</p>
                
                <div class="highlight-box">
                    <p><strong>En utilisant EduManager, vous acceptez les pratiques décrites dans cette politique de confidentialité.</strong></p>
                </div>
            </section>

            <section class="policy-section">
                <h2>2. Données que nous collectons</h2>
                
                <h3>2.1 Données personnelles</h3>
                <p>Nous collectons les informations que vous nous fournissez directement :</p>
                <ul>
                    <li>Informations de compte (nom, email, établissement)</li>
                    <li>Informations des élèves et enseignants</li>
                    <li>Données académiques et pédagogiques</li>
                    <li>Coordonnées de facturation</li>
                </ul>

                <h3>2.2 Données d'utilisation</h3>
                <p>Nous collectons automatiquement des informations sur votre utilisation de nos services :</p>
                <ul>
                    <li>Logs d'accès et horaires de connexion</li>
                    <li>Type de dispositif et navigateur utilisé</li>
                    <li>Pages visitées et fonctionnalités utilisées</li>
                </ul>
            </section>

            <section class="policy-section">
                <h2>3. Utilisation des données</h2>
                <p>Nous utilisons vos données pour :</p>
                <ul>
                    <li>Fournir et maintenir nos services</li>
                    <li>Personnaliser votre expérience utilisateur</li>
                    <li>Communiquer des mises à jour importantes</li>
                    <li>Améliorer nos services et développer de nouvelles fonctionnalités</li>
                    <li>Respecter nos obligations légales</li>
                </ul>
            </section>

            <section class="policy-section">
                <h2>4. Protection des données</h2>
                <p>Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles appropriées pour protéger vos données :</p>
                <ul>
                    <li>Chiffrement des données en transit et au repos</li>
                    <li>Contrôles d'accès stricts</li>
                    <li>Surveillance continue de la sécurité</li>
                    <li>Sauvegardes régulières</li>
                </ul>
            </section>

            <section class="policy-section">
                <h2>5. Partage des données</h2>
                <p>Nous ne vendons pas vos données. Nous pouvons partager des informations avec :</p>
                <ul>
                    <li>Prestataires de services (hébergement, support technique)</li>
                    <li>Autorités légales lorsque requis par la loi</li>
                    <li>Parties lors d'une fusion ou acquisition</li>
                </ul>
            </section>

            <section class="policy-section">
                <h2>6. Vos droits</h2>
                <p>Conformément au RGPD, vous avez le droit de :</p>
                <ul>
                    <li>Accéder à vos données personnelles</li>
                    <li>Corriger des données inexactes</li>
                    <li>Supprimer vos données</li>
                    <li>Vous opposer au traitement de vos données</li>
                    <li>Portabilité de vos données</li>
                </ul>
            </section>

            <section class="policy-section">
                <h2>7. Conservation des données</h2>
                <p>Nous conservons vos données aussi longtemps que nécessaire pour fournir nos services et respecter nos obligations légales. Les données des élèves sont conservées conformément aux exigences réglementaires de l'éducation.</p>
            </section>

            <div class="contact-info">
                <h3>Questions sur la confidentialité ?</h3>
                <p>Contactez notre délégué à la protection des données :</p>
                <p><strong>Email:</strong> dpo@edumanager.fi</p>
                <p><strong>Téléphone:</strong> +358 50 123 4567</p>
            </div>
        </div>
    </main>

</body>
</html>