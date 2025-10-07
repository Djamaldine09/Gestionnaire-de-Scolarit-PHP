<?php
$pageTitle = "Demander une démonstration";
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
        
        .demo-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            overflow: hidden;
        }
        
        .demo-header {
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
        
        .demo-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .demo-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .demo-content {
            padding: 40px;
        }
        
        .demo-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group.full-width {
            grid-column: span 2;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2d3748;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4361ee;
        }
        
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            grid-column: span 2;
            padding: 16px 32px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }
        
        .demo-info {
            background: #f8fafc;
            padding: 30px;
            border-radius: 12px;
            margin-top: 30px;
        }
        
        .demo-info h3 {
            margin-bottom: 20px;
            color: #2d3748;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .info-icon {
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
        
        .info-text {
            color: #4a5568;
        }
        
        .success-message {
            display: none;
            background: #48bb78;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .demo-header {
                padding: 30px 20px;
            }
            
            .demo-header h1 {
                font-size: 2rem;
            }
            
            .demo-content {
                padding: 30px 20px;
            }
            
            .demo-form {
                grid-template-columns: 1fr;
            }
            
            .form-group.full-width {
                grid-column: span 1;
            }
            
            .submit-btn {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>
    <div class="demo-container">
        <div class="demo-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Démonstration</span>
            </div>
            <h1>Demander une démonstration</h1>
            <p>Laissez-nous vous montrer comment notre solution peut transformer la gestion de votre établissement</p>
        </div>
        
        <div class="demo-content">
            <div class="success-message" id="successMessage">
                ✅ Votre demande a été envoyée avec succès ! Nous vous contacterons dans les 24h.
            </div>
            
            <form class="demo-form" id="demoForm">
                <div class="form-group">
                    <label for="firstName">Prénom *</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                
                <div class="form-group">
                    <label for="lastName">Nom *</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="school">Établissement *</label>
                    <input type="text" id="school" name="school" required>
                </div>
                
                <div class="form-group">
                    <label for="position">Fonction *</label>
                    <select id="position" name="position" required>
                        <option value="">Sélectionnez...</option>
                        <option value="director">Directeur/Proviseur</option>
                        <option value="teacher">Enseignant</option>
                        <option value="administrator">Administratif</option>
                        <option value="other">Autre</option>
                    </select>
                </div>
                
                <div class="form-group full-width">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Décrivez vos besoins spécifiques..."></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Demander une démo</button>
            </form>
            
            <div class="demo-info">
                <h3>Ce que vous découvrirez lors de la démo :</h3>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-icon">📊</div>
                        <div class="info-text">Tableaux de bord personnalisés</div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">📱</div>
                        <div class="info-text">Application mobile</div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">🔒</div>
                        <div class="info-text">Sécurité des données</div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">🔄</div>
                        <div class="info-text">Intégrations disponibles</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('demoForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('successMessage').style.display = 'block';
            this.reset();
            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000);
        });
    </script>
</body>
</html>