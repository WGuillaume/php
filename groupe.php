<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php
//perme de charger la connexion à la bdd
require "pdo.php";

$requete ="SELECT * FROM    groupes WHERE 1=1";
if(isset($_POST['recherche']))
{
    $requete.=' AND Nom LIKE "%'.$_POST['recherche'].'%"'; 
}
$req=$pdo-> prepare($requete);
$req->execute();
$groupes=$req->fetchAll();
$nb=(COUNT($groupes));







$nbParPage=10;
$nbResultat=$nb;
$nbPage=ceil($nbResultat/$nbParPage);

for ($i=1;$i<=$nbPage;$i++)
{
?>
<a href='?page=<?=$i;?>'>Page <?=$i;?></a>
<?php
}
if(isset($_GET['page']))
{
    $numPage= $_GET['page'];
}
else
{
    $numPage=1;
}
$resTemp=$numPage-1;
$start=$resTemp*$nbParPage;
$requete .=' LIMIT '.$start.','.$nbParPage;
$req=$pdo-> prepare($requete);
$req->execute();
$groupes=$req->fetchAll();
?>

<div class='container'>
<div class='row'>

<h1>Liste des groupes </h1>
<div class=col-4>
<a href="ajouter.php"><button type="button" class="btn btn-success">+ Ajouter un groupe</button></a>
</div>

<form method="post" action="">
<input type="text" name="recherche">
<input type="submit" value="Rechercher">
</form>

<div class=col-4>
<table border="1"class='table table-secondary table-hover'>
        </br>
         <thead> 
        <th> id</th>
        <th>nom</th> 
        <th>action</th> 
        </thead>
        </div>  
    </div>

<!-- ligne a dupliquer avec la boucle -->

<?php
foreach($groupes as $res)
{
?>
<tr>
    <td><?php echo $res ['Id_Groupes']?></td>
    <td><?=$res['Nom']?></td>
    <td>
    <a href="modifier.php?id=<?php  echo $res ['Id_Groupes']?>"><button type="button" class="btn btn-warning">Modifier</button></a>
    <a href="supprimer.php?id=<?php echo $res ['Id_Groupes']?>"
    onclick="return confirm ('Etes-vous sur ?')">
    <button type="button" class="btn btn-danger">Supprimer</button>
</a>
    </td>
</tr>
<?php
}