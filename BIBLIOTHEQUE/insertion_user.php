<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //sélection de la base de données:
  $db  = mysql_select_db( "biblio" ) ;
 
  //récupération des valeurs des champs:
  //nom:
  $nom= $_POST["nom"] ;
  //prenom:
  $prenom = $_POST["prenom"] ;
  $Adresse = $_POST["address"] ;
  //datenaissance
  $ddn = $_POST["ddn"] ;
  //date adhesion:
  $login = $_POST["login"] ;
  //numéro de téléphone:
  $pwd = $_POST["pwd"] ;
 
  //création de la requête SQL:
  $sql = "INSERT  INTO  lecteurs (nom, prenom, adresse, datenaisse,login,pwd)
            VALUES ( '$nom', '$prenom', '$Adresse', '$ddn', '$login' , '$pwd') " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>