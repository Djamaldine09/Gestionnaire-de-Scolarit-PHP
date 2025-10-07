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
    <title>Document</title>
</head>
<body>
<div class="corp">
<a style="position: relative; top: 10px; right: 429px;" href="index.php"><img style="width: 3.2%;" src="arrow-left.svg" alt=""></a><br><br><br><br><br><br>
<center>
<?php
$data=mysqli_query($conn,"select codecl,classe.nom as nomcl,promotion,prof.nom as nomprof from classe,prof where classe.numprofcoord=prof.numprof");
?>
<table id="rounded-corner">
<thead><tr><?php echo Edition();?>
 <th class="<?php echo rond(); ?>">Nom de la classe</th>
 <th class="rounded-q1">Promotion</th>
 <th class="rounded-q4">Prof coordinataire</th></tr></thead>
<tfoot>
<tr>
<td colspan="<?php echo colspan(4,4); ?>" class="rounded-foot-left"><em>&nbsp;</em></td>
</tr>
</tfoot>
 <tbody>
<?php
while($a=mysqli_fetch_array($data)){
?>
<tr><?php if(isset($_SESSION['admin'])){ 
?><td><a href="modif_classe.php?modif_classe=<?php echo $a['codecl']; ?>">modifier</a></td><td><a href="modif_classe.php?supp_classe=<?php echo $a['codecl']; ?>" onclick="return(confirm('Etes-vous s�r de vouloir supprimer cette entr�e?\ntous les enregistrements en relation avec cette entr�e seront perdus'));">supprimer</a></td> <?php }
echo '<td>'.$a['nomcl'].'</td><td>'.$a['promotion'].'</td><td>'.$a['nomprof'].'</td></tr>';
}
?>
<tbody>
</table>
</center>
</div>
</body>
</html>