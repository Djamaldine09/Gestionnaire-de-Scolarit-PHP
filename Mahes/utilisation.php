<?php
$pageTitle = "Conditions d'utilisation";
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
        
        .terms-section {
            margin-bottom: 40px;
        }
        
        .terms-section h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary);
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
        }
        
        .terms-section h3 {
            font-size: 1.4rem;
            margin: 25px 0 15px;
            color: var(--dark);
        }
        
        .terms-section p {
            color: var(--gray);
            margin-bottom: 15px;
            line-height: 1.7;
        }
        
        .terms-section ul {
            color: var(--gray);
            margin-bottom: 20px;
            padding-left: 25px;
        }
        
        .terms-section li {
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
        
        .warning-box {
            background: #fff5f5;
            border-left: 4px solid var(--danger);
            padding: 20px;
            margin: 25px 0;
            border-radius: 8px;
        }
        
        .acceptance-section {
            background: linear-gradient(135deg, var(--light) 0%, #edf2f7 100%);
            border-radius: 12px;
            padding: 30px;
            margin: 40px 0;
            text-align: center;
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
            
            .terms-section h2 {
                font-size: 1.5rem;
            }
            
            .terms-section h3 {
                font-size: 1.2rem;
            }
            
            .acceptance-section {
                padding: 20px;
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
                <span>Conditions d'utilisation</span>
            </nav>
            <h1>Conditions d'Utilisation</h1>
            <p>Règles et conditions régissant l'utilisation de nos services</p>
        </div>
    </header>

    <main class="legal-content">
        <div class="container">
            <div class="last-updated">
                Dernière mise à jour: 15 juillet 2025
            </div>

            <section class="terms-section">
                <h2>1. Acceptation des conditions</h2>
                <p>En accédant ou utilisant EduManager, vous acceptez d'être lié par ces conditions d'utilisation. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser nos services.</p>
                
                <div class="highlight-box">
                    <p><strong>L'utilisation d'EduManager est réservée aux établissements éducatifs et à leur personnel autorisé.</strong></p>
                </div>
            </section>

            <section class="terms-section">
                <h2>2. Compte utilisateur</h2>
                
                <h3>2.1 Création de compte</h3>
                <p>Vous devez fournir des informations exactes et complètes lors de la création de votre compte. Vous êtes responsable de la confidentialité de vos identifiants de connexion.</p>

                <h3>2.2 Responsabilités</h3>
                <p>Vous êtes responsable de :</p>
                <ul>
                    <li>Maintenir la confidentialité de votre compte</li>
                    <li>Toutes les activités sous votre compte</li>
                    <li>Signaler toute utilisation non autorisée</li>
                </ul>
            </section>

            <section class="terms-section">
                <h2>3. Utilisation acceptable</h2>
                <p>Vous vous engagez à utiliser EduManager de manière légale et éthique :</p>
                <ul>
                    <li>Respecter les lois applicables</li>
                    <li>Ne pas perturber nos services</li>
                    <li>Ne pas tenter d'accéder non autorisé à nos systèmes</li>
                    <li>Respecter les droits de propriété intellectuelle</li>
                </ul>
                
                <div class="warning-box">
                    <p><strong>Interdiction d'utiliser nos services pour :</strong> activités illégales, envoi de spam, collecte de données non autorisée, ou toute activité nuisible.</p>
                </div>
            </section>

            <section class="terms-section">
                <h2>4. Propriété intellectuelle</h2>
                <p>EduManager et son contenu sont la propriété exclusive de notre entreprise. Vous recevez une licence limitée pour utiliser nos services conformément à ces conditions.</p>
                
                <h3>4.1 Contenu utilisateur</h3>
                <p>Vous conservez les droits sur le contenu que vous créez. En utilisant nos services, vous nous accordez une licence pour héberger et traiter ce contenu.</p>
            </section>

            <section class="terms-section">
                <h2>5. Facturation et paiement</h2>
                <p>L'accès à certaines fonctionnalités peut nécessiter un abonnement payant :</p>
                <ul>
                    <li>Paiement à l'avance pour les services</li>
<li>Renouvellement automatique sauf annulation</li>
                    <li>Factures disponibles dans votre espace client</li>
                </ul>
            </section>

            <section class="terms-section">
                <h2>6. Limitations de responsabilité</h2>
                <p>EduManager est fourni "tel quel". Nous ne garantissons pas :</p>
                <ul>
                    <li>Disponibilité continue sans interruption</li>
                    <li>Absence d'erreurs ou de bugs</li>
                    <li>Exactitude des résultats ou analyses</li>
                </ul>
            </section>

            <section class="terms-section">
                <h2>7. Résiliation</h2>
                <p>Nous pouvons suspendre ou résilier votre accès en cas de :</p>
                <ul>
                    <li>Violation des conditions d'utilisation</li>
                    <li>Comportement frauduleux</li>
                    <li>Non-paiement des frais dus</li>
                </ul>
            </section>

            <section class="terms-section">
                <h2>8. Modifications des conditions</h2>
                <p>Nous nous réservons le droit de modifier ces conditions. Les changements importants seront notifiés par email ou via notre plateforme.</p>
            </section>

            <section class="terms-section">
                <h2>9. Loi applicable</h2>
                <p>Ces conditions sont régies par les lois finlandaises. Tout litige sera soumis aux tribunaux compétents de Helsinki.</p>
            </section>

            <div class="acceptance-section">
                <h3>✅ Vous acceptez ces conditions</h3>
                <p>En utilisant EduManager, vous confirmez avoir lu, compris et accepté l'intégralité de ces conditions d'utilisation.</p>
            </div>
        </div>
    </main>


</body>
</html>