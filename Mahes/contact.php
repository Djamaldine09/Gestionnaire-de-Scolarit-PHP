<?php
$pageTitle = "Contact Support";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - EduManager</title>
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
        
        .contact-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
        }
        
        .contact-header {
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
        
        .contact-header h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .contact-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .contact-content {
            padding: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        
        .contact-info {
            background: #f8fafc;
            border-radius: 12px;
            padding: 30px;
        }
        
        .contact-info h2 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: #2d3748;
        }
        
        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .info-icon {
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
        
        .info-content h3 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: #2d3748;
        }
        
        .info-content p {
            color: #718096;
            line-height: 1.6;
        }
        
        .info-content a {
            color: #4361ee;
            text-decoration: none;
        }
        
        .info-content a:hover {
            text-decoration: underline;
        }
        
        .support-hours {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-top: 30px;
        }
        
        .support-hours h4 {
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .hours-list {
            list-style: none;
        }
        
        .hours-list li {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .hours-list li:last-child {
            border-bottom: none;
        }
        
        .day {
            color: #4a5568;
        }
        
        .time {
            color: #718096;
            font-weight: 500;
        }
        
        .contact-form {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .form-header {
            margin-bottom: 25px;
        }
        
        .form-header h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #2d3748;
        }
        
        .form-header p {
            color: #718096;
            line-height: 1.6;
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
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .priority-select {
            display: flex;
            gap: 10px;
        }
        
        .priority-btn {
            flex: 1;
            padding: 10px;
            border: 2px solid #e2e8f0;
            border-radius: 6px;
            background: white;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .priority-btn.active {
            border-color: #4361ee;
            background: #4361ee;
            color: white;
        }
        
        .priority-btn.low.active {
            border-color: #48bb78;
            background: #48bb78;
        }
        
        .priority-btn.medium.active {
            border-color: #ed8936;
            background: #ed8936;
        }
        
        .priority-btn.high.active {
            border-color: #f56565;
            background: #f56565;
        }
        
        .submit-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }
        
        .success-message {
            display: none;
            background: #48bb78;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-top: 20px;
        }
        
        .faq-section {
            background: #f8fafc;
            border-radius: 12px;
            padding: 40px;
            margin-top: 40px;
        }
        
        .faq-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .faq-header h2 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .faq-header p {
            color: #718096;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .faq-item {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        .faq-item h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #2d3748;
        }
        
        .faq-item p {
            color: #718096;
            line-height: 1.6;
        }
        
        .emergency-contact {
            background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
            border: 2px solid #feb2b2;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            margin-top: 40px;
        }
        
        .emergency-contact h3 {
            color: #c53030;
            margin-bottom: 15px;
        }
        
        .emergency-contact p {
            color: #718096;
            margin-bottom: 20px;
        }
        
        .emergency-btn {
            display: inline-block;
            padding: 12px 25px;
            background: #f56565;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .emergency-btn:hover {
            background: #e53e3e;
            transform: translateY(-2px);
        }
        
        @media (max-width: 968px) {
            .contact-content {
                grid-template-columns: 1fr;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .contact-header {
                padding: 30px 20px;
            }
            
            .contact-header h1 {
                font-size: 2rem;
            }
            
            .contact-content {
                padding: 30px 20px;
            }
            
            .priority-select {
                flex-direction: column;
            }
            
            .faq-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <div class="contact-header">
            <div class="breadcrumb">
                <a href="index.php">Accueil</a>
                <span>/</span>
                <span>Contact Support</span>
            </div>
            <h1>Contactez notre support</h1>
            <p>Notre équipe est là pour vous aider à résoudre tous vos problèmes et répondre à vos questions</p>
        </div>
        
        <div class="contact-content">
            <div class="contact-info">
                <h2>Comment pouvons-nous vous aider ?</h2>
                
                <div class="info-item">
                    <div class="info-icon">📧</div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p><a href="mailto:support@edumanager.fi">support@edumanager.fi</a></p>
                        <p>Réponse sous 24 heures</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div class="info-content">
                        <h3>Téléphone</h3>
                        <p><a href="tel:+358501234567">+358 50 123 4567</a></p>
                        <p>Support technique direct</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">💬</div>
                    <div class="info-content">
                        <h3>Chat en direct</h3>
                        <p>Disponible du lundi au vendredi</p>
                        <p>9h00 - 18h00 (heure locale)</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">📚</div>
                    <div class="info-content">
                        <h3>Centre d'aide</h3>
                        <p><a href="help-center.php">Consulter la base de connaissances</a></p>
                        <p>Guides et tutoriels détaillés</p>
                    </div>
                </div>
                
                <div class="support-hours">
                    <h4>Heures de support</h4>
                    <ul class="hours-list">
                        <li>
                            <span class="day">Lundi - Vendredi</span>
                            <span class="time">8h00 - 20h00</span>
                        </li>
                        <li>
                            <span class="day">Samedi</span>
                            <span class="time">9h00 - 16h00</span>
                        </li>
                        <li>
                            <span class="day">Dimanche</span>
                            <span class="time">10h00 - 14h00</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="contact-form">
                <div class="form-header">
                    <h2>Envoyez-nous un message</h2>
                    <p>Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais</p>
                </div>
                
                <form id="supportForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">Prénom *</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="lastName">Nom *</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="school">Établissement *</label>
                        <input type="text" id="school" name="school" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Sujet *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Sélectionnez un sujet...</option>
                            <option value="technical">Problème technique</option>
                            <option value="billing">Question de facturation</option>
                            <option value="feature">Demande de fonctionnalité</option>
                            <option value="api">Support API</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Priorité</label>
                        <div class="priority-select">
                            <button type="button" class="priority-btn low active" data-priority="low">Basse</button>
                            <button type="button" class="priority-btn medium" data-priority="medium">Moyenne</button>
                            <button type="button" class="priority-btn high" data-priority="high">Haute</button>
                        </div>
                        <input type="hidden" id="priority" name="priority" value="low">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" placeholder="Décrivez votre problème ou question en détail..." required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="attachment">Fichier joint (optionnel)</label>
                        <input type="file" id="attachment" name="attachment">
                    </div>
                    
                    <button type="submit" class="submit-btn">Envoyer le message</button>
                    
                    <div class="success-message" id="successMessage">
                        ✅ Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.
                    </div>
                </form>
            </div>
        </div>
        
        <div class="faq-section">
            <div class="faq-header">
                <h2>Questions fréquentes</h2>
                <p>Consultez notre FAQ pour des réponses rapides aux questions courantes</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>Comment réinitialiser mon mot de passe ?</h3>
                    <p>Utilisez le lien "Mot de passe oublié" sur la page de connexion. Vous recevrez un email avec les instructions de réinitialisation.</p>
                </div>
                
                <div class="faq-item">
                    <h3>Comment ajouter de nouveaux utilisateurs ?</h3>
                    <p>Allez dans la section "Utilisateurs" de votre tableau d'administration et cliquez sur "Ajouter un utilisateur".</p>
                </div>
                
                <div class="faq-item">
                    <h3>Quelles sont les méthodes de paiement acceptées ?</h3>
                    <p>Nous acceptons les cartes de crédit, virements bancaires et PayPal.</p>
                </div>
                
                <div class="faq-item">
                    <h3>Comment exporter mes données ?</h3>
                    <p>Vous pouvez exporter vos données depuis la section "Export" de votre tableau de bord en formats CSV, Excel ou PDF.</p>
                </div>
            </div>
        </div>
        
        <div class="emergency-contact">
            <h3>🔴 Urgence technique</h3>
            <p>Problème critique affectant l'ensemble de votre établissement ? Contactez notre support d'urgence</p>
            <a href="tel:+358501234567" class="emergency-btn">Appeler le support d'urgence</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gestion des priorités
            const priorityButtons = document.querySelectorAll('.priority-btn');
            const priorityInput = document.getElementById('priority');
            
            priorityButtons.forEach(button => {
                button.addEventListener('click', function() {
                    priorityButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    priorityInput.value = this.getAttribute('data-priority');
                });
            });
            
            // Soumission du formulaire
            document.getElementById('supportForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Simulation d'envoi
                const submitBtn = this.querySelector('.submit-btn');
                submitBtn.textContent = 'Envoi en cours...';
                submitBtn.disabled = true;
                
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'block';
                    this.reset();
                    
                    // Réinitialiser les priorités
                    priorityButtons.forEach(btn => btn.classList.remove('active'));
                    document.querySelector('.priority-btn.low').classList.add('active');
                    priorityInput.value = 'low';
                    
                    submitBtn.textContent = 'Envoyer le message';
                    submitBtn.disabled = false;
                    
                    // Cacher le message après 5 secondes
                    setTimeout(() => {
                        document.getElementById('successMessage').style.display = 'none';
                    }, 5000);
                }, 2000);
            });
        });
    </script>
</body>
</html>