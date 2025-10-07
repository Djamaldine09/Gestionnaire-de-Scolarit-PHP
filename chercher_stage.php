<?php
session_start();
include('cadre.php');
if(isset($_SESSION['admin']) or isset($_SESSION['etudiant']) or isset($_SESSION['prof'])){
echo '<html> <body> <div class="corp"> ';
if(isset($_GET['cherche_stage'])){ 
$retour=mysqli_query($conn,"select distinct nom from classe"); // afficher les classes
$data=mysqli_query($conn,"select distinct promotion from classe order by promotion desc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="chercher_stage_style.css">
	<title>Document</title>
</head>
<body>
	<h1>Rechercher un stage</h1>
<form action="chercher_stage.php" method="post" class="formulaire">
<div class="form-group"><label class="form-label" for="">Nom</label><input type="text" name="nomel" class="bar" placeholder="Entrez un nom d'un étudiant"></div><br/><br/>
<div class="form-group"><label class="form-label1" for="">Prénom</label><input type="text" name="prenomel" class="bar" placeholder="Entrez un prénom d'un étudiant"></div>
<p class="pres">Vous pouvez préciser la promotion si vous voulez</p>
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
<p class="pres">Vous pouvez préciser la classe si vous voulez</p>
<div class="selec0"><select class="op1" name="nomcl"> 
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
<br/><br/><a class="ico" href="index.php"><img style="width: 3.2%;" src="arrow-left.svg" alt=""></a>
<?php
}
else if(isset($_POST['nomel'])){
	$nomel=$_POST['nomel'];
	$prenomel=$_POST['prenomel'];
	$nomcl=$_POST['nomcl'];
	$promo=$_POST['promotion'];
	$option="";
	if($nomcl!="" and $promo=="")
	$option="and eleve.codecl in (select codecl from classe where nom='$nomcl')";
	else if($promo!="" and $nomcl=="")
	$option="and eleve.codecl in (select codecl from classe where promotion='$promo')";
	else if($promo!="" and $nomcl!="")
	$option="and eleve.codecl=(select codecl from classe where nom='$nomcl' and promotion='$promo')";
	$cherche=mysqli_query($conn,"select * from eleve,stage,classe where classe.codecl=eleve.codecl and stage.numel=eleve.numel and nomel LIKE '%$nomel%' and prenomel LIKE '%$prenomel%' ".$option."");//option contient les info suplimentaire
?>
<a style="position: relative; left: -400px;" href="chercher_stage.php?cherche_stage=true"><img style="width: 3.2%;" src="arrow-left.svg" alt=""></a><br><br><br><br>
<center><table id="rounded-corner">
<thead><tr><th class="rounded-company">Nom</th>
<th class="rounded-q1">Prénom</th>
<th class="rounded-q3">Lieu du stage</th>
<th class="rounded-q3">Date de début</th>
<th class="rounded-q3">Date de fin</th>
<th class="rounded-q3">Classe</th>
<th class="rounded-q4">Promotion</th></tr></thead>
<tfoot>
<tr><td colspan="7" class="rounded-foot-left"><em>&nbsp;</em></td>
</tfoot>
 <tbody>
 <?php
	while($a=mysqli_fetch_array($cherche)){
		echo '<tr><td>'.$a['nomel'].'</td><td>'.$a['prenomel'].'</td><td >'.$a['lieu_stage'].'</td><td >'.$a['date_debut'].'</td><td >'.$a['date_fin'].'</td><td>'.$a['nom'].'</td><td>'.$a['promotion'].'</td></tr>';
	}
	?>
	</tbody>
	</table></center>
	<?php
	}
}
?>
</pre>
</div>
</center>
</body>
</html>