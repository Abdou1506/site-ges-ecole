<?php
//connexion bd
try{
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$niveau=$_POST['niveau'];

$cnx=new PDO("mysql:host=localhost;dbname=leveltech", "root","");
$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//preparation de la requette sql
$r=$cnx->prepare("insert into prescription (prenom,nom,email,telephone,niveau) values(?,?,?,?,?)");
//ouverture de la connexion
$r->execute([$prenom,$nom,$email,$telephone,$niveau]);
header("location:index.php?m=ok");
} catch (PDOException $e) {
    echo 'erreur d\'ajout : ' . $e->getMessage();
}


?>