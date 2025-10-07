<?php
session_start();
include('cadre.php');

mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"gestion");
if(isset($_GET['modif_el'])){//modif_el qu'on a recup�rer de l'affichage (modifier)
$id=$_GET['modif_el'];
$ligne=mysqli_fetch_array(mysqli_query($conn,"select * from eleve,classe where eleve.codecl=classe.codecl and numel='$id'"));
$nom=stripslashes($ligne['nomel']);
$prenom=stripslashes($ligne['prenomel']);
$date=stripslashes($ligne['date_naissance']);
$phone=stripslashes($ligne['telephone']);
$adresse=str_replace("<br />",' ',$ligne['adresse']);
$codecl=stripslashes($ligne['codecl']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="modifier_eleve.css" />
    <title>Document</title>
</head>
<body>
<div class="corp">
<h1>Modification d'un Etudiant</h1>
<center><pre>
<form action="modif_eleve.php" method="POST" class="formulaire">
        <p class="t1">Nom       :         <?php echo $nom; ?></p>
        <p class="t2">Prénom              :         <?php echo $prenom; ?></p>
        <p class="t3">Date de naissanc     :         <input class="op0" type="date" name="date" class="calendrier" value="<?php echo $date; ?>"></p>
        <p class="t4">Adresse              :         <div class="selec0"><select class="op1" name="adresse" id="">
    <option value="<?php echo htmlspecialchars($adresse); ?>"><?php echo htmlspecialchars($adresse); ?></option>
    <?php
    $adresses = [
        "Antananarivo",
        "Toamasina",
        "Fianarantsoa",
        "Toliara",
        "Antsiranana",
        "Mahajanga",
        "Nosy Be"
    ];
    foreach ($adresses as $adr) {
        if ($adr != $adresse) {
            echo '<option value="'.htmlspecialchars($adr).'">'.htmlspecialchars($adr).'</option>';
        }
    }
    ?>
</select>
        <div class="select-arrow1">
                <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1.5L6 6.5L11 1.5" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
        </div>
        </div>
        </p>
        <p class="t5">Téléphone            :          <input class="bar" type="text" name="phone" value="<?php echo $phone; ?>"></p>
        <p class="t6">Classe               :          <?php echo $ligne['nom']; ?></p>
        <p class="t7">Promotion            :          <?php echo $ligne['promotion']; ?></p>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<button id="entrez" value="envoyer" type="submit">Ajouté</button>
</form><a style="position: relative; bottom: 767px; left: 54px;" href="listeEtudiant.php?nomcl=<?php echo $ligne['nom']; ?>"><img style="width: 3.2%;" src="arrow-left.svg" alt=""></a>
</div>
<?php
}
if(isset($_POST['adresse'])){
	if($_POST['date']!="" and $_POST['adresse']!="" and $_POST['phone']!=""){
		$id=$_POST['id'];
		$date=addslashes(Htmlspecialchars($_POST['date']));
		$phone=addslashes(Htmlspecialchars($_POST['phone']));
		$adresse=addslashes(Nl2br(Htmlspecialchars($_POST['adresse'])));
		mysqli_query($conn,"update eleve set date_naissance='$date', adresse='$adresse', telephone='$phone' where numel='$id'");
		?> <SCRIPT LANGUAGE="Javascript">	alert("Modifié avec succés!"); </SCRIPT> 
		<?php
		
	}
	else{
	?> <SCRIPT LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champss"); </SCRIPT> <?php
	}
	echo '<div class="corp"><a style="position: relative; right: 430px; top: 30px;" href="listeEtudiant.php?nomcl=GI"><img style="width: 3.5%;" src="arrow-left.svg" alt=""></a></div>';
}
if(isset($_GET['supp_el'])){
$id=$_GET['supp_el'];
mysqli_query($conn,"delete from eleve where numel='$id'");
mysqli_query($conn,"delete from evaluation where numel='$id'");/*	Supprimier tous les entres en relation		*/
mysqli_query($conn,"delete from stage where numel='$id'");
mysqli_query($conn,"delete from bulletin where numel='$id'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
echo '<br/><br/><a href="index.php?">Revenir � la page principale !</a>';
}
?>
</center></pre>
</body>
</html>