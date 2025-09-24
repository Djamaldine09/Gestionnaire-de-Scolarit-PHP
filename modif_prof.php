<?php
session_start();
include('cadre.php');
mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"gestion");
if(isset($_GET['modif_prof'])){//modif_el qu'on a recup�rer de l'affichage (modifier)
$id=$_GET['modif_prof'];
$ligne=mysqli_fetch_array(mysqli_query($conn,"select * from prof where numprof='$id'"));
$nom=stripslashes($ligne['nom']);
$prenom=stripslashes($ligne['prenom']);
$phone=stripslashes($ligne['telephone']);
$adresse=stripslashes($ligne['adresse']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="modif_prof_style.css">
	<title>Document</title>
</head>
<body>
<div class="corp"><pre>
<h1>Modification d'un enseignant</h1>
<form action="modif_prof.php" method="POST" class="formulaire">
<p class="t1">Nom       :       <?php echo $nom; ?></p><br><br>
<p class="t2">Prénom                  :     <?php echo $prenom; ?></p><br><br>
<p class="t3">Adresse                :       <div class="selec0"><select class="op1" name="adresse" id="">
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
</p><br><br>
<p class="t4">Téléphone             :         <input class="bar" type="text" name="phone" value="<?php echo $phone; ?>"></p>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<center><button class="neon-search-btn" value="envoyer" type="submit">
	<span>Ajouté</span>
</button></center>
</form>
<a style="position: relative; left: 50px; bottom: 760px;" href="afficher_prof.php?nomcl="><img style="width: 3.5%;" src="arrow-left.svg" alt=""></a>
<?php
}
if(isset($_POST['adresse'])){
	if($_POST['adresse']!="" and $_POST['phone']!=""){
		$id=$_POST['id'];
		$phone=addslashes(Htmlspecialchars($_POST['phone']));
		$adresse=addslashes(Nl2br(Htmlspecialchars($_POST['adresse'])));
		mysqli_query($conn,"update prof set adresse='$adresse', telephone='$phone' where numprof='$id'");
		?> <SCRIPT LANGUAGE="Javascript">	alert("Modifié avec succés!"); </SCRIPT> 
		<?php
		
	}
	else{
	?> <SCRIPT LANGUAGE="Javascript">	alert("erreur! Vous devez remplire tous les champss"); </SCRIPT> <?php
	}
	echo '<div class="corp">
	<a style="position: relative; right: 430px; top: 30px;" href="afficher_prof.php?nomcl="><img style="width: 3.5%;" src="arrow-left.svg" alt=""></a>
	<h2 style="position: relative; top: 200px; color: rgba(0, 80, 75, 1);">Modification avec succés !</h2>
	
	</div>';
}
if(isset($_GET['supp_el'])){
$id=$_GET['supp_el'];
mysqli_query($conn,"delete from eleve where numel='$id'");
mysqli_query($conn,"delete from evaluation where numel='$id'");/*	Supprimier tous les entres en relation		*/
mysqli_query($conn,"delete from stage where numel='$id'");
mysqli_query($conn,"delete from bulletin where numel='$id'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprimé avec succés!"); </SCRIPT> <?php
echo '<a style="position: relative; right: 430px; top: 30px;" href="afficher_prof.php?nomcl="><img style="width: 3.5%;" src="arrow-left.svg" alt=""></a>';
}
?>
</pre>
</div>
	
</body>
</html>