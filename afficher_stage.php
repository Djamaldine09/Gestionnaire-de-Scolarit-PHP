<?php
session_start();
include('cadre.php');
mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"gestion");
$data=mysqli_query($conn,"select distinct promotion from classe order by promotion desc");
$retour=mysqli_query($conn,"select distinct nom from classe"); //pour afficher les classe existantes
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afficher_stage_style.css">
    <title>Document</title>
</head>
<body>
<div class="corp">
<h1 class="h1">Affichage des stage effectués</h1>
<center><pre>
<?php
if(isset($_POST['nomcl']) and isset($_POST['promotion'])){
$nomcl=$_POST['nomcl'];
$promo=$_POST['promotion'];
$donnee=mysqli_query($conn,"select numstage,nomel,prenomel,nom,promotion,date_debut,date_fin,lieu_stage from eleve,stage,classe where classe.codecl=eleve.codecl and eleve.numel=stage.numel and classe.nom='$nomcl' and promotion='$promo'");//select nommat from matiere,classe where matiere.codecl=classe.codecl and classe.nom='$classe'
?><center><table id="rounded-corner">
<thead><tr><?php echo Edition(); ?>
<th class="<?php echo rond(); ?>">Nom de l'étudiant</th>
<th class="rounded-q2">Prénom</th>
<th class="rounded-q2">Classe</th>
<th class="rounded-q2">Promotion</th>
<th class="rounded-q2">Date de debut</th>
<th class="rounded-q2">Date de fin</th>
<th class="rounded-q4">Lieu du stage</th></tr></thead>
<tfoot>
<tr>
<td colspan="8" class="rounded-foot-left"><em>&nbsp;</em></td>
</tr>
</tfoot>
<tbody>
<?php
while($a=mysqli_fetch_array($donnee)){
if(isset($_SESSION['admin'])){
echo '<td><a href="ajout_stage.php?modif_stage='.$a['numstage'].'" >modifier</a></td><td><a href="supp_stage.php?supp_stage='.$a['numstage'].'" onclick="return(confirm(\'Etes-vous s�r de vouloir supprimer cette entr�e?\'));">Supprimer</td>'; } echo '<td>'.$a['nomel'].'</td><td>'.$a['prenomel'].'</td><td>'.$a['nom'].'</td><td>'.$a['promotion'].'</td><td>'.$a['date_debut'].'</td><td>'.$a['date_fin'].'</td><td>'.$a['lieu_stage'].'</td></tr>'; //style="width:100px; height:22px; background-image: url(\'ajouter.png\'); color:red;  padding: 2px 0 2px 20px; display:block; background-repeat:no-repeat;"
}
?>
</tbody>
</table></center>
<?php
}//fin   if(isset($_POST['radio']
else{ ?>

<form method="post" action="afficher_stage.php" class="formulaire">
<p class="pres">Veuillez choisir la classe et la promotion</p><br/><br/>
<p class="pres">Promotion</p>
<div class="selec0">
	<select class="op" name="promotion"> 
<option value="">Choisir la promotion</option>
<?php while($a=mysqli_fetch_array($data)){
echo '<option value="'.$a['promotion'].'">'.$a['promotion'].'</option>';
}?></select><div class="select-arrow">
                                                   <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1 1.5L6 6.5L11 1.5" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </div>
</div>
<p class="pres1">Classe</p>
<div class="selec1"><select class="op1" name="nomcl"> 
<option value="">Choisir la classe</option>
<?php while($a=mysqli_fetch_array($retour)){
echo '<option value="'.$a['nom'].'">'.$a['nom'].'</option>';
}?></select><div class="select-arrow1">
                                                   <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1 1.5L6 6.5L11 1.5" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </div>
</div>
<button class="neon-search-btn">
  <span>Rechercher</span>
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="11" cy="11" r="8"></circle>
    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
  </svg>
</button>
</form>
<?php }
?>
<a class="ico" href="index.php"><img style="width: 3.2%;" src="arrow-left.svg" alt=""></a>
</pre></center>
</div>
</body>
</html>