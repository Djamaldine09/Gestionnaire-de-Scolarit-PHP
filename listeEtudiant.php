<?php
session_start();
include('cadre.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="listeEtu.css" />
    <title>Document</title>
</head>
<body>
<div class="corp">
<pre>
<?php
if(isset($_GET['nomcl'])){//affichage de la promotion
$nomcl=$_GET['nomcl'];
$_SESSION['nomcl']=$_GET['nomcl'];//session du nomcl choisis dans le menu pour laisser la variable jusqu'a la page ou on va afficher la liste
$data=mysqli_query($conn,"select promotion from classe where nom='$nomcl' order by promotion desc");
?>
<form action="listeEtudiant.php" method="POST" class="formulaire">
<p class="ip">Veuilliez choisir la Promotion pour la classe  <?php echo $_GET['nomcl'];?> :</p> 
 <LEGEND>Promotion <LEGEND><pre>
<div class="selec0">
    <select class="selec" name="promotion"> 
<?php while($a=mysqli_fetch_array($data)){
echo '<option value="'.$a['promotion'].'">'.$a['promotion'].'</option>';
}?></select>
<div class="select-arrow">
    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1.5L6 6.5L11 1.5" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>
<div><br/><br/>
<button class="neon-search-btn">
  <span>Afficher</span>
</button>
</pre>
</form>
<a class="icon" href="index.php?"><img src="arrow-left.svg" alt=""></a>
<?php } 
if(isset($_POST['promotion'])){
$nomcl=$_SESSION['nomcl'];
$promo=$_POST['promotion'];
$donnee=mysqli_query($conn,"select numel,nomel,prenomel,date_naissance,adresse,telephone,eleve.codecl,nom,promotion from eleve,classe where eleve.codecl=classe.codecl and nom='$nomcl' and promotion='$promo'");
?>
<center><table id="rounded-corner">
<thead><?php echo Edition();?>
<?php
    if (!isset($_SESSION['admin']) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
    } else {
        echo '<th class="rounded-q2">Modification</th>
              <th class="rounded-q2">Suppression</th>';
    }
?>
    <th class="<?php echo rond();?>">Nom</th>
    <th class="rounded-q2">Prénom</th>
    <th class="rounded-q2">Date de naissance</th>
    <th class="rounded-q2">Adresse</th>
    <th class="rounded-q2">Téléphone</th>
    <th class="rounded-q2">Classe</th>
    <th class="rounded-q2">Promotion</th>
    <th class="rounded-q4">Ses enseignants</th>
    
</thead>
<tfoot>
<tr>
<td colspan="<?php if (!isset($_SESSION['admin']) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
    echo colspan(9,9);
} else {
    echo colspan(10,9);
}?>" class="rounded-foot-left"><em>&nbsp;</em></td>

</tr>
</tfoot>
 <tbody>
<?php
while($a=mysqli_fetch_array($donnee)){
?>
<tr><?php if(isset($_SESSION['admin']) or isset($_SESSION['etudiant']) or isset($_SESSION['prof'])){
    echo '<td><a onclick="animateButton(this)" style="text-decoration: none; color: green; font-weight: 700;" href="modif_eleve.php?modif_el='.$a['numel'].'"><img style="width: 22%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB/0lEQVR4nO3Zv0ocURTH8a+NASGtSCpbSSwsLSQQsRITY6awC/oEeQRN/IMmYBIbCx8iJIVtMC8QUCI26jtEQxL/HBk4C5d1Zr3r3nPvrMwPhl32Xs6Zzw7M3rsDNyMGxy9ggMgRo+MQeJQCEirJMGIEOXBeB7oZ0g/sx7wyYgQhNkYMIVExYgyJhpEIkCgYiQQxx0hEiClGIkPMMJIAYoKRRJA8QTGWa627rJrvBURCNE4dqSGaGhI4UkM0NSRwpIZ0EeQh0NdJgZiRgvOYctZil8B3YKSdAikiTecxB1wVLGFOgWGfAqnyA9jV9xlw3mI99q3KEAoQG8BxyVWpNCRzEAv62WABptKQrABBCeZrVSGZg1gsmfNRx38DT6oIyTwQizr+X2/JVA3ySk8u77/mgZhpVSwVxAfx1kG8vK1gCogP4p2O/wOmfYrGhriI9VCI2BAfxJKDeNFO8VgQH8Syg3jeboMYEB/EioMovcWmhLiI9yVzVnX8710R1pDbED26MGwgJjtpZgUZdX6x82+8CPFJx/8AE502tIJsad0vJYjPOn4GjIdoaAU50roXwGtrhBVkqGn/kO+35xWx6SCehWwqAY58m+rmTcGcK/3zoLEUfxoSEQrS2Gs3stNibo4YowvyQO9CzVfjJ/ABeEyXpBfYA06AbWBWnxUGzTWs3LDcgInn9QAAAABJRU5ErkJggg==" alt="edit-file"></a></td><td><a onclick="confirmDelete(this)" style="text-decoration: none; color: red; font-weight: 700;" href="modif_eleve.php?supp_el='.$a['numel'].'" onclick="return(confirm(\'Etes-vous sur de vouloir supprimer cette entre ?\nTous les enregistrements en relation avec cette entr�e seront perdus\'));"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg></a></td>';
}
echo '<td>'.$a['nomel'].'<td>'.$a['prenomel'].'</td><td>'.$a['date_naissance'].'</td><td>'.$a['adresse'].'</td><td>'.$a['telephone'].'</td><td>'.$a['nom'].'</td><td>'.$a['promotion'].'</td><td><a class="btn-view" style="text-decoration: none;" href="listeEtudiant.php?voir_ensei='.$a['numel'].'">Voir ses enseignant</a></td><tr>';
}
?>
<tbody>
</table></center>
<?php
echo '<a class="icon1" href="listeEtudiant.php?nomcl='.$nomcl.'"><img src="arrow-left.svg" alt=""></a>';
}
if(isset($_GET['voir_ensei'])){
$id=$_GET['voir_ensei'];
$data=mysqli_query($conn,"select prof.nom,prenom,nomel,prenomel,classe.nom as nomcl,numsem,nommat,prof.adresse,promotion from prof,matiere,classe,eleve,enseignement where prof.numprof=enseignement.numprof and enseignement.codemat=matiere.codemat and eleve.codecl=classe.codecl and classe.codecl=enseignement.codecl and numel='$id'");
?>
<h2>Les enseignants de l'étudiant choisis</h2>
<center><table id="rounded-corner">
<thead><th class="rounded-company">Nom d'étudiant</th>
<th class="rounded-q2">Prénom</th>
<th class="rounded-q2">Classe</th>
<th class="rounded-q2">Promotion</th>
<th class="rounded-q2">Nom et prénom d'enseignant</th>
<th class="rounded-q2">Semestre</th>
<th class="rounded-q4">Matiere</th></thead>
<tfoot>
<tr>
<td colspan="7" class="rounded-foot-left"><em>&nbsp;</em></td>
</tr>
</tfoot>
 <tbody>
<?php
while($a=mysqli_fetch_array($data)){
?>
<tr><?php
echo '<td>'.$a['nomel'].'</td><td>'.$a['prenomel'].'</td><td>'.$a['nomcl'].'</td><td>'.$a['promotion'].'</td><td>'.$a['nom'].' '.$a['prenom'].'</td><td>'.$a['numsem'].'</td><td>'.$a['nommat'].'</td></tr>';
}
?>
<tbody>
</table></center>
<?php
}
?>
</pre>

</div>
</body>
</html>