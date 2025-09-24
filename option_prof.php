<?php
session_start();
include('cadre.php');
mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"gestion");
echo '<div class="corp">';
if(isset($_GET['matiere'])){
$id=$_GET['matiere'];
$data=mysqli_query($conn,"select prof.nom,prenom,nommat,classe.nom as nomcl,promotion,numsem from prof,enseignement,matiere,classe where enseignement.numprof=prof.numprof and classe.codecl=enseignement.codecl and matiere.codemat=enseignement.codemat and  enseignement.numprof='$id' order by promotion desc");
?>
<center><h1 style="font-size: 2.5rem;
    margin-bottom: 1.5rem;
    background: linear-gradient(90deg, #391cbb, #4cc4e2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Matieres enseignées par cet enseignant</h1></center>
<table style="position: relative; left: 50px; top: 100px; " id="rounded-corner">
<thead ><tr> <th scope="col" class="rounded-company">Nom</th>
 <th scope="col" class="rounded-q2">Prénom</th>
 <th scope="col" class="rounded-q2">Matière</th>
 <th scope="col" class="rounded-q2">Classe</th>
 <th scope="col" class="rounded-q2">Promotion</th>
 <th scope="col" class="rounded-q4">Semestre</th></tr></thead>
<tfoot>
<tr>
<td colspan="6"class="rounded-foot-left"><em>&nbsp;</em></td>
</tr>
</tfoot>
 <tbody>
<?php
while($a=mysqli_fetch_array($data)){
echo '<tr><td>'.$a['nom'].'</td><td>'.$a['prenom'].'</td><td>'.$a['nommat'].'</td><td>'.$a['nomcl'].'</td><td>'.$a['promotion'].'</td><td>'.$a['numsem'].'</td></tr>';
}
?>
<tbody>
</table>
<?php 
}
else if(isset($_GET['classe'])){
$id=$_GET['classe'];
$data=mysqli_query($conn,"select * from prof,classe where numprof=numprofcoord and numprof='$id' order by promotion desc");
?>
<center><h1 style="font-size: 2.5rem;
    margin-bottom: 1.5rem;
    background: linear-gradient(90deg, #391cbb, #4cc4e2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Classe coordonnées par cet enseignant</h1></center>
<table style="position: relative; left: 50px; top: 100px;" id="rounded-corner">
<thead><tr> <th scope="col" class="rounded-company">Nom</th>
 <th scope="col" class="rounded-q2">Prénom</th>
 <th scope="col" class="rounded-q2">Classes coordonnées</th>
 <th scope="col" class="rounded-q4">Promotion</th></tr></thead>
<tfoot>
<tr>
<td colspan="4" class="rounded-foot-left">&nbsp;</td>
</tr>
</tfoot>
 <tbody>
<?php
while($a=mysqli_fetch_array($data)){
echo '<tr><td>'.$a['nom'].'</td><td>'.$a['prenom'].'</td><td>'.$a['nom'].'</td><td>'.$a['promotion'].'</td></tr>';
}
?>
<tbody>
</table>
<?php
}
?>
</div>