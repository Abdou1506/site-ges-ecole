<?php
//connexion bd
try{
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];

$cnx=new PDO("mysql:host=localhost;dbname=leveltech", "root","");
$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//preparation de la requette sql
$r=$cnx->prepare("insert into contact (prenom,nom,email,sujet,message) values(?,?,?,?,?)");
//ouverture de la connexion
$r->execute([$prenom,$nom,$email,$sujet,$message]);
header("location:contact.php?m=ok");
} catch (PDOException $e) {
    echo 'erreur d\'ajout : ' . $e->getMessage();
}


?>