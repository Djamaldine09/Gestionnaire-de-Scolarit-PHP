<?php
session_start();
include('cadre.php');
$data=mysqli_query($conn,"select distinct promotion from classe order by promotion desc");
$retour=mysqli_query($conn,"select distinct nom from classe"); //pour afficher les classe existantes
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="affiche_conseil_style.css">
    <title>Document</title>
</head>
<body>
<div class="corp">
<h1>Afficher les conseils</h1>
<center><pre>
<?php
if(isset($_GET['supp_conseil'])){
$id=$_GET['supp_conseil'];
mysqli_query($conn,"delete from conseil where id='$id'");
?> <SCRIPT LANGUAGE="Javascript">	alert("Supprim� avec succ�s!"); </SCRIPT> <?php
}
else if(isset($_POST['nomcl']) and isset($_POST['numsem'])){
$nomcl=$_POST['nomcl'];
$promo=$_POST['promotion'];
$numsem=$_POST['numsem'];
$donnee=mysqli_query($conn,"select * from classe,conseil where classe.codecl=conseil.codecl and classe.codecl=(select codecl from classe where nom='$nomcl' and promotion='$promo') and numsem='$numsem'");//select nommat from matiere,classe where matiere.codecl=classe.codecl and classe.nom='$classe'
?><center><table id="rounded-corner">
<thead><tr><?php if(isset($_SESSION['admin'])) echo '<th class="rounded-company">Supprimer</th>'; ?>
<th class="<?php echo rond(); ?>">Semestre</th>
<th class="rounded-q4">Classe</th>
</tr></thead>
<tfoot>
<tr>
<td colspan="2" class="rounded-foot-left"><em>&nbsp;</em></td>
</tr>
</tfoot>
<tbody>
<?php
while($a=mysqli_fetch_array($donnee)){
if(isset($_SESSION['admin'])){
echo '</td><td><a href="affiche_conseil.php?supp_conseil='.$a['id'].'" onclick="return(confirm(\'Etes-vous s�r de vouloir supprimer cette entr�e?\'));">Supprimer</td>'; } echo '<td>S'.$a['numsem'].'</td><td>'.$a['nom'].'</td></tr>';
}
?>
</tbody>
</table></center>
<?php
}//fin   if(isset($_POST['radio']
else{ ?>

<form method="post" action="affiche_conseil.php" class="formulaire">
<p class="t1">Veuillez choisir la classe et la promotion</p>
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
<p class="pres">Semestre</p>
<div class="selec0">
    <select class="op" name="numsem">
    <option value="">Choisir la semestre</option>    
    <?php for($i=1;$i<=4;$i++){ echo '<option value="'.$i.'">Semestre'.$i.'</option>'; } ?>
</select><div class="select-arrow">
                                                   <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1 1.5L6 6.5L11 1.5" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </div>
</div>
<button class="neon-search-btn">
  <span>Afficher</span>
</button>
</form>
<?php }
?>
<br/><br/><a class="ico" href="affiche_conseil.php"><img style="width: 3.2%;" src="arrow-left.svg" alt=""></a>
</pre></center>
</div>
</body>
</html>