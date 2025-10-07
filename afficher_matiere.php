<?php
session_start();
include('cadre.php');
mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"gestion");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="afficher_matiere_style.css">
   <title>Document</title>
</head>
<body>
<div class="corp">
<h1>Affichage des matieres</h1>
<pre>
<?php if(isset($_GET['nomcl'])){
$_SESSION['nomcl']=$_GET['nomcl'];
$nomcl=$_GET['nomcl'];
$data=mysqli_query($conn,"select promotion from classe where nom='$nomcl' order by promotion desc");
?>
<form method="post" action="afficher_matiere.php" class="formulaire">
<p class="pres">Veuillez choisir la promotion et le semestre pour <?php echo $nomcl; ?></p>
   
<p class="pres">Critères d'affichage</p> <pre>
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
<select name="radiosem"><?php for($i=1;$i<=4;$i++){ echo '<option value="'.$i.'">Semestre'.$i.'</option>'; } ?>
</select><br/><br/>
<input type="submit" value="Afficher les matieres">
</pre>
</form>
<br/><br/><a href="index.php">Revenir � la page principale</a>
<?php }  ?>
<?php
if(isset($_POST['radiosem'])){
$nomcl=$_SESSION['nomcl'];
$semestre=$_POST['radiosem'];
$promo=$_POST['promotion'];
$donnee=mysqli_query($conn,"select matiere.codemat,nommat,classe.nom,numsem,prof.nom as nomprof from matiere,enseignement,classe,prof where matiere.codemat=enseignement.codemat and prof.numprof=enseignement.numprof and enseignement.codecl=classe.codecl and classe.nom='$nomcl' and enseignement.numsem='$semestre' and promotion='$promo'");
?>
<center><table id="rounded-corner"><thead>
<tr><?php echo Edition(); ?>
<th class="<?php echo rond(); ?>">Matière</th>
<th class="rounded-q2">Classe</th>
<th class="rounded-q2">Nom prof</th>
<th class="rounded-q4">Semestre</th></tr></thead>
<tfoot>
<tr>
<td colspan="<?php echo colspan(3,5); ?>" class="rounded-foot-left"><em>&nbsp;</em></td>
<td class="rounded-foot-right">&nbsp;</td>
</tr>
</tfoot>
<tbody>
   <p>
   <?php
   while($a=mysqli_fetch_array($donnee)){
  if(isset($_SESSION['admin'])){ echo '<tr><td><a href="modif_matiere.php?modif_matiere='.$a['codemat'].'">modifier</a></td><td><a href="modif_matiere.php?supp_matiere='.$a['codemat'].'" onclick="return(confirm(\'Etes-vous s�r de vouloir supprimer cette entr�e?\'));">supprimer</a></td>'; } echo '<td>'.$a['nommat'].'</td><td >'.$a['nom'].'</strong></td><td>'.$a['nomprof'].'</td><td>S'.$a['numsem'].'</td></tr>';
   }
   ?>
   </p>
</tbody>
</table></center>
<?php 
echo '<br/><br/><a href="afficher_matiere.php?nomcl='.$nomcl.'">Revenir � la page principale</a>';
} ?>
</div>
</pre>

</body>
</html>