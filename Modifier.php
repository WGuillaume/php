<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php
//perme de charger la connexion à la bdd
require "pdo.php";

$requete ="SELECT * FROM  groupes WHERE Id_Groupes=".$_GET['id'];
$req=$pdo-> prepare($requete);
$req->execute();
$groupes=$req->fetch();

// echo'<pre>';
// var_dump ($groupes);
// echo'</pre>';

?>

<div class='container'>
<div class='row'>

<h1>Modifier des groupes </h1>

<!-- ligne a dupliquer avec la boucle -->
<table border="1"class='table table-secondary table-hover'>
<form action="modifierReq.php" method="post">
<input type="hidden" name='Id_Groupes' value="<?=$groupes['Id_Groupes']?>">
<label>Sasir un nom</label>
<input type="text"class="form-control" name="Nom" value="<?=$groupes['Nom']?>">
<br>
<input type="submit"class="btn btn-succes"value="Enregistrer"> 
</form>
</div>  
</div>