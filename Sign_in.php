<?php 
session_start();

// Connexion à la base de données
$host = 'localhost';
$dbname = 'gestion';
$username = 'root';
$password = '';

$conn = mysqli_connect($host, $username, $password,$dbname);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Traitement du formulaire de connexion
if(isset($_POST['mdp'])){
    $pseudo = trim($_POST['pseudo']);
    $mdp = trim($_POST['mdp']);
    
    // Vérification dans la table Login
    $nb=mysqli_fetch_array(mysqli_query($conn,"select count(*) as nb,type,Num from login where pseudo='$pseudo' and passe='$mdp'"));
    
    if($nb['nb']==1){
		if($nb['type']=="etudiant")
			$_SESSION['etudiant']=$nb['Num'];
		else if($nb['type']=="prof")
			$_SESSION['prof']=$nb['Num'];
		else if($nb['type']=="admin")
			$_SESSION['admin']=$nb['Num'];
	}
    
}
else if(isset($_GET['sortir'])){
session_destroy();
header("location:index.php");
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
   
    <link rel="stylesheet" href="./Mahes/Sign in.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Wellfleet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        if (!isset($_SESSION['admin']) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
        ?>
    <div class="floating">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">   
        
        <pre class="pre1">
        <h1 class="t1">Sign in</h1>
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

    <input type="checkbox" id="check" required>
    <p id="remember"> Se souvenir de moi</p>
    <button id="entrez" value="envoyer" type="submit"><b>Se connecter</b></button>
    <a id="mdp" href=""><p>Mot de passe Oublié ?</p></a>
    <hr id="br">
    <pre class="pre2">
        <p>
Vous n’avez pas de compte ?
      <a href="inscription.php">Inscrivez-vous</a>
        </p>
    </pre>
     
    </form>
    
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
    <?php
} else {
    echo '<div style="position: relative; left: 425px; border-radius: 10px; box-shadow: 0 0 10px #00000085; text-align: center; display: flex; align-items: center; justify-content: center; background: #f5f5f5ff; width: 500px; height: 300px;"><h1 style=" position: relative; bottom: 30px; right: 15px; color: #32c94bff;"><img src="checked.png" style="width: 8%; position: relative; top: 80px; left: 150px;">Connexion Reussie</h1></div>';
    echo '<a style="text-decoration: none;" href="index.php"><button style=" background: linear-gradient(90deg, #391cbb, #4cc4e2);
    color: black;
    border: none;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px rgba(57, 28, 187, 0.2);
    overflow: hidden;
    position: relative; bottom: 250px; right: 450px; border: none; border-radius: 35px; width: 120px; height: 50px; display: flex; justify-content: center; align-items: center; text-align: center; gap: 5px;"><img style="width: 20%;" src="arrow-left.svg" alt="">Retour</button></a>';
}
?>

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