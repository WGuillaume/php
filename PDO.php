<?php
$dbh='mysql:host=localhost;dbname=footcaca';
$user='foot';
$pass='wxcvbn';
try{
    $pdo=new PDO($dbh,$user,$pass);
} catch(PDOException $e){
    print "Erreur!:".$e->getMessage();
    die();
}
?>