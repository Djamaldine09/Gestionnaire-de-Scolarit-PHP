<?php 
session_start();

// Connexion à la base de données
$host = 'localhost';
$dbname = 'gestion';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Traitement du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pseudo']) && isset($_POST['mdp'])) {
    $email = trim($_POST['pseudo']);
    $mdp = trim($_POST['mdp']);
    
    // Vérification dans la table admin
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($admin && password_verify($mdp, $admin['mot_de_passe'])) {
        $_SESSION['admin'] = $admin;
        header("Location: dashboard_admin.php");
        exit();
    }
    
    // Vérification dans la table prof
    $stmt = $pdo->prepare("SELECT * FROM prof WHERE pseudo = :pseudo");
    $stmt->bindParam(':pseudo', $email);
    $stmt->execute();
    $prof = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($prof && password_verify($mdp, $prof['passe'])) {
        $_SESSION['prof'] = $prof;
        header("Location: dashboard_prof.php");
        exit();
    }
    
    // Vérification dans la table etudiant
    $stmt = $pdo->prepare("SELECT * FROM etudiant WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($etudiant && password_verify($mdp, $etudiant['mot_de_passe'])) {
        $_SESSION['etudiant'] = $etudiant;
        header("Location: dashboard_etudiant.php");
        exit();
    }
    
    // Si aucune correspondance trouvée
    $error_message = "Email ou mot de passe incorrect";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="The tutorial in HTML" content="Free exemple log in web">
    <meta name="author" content="Mahes $icario">
   
    <link rel="stylesheet" href="./Sign in/Sign_in.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Wellfleet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="floating">
      <?php
        if (!isset($_SESSION['admin']) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
        ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">   
        
        <pre class="pre1">
        <h1>Sign in</h1>
          <hr>
          <i>Authentification :</i>
        </pre>
      
        <?php if(isset($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>
      
    <fieldset>
        <legend>* Email *</legend>
        <input type="text" name="pseudo" size="15" placeholder="Entrez votre email" required>
    </fieldset>
    <fieldset>
        <legend> * Mot de passe *</legend>
        <input type="password" name="mdp" id="pass" size="15" placeholder="Mot de passe" required>
        <img src="./Mahes/eye-slash.svg" alt="Afficher/Masquer" id="eyes" onclick="changer()">
    </fieldset>

    <input type="checkbox" id="check">
    <p id="remember"> Se souvenir de moi</p>
    <button id="entrez" value="envoyer" type="submit"><b>Se connecter</b></button>
    <a id="mdp" href=""><p>Mot de passe Oublié ?</p></a>
    <hr id="br">
    <pre class="pre2">
        <p>
Vous n’avez pas de compte ?
      <a href="Sing up.html">Inscrivez-vous</a>
        </p>
    </pre>
     
    </form>
    <?php
} else {
    echo '<br/><br/><br/><li><a href="index.php?sortir=1">Deconexion</a></li>';
}
?>
    </div>

    <div class="no_floating">
        <h1>
            Back to 
            School
        </h1>
        <p style="margin-top:0; margin-bottom:0">Heureux de votre retour. Gérez votre scolarité
               efficacement grâce à votre espace personnel.<br>
    Votre connexion ouvre la voie à une scolarité organisée et sereine
        </p>
   
   <a href="" class="ic"><i class="fab fa-facebook" id="fb"></i></a>
    <a href="" class="ic"><i class="fab fa-twitter" id="x"></i></a>
    <a href="" class="ic"><i class="fab fa-instagram" id="insta"></i></a>
    <a href="" class="ic"><i class="fab fa-linkedin" id="linkedin"></i></a>

    <span class="pol">
        <p> By clicing on "Sign in" you agree too</p>
        <a href="www.faceboook.com">Terms of Service | </a>
        <a href=""> Privacy Policy </a>
    </span>
    </div>
    <img src="./Mahes/logo.png" alt="LOGO" id="logo">

 <script>
  let e = true;
  function changer() {
    const passField = document.getElementById("pass");
    const eyeIcon = document.getElementById("eyes");
    
    if(e) {
      passField.setAttribute("type", "text");
      eyeIcon.src = "./Mahes/eye.svg";
      e = false;
    } else {
      passField.setAttribute("type", "password");
      eyeIcon.src = "./Mahes/eye-slash.svg";
      e = true;
    }
  }
 </script>
</body>
</html>