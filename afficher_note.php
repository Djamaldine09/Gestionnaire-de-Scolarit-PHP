<?php
session_start();
include('cadre.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" media="screen" href="affiche_note.css" />
   <title>Document</title>
</head>
<body>
<div class="corp">
<h1>Affichage des notes</h1>
<pre>
<?php
if(isset($_GET['nomcl'])){//affichage de la promotion
$nomcl=$_GET['nomcl'];
$_SESSION['nomcl']=$_GET['nomcl'];//session du nomcl choisis dans le menu pour laisser la variable jusqu'a la page ou on va afficher la liste
$data=mysqli_query($conn,"select promotion from classe where nom='$nomcl' order by promotion desc");
?>
<form action="afficher_note.php" method="POST" class="formulaire">
<p class="t1">Veuillez choisir la promotion et le semestre pour  <?php echo $nomcl; ?> :</p>
 <LEGEND>Critères d'affichage<LEGEND>
         <div class="prom">Promotion              <div  class="selec0"><select class="selec1" name="promotion">
                                    <?php while($a=mysqli_fetch_array($data)){
                                          echo '<option value="'.$a['promotion'].'">'.$a['promotion'].'</option>';}?>
                                          
                                 </select><div class="select-arrow">
                                                   <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1 1.5L6 6.5L11 1.5" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </div></div>
         </div>
         <div class="sem">Semestre             <div  class="selec0"><select class="selec" name="radiosem"><?php for($i=1;$i<=4;$i++){ echo '<option value="'.$i.'">Semestre '.$i.'</option>'; } ?>
                                                                                          
                                                </select><div class="select-arrow1">
                                                   <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1 1.5L6 6.5L11 1.5" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </div></div>
         </div>
<input class="btp" type="submit" value="Afficher">
</form>
<?php } 

if(isset($_POST['radiosem'])){
$nomcl=$_SESSION['nomcl'];
$_SESSION['semestre']=$_POST['radiosem'];
$promo=$_POST['promotion'];
$semestre=$_SESSION['semestre'];//seulement pour la requete
$donnee=mysqli_query($conn,"select nommat from matiere,enseignement,classe where matiere.codemat=enseignement.codemat and enseignement.codecl=classe.codecl and nom='$nomcl' and enseignement.numsem='$semestre' and promotion='$promo'");//select nommat from matiere,classe where matiere.codecl=classe.codecl and classe.nom='$classe'
$a=0;
//$_SESSION['classe']=$classe;
?>
<form method="post" action="afficher_note.php" class="formulaire">
   
 <LEGEND>Matières étudiée<LEGEND>
   <?php
   $i=1;
   while($a=mysqli_fetch_array($donnee)){
   echo '<input style="position: relative; top: 125px; left: 50px;" type="radio" name="radio" value="'.$a['nommat'].'" id="choix'.$i.'"/> <label style=" color: rgb(0, 60, 255); position: relative; top: 125px; left: 60px;" for="choix'.$i.'">'.$a['nommat'].'</label>';
   echo' <br><br>   '; $i++;
   }
   ?>
<input class="ip0" type="submit" value="Afficher les notes">
   
</form>
<?php
}
else if(isset($_POST['radio'])){
$semestre=$_SESSION['semestre'];
$nommat=$_POST['radio'];
$nomcl=$_SESSION['nomcl'];
$donnee=mysqli_query($conn,"select nomel,prenomel,nom,nommat,date_dev,coeficient,note from eleve,classe,matiere,devoir,evaluation where eleve.codecl=classe.codecl and evaluation.numdev=devoir.numdev and devoir.codemat=matiere.codemat and evaluation.numel=eleve.numel and matiere.nommat='$nommat' and nom='$nomcl' and devoir.numsem='$semestre'");
?>
<center>
   <table id="rounded-corner">
<thead >
<tr>
   <th  class="rounded-company">Nom d'élève</th>
   <th scope="col" class="rounded-q2">Prénom d'élève</th>
   <th scope="col" class="rounded-q2">Classe</th>
   <th scope="col" class="rounded-q2">Matière</th>
   <th scope="col" class="rounded-q2">Date du devoir</th>
   <th scope="col" class="rounded-q2">Coefficient</th>
   <th scope="col" class="rounded-q4">Note</th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="7" class="rounded-foot-left"><em>&nbsp;</em></td>
</tr>
</tfoot>
<tbody>
<?php
while($a=mysqli_fetch_array($donnee)){
echo '<tr><td>'.$a['nomel'].'</td><td>'.$a['prenomel'].'</td><td>'.$a['nom'].'</td><td>'.$a['nommat'].'</td><td>'.$a['date_dev'].'</td><td>'.$a['coeficient'].'</td><td>'.$a['note'].'</td></tr>';
}
?>
</tbody>
</table></center>
<?php
}//fin   if(isset($_POST['radio']
?>
</pre>
</div>
<body>
</html>

