<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php
//perme de charger la connexion à la bdd
require "pdo.php";

$requete ="DELETE FROM  groupes WHERE Id_Groupes=?";
$req=$pdo-> prepare($requete);
$req->execute([$_GET['id']]);
$groupes=$req->fetch();
header('Location:groupe.php');
// echo'<pre>';
// var_dump ($groupes);
// echo'</pre>';

?>