<?php
session_start();
include('cadre.php');
if(isset($_SESSION['admin']) or isset($_SESSION['etudiant']) or isset($_SESSION['prof'])){
echo '<div class="corp">';

if(isset($_GET['cherche_eleve'])){ 
$retour=mysqli_query($conn,"select distinct nom from classe"); // afficher les classes
$data=mysqli_query($conn,"select distinct promotion from classe order by promotion desc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="chercheEle_style.css" />
	<title>Document</title>
</head>
<body>

<form action="chercher_eleve.php" method="post" class="formulaire">
 <h1 class="h1">Critère de recherche</h1>
<div class="form-group"><label class="form-label" for="">Nom</label><input class="bar" type="text" name="nomel" placeholder="Entrez un nom"></div>
<div class="form-group"><label class="form-label" for="">Prénom</label><input class="bar" type="text" name="prenomel" placeholder="Entrez un prénom"></div>
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
<p class="pres">Vous pouvez préciser la classe si vous voulez </p>
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
<center>
<button class="neon-search-btn">
  <span>Rechercher</span>
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="11" cy="11" r="8"></circle>
    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
  </svg>
</button>
</center>
</form>
<a class="ico" href="index.php"><img style="width: 3.2%;" src="arrow-left.svg" alt=""></a>
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
	$cherche=mysqli_query($conn,"select * from eleve,classe where classe.codecl=eleve.codecl and nomel LIKE '%$nomel%' and prenomel LIKE '%$prenomel%' ".$option."");//option contient les info suplimentaire
?>
	<a style="position: relative; right: 430px; top: 20px;" href="chercher_eleve.php?cherche_eleve=true"><img style="width: 3.2%;" src="arrow-left.svg" alt=""></a></br></br></br></br>
<center class="tabl" >
<table id="rounded-corner">
<thead><tr><th class="rounded-company">Nom</th>
<th class="rounded-q1">Prénom</th>
<th class="rounded-q3">Adresse</th>
<th class="rounded-q3">Date de naissance</th>
<th class="rounded-q3">Télépohne</th>
<th class="rounded-q3">Classe</th>
<th class="rounded-q4">Promotion</th></tr></thead>
<tfoot>
<tr><td colspan="7" class="rounded-foot-left"><em>&nbsp;</em></td>
</tfoot>
 <tbody>
 <?php
	while($a=mysqli_fetch_array($cherche)){
		echo '<tr><td>'.$a['nomel'].'</td><td>'.$a['prenomel'].'</td><td >'.$a['adresse'].'</td><td >'.$a['date_naissance'].'</td><td >'.$a['telephone'].'</td><td>'.$a['nom'].'</td><td>'.$a['promotion'].'</td></tr>';
	}
	?>
	</tbody>
	</table>
</center>
	<?php
	}
}
?>
</body>
</html>