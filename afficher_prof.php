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
    <link rel="stylesheet" media="screen" href="listeEtu.css" />
    <title>Document</title>
</head>
<body>
<div class="corp">
<h1>Affichage des enseignants</h1>
<pre>
<?php
$data=mysqli_query($conn,"select * from prof");
?>
<center class="cen2"><table id="rounded-corner">
<thead><tr><?php echo Edition();?>
<?php
    if (!isset($_SESSION['admin']) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
    } else {
        echo '<th class="rounded-q2">Modification</th>
              <th class="rounded-q2">Suppression</th>';
    }
?>
 <th scope="col" class="<?php echo rond(); ?>">Nom</th>
 <th scope="col" class="rounded-q2">Prénom</th>
 <th scope="col" class="rounded-q2">Adresse</th>
 <th scope="col" class="rounded-q2">Téléphone</th>
 <th scope="col" class="rounded-q2">Matières enseignées</th>
 <th scope="col" class="rounded-q4">Classes coordonnées</th></tr></thead>
<tfoot>
<tr>
<td colspan="<?php if (!isset($_SESSION['admin']) && !isset($_SESSION['prof']) && !isset($_SESSION['etudiant'])) {
    echo colspan(7,7);
} else {
    echo colspan(8,7);
}?>"class="rounded-foot-left"><em>&nbsp;</em></td>
</tr>
</tfoot>
 <tbody style="font-family: Arial, Helvetica, sans-serif;">
<?php
while($a=mysqli_fetch_array($data)){
?>
<tr><?php if(isset($_SESSION['admin']) or isset($_SESSION['etudiant']) or isset($_SESSION['prof'])){
echo '<tr><td><a  style="text-decoration: none; color: green; font-weight: 700;" href="modif_prof.php?modif_prof='.$a['numprof'].'"><img style="width: 20%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB/0lEQVR4nO3Zv0ocURTH8a+NASGtSCpbSSwsLSQQsRITY6awC/oEeQRN/IMmYBIbCx8iJIVtMC8QUCI26jtEQxL/HBk4C5d1Zr3r3nPvrMwPhl32Xs6Zzw7M3rsDNyMGxy9ggMgRo+MQeJQCEirJMGIEOXBeB7oZ0g/sx7wyYgQhNkYMIVExYgyJhpEIkCgYiQQxx0hEiClGIkPMMJIAYoKRRJA8QTGWa627rJrvBURCNE4dqSGaGhI4UkM0NSRwpIZ0EeQh0NdJgZiRgvOYctZil8B3YKSdAikiTecxB1wVLGFOgWGfAqnyA9jV9xlw3mI99q3KEAoQG8BxyVWpNCRzEAv62WABptKQrABBCeZrVSGZg1gsmfNRx38DT6oIyTwQizr+X2/JVA3ySk8u77/mgZhpVSwVxAfx1kG8vK1gCogP4p2O/wOmfYrGhriI9VCI2BAfxJKDeNFO8VgQH8Syg3jeboMYEB/EioMovcWmhLiI9yVzVnX8710R1pDbED26MGwgJjtpZgUZdX6x82+8CPFJx/8AE502tIJsad0vJYjPOn4GjIdoaAU50roXwGtrhBVkqGn/kO+35xWx6SCehWwqAY58m+rmTcGcK/3zoLEUfxoSEQrS2Gs3stNibo4YowvyQO9CzVfjJ/ABeEyXpBfYA06AbWBWnxUGzTWs3LDcgInn9QAAAABJRU5ErkJggg==" alt="edit-file"></a></td><td><a style="text-decoration: none; color: red; font-weight: 700;" href="modif_prof.php?supp_prof='.$a['numprof'].'" onclick="return(confirm(\'Etes-vous s�r de vouloir supprimer cette entr�e?\'));"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg></a></td>';}
echo '<td>'.$a['nom'].'</td><td>'.$a['prenom'].'</td><td>'.$a['adresse'].'</td><td>'.$a['telephone'].'</td><td><a  class="btn-view" href="option_prof.php?matiere='.$a['numprof'].'">Voir</a><td><a  class="btn-view" href="option_prof.php?classe='.$a['numprof'].'">Voir</a></tr>';
}
?>
<tbody>
</table></center>
<?php
echo '<a class="icon2" href="index.php"><img src="arrow-left.svg" alt=""></a>';
?>
</pre>
</div>
</body>
</html>